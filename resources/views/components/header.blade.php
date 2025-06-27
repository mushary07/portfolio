<header class="header-area">
    <div class="container">
        <div class="gx-row d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
            </a>

            <nav class="navbar">
                <ul class="menu">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                    <li class="{{ Request::is('works') ? 'active' : '' }}"><a href="{{ url('/works') }}">Works</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="d-lg-none">
                        <button class="theme-toggle theme-icon-btn d-flex align-items-center gap-1" title="Toggle Theme">
                            <svg class="theme-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" viewBox="0 0 24 24"></svg>
                            <span class="theme-label">Light</span>
                        </button>
                    </li>
                </ul>
            </nav>

            <a class="theme-toggle theme-icon-btn theme-btn" title="Toggle Theme">
                <svg class="theme-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    fill="currentColor" viewBox="0 0 24 24">
                </svg>
            </a>

            <div class="show-menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </div>
</header>
