<!-- START: Navbar Header Section -->
<header class="st-site-header st-style1 st-sticky-header">
    <div class="st-offter-bar">Grab <span>50%</span> off for today, this will finished 12.00am
        <div class="st-offer-close">
            <svg class="headerstrip__dismiss-icon" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.8 2.4c.3.3.3.8 0 1.1l-6 6c-.3.3-.3.8 0 1.1l6 6c.3.3.3.8 0 1.1l-2.2 2.2c-.3.3-.8.3-1.1 0l-6-6c-.3-.3-.8-.3-1.1 0l-6 6c-.3.3-.8.3-1.1 0L.1 17.7c-.3-.3-.3-.8 0-1.1l6-6c.3-.3.3-.8 0-1.1l-6-6c-.3-.3-.3-.8 0-1.1L2.3.2c.3-.3.8-.3 1.1 0l6 6c.3.3.8.3 1.1 0l6-6c.3-.3.8-.3 1.1 0l2.2 2.2z">
                </path>
            </svg>
        </div>
    </div>
    <div class="st-main-header">
        <div class="container">
            <div class="st-main-header-in">
                <!-- Site Logo -->
                <div class="st-main-header-left">
                    <a class='st-site-branding st-white-logo' href='/'><img
                            src="{{ asset('assets/img/logoz.png') }}" alt=""></a>
                </div>
                <!-- Main Menu -->
                <div class="st-main-header-right">
                    <nav class="st-nav">
                        <ul class="st-nav-list">
                            <li><a href='/'>Home</a></li>
                            <li><a href='about.html'>About</a></li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul>
                                    <li class="menu-item-has-children"><a href="#">Service</a>
                                        <ul>
                                            <li><a href='services.html'>Service page</a></li>
                                            <li><a href='service-details.html'>Service details </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                        <ul>
                                            <li><a href='portfolio-3col.html'>Portfolio page 1</a></li>
                                            <li><a href='portfolio-2col.html'>Portfolio page 2</a></li>
                                            <li><a href='portfolio-messonary.html'>Mesonary portfolio</a></li>
                                            <li><a href='portfolio-details.html'>Portfolio details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href='{{ route('shop.shop') }}'>Shop</a>
                            </li>
                            <li class="menu-item-has-children"><a href="blog-page.html">Blog</a>
                                <ul>
                                    <li><a href='blog-page-right-sidebar.html'>Blog page with right sidebar</a></li>
                                    <li><a href='blog-page-left-sidebar.html'>Blog page with left sidebar</a></li>
                                    <li><a href='blog-page-grid-view.html'>Grid view blog page</a></li>
                                    <li><a href='blog-details-left-sidebar.html'>Blog details with left sidebar</a>
                                    </li>
                                    <li><a href='blog-details-right-sidebar.html'>Blog details with right
                                            sidebar</a></li>
                                    <li><a href='blog-details-no-sidebar.html'>Blog details no sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href='contact-us.html'>Contact</a></li>
                        </ul>
                    </nav>
                    <!-- Menu Tool Box -->
                    <ul class="st-toolbox">
                        <li><span class="st-toolbox-btn st-search-open"><i class="fas fa-search"></i></span></li>
                        <li><a class='st-toolbox-btn' href='{{route('shop_cart.shop_cart')}}'><i
                                    class="fas fa-shopping-cart"></i><span class="badge badge-primary">{{count((array) session('cart'))}}</span></a>
                        </li>
                        <li>
                            @if (isset(Auth::user()->id))
                                <a class='st-toolbox-btn' href='{{ route('account.index') }}'>

                                    @if (Auth::user()->image != null)
                                        <img src="{{ asset('storage/images/' . Auth::user()->image) }}"
                                            style="border-radius:50%" alt="">
                                    @else
                                        <i class="fas fa-user"></i>
                                    @endif

                                </a>



                        <li><a class='st-toolbox-btn' href='{{ route('logout') }}'><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                    <path fill-rule="evenodd"
                                        d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg></a>
                        @else
                            <a class='st-toolbox-btn' href='{{ route('login') }}'><i class="fas fa-user"></i></a>
                            @endif

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form action="#" class="st-head-search">
            <div class="container">
                <input type="text" class="st-head-search-input" placeholder="Search your infinite universe..."
                    autofocus>
                <div class="st-head-search-close"><i class="far fa-times-circle"></i></div>
            </div>
        </form>
    </div>
</header>
<!-- END: Navbar Header Section -->
