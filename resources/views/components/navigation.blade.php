<nav class="custom-main-nav">
    <div class="custom-nav-container">
        <a href="/" class="custom-logo">
        <img src="{{ asset('assets/images/genesis-w-970x1024.png') }}" alt="">
        </a>
        
        <ul class="custom-nav-menu">
            <li><a href="{{ route('pages.alkalmazastechnika') }}" class="{{ request()->routeIs('pages.alkalmazastechnika') ? 'active' : '' }}">Alkalmazástechnika</a></li>
            <li><a href="{{ route('pages.teljesitmennyilatkozat') }}" class="{{ request()->routeIs('pages.teljesitmennyilatkozat') ? 'active' : '' }}">Teljesítménnyilatkozat</a></li>
            <li>
                <a href="{{ route('pages.blueprint-catalog') }}" 
                   class="{{ request()->routeIs('pages.blueprint-catalog') ? 'active' : '' }}">
                    Vázlatterv katalógus
                </a>
            </li>
            <li class="custom-dropdown {{ request()->routeIs('services.*') ? 'active' : '' }}">
                <a href="{{ route('pages.about') }}" class="custom-dropdown-toggle">
                    Ismerd meg
                    <span class="custom-arrow">▼</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li>
                        <a href="{{ route('pages.genesis-houses') }}" 
                           class="{{ request()->routeIs('pages.genesis-houses') ? 'active' : '' }}">
                            Genesis Házak – több mint építkezés
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pages.components') }}" 
                           class="{{ request()->routeIs('pages.components') ? 'active' : '' }}">
                            Előre gyártott elemek
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pages.ads') }}" 
                           class="{{ request()->routeIs('pages.ads') ? 'active' : '' }}">
                            Hirdetéseink
                        </a>
                    </li>
                   
                </ul>
            </li>
            <li>
                <a href="{{ route('pages.contact') }}" 
                   class="{{ request()->routeIs('pages.contact') ? 'active' : '' }}">
                    Kapcsolat
                </a>
            </li>
           
        </ul>

        <button class="custom-hamburger" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>