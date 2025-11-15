@props([
    'slides' => [],
    'autoplayInterval' => 4000,
    'height' => '500px',
    'theme' => '', // 'dark-theme', 'compact', 'full-width'
    'backgroundSize'=> 'cover'
])

@php
    $uniqueId = 'carousel-' . uniqid();
    $containerClasses = trim('carousel-container ' . $theme);
@endphp

<div class="{{ $containerClasses }}" 
     data-interval="{{ $autoplayInterval }}" 
     id="{{ $uniqueId }}"
     @if($height !== '500px')
     style="--carousel-height: {{ $height }};"
     @endif>
    <div class="carousel-wrapper">
        @forelse($slides as $index => $slide)
        <div class="carousel-slide" 
             @if(isset($slide['image']))
             style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ $slide['image'] }}');background-size:{{ $backgroundSize }}  @if($height !== '500px') height: {{ $height }}; @endif"
             @elseif($height !== '500px')
             style="height: {{ $height }};"
             @endif>
            <div class="slide-content">
                @if(isset($slide['icon']))
                <div class="slide-icon">{{ $slide['icon'] }}</div>
                @endif
                
                @if(isset($slide['title']))
                <h2 class="slide-title">{{ $slide['title'] }}</h2>
                @endif
                
                @if(isset($slide['description']))
                <p class="slide-description">{!! $slide['description'] !!}</p>
                @endif

                @if(isset($slide['button']))
                <a href="{{ $slide['button']['url'] ?? '#' }}" class="slide-button">
                    {{ $slide['button']['text'] ?? 'Továbbiak' }}
                </a>
                @endif
            </div>
        </div>
        @empty
        <div class="carousel-slide" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="slide-content">
                <div class="slide-icon">📋</div>
                <h2 class="slide-title">Nincs tartalom</h2>
                <p class="slide-description">Adj hozzá slide-okat a carousel-hez!</p>
            </div>
        </div>
        @endforelse
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const containers = document.querySelectorAll('.carousel-container');
        
        containers.forEach((container) => {
            const wrapper = container.querySelector('.carousel-wrapper');
            const slides = container.querySelectorAll('.carousel-slide');
            
            if (!wrapper || slides.length === 0) return;

            let currentIndex = 0;
            const totalSlides = slides.length;
            const autoplayInterval = parseInt(container.dataset.interval) || 4000;
            let autoplay;
            let isTransitioning = false;

            function goToSlide(index) {
                if (isTransitioning) return;
                isTransitioning = true;
                
                currentIndex = index;
                const offset = -currentIndex * 100;
                wrapper.style.transform = `translateX(${offset}%)`;
                
                setTimeout(() => {
                    isTransitioning = false;
                }, 600);
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                goToSlide(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                goToSlide(currentIndex);
            }

            function startAutoplay() {
                autoplay = setInterval(nextSlide, autoplayInterval);
            }

            function stopAutoplay() {
                clearInterval(autoplay);
            }

            startAutoplay();

            container.addEventListener('mouseenter', stopAutoplay);
            container.addEventListener('mouseleave', startAutoplay);

            let touchStartX = 0;
            let touchEndX = 0;
            let touchStartY = 0;
            let touchEndY = 0;

            container.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                touchStartY = e.changedTouches[0].screenY;
                stopAutoplay();
            }, { passive: true });

            container.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                touchEndY = e.changedTouches[0].screenY;
                
                const swipeThreshold = 50;
                const diffX = touchStartX - touchEndX;
                const diffY = Math.abs(touchStartY - touchEndY);

                if (Math.abs(diffX) > swipeThreshold && diffY < 100) {
                    if (diffX > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
                startAutoplay();
            }, { passive: true });

            document.addEventListener('keydown', (e) => {
                if (!container.matches(':hover')) return;
                
                if (e.key === 'ArrowLeft') {
                    stopAutoplay();
                    prevSlide();
                    startAutoplay();
                } else if (e.key === 'ArrowRight') {
                    stopAutoplay();
                    nextSlide();
                    startAutoplay();
                }
            });
        });
    });
</script>