<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<main class="wrapper main-content" role="main">
    <div id="shopify-section-collection-template" class="shopify-section collection-template-section">
        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
            <a href="/" title="Back to the frontpage">Home</a>
            <span class="divider" aria-hidden="true">›</span>
            <span>Decor</span>
        </nav>


        <div id="CollectionSection" data-section-id="collection-template" data-section-type="collection-template">
            <div class="grid grid-border">
                <div class="grid-item">
                    <header class="section-header">
                        <h1 class="section-header--title section-header--left h1">Decor</h1>
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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Wall Stickers"
                                                    data-srcset="/assets/images/products/product-image-734572547_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-734572547_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-734572547_580x.jpg"
                                                srcset="/assets/images/products/product-image-734572547_580x.jpg 2x"
                                                alt="Wall Stickers" style="opacity:1;">
                                        </noscript>
                                    </div>
                                </div>

                                <p>Wall Stickers</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">
                                        <span class="visually-hidden">Sale price</span>
                                        <small aria-hidden="true">$22<sup>62</sup></small>
                                        <span class="visually-hidden">$22.62</span>
                                    </span>


                                    <span class="sale-tag medium--right">
                                        Save $7.54
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
                                                    alt="Sofa Cushion Cover Throw Pillow"
                                                    data-srcset="/assets/images/products/product-image-758426256_360x.jpg"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-758426256_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-758426256_360x.jpg"
                                                srcset="/assets/images/products/product-image-758426256_360x.jpg 2x"
                                                alt="Sofa Cushion Cover Throw Pillow" style="opacity:1;">
                                        </noscript>
                                    </div>
                                </div>

                                <p>Sofa Cushion Cover Throw Pillow</p>

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

                            <a href="/products/single.php"
                                class="product-grid-item">
                                <div class="product-grid-image" style="height: 227px;">
                                    <div class="product-grid-image--centered">
                                        <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                            <div style="padding-top:100.0%;">
                                                <img class="no-js lazyautosizes lazyloaded"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Crystal Crafts With LED Light"
                                                    data-srcset="/assets/images/products/product-image-849575847_360x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-849575847_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-849575847_360x.jpg"
                                                srcset="/assets/images/products/product-image-849575847_360x.jpg 2x"
                                                alt="Crystal Crafts With LED Light" style="opacity:1;">
                                        </noscript>
                                    </div>
                                </div>

                                <p>Crystal Crafts With LED Light</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">
                                        <span class="visually-hidden">Sale price</span>
                                        <small aria-hidden="true">$5<sup>70</sup></small>
                                        <span class="visually-hidden">$5.70</span>
                                    </span>


                                    <span class="sale-tag medium--right">
                                        Save $1.90
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
                                                    alt="Weather Forecast Crystal"
                                                    data-srcset="/assets/images/products/product-image-728934266_360x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-728934266_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-728934266_360x.jpg?"
                                                srcset="/assets/images/products/product-image-728934266_360x.jpg 2x"
                                                alt="Weather Forecast Crystal" style="opacity:1;">
                                        </noscript>
                                    </div>
                                </div>

                                <p>Weather Forecast Crystal</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">
                                        <span class="visually-hidden">Sale price</span>
                                        <small aria-hidden="true">$66<sup>75</sup></small>
                                        <span class="visually-hidden">$66.75</span>
                                    </span>

                                    <span class="sale-tag medium--right">
                                        Save $22.25
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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Handmade Craft"
                                                    data-srcset="/assets/images/products/product-image-436307155_360x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-436307155_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-436307155_360x.jpg"
                                                srcset="/assets/images/products/product-image-436307155_360x.jpg 2x"
                                                alt="Handmade Craft" style="opacity:1;">
                                        </noscript>
                                    </div>
                                </div>

                                <p>Handmade Craft</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">
                                        <span class="visually-hidden">Sale price</span>
                                        <small aria-hidden="true">$32<sup>97</sup></small>
                                        <span class="visually-hidden">$32.97</span>
                                    </span>


                                    <span class="sale-tag medium--right">
                                        Save $10.99
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
                                                    alt="Jellyfish Paperweight Aquarium"
                                                    data-srcset="/assets/images/products/product-image-714662685_360x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-714662685_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-714662685_360x.jpg"
                                                srcset="/assets/images/products/product-image-714662685_360x.jpg 2x"
                                                alt="Jellyfish Paperweight Aquarium" style="opacity:1;">
                                        </noscript>
                                    </div>
                                </div>

                                <p>Jellyfish Paperweight Aquarium</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">
                                        <span class="visually-hidden">Sale price</span>
                                        <small aria-hidden="true">$46<sup>41</sup></small>
                                        <span class="visually-hidden">$46.41</span>
                                    </span>

                                    <span class="sale-tag medium--right">
                                        Save $15.47
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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Valuable Metal mascot"
                                                    data-srcset="/assets/images/products/product-image-797728174_360x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-797728174_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-797728174_360x.jpg"
                                                srcset="/assets/images/products/product-image-797728174_360x.jpg 2x"
                                                alt="Valuable Metal mascot" style="opacity:1;">
                                        </noscript>
                                    </div>
                                </div>

                                <p>Valuable Metal mascot</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">
                                        <span class="visually-hidden">Sale price</span>
                                        <small aria-hidden="true">$41<sup>70</sup></small>
                                        <span class="visually-hidden">$41.70</span>
                                    </span>

                                    <span class="sale-tag medium--right">
                                        Save $13.90
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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="photo frame"
                                                    data-srcset="/assets/images/products/product-image-867547026_360x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-867547026_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-867547026_360x.jpg"
                                                srcset="/assets/images/products/product-image-867547026_360x.jpg 2x"
                                                alt="photo frame" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>photo frame</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$53<sup>97</sup></small>
                                        <span class="visually-hidden">$53.97</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $17.99



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
                                                    alt="Wall-Mounted Metal Rack"
                                                    data-srcset="/assets/images/products/product-image-677799603_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-677799603_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-677799603_580x.jpg"
                                                srcset="/assets/images/products/product-image-677799603_580x.jpg 2x"
                                                alt="Wall-Mounted Metal Rack" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Wall-Mounted Metal Rack</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$57<sup>24</sup></small>
                                        <span class="visually-hidden">$57.24</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $19.08



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Ceramic animal dog"
                                                    data-srcset="/assets/images/products/product-image-822175909_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-822175909_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-822175909_580x.jpg"
                                                srcset="/assets/images/products/product-image-822175909_580x.jpg 2x"
                                                alt="Ceramic animal dog" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Ceramic animal dog</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$40<sup>89</sup></small>
                                        <span class="visually-hidden">$40.89</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $13.63



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
                                                    alt="Magnetic Levitating Moon Lamp"
                                                    data-srcset="/assets/images/products/product-image-613662928_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-613662928_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-613662928_580x.jpg"
                                                srcset="/assets/images/products/product-image-613662928_580x.jpg 2x"
                                                alt="Magnetic Levitating Moon Lamp" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Magnetic Levitating Moon Lamp</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$196<sup>80</sup></small>
                                        <span class="visually-hidden">$196.80</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $65.60



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Little deer"
                                                    data-srcset="/assets/images/products/product-image-867547007_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-867547007_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-867547007_580x.jpg"
                                                srcset="/assets/images/products/product-image-867547007_580x.jpg 2x"
                                                alt="Little deer" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Little deer</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$5<sup>97</sup></small>
                                        <span class="visually-hidden">$5.97</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.99



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Levitation Globe"
                                                    data-srcset="/assets/images/products/product-image-773248797_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-773248797_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-773248797_580x.jpg"
                                                srcset="/assets/images/products/product-image-773248797_580x.jpg 2x"
                                                alt="Levitation Globe" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Levitation Globe</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$55<sup>20</sup></small>
                                        <span class="visually-hidden">$55.20</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $18.40



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
                                                    alt="Chicken Chick Egg Nest"
                                                    data-srcset="/assets/images/products/product-image-846779102_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-846779102_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-846779102_580x.jpg"
                                                srcset="/assets/images/products/product-image-846779102_580x.jpg 2x"
                                                alt="Chicken Chick Egg Nest" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Chicken Chick Egg Nest</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>

                                        <small aria-hidden="true">$4<sup>05</sup></small>
                                        <span class="visually-hidden">$4.05</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.35



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
                                                    alt="Octagonal Crystal Crafts"
                                                    data-srcset="/assets/images/products/product-image-527648828_580x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-527648828_580x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-527648828_580x.jpg"
                                                srcset="/assets/images/products/product-image-527648828_580x.jpg 2x"
                                                alt="Octagonal Crystal Crafts" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Octagonal Crystal Crafts</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$10<sup>44</sup></small>
                                        <span class="visually-hidden">$10.44</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $3.48



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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="Glass Ball"
                                                    data-srcset="/assets/images/products/product-image-436307155_360x.jpg 2048w"
                                                    sizes="227px"
                                                    srcset="/assets/images/products/product-image-436307155_360x.jpg 2048w">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-436307155_360x.jpg"
                                                srcset="/assets/images/products/product-image-436307155_360x.jpg 2x"
                                                alt="Glass Ball" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Glass Ball</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$26<sup>88</sup></small>
                                        <span class="visually-hidden">$26.88</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $8.96



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
                                                <img class="lazyload no-js"
                                                    data-src="/assets/images/products/product-image-693955116_360x.jpg"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Artificial Mini Sika Deer">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-693955116_360x.jpg"
                                                srcset="/assets/images/products/product-image-693955116_360x.jpg 2x"
                                                alt="Artificial Mini Sika Deer" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Artificial Mini Sika Deer</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$3<sup>84</sup></small>
                                        <span class="visually-hidden">$3.84</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.28



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
                                                    data-src="/assets/images/products/product-image-795422367_{width}x.jpg?v=1575446686"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Wooden Frame Wall Home Decor Crafts">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-795422367_580x.jpg?v=1575446686"
                                                srcset="/assets/images/products/product-image-795422367_580x.jpg?v=1575446686 1x, /assets/images/products/product-image-795422367_580x@2x.jpg?v=1575446686 2x"
                                                alt="Wooden Frame Wall Home Decor Crafts" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Wooden Frame Wall Home Decor Crafts</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Sale price</span>







                                        <small aria-hidden="true">$4<sup>71</sup></small>
                                        <span class="visually-hidden">$4.71</span>


                                    </span>


                                    <span class="sale-tag medium--right">








                                        Save $1.57



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
                                                <img class="lazyload no-js"
                                                    data-src="/assets/images/products/product-image-477828036_{width}x.jpg?v=1575446685"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Pillow  Sofa Waist Throw Cushion Cover Home Decor">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-477828036_580x.jpg?v=1575446685"
                                                srcset="/assets/images/products/product-image-477828036_580x.jpg?v=1575446685 1x, /assets/images/products/product-image-477828036_580x@2x.jpg?v=1575446685 2x"
                                                alt="Pillow  Sofa Waist Throw Cushion Cover Home Decor"
                                                style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Pillow Sofa Waist Throw Cushion Cover Home Decor</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Regular price</span>







                                        <small aria-hidden="true">$7<sup>18</sup></small>
                                        <span class="visually-hidden">$7.18</span>


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
                                                <img class="lazyload no-js"
                                                    data-src="/assets/images/products/product-image-356223547_{width}x.jpg?v=1575446685"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="3D Mirror Wall Stickers Home Decoration">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-356223547_580x.jpg?v=1575446685"
                                                srcset="/assets/images/products/product-image-356223547_580x.jpg?v=1575446685 1x, /assets/images/products/product-image-356223547_580x@2x.jpg?v=1575446685 2x"
                                                alt="3D Mirror Wall Stickers Home Decoration" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>3D Mirror Wall Stickers Home Decoration</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Regular price</span>







                                        <small aria-hidden="true">$8<sup>24</sup></small>
                                        <span class="visually-hidden">$8.24</span>


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
                                            <div style="padding-top:89.1%;">
                                                <img class="lazyload no-js"
                                                    data-src="/assets/images/products/product-image-492835733_{width}x.jpg?v=1575446685"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.122334455667789" data-sizes="auto"
                                                    alt="Flowers Living Room Table Home Garden Decor Accessories">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-492835733_580x.jpg?v=1575446685"
                                                srcset="/assets/images/products/product-image-492835733_580x.jpg?v=1575446685 1x, /assets/images/products/product-image-492835733_580x@2x.jpg?v=1575446685 2x"
                                                alt="Flowers Living Room Table Home Garden Decor Accessories"
                                                style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Flowers Living Room Table Home Garden Decor Accessories</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Regular price</span>







                                        <small aria-hidden="true">$7<sup>66</sup></small>
                                        <span class="visually-hidden">$7.66</span>


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
                                                <img class="lazyload no-js"
                                                    data-src="/assets/images/products/product-image-356224250_{width}x.jpg?v=1575446685"
                                                    data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                    data-aspectratio="1.0" data-sizes="auto"
                                                    alt="Wall Sticker Stickers Butterfly Home Decor">
                                            </div>
                                        </div>
                                        <noscript>
                                            <img src="/assets/images/products/product-image-356224250_580x.jpg?v=1575446685"
                                                srcset="/assets/images/products/product-image-356224250_580x.jpg?v=1575446685 1x, /assets/images/products/product-image-356224250_580x@2x.jpg?v=1575446685 2x"
                                                alt="Wall Sticker Stickers Butterfly Home Decor" style="opacity:1;">
                                        </noscript>


                                    </div>
                                </div>

                                <p>Wall Sticker Stickers Butterfly Home Decor</p>

                                <div class="product-item--price">
                                    <span class="h1 medium--left">

                                        <span class="visually-hidden">Regular price</span>







                                        <small aria-hidden="true">$1<sup>86</sup></small>
                                        <span class="visually-hidden">$1.86</span>


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