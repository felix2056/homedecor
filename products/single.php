<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<?php if ( isset($_GET['product'])) : ?>
<?php
    $id = (int) $_GET['product'];
    $single = json_decode(find($id), true);
    // echo $_GET['product'];
?>

<main class="wrapper main-content" role="main">
    <div id="shopify-section-product-template" class="shopify-section product-template-section">
        <div id="ProductSection" data-section-id="product-template" data-section-type="product-template"
            data-zoom-toggle="zoom-in" data-zoom-enabled="true" data-related-enabled="" data-social-sharing=""
            data-show-compare-at-price="true" data-stock="false" data-incoming-transfer="false"
            data-ajax-cart-method="modal">
            <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                <a href="/" title="Back to the frontpage">Home</a>

                <span class="divider" aria-hidden="true">›</span>
                <span class="breadcrumb--truncate"><?php echo $single['title'] ?></span>
            </nav>

            <style>
                .selector-wrapper select,
                .product-variants select {
                    margin-bottom: 13px;
                }
            </style>


            <div class="grid" itemscope="" itemtype="http://schema.org/Product">
                <meta itemprop="url"
                    content="https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin">
                <meta itemprop="image"
                    content="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_grande.jpg?v=1575446689">

                <div class="grid-item large--two-fifths">
                    <div class="grid">
                        <div class="grid-item large--eleven-twelfths text-center">
                            <div class="product-photo-container" id="productPhotoContainer-product-template">
                                <div id="productPhotoWrapper-product-template-5009510072364"
                                    class="lazyload__image-wrapper" data-image-id="5009510072364"
                                    style="max-width: 700px">
                                    <div class="no-js product__image-wrapper image-zoom"
                                        style="padding-top: 100%; position: relative; overflow: hidden;">
                                        <img id="" src="<?php echo $single['featured_image'] ?>"
                                            class="no-js lazypreload lazyautosizes lazyloaded"
                                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0" data-sizes="auto" alt="Beautiful Yellow faery resin"
                                            data-zoom="<?php echo $single['featured_image']; ?>"
                                            data-srcset="<?php echo $single['featured_image']; ?> 2048w" sizes="348px"
                                            srcset="<?php echo $single['featured_image']; ?> 2048w"
                                            style="display: block;">
                                        <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_1024x1024@2x.jpg?v=1575446689"
                                            class="zoomImg"
                                            style="position: absolute; top: -60.069px; left: -388.716px; opacity: 0; width: 750px; height: 750px; border: none; max-width: none; max-height: none;">
                                    </div>
                                </div>

                                <noscript>
                                    <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_580x.jpg?v=1575446689"
                                        srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_580x.jpg?v=1575446689 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_580x@2x.jpg?v=1575446689 2x"
                                        alt="Beautiful Yellow faery resin" style="opacity:1;">
                                </noscript>
                            </div>

                            <?php if ( count($single['images']) > 0) : ?>
                            <ul class="product-photo-thumbs grid-uniform" id="productThumbs-product-template">
                                <?php foreach ($single['images'] as $image) : ?>
                                <li class="grid-item medium-down--one-quarter large--one-quarter">
                                    <a href="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1024x1024@2x.jpg?v=1575446690"
                                        class="product-photo-thumb product-photo-thumb-product-template"
                                        data-image-id="5026912731180">
                                        <img src="<?php echo $image ?>" alt="<?php echo $single['title'] ?>">
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="grid-item large--three-fifths">
                    <h1 class="h2" itemprop="name"><?php echo $single['title'] ?></h1>
                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                        <meta itemprop="priceCurrency" content="USD">
                        <meta itemprop="price" content="59.7">

                        <ul class="inline-list product-meta">
                            <li>
                                <span id="productPrice-product-template" class="h1">
                                    <span aria-hidden="true"><?php echo $single['price'] ?></span>
                                    <span aria-hidden="true"><s><?php echo $single['sale_price'] ?></span>

                                    <span class="visually-hidden">
                                        <span class="visually-hidden">Regular price</span>
                                        <?php echo $single['price'] ?>
                                    </span>

                                    <span class="visually-hidden">
                                        <span class="visually-hidden">Sale price</span>
                                        <?php echo $single['sale_price'] ?>
                                    </span>
                                </span>
                            </li>

                            <li>
                                <span id="comparePrice-product-template" class="sale-tag large">Save $19.90</span>
                            </li>


                        </ul>
                        <hr id="variantBreak" class="hr--clear hr--small">

                        <link itemprop="availability" href="http://schema.org/InStock">


                        <form method="post" action="/cart/add" id="addToCartForm-product-template"
                            accept-charset="UTF-8" class="addToCartForm addToCartForm--payment-button"
                            enctype="multipart/form-data">
                            <input type="hidden" name="form_type" value="product">
                            <input type="hidden" name="utf8" value="✓">
                            <div class="selector-wrapper">
                                <label for="productSelect-product-template-option-0">Color</label>
                                <select class="single-option-selector" data-option="option1"
                                    id="productSelect-product-template-option-0">
                                    <option value="White">White</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Pink">Pink</option>
                                    <option value="Purple">Purple</option>
                                    <option value="Purple Red">Purple Red</option>
                                    <option value="Orange">Orange</option>
                                </select>
                            </div>
                            <select name="id" id="productSelect-product-template"
                                class="product-variants product-variants-product-template">
                                <option selected="selected" data-sku="17114392-white" value="13182599725100">White -
                                    $5.10 USD</option>
                                <option data-sku="17114392-yellow" value="13182599757868">Yellow - $5.10 USD</option>
                                <option data-sku="17114392-pink" value="13182599790636">Pink - $5.10 USD</option>
                                <option data-sku="17114392-purple" value="13182599823404">Purple - $5.10 USD</option>
                                <option data-sku="17114392-purple-red" value="13182599856172">Purple Red - $5.10 USD
                                </option>
                                <option data-sku="17114392-orange" value="13182599888940">Orange - $5.10 USD</option>
                            </select>

                            <div class="payment-buttons payment-buttons--small">
                                <div data-shopify="payment-button" class="shopify-payment-button">
                                    <div>
                                        <button type="submit" name="add" id="addToCart-product-template"
                                            class="btn btn--add-to-cart btn--secondary-accent">
                                            <span class="icon icon-cart"></span>
                                            <span id="addToCartText-product-template">Add to Cart</span>
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="shopify-payment-button__button shopify-payment-button__button--unbranded _2ogcW-Q9I-rgsSkNbRiJzA _2EiMjnumZ6FVtlC7RViKtj _2-dUletcCZ2ZL1aaH0GXxT"
                                            data-testid="Checkout-button">Buy it now</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <hr class="product-template-hr">
                    </div>

                    <div class="product-description rte" itemprop="description">
                        <div>
                            <p><span><strong>Theme:</strong> Fairy</span><br><span><strong>Material:</strong>
                                    Resin</span><br><span><strong>Style:</strong>
                                    Pastoral</span><br><span><strong>Type:</strong> Decorative Flowers &amp;
                                    Wreaths</span><br><span><strong>stely:</strong> modern</span></p>
                        </div>
                    </div>


                    <div class="social-sharing is-normal"
                        data-permalink="https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin">

                        <a target="_blank"
                            href="//www.facebook.com/sharer.php?u=https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin"
                            class="share-facebook" title="Share on Facebook">
                            <span class="icon icon-facebook" aria-hidden="true"></span>
                            <span class="share-title" aria-hidden="true">Share</span>
                            <span class="visually-hidden">Share on Facebook</span>
                        </a>

                        <a target="_blank"
                            href="//twitter.com/share?text=Beautiful%20Yellow%20faery%20resin&amp;url=https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin&amp;source=webclient"
                            class="share-twitter" title="Tweet on Twitter">
                            <span class="icon icon-twitter" aria-hidden="true"></span>
                            <span class="share-title" aria-hidden="true">Tweet</span>
                            <span class="visually-hidden">Tweet on Twitter</span>
                        </a>

                        <a target="_blank"
                            href="//pinterest.com/pin/create/button/?url=https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin&amp;media=http://cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_1024x1024.jpg?v=1575446689&amp;description=Beautiful%20Yellow%20faery%20resin"
                            class="share-pinterest" title="Pin on Pinterest">
                            <span class="icon icon-pinterest" aria-hidden="true"></span>
                            <span class="share-title" aria-hidden="true">Pin it</span>
                            <span class="visually-hidden">Pin on Pinterest</span>
                        </a>
                    </div>
                </div>
            </div>

            <hr>
            <h2 class="h1">We Also Recommend</h2>
            <div class="grid-uniform">
                <div class="grid-item large--one-fifth medium--one-third small--one-half on-sale">
                    <a href="/products/single.php" class="product-grid-item">
                        <div class="product-grid-image">
                            <div class="product-grid-image--centered">
                                <div class="lazyload__image-wrapper no-js" style="max-width: 195px">
                                    <div style="padding-top:100.0%;">
                                        <img class="no-js lazyautosizes lazyloaded"
                                            data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0" data-sizes="auto" alt="Creative home furnishings"
                                            data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_2048x.jpg?v=1575446689 2048w"
                                            sizes="176px"
                                            srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_2048x.jpg?v=1575446689 2048w">
                                    </div>
                                </div>
                                <noscript>
                                    <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_580x.jpg?v=1575446689"
                                        srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_580x.jpg?v=1575446689 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-524791658_580x@2x.jpg?v=1575446689 2x"
                                        alt="Creative home furnishings" style="opacity:1;">
                                </noscript>
                            </div>
                        </div>

                        <p>Creative home furnishings</p>

                        <div class="product-item--price">
                            <span class="h1 medium--left">
                                <span class="visually-hidden">Sale price</span>
                                <small aria-hidden="true">$36<sup>54</sup></small>
                                <span class="visually-hidden">$36.54</span>

                                <small>
                                    <s>
                                        <span class="visually-hidden">Regular price</span>
                                        <small aria-hidden="true">$48<sup>72</sup></small>
                                        <span class="visually-hidden">$48.72</span>
                                    </s>
                                </small>
                            </span>

                            <span class="sale-tag medium--right">
                                Save $12.18
                            </span>
                        </div>
                    </a>
                </div>

                <div class="grid-item large--one-fifth medium--one-third small--one-half on-sale">
                    <a href="/products/single.php" class="product-grid-item">
                        <div class="product-grid-image">
                            <div class="product-grid-image--centered">
                                <div class="lazyload__image-wrapper no-js" style="max-width: 195px">
                                    <div style="padding-top:99.87357774968395%;">
                                        <img class="no-js lazyautosizes lazyloaded"
                                            data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0012658227848101" data-sizes="auto"
                                            alt="Modern Ceramic Figurines Ornament"
                                            data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_2048x.jpg?v=1575446689 2048w"
                                            sizes="176px"
                                            srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_2048x.jpg?v=1575446689 2048w">
                                    </div>
                                </div>
                                <noscript>
                                    <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_580x.jpg?v=1575446689"
                                        srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_580x.jpg?v=1575446689 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-729077756_580x@2x.jpg?v=1575446689 2x"
                                        alt="Modern Ceramic Figurines Ornament" style="opacity:1;">
                                </noscript>


                            </div>
                        </div>

                        <p>Modern Ceramic Figurines Ornament</p>

                        <div class="product-item--price">
                            <span class="h1 medium--left">
                                <span class="visually-hidden">Sale price</span>
                                <small aria-hidden="true">$48<sup>81</sup></small>
                                <span class="visually-hidden">$48.81</span>


                                <small>
                                    <s>
                                        <span class="visually-hidden">Regular price</span>
                                        <small aria-hidden="true">$65<sup>08</sup></small>
                                        <span class="visually-hidden">$65.08</span>
                                    </s>
                                </small>
                            </span>

                            <span class="sale-tag medium--right">
                                Save $16.27
                            </span>
                        </div>
                    </a>
                </div>

                <div class="grid-item large--one-fifth medium--one-third small--one-half on-sale">
                    <a href="/products/single.php" class="product-grid-item">
                        <div class="product-grid-image">
                            <div class="product-grid-image--centered">
                                <div class="lazyload__image-wrapper no-js" style="max-width: 195px">
                                    <div style="padding-top:100.0%;">
                                        <img class="no-js lazyautosizes lazyloaded"
                                            data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0" data-sizes="auto" alt="Retro Camera Model Craft"
                                            data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_2048x.jpg?v=1575446689 2048w"
                                            sizes="176px"
                                            srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_2048x.jpg?v=1575446689 2048w">
                                    </div>
                                </div>
                                <noscript>
                                    <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_580x.jpg?v=1575446689"
                                        srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_580x.jpg?v=1575446689 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-626832206_580x@2x.jpg?v=1575446689 2x"
                                        alt="Retro Camera Model Craft" style="opacity:1;">
                                </noscript>
                            </div>
                        </div>

                        <p>Retro Camera Model Craft</p>

                        <div class="product-item--price">
                            <span class="h1 medium--left">

                                <span class="visually-hidden">Sale price</span>
                                <small aria-hidden="true">$45<sup>33</sup></small>
                                <span class="visually-hidden">$45.33</span>
                                <small>
                                    <s>
                                        <span class="visually-hidden">Regular price</span>
                                        <small aria-hidden="true">$60<sup>44</sup></small>
                                        <span class="visually-hidden">$60.44</span>
                                    </s>
                                </small>
                            </span>

                            <span class="sale-tag medium--right">
                                Save $15.11
                            </span>
                        </div>
                    </a>
                </div>

                <div class="grid-item large--one-fifth medium--one-third small--one-half on-sale">
                    <a href="/products/single.php" class="product-grid-item">
                        <div class="product-grid-image">
                            <div class="product-grid-image--centered">
                                <div class="lazyload__image-wrapper no-js" style="max-width: 195px">
                                    <div style="padding-top:100.0%;">
                                        <img class="no-js lazyautosizes lazyloaded"
                                            data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0" data-sizes="auto" alt="Russian porcelain doll"
                                            data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_2048x.jpg?v=1575446689 2048w"
                                            sizes="176px"
                                            srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_2048x.jpg?v=1575446689 2048w">
                                    </div>
                                </div>
                                <noscript>
                                    <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_580x.jpg?v=1575446689"
                                        srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_580x.jpg?v=1575446689 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-556495505_580x@2x.jpg?v=1575446689 2x"
                                        alt="Russian porcelain doll" style="opacity:1;">
                                </noscript>
                            </div>
                        </div>

                        <p>Russian porcelain doll</p>

                        <div class="product-item--price">
                            <span class="h1 medium--left">
                                <span class="visually-hidden">Sale price</span>
                                <small aria-hidden="true">$81<sup>90</sup></small>
                                <span class="visually-hidden">$81.90</span>
                                <small>
                                    <s>
                                        <span class="visually-hidden">Regular price</span>
                                        <small aria-hidden="true">$109<sup>20</sup></small>
                                        <span class="visually-hidden">$109.20</span>
                                    </s>
                                </small>
                            </span>

                            <span class="sale-tag medium--right">
                                Save $27.30
                            </span>
                        </div>
                    </a>
                </div>

                <div class="grid-item large--one-fifth medium--one-third small--one-half on-sale">
                    <a href="/products/single.php" class="product-grid-item">
                        <div class="product-grid-image">
                            <div class="product-grid-image--centered">
                                <div class="lazyload__image-wrapper no-js" style="max-width: 195px">
                                    <div style="padding-top:100.0%;">
                                        <img class="no-js lazyautosizes lazyloaded"
                                            data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0" data-sizes="auto" alt="White Animal Ornaments"
                                            data-srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_2048x.jpg?v=1575446689 2048w"
                                            sizes="176px"
                                            srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_125x.jpg?v=1575446689 125w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_180x.jpg?v=1575446689 180w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_360x.jpg?v=1575446689 360w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_540x.jpg?v=1575446689 540w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_720x.jpg?v=1575446689 720w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_900x.jpg?v=1575446689 900w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1080x.jpg?v=1575446689 1080w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1296x.jpg?v=1575446689 1296w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1512x.jpg?v=1575446689 1512w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_1728x.jpg?v=1575446689 1728w, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_2048x.jpg?v=1575446689 2048w">
                                    </div>
                                </div>
                                <noscript>
                                    <img src="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_580x.jpg?v=1575446689"
                                        srcset="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_580x.jpg?v=1575446689 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-760595048_580x@2x.jpg?v=1575446689 2x"
                                        alt="White Animal Ornaments" style="opacity:1;">
                                </noscript>
                            </div>
                        </div>

                        <p>White Animal Ornaments</p>

                        <div class="product-item--price">
                            <span class="h1 medium--left">
                                <span class="visually-hidden">Sale price</span>
                                <small aria-hidden="true">$3<sup>75</sup></small>
                                <span class="visually-hidden">$3.75</span>
                                <small>
                                    <s>
                                        <span class="visually-hidden">Regular price</span>
                                        <small aria-hidden="true">$5<sup>00</sup></small>
                                        <span class="visually-hidden">$5.00</span>
                                    </s>
                                </small>
                            </span>

                            <span class="sale-tag medium--right">
                                Save $1.25
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php endif; ?>

<?php include_once('../includes/footer.php'); ?>