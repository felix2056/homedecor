<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<main class="wrapper main-content" role="main">
    <div id="shopify-section-collection-template" class="shopify-section collection-template-section">
        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
            <a href="/" title="Back to the frontpage">Home</a>
            <span class="divider" aria-hidden="true">›</span>
            <span>Dining</span>
        </nav>


        <div id="CollectionSection" data-section-id="collection-template" data-section-type="collection-template">
            <div class="grid grid-border">
                <div class="grid-item">
                    <header class="section-header">
                        <h1 class="section-header--title section-header--left h1">Dining</h1>
                        <div class="section-header--right">
                            <div class="form-horizontal">

                                <label for="sortBy" class="small--hide">Sort by</label>
                                <select name="sort_by" aria-describedby="a11y-refresh-page-message" id="sortBy">

                                    <option value="manual">Featured</option>

                                    <option value="best-selling" selected="selected">Best selling</option>

                                    <option value="title-ascending">Alphabetically, A-Z</option>

                                    <option value="title-descending">Alphabetically, Z-A</option>

                                    <option value="price-ascending">Price, low to high</option>

                                    <option value="price-descending">Price, high to low</option>

                                    <option value="created-ascending">Date, old to new</option>

                                    <option value="created-descending">Date, new to old</option>

                                </select>
                            </div>

                            <script>
                                Shopify.queryParams = {};
                                if (location.search.length) {
                                    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i <
                                        aCouples.length; i++) {
                                        aKeyValue = aCouples[i].split('=');
                                        if (aKeyValue.length > 1) {
                                            Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(
                                                aKeyValue[1]);
                                        }
                                    }
                                }

                                $(function () {
                                    $('#sortBy')
                                        // select the current sort order
                                        .val('best-selling')
                                        .bind('change', function () {
                                            Shopify.queryParams.sort_by = jQuery(this).val();
                                            location.search = jQuery.param(Shopify.queryParams).replace(
                                                /\+/g, '%20');
                                        });
                                });
                            </script>



                            <div class="collection-view">
                                <a title="Grid view" class="change-view collection-view--active" data-view="grid">
                                    <span class="icon icon-collection-view-grid"></span>
                                </a>
                                <a title="List view" class="change-view" data-view="list">
                                    <span class="icon icon-collection-view-list"></span>
                                </a>
                            </div>

                            <script>
                                function replaceUrlParam(url, paramName, paramValue) {
                                    var pattern = new RegExp('(' + paramName + '=).*?(&|$)'),
                                        newUrl = url.replace(pattern, '$1' + paramValue + '$2');
                                    if (newUrl == url) {
                                        newUrl = newUrl + (newUrl.indexOf('?') > 0 ? '&' : '?') + paramName + '=' +
                                            paramValue;
                                    }
                                    return newUrl;
                                }

                                $(function () {
                                    $('.change-view').on('click', function () {
                                        var view = $(this).data('view'),
                                            url = document.URL,
                                            hasParams = url.indexOf('?') > -1;

                                        if (hasParams) {
                                            window.location = replaceUrlParam(url, 'view', view);
                                        } else {
                                            window.location = url + '?view=' + view;
                                        }
                                    });
                                });
                            </script>

                            <button id="toggleFilters" class="btn btn--small right toggle-filters">Filters</button>

                        </div>
                    </header>


                    <div class="grid-uniform">
                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">
                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">
                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="kitchen Dining Room Wall Sticker"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623929_580x@2x.jpg?v=1575446690 2x"
                                                alt="kitchen Dining Room Wall Sticker" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>kitchen Dining Room Wall Sticker</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$26<sup>94</sup></small>
                                        <span class="visually-hidden">$26.94</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $8.98



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php" class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Fridge sticker dining room"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-390504543_580x@2x.jpg?v=1575446690 2x"
                                                alt="Fridge sticker dining room" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Fridge sticker dining room</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$4<sup>38</sup></small>
                                        <span class="visually-hidden">$4.38</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.46



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Coffee Cup Wall Sticker For Dining"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867624654_580x@2x.jpg?v=1575446690 2x"
                                                alt="Coffee Cup Wall Sticker For Dining" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Coffee Cup Wall Sticker For Dining</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$5<sup>67</sup></small>
                                        <span class="visually-hidden">$5.67</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.89



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php" class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Self Adhesive Wall Sticker"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867623741_580x@2x.jpg?v=1575446690 2x"
                                                alt="Self Adhesive Wall Sticker" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Self Adhesive Wall Sticker</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$17<sup>13</sup></small>
                                        <span class="visually-hidden">$17.13</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $5.71



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:99.47368421052632%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0052910052910053" data-sizes="auto"
                                                    alt="White flowers wall stickers"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-860909749_580x@2x.jpg?v=1575446690 2x"
                                                alt="White flowers wall stickers" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>White flowers wall stickers</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$5<sup>79</sup></small>
                                        <span class="visually-hidden">$5.79</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.93



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Wall Stickers Art Design For Dining"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596061_580x@2x.jpg?v=1575446688 2x"
                                                alt="Wall Stickers Art Design For Dining" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Wall Stickers Art Design For Dining</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$14<sup>73</sup></small>
                                        <span class="visually-hidden">$14.73</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $4.91



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:83.81502890173411%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.193103448275862" data-sizes="auto"
                                                    alt="Creative dining room wall mural"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596009_580x@2x.jpg?v=1575446688 2x"
                                                alt="Creative dining room wall mural" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Creative dining room wall mural</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$105<sup>00</sup></small>
                                        <span class="visually-hidden">$105.00</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $35



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Bread Breadcrumb Bakery Decor Toy"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595010_580x@2x.jpg?v=1575446688 2x"
                                                alt="Bread Breadcrumb Bakery Decor Toy" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Bread Breadcrumb Bakery Decor Toy</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$6<sup>03</sup></small>
                                        <span class="visually-hidden">$6.03</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $2.01



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js"
                                            style="max-width: 172.4054316197866px">
                                            <div style="padding-top:130.5063291%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="0.7662463627546072" data-sizes="auto"
                                                    alt="Glass display for Dining room"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_2048x.jpg?v=1575446688 2048w"
                                                    sizes="172px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595403_580x@2x.jpg?v=1575446688 2x"
                                                alt="Glass display for Dining room" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Glass display for Dining room</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$36<sup>00</sup></small>
                                        <span class="visually-hidden">$36.00</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $12



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php" class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Dining room wall stickers"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-545892196_580x@2x.jpg?v=1575446688 2x"
                                                alt="Dining room wall stickers" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Dining room wall stickers</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$10<sup>14</sup></small>
                                        <span class="visually-hidden">$10.14</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $3.38



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Home Decorations For Dining Room"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_2048x.jpg?v=1575446687 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_2048x.jpg?v=1575446687 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_580x.jpg?v=1575446687"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_580x.jpg?v=1575446687 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867596284_580x@2x.jpg?v=1575446687 2x"
                                                alt="Home Decorations For Dining Room" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Home Decorations For Dining Room</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$13<sup>17</sup></small>
                                        <span class="visually-hidden">$13.17</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $4.39



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Table decoration for hotel dining"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_2048x.jpg?v=1575446687 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_2048x.jpg?v=1575446687 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_580x.jpg?v=1575446687"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_580x.jpg?v=1575446687 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867595345_580x@2x.jpg?v=1575446687 2x"
                                                alt="Table decoration for hotel dining" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Table decoration for hotel dining</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$40<sup>50</sup></small>
                                        <span class="visually-hidden">$40.50</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $13.50



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Dollhouse Miniature Dining Table"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_2048x.jpg?v=1575446687 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_2048x.jpg?v=1575446687 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_580x.jpg?v=1575446687"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_580x.jpg?v=1575446687 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-867594792_580x@2x.jpg?v=1575446687 2x"
                                                alt="Dollhouse Miniature Dining Table" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Dollhouse Miniature Dining Table</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$27<sup>09</sup></small>
                                        <span class="visually-hidden">$27.09</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $9.03



                                    </span>

                                </div>


                            </a>

                        </div>
















                        <div class="grid-item small--one-half medium--one-quarter large--one-quarter">

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Dinner Dining Christmas Table Decorations"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_125x.jpg?v=1575446686 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_180x.jpg?v=1575446686 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_360x.jpg?v=1575446686 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_540x.jpg?v=1575446686 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_720x.jpg?v=1575446686 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_900x.jpg?v=1575446686 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1080x.jpg?v=1575446686 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1296x.jpg?v=1575446686 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1512x.jpg?v=1575446686 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1728x.jpg?v=1575446686 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_2048x.jpg?v=1575446686 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_125x.jpg?v=1575446686 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_180x.jpg?v=1575446686 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_360x.jpg?v=1575446686 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_540x.jpg?v=1575446686 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_720x.jpg?v=1575446686 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_900x.jpg?v=1575446686 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1080x.jpg?v=1575446686 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1296x.jpg?v=1575446686 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1512x.jpg?v=1575446686 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_1728x.jpg?v=1575446686 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_2048x.jpg?v=1575446686 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_580x.jpg?v=1575446686"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_580x.jpg?v=1575446686 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-454806384_580x@2x.jpg?v=1575446686 2x"
                                                alt="Dinner Dining Christmas Table Decorations" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Dinner Dining Christmas Table Decorations</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Regular price</span>







                                        <small aria-hidden="true">$12<sup>52</sup></small>
                                        <span class="visually-hidden">$12.52</span>


                                    </span>


                                </div>


                            </a>

                        </div>




                    </div>

                </div>



            </div>
        </div>
    </div>
</main>

<?php include_once('../includes/footer.php'); ?>