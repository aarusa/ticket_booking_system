<header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="/"><img src="assets/frontend/images/resources/logo-1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu">
                                    <a href="/">Home </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Services</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">News</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Shop</a>
                                </li>
                                <li class="current">
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-cart-call-box">
                                <div class="main-menu__search-cart-box">
                                    <div class="main-menu__search-box">
                                        <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                    </div>
                                    <div class="main-menu__cart-box">
                                        <a href="cart.html" class="main-menu__cart icon-shopping-cart"></a>
                                    </div>
                                </div>
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <p class="main-menu__call-sub-title">Call Anytime</p>
                                        <h5 class="main-menu__call-number"><a href="tel:9288006780">+92 ( 8800 ) -
                                                6780</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>@yield('section_title','Default Title')</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>/</span></li>
                        <li>@yield('section_title','Default Title')</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->