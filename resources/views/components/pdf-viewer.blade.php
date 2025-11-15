@props(['pdfUrl', 'title' => ''])

<div class="pdf-container">
    @if($title)
        <h1 style="text-align: center; margin-bottom: 20px; color: #1f2937;">{{ $title }}</h1>
    @endif
    
    <div class="pdf-controls">
        <button class="pdf-btn pdf-prev">◀ Előző</button>
        <span class="page-info">
            <span class="pdf-page-num">1</span> / <span class="pdf-page-count">-</span>
        </span>
        <button class="pdf-btn pdf-next">Következő ▶</button>
        
        <div class="zoom-controls">
            <button class="pdf-btn pdf-zoom-out">-</button>
            <span class="page-info"><span class="pdf-zoom-level">100</span>%</span>
            <button class="pdf-btn pdf-zoom-in">+</button>
        </div>
    </div>

    <div class="pdf-error" style="display: none;"></div>

    <div class="pdf-viewer">
        <canvas class="pdf-canvas" data-pdf-url="{{ $pdfUrl }}"></canvas>
    </div>

    <div class="pdf-loading">PDF betöltése...</div>
</div>