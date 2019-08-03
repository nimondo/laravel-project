<!--  Header & Menu  -->
<header id="header" class="fixed transparent full-width">
    <div class="container">
        <nav class="navbar navbar-default white">
            <!--  Header Logo  -->
            <div id="logo">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" class="normal" alt="logo">
                    <img src="assets/img/logo@2x.png" class="retina" alt="logo">
                    <img src="assets/img/logo_white.png" class="normal white-logo" alt="logo">
                    <img src="assets/img/logo_white@2x.png" class="retina white-logo" alt="logo">
                </a>
            </div>
            <!--  END Header Logo  -->
            <!--  Classic menu, responsive menu classic  -->
            <div id="menu-classic">
                <div class="menu-holder">
                    <ul>
                        <li>
                            <a href="{{ URL('/') }}" class="{{ Request::is('/') ? 'active-item' : '' }}">Home</a>
                        </li>
                        <li>
                        <a href="{{ URL('treks') }}" class="{{ Request::is('treks') ? 'active-item' : '' }}">Treks</a>
                        </li>
                        <li>
                            <a href="{{ URL('contact') }}" class="{{ Request::is('contact') ? 'active-item' : '' }}">Contact</a>
                        </li>
                        @guest
                        <li>
                            <a href="{{ URL('login') }}">Connexion</a>
                        </li>
                        <li>
                            <a href="{{ URL('register') }}">Inscription</a>
                        </li>
                        @else
                        <li>
                            <a href="{{ URL('mon-compte') }}">Mon compte</a>
                        </li>
                        @endguest
                        <!-- Search Icon -->
                        <li class="search">
                            <i class="icon ion-ios-search"></i>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  END Classic menu, responsive menu classic  -->
            <!--  Button for Responsive Menu Classic  -->
            <div id="menu-responsive-classic">
                <div class="menu-button">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </div>
            </div>
            <!--  END Button for Responsive Menu Classic  -->
            <!--  Search Box  -->
            <div id="search-box" class="full-width">
                <form role="search" id="search-form" class="black big">
                    <div class="form-input">
                        <input class="form-field black big" type="search" placeholder="Search...">
                        <span class="form-button big">
                            <button type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <button class="close-search-box">
                    <i class="icon ion-ios-close-empty"></i>
                </button>
            </div>
            <!--  END Search Box  -->
        </nav>
    </div>
</header>
<!--  END Header & Menu  -->