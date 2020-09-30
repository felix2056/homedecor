<div id="shopify-section-header" class="shopify-section header-section">
    <header class="site-header" role="banner" data-section-id="header" data-section-type="header-section">
        <div class="wrapper">
            <div class="grid--full">
                <div class="grid-item large--one-half">
                    <h1 class="header-logo" itemscope="" itemtype="http://schema.org/Organization">
                        <a href="/" itemprop="url">
                            <div class="lazyload__image-wrapper no-js header-logo__image" style="max-width:260px;">
                                <div style="padding-top:20.491803278688526%;">
                                    <img class="js lazyautosizes lazyloaded" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="4.88" data-sizes="auto" alt="homedecor-1604" style="width:260px;" data-srcset="/assets/images/Asset_2_4x50_180x.png" sizes="260px" srcset="/assets/images/Asset_2_4x50_360x.png 2048w">
                                </div>
                            </div>
                            <noscript>
                                <img src="/assets/images/Asset_2_4x50_260x.png" srcset="/assets/images/Asset_2_4x50_260x.png 2x" alt="homedecor-1604" itemprop="logo" style="max-width:260px;">
                            </noscript>
                        </a>
                    </h1>
                </div>

                <div class="grid-item large--one-half text-center large--text-right">
                    <div class="site-header--text-links">
                        <span class="site-header--meta-links medium-down--hide">
                            <a href="/account/login.php" id="customer_login_link">Sign in</a>
                            <span class="site-header--spacer">or</span>
                            <a href="/account/register.php" id="customer_register_link">Create an Account</a>
                        </span>
                    </div>

                    <br class="medium-down--hide">

                    <form action="/search.php" method="get" class="search-bar" role="search">
                        <input type="hidden" name="type" value="product">
                        <input type="search" name="q" value="" placeholder="Search all products..." aria-label="Search all products...">
                        <button type="submit" class="search-bar--submit icon-fallback-text">
                            <span class="icon icon-search" aria-hidden="true"></span>
                            <span class="fallback-text">Search</span>
                        </button>
                    </form>


                    <a href="/products/cart.php" class="header-cart-btn cart-toggle">
                        <span class="icon icon-cart"></span>
                        Cart <span class="cart-count cart-badge--desktop hidden-count">0</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="mobileNavBar">
        <div class="display-table-cell">
            <button class="menu-toggle mobileNavBar-link" aria-controls="navBar" aria-expanded="false"><span class="icon icon-hamburger" aria-hidden="true"></span>Menu</button>
        </div>
        <div class="display-table-cell">
            <a href="/products/cart.php" class="cart-toggle mobileNavBar-link">
                <span class="icon icon-cart"></span>
                Cart <span class="cart-count hidden-count">0</span>
            </a>
        </div>
    </div>

    <nav class="nav-bar" id="navBar" role="navigation">
        <div class="wrapper">
            <form action="/search.php" method="get" class="search-bar" role="search">
                <input type="hidden" name="type" value="product">

                <input type="search" name="q" value="" placeholder="Search all products..." aria-label="Search all products...">
                <button type="submit" class="search-bar--submit icon-fallback-text">
                    <span class="icon icon-search" aria-hidden="true"></span>
                    <span class="fallback-text">Search</span>
                </button>
            </form>

            <ul class="mobile-nav" id="MobileNav">
                <li class="large--hide">
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/collections/decor.php" class="mobile-nav--link" data-meganav-type="child">
                        decor
                    </a>
                </li>

                <li>
                    <a href="/collections/dining.php" class="mobile-nav--link" data-meganav-type="child">
                        dining
                    </a>
                </li>

                <li>
                    <a href="/collections/furnishing.php" class="mobile-nav--link" data-meganav-type="child">
                        furnishing
                    </a>
                </li>

                <li>
                    <a href="/collections/kitchen.php" class="mobile-nav--link" data-meganav-type="child">
                        kitchen
                    </a>
                </li>

                <li class="customer-navlink large--hide"><a href="/account/login" id="customer_login_link">Sign in</a></li>
                <li class="customer-navlink large--hide"><a href="/account/register" id="customer_register_link">Create an Account</a></li>
            </ul>

            <ul class="site-nav" id="AccessibleNav">
                <li class="large--hide" style="">
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/collections/decor.php" class="site-nav--link" data-meganav-type="child">
                        decor
                    </a>
                </li>

                <li>
                    <a href="/collections/dining.php" class="site-nav--link" data-meganav-type="child">
                        dining
                    </a>
                </li>

                <li>
                    <a href="/collections/furnishing.php" class="site-nav--link" data-meganav-type="child">
                        furnishing
                    </a>
                </li>

                <li>
                    <a href="/collections/kitchen.php" class="site-nav--link" data-meganav-type="child">
                        kitchen
                    </a>
                </li>

                <li class="customer-navlink large--hide" style=""><a href="/account/login" id="customer_login_link">Sign in</a></li>
                <li class="customer-navlink large--hide" style=""><a href="/account/register" id="customer_register_link">Create an Account</a></li>
            </ul>
        </div>
    </nav>
</div>