<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<main class="wrapper main-content" role="main">



    <div id="shopify-section-collection-template" class="shopify-section collection-template-section">








        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
            <a href="/" title="Back to the frontpage">Home</a>



            <span class="divider" aria-hidden="true">›</span>


            <span>Kitchen</span>



        </nav>






        <div id="CollectionSection" data-section-id="collection-template" data-section-type="collection-template">
            <div class="grid grid-border">



                <div class="grid-item">



                    <header class="section-header">
                        <h1 class="section-header--title section-header--left h1">Kitchen</h1>
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

                            <a href="/products/single.php" class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">



                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Artificial Flowers"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_580x@2x.jpg?v=1575446690 2x"
                                                alt="Artificial Flowers" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Artificial Flowers</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$5<sup>10</sup></small>
                                        <span class="visually-hidden">$5.10</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.70



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Kitchen Whisks"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-869792672_580x@2x.jpg?v=1575446690 2x"
                                                alt="Kitchen Whisks" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Kitchen Whisks</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$18<sup>78</sup></small>
                                        <span class="visually-hidden">$18.78</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $6.26



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Kitchen Wall Stickers"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-644077365_580x@2x.jpg?v=1575446690 2x"
                                                alt="Kitchen Wall Stickers" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Kitchen Wall Stickers</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$4<sup>14</sup></small>
                                        <span class="visually-hidden">$4.14</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.38



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Cabinet Wall Sticker"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-755671930_580x@2x.jpg?v=1575446690 2x"
                                                alt="Cabinet Wall Sticker" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Cabinet Wall Sticker</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$38<sup>94</sup></small>
                                        <span class="visually-hidden">$38.94</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $12.98



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Mosaic Tile Kitchen"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_5380420e-99db-4d78-824b-888f5dca1fae_580x@2x.jpg?v=1575446690 2x"
                                                alt="Mosaic Tile Kitchen" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Mosaic Tile Kitchen</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$11<sup>16</sup></small>
                                        <span class="visually-hidden">$11.16</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $3.72



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
                                                    alt="Self Adhesive Mosaic Tile"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_2048x.jpg?v=1575446690 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_125x.jpg?v=1575446690 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_180x.jpg?v=1575446690 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_360x.jpg?v=1575446690 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_540x.jpg?v=1575446690 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_720x.jpg?v=1575446690 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_900x.jpg?v=1575446690 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1080x.jpg?v=1575446690 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1296x.jpg?v=1575446690 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1512x.jpg?v=1575446690 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_1728x.jpg?v=1575446690 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_2048x.jpg?v=1575446690 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_580x.jpg?v=1575446690"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_580x.jpg?v=1575446690 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_3598fee3-c934-4004-a1bd-9f6445fd2d45_580x@2x.jpg?v=1575446690 2x"
                                                alt="Self Adhesive Mosaic Tile" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Self Adhesive Mosaic Tile</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$11<sup>67</sup></small>
                                        <span class="visually-hidden">$11.67</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $3.89



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
                                                    alt="Kitchen Cabinet Wall Sticker"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_2048x.jpg?v=1575446687 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_2048x.jpg?v=1575446687 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_580x.jpg?v=1575446687"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_580x.jpg?v=1575446687 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-781537802_580x@2x.jpg?v=1575446687 2x"
                                                alt="Kitchen Cabinet Wall Sticker" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Kitchen Cabinet Wall Sticker</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$33<sup>24</sup></small>
                                        <span class="visually-hidden">$33.24</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $11.08



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
                                                    alt="Waterproof Aluminum Foil Wall Sticker"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-630740483_580x@2x.jpg?v=1575446688 2x"
                                                alt="Waterproof Aluminum Foil Wall Sticker" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Waterproof Aluminum Foil Wall Sticker</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$4<sup>89</sup></small>
                                        <span class="visually-hidden">$4.89</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.63



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
                                                    alt="Hexagon DIY Wall Floor Stickers"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-726274268_580x@2x.jpg?v=1575446688 2x"
                                                alt="Hexagon DIY Wall Floor Stickers" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Hexagon DIY Wall Floor Stickers</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$23<sup>13</sup></small>
                                        <span class="visually-hidden">$23.13</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $7.71



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
                                                    alt="Mosaic Tile Kitchen wallpaper"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_2048x.jpg?v=1575446687 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_125x.jpg?v=1575446687 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_180x.jpg?v=1575446687 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_360x.jpg?v=1575446687 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_540x.jpg?v=1575446687 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_720x.jpg?v=1575446687 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_900x.jpg?v=1575446687 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1080x.jpg?v=1575446687 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1296x.jpg?v=1575446687 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1512x.jpg?v=1575446687 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_1728x.jpg?v=1575446687 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_2048x.jpg?v=1575446687 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_580x.jpg?v=1575446687"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_580x.jpg?v=1575446687 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-725517939_580x@2x.jpg?v=1575446687 2x"
                                                alt="Mosaic Tile Kitchen wallpaper" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Mosaic Tile Kitchen wallpaper</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$11<sup>16</sup></small>
                                        <span class="visually-hidden">$11.16</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $3.72



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
                                                    alt="Cute Refrigerator Sticker"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-863079309_580x@2x.jpg?v=1575446688 2x"
                                                alt="Cute Refrigerator Sticker" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Cute Refrigerator Sticker</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$3<sup>78</sup></small>
                                        <span class="visually-hidden">$3.78</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.26



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
                                                    alt="Self Adhesive Mosaic Tile"
                                                    data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_2048x.jpg?v=1575446688 2048w"
                                                    sizes="227px"
                                                    srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_125x.jpg?v=1575446688 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_180x.jpg?v=1575446688 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_360x.jpg?v=1575446688 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_540x.jpg?v=1575446688 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_720x.jpg?v=1575446688 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_900x.jpg?v=1575446688 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1080x.jpg?v=1575446688 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1296x.jpg?v=1575446688 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1512x.jpg?v=1575446688 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_1728x.jpg?v=1575446688 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_2048x.jpg?v=1575446688 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-603945597_580x@2x.jpg?v=1575446688 2x"
                                                alt="Self Adhesive Mosaic Tile" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Self Adhesive Mosaic Tile</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$11<sup>67</sup></small>
                                        <span class="visually-hidden">$11.67</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $3.89



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
                                                <img class="lazyload no-js"
                                                    data-src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-576257968_{width}x.jpg?v=1575446688"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Fresh green grass baseboard">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-576257968_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-576257968_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-576257968_580x@2x.jpg?v=1575446688 2x"
                                                alt="Fresh green grass baseboard" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Fresh green grass baseboard</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$7<sup>38</sup></small>
                                        <span class="visually-hidden">$7.38</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $2.46



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
                                                <img class="lazyload no-js"
                                                    data-src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-806487857_{width}x.jpg?v=1575446688"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Adhesive Waterproof Wallpaper">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-806487857_580x.jpg?v=1575446688"
                                                srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-806487857_580x.jpg?v=1575446688 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-806487857_580x@2x.jpg?v=1575446688 2x"
                                                alt="Adhesive Waterproof Wallpaper" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Adhesive Waterproof Wallpaper</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$4<sup>26</sup></small>
                                        <span class="visually-hidden">$4.26</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.42



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