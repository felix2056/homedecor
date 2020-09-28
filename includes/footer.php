<div id="shopify-section-footer" class="shopify-section footer-section">

    <footer class="site-footer small--text-center" role="contentinfo">
        <div class="wrapper">

            <div class="grid">






                <div class="grid-item small--one-whole two-twelfths">

                    <h3>Useful links</h3>



                    <ul>
                        <li><a href="/search.php">Search</a></li>

                        <li><a href="/pages/about-us.php">About us</a></li>

                        <li><a href="/pages/contact-us.php">Contact us</a></li>

                        <li><a href="/pages/faqs.php">FAQs</a></li>

                    </ul>


                </div>





                <div class="grid-item small--one-whole one-half">

                    <h3>About us</h3>





                    <p>Buy&nbsp;<em>Home Decor</em>&nbsp;products Online. Shop for&nbsp;<em>Home Decor</em>&nbsp;from wide range of shelves, key holders, lamps, clocks, photo frames &amp; more</p>




                </div>





                <div class="grid-item small--one-whole one-third">

                    <h3>Newsletter</h3>



                    <div class="site-footer__newsletter-subtext">

                        <p>Promotions, new products and sales. Directly to your inbox.</p>

                    </div>
                    <div class="form-vertical">
                        <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">


                            <input type="hidden" name="contact[tags]" value="newsletter">
                            <div class="input-group">
                                <label for="Email" class="visually-hidden">Email</label>
                                <input type="email" value="" placeholder="Email Address" name="contact[email]" id="Email" class="input-group-field" aria-label="Email Address" autocorrect="off" autocapitalize="off">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn-secondary btn--small" name="commit" id="subscribe">Sign Up</button>
                                </span>
                            </div>

                        </form>
                    </div>


                </div>


            </div>


            <hr class="hr--small">


            <div class="grid">

                <div class="grid-item large--two-fifths">

                    <ul class="legal-links inline-list">

                        <li><a href="/pages/privacy-policy.php">Privacy Policy</a></li>

                        <li><a href="/pages/return-refunds.php">Return &amp; Refunds</a></li>

                        <li><a href="/pages/terms-conditions.php">Terms &amp; Conditions</a></li>

                    </ul>
                </div>


                <div class="grid-item large--three-fifths text-right">
                    <ul class="inline-list social-icons">










                    </ul>
                </div>

            </div>
            <hr class="hr--small">
            <div class="grid">
                <div class="grid-item">
                    <ul class="legal-links inline-list">
                        <li>
                            © 2020 <a href="/" title="">homedecor-1604</a>
                        </li>
                        <li>
                            <a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </footer>




</div>

<script>
    var moneyFormat = '${{amount}}';

    var theme = {
        strings: {
            product: {
                unavailable: "Unavailable",
                will_be_in_stock_after: "Will be in stock after [date]",
                only_left: "Only 1 left!"
            },
            navigation: {
                more_link: "More"
            },
            map: {
                addressError: "Error looking up that address",
                addressNoResults: "No results for that address",
                addressQueryLimit: "You have exceeded the Google API usage limit. Consider upgrading to a \u003ca href=\"https:\/\/developers.google.com\/maps\/premium\/usage-limits\"\u003ePremium Plan\u003c\/a\u003e.",
                authError: "There was a problem authenticating your Google Maps API Key."
            }
        },
        settings: {
            cartType: "modal"
        }
    }
</script>




<script id="cartTemplate" type="text/template">

    <form action="/cart" method="post" class="cart-form" novalidate>
      <div class="ajaxifyCart--products">
        {{#items}}
        <div class="ajaxifyCart--product">
          <div class="ajaxifyCart--row" data-line="{{line}}">
            <div class="grid">
              <div class="grid-item large--two-thirds">
                <div class="grid">
                  <div class="grid-item one-quarter">
                    <a href="{{url}}" class="ajaxCart--product-image"><img src="{{img}}" alt=""></a>
                  </div>
                  <div class="grid-item three-quarters">
                    <a href="{{url}}" class="h4">{{name}}</a>
                    <p>{{variation}}</p>
                  </div>
                </div>
              </div>
              <div class="grid-item large--one-third">
                <div class="grid">
                  <div class="grid-item one-third">
                    <div class="ajaxifyCart--qty">
                      <input type="text" name="updates[]" class="ajaxifyCart--num" value="{{itemQty}}" min="0" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                      <span class="ajaxifyCart--qty-adjuster ajaxifyCart--add" data-line="{{line}}" data-qty="{{itemAdd}}">+</span>
                      <span class="ajaxifyCart--qty-adjuster ajaxifyCart--minus" data-line="{{line}}" data-qty="{{itemMinus}}">-</span>
                    </div>
                  </div>
                  <div class="grid-item one-third text-center">
                    <p>{{price}}</p>
                  </div>
                  <div class="grid-item one-third text-right">
                    <p>
                      <small><a href="/cart/change?line={{line}}&amp;quantity=0" class="ajaxifyCart--remove" data-line="{{line}}">Remove</a></small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{/items}}
      </div>
      <div class="ajaxifyCart--row text-right medium-down--text-center">
        <span class="h3">Subtotal {{totalPrice}}</span>
        <input type="submit" class="{{btnClass}}" name="checkout" value="Checkout">
      </div>
    </form>
  
  </script>
<script id="drawerTemplate" type="text/template">

    <div id="ajaxifyDrawer" class="ajaxify-drawer">
      <div id="ajaxifyCart" class="ajaxifyCart--content {{wrapperClass}}"></div>
    </div>
    <div class="ajaxifyDrawer-caret"><span></span></div>
  
  </script>
<script id="modalTemplate" type="text/template">

    <div id="ajaxifyModal" class="ajaxify-modal">
      <div id="ajaxifyCart" class="ajaxifyCart--content"></div>
    </div>
  
  </script>
<script id="ajaxifyQty" type="text/template">

    <div class="ajaxifyCart--qty">
      <input type="text" class="ajaxifyCart--num" value="{{itemQty}}" data-id="{{key}}" min="0" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
      <span class="ajaxifyCart--qty-adjuster ajaxifyCart--add" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}">+</span>
      <span class="ajaxifyCart--qty-adjuster ajaxifyCart--minus" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemMinus}}">-</span>
    </div>
  </script>
    <script id="jsQty" type="text/template">
    <div class="js-qty">
      <input type="text" class="js--num" value="{{itemQty}}" min="1" data-id="{{key}}" aria-label="quantity" pattern="[0-9]*" name="{{inputName}}" id="{{inputId}}">
      <span class="js--qty-adjuster js--add" data-id="{{key}}" data-qty="{{itemAdd}}">+</span>
      <span class="js--qty-adjuster js--minus" data-id="{{key}}" data-qty="{{itemMinus}}">-</span>
    </div>  
  </script>


<ul hidden="">
    <li id="a11y-refresh-page-message">choosing a selection results in a full page refresh</li>
</ul>






<div id="ajaxifyModal" class="ajaxify-modal"><button class="ajaxifyCart--close" title="Close Cart">Close Cart</button>
    <div id="ajaxifyCart" class="ajaxifyCart--content"></div>
</div>

<div id="ajaxifyCart-overlay"></div>
</body>

</html>