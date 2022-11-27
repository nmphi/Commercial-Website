<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- shopping-cart31:32-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Shop Left Sidebar || limupa - Digital Products Store eCommerce Bootstrap 4
      Template
    </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
     <!-- Favicon -->
     <link rel="shortcut icon" type="/front/image/x-icon" href="/front/images/favicon.png" />
     <!-- Material Design Iconic Font-V2.2.0 -->
     <link rel="stylesheet" href="/front/css/material-design-iconic-font.min.css" />
     <!-- Font Awesome -->
     <link rel="stylesheet" href="/front/css/font-awesome.min.css" />
     <!-- Font Awesome Stars-->
     <link rel="stylesheet" href="/front/css/fontawesome-stars.css" />
     <!-- Meanmenu CSS -->
     <link rel="stylesheet" href="/front/css/meanmenu.css" />
     <!-- owl carousel CSS -->
     <link rel="stylesheet" href="/front/css/owl.carousel.min.css" />
     <!-- Slick Carousel CSS -->
     <link rel="stylesheet" href="/front/css/slick.css" />
     <!-- Animate CSS -->
     <link rel="stylesheet" href="/front/css/animate.css" />
     <!-- Jquery-ui CSS -->
     <link rel="stylesheet" href="/front/css/jquery-ui.min.css" />
     <!-- Venobox CSS -->
     <link rel="stylesheet" href="/front/css/venobox.css" />
     <!-- Nice Select CSS -->
     <link rel="stylesheet" href="/front/css/nice-select.css" />
     <!-- Magnific Popup CSS -->
     <link rel="stylesheet" href="/front/css/magnific-popup.css" />
     <!-- Bootstrap V4.1.3 Fremwork CSS -->
     <link rel="stylesheet" href="/front/css/bootstrap.min.css" />
     <!-- Helper CSS -->
     <link rel="stylesheet" href="/front/css/helper.css" />
     <!-- Main Style CSS -->
     <link rel="stylesheet" href="/front/style.css" />
     <!-- Responsive CSS -->
     <link rel="stylesheet" href="/front/css/responsive.css" />
     <!-- tailwin -->
     <link href="https://unpkg.com/tailwindcss@^1/dist/tailwind.min.css" rel="stylesheet">
     <!-- Modernizr js -->
     <script src="/front/js/vendor/modernizr-2.8.3.min.js"></script>
     

  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an
        <strong>outdated</strong>
        browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a>
        to improve your experience.
      </p>
    <![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
      <!-- Begin Header Area -->
      @include('front.layout.master')
      <!-- Header Area End Here -->
      <!-- Begin Li's Breadcrumb Area -->
      <div class="breadcrumb-area">
        <div class="container">
          <div class="breadcrumb-content">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Li's Breadcrumb Area End Here -->
      <!--Shopping Cart Area Strat-->
      <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <form action="#">
                <div class="table-content table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="li-product-remove">remove</th>
                        <th class="li-product-thumbnail">images</th>
                        <th class="cart-product-name">Product</th>
                        <th class="li-product-price">Unit Price</th>
                        <th class="li-product-quantity">Quantity</th>
                        <th class="li-product-subtotal">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($carts as $cart)
                      <tr>
                        <td class="li-product-remove">
                          <a href="cart/delete/{{$cart->rowId}}"><i class="fa fa-times"></i></a>
                        </td>
                        <td class="li-product-thumbnail">
                          <a href="#">
                            <img
                              src="/front/images/product/{{$cart->options->images[0]->path ?? ''}}"
                              alt="Li's Product Image"
                              style="height:150px"
                            />
                          </a>
                        </td>
                        <td class="li-product-name">
                          <a href="\shop/product/{{$cart->id}}">{{$cart->name}}</a>
                        </td>
                        <td class="li-product-price">
                          <span class="amount">${{$cart->price}}</span>
                        </td>
                        <td class="quantity">
                          
                          
                          <button class="add-to-cart"><a href="cart/decreaseQty/{{$cart->rowId}}">-</a></button>
                          {{$cart->qty}}
                          <button class="add-to-cart"><a href="cart/increaseQty/{{$cart->rowId}}">+</button>
                        </td>
                        <td class="product-subtotal">
                          <span class="amount">${{$cart->total}}</span>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="coupon-all">
                      <div class="coupon">
                        <input
                          id="coupon_code"
                          class="input-text"
                          name="coupon_code"
                          value=""
                          placeholder="Coupon code"
                          type="text"
                        />
                        <input
                          class="button"
                          name="apply_coupon"
                          value="Apply coupon"
                          type="submit"
                        />
                      </div>
                      <div class="coupon2">
                        <input
                          class="button"
                          name="update_cart"
                          value="Update cart"
                          type="submit"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 ml-auto">
                    <div class="cart-page-total">
                      <h2>Cart totals</h2>
                      <ul>
                        <li>
                          Subtotal
                          <span>${{$subtotal}}</span>
                        </li>
                        <li>
                          Total
                          <span>${{$subtotal}}</span>
                        </li>
                      </ul>
                      <a href="\checkout">Proceed to checkout</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Shopping Cart Area End-->
      <!-- Begin Footer Area -->
      <div class="footer">
        <!-- Begin Footer Static Top Area -->
        <div class="footer-static-top">
          <div class="container">
            <!-- Begin Footer Shipping Area -->
            <div class="footer-shipping pt-60 pb-55 pb-xs-25">
              <div class="row">
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/1.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>Free Delivery</h2>
                      <p>And free returns. See checkout for delivery dates.</p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/2.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>Safe Payment</h2>
                      <p>
                        Pay with the world's most popular and secure payment
                        methods.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/3.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>Shop with Confidence</h2>
                      <p>
                        Our Buyer Protection covers your purchasefrom click to
                        delivery.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/4.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>24/7 Help Center</h2>
                      <p>Have a question? Call a Specialist or chat online.</p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
              </div>
            </div>
            <!-- Footer Shipping Area End Here -->
          </div>
        </div>
        <!-- Footer Static Top Area End Here -->
        <!-- Begin Footer Static Middle Area -->
        <div class="footer-static-middle">
          <div class="container">
            <div class="footer-logo-wrap pt-50 pb-35">
              <div class="row">
                <!-- Begin Footer Logo Area -->
                <div class="col-lg-4 col-md-6">
                  <div class="footer-logo">
                    <img src="images/menu/logo/1.jpg" alt="Footer Logo" />
                    <p class="info">
                      We are a team of designers and developers that create high
                      quality HTML Template & Woocommerce, Shopify Theme.
                    </p>
                  </div>
                  <ul class="des">
                    <li>
                      <span>Address:</span>
                      6688Princess Road, London, Greater London BAS 23JK, UK
                    </li>
                    <li>
                      <span>Phone:</span>
                      <a href="#">(+123) 123 321 345</a>
                    </li>
                    <li>
                      <span>Email:</span>
                      <a href="mailto://info@yourdomain.com">
                        info@yourdomain.com
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Footer Logo Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-2 col-md-3 col-sm-6">
                  <div class="footer-block">
                    <h3 class="footer-block-title">Product</h3>
                    <ul>
                      <li><a href="#">Prices drop</a></li>
                      <li><a href="#">New products</a></li>
                      <li><a href="#">Best sales</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                  </div>
                </div>
                <!-- Footer Block Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-2 col-md-3 col-sm-6">
                  <div class="footer-block">
                    <h3 class="footer-block-title">Our company</h3>
                    <ul>
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Legal Notice</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                  </div>
                </div>
                <!-- Footer Block Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-4">
                  <div class="footer-block">
                    <h3 class="footer-block-title">Follow Us</h3>
                    <ul class="social-link">
                      <li class="twitter">
                        <a
                          href="https://twitter.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Twitter"
                        >
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li class="rss">
                        <a
                          href="https://rss.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="RSS"
                        >
                          <i class="fa fa-rss"></i>
                        </a>
                      </li>
                      <li class="google-plus">
                        <a
                          href="https://www.plus.google.com/discover"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Google Plus"
                        >
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                      <li class="facebook">
                        <a
                          href="https://www.facebook.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Facebook"
                        >
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li class="youtube">
                        <a
                          href="https://www.youtube.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Youtube"
                        >
                          <i class="fa fa-youtube"></i>
                        </a>
                      </li>
                      <li class="instagram">
                        <a
                          href="https://www.instagram.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Instagram"
                        >
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Begin Footer Newsletter Area -->
                  <div class="footer-newsletter">
                    <h4>Sign up to newsletter</h4>
                    <form
                      action="#"
                      method="post"
                      id="mc-embedded-subscribe-form"
                      name="mc-embedded-subscribe-form"
                      class="footer-subscribe-form validate"
                      target="_blank"
                      novalidate
                    >
                      <div id="mc_embed_signup_scroll">
                        <div
                          id="mc-form"
                          class="mc-form subscribe-form form-group"
                        >
                          <input
                            id="mc-email"
                            type="email"
                            autocomplete="off"
                            placeholder="Enter your email"
                          />
                          <button class="btn" id="mc-submit">Subscribe</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Footer Newsletter Area End Here -->
                </div>
                <!-- Footer Block Area End Here -->
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Static Middle Area End Here -->
        <!-- Begin Footer Static Bottom Area -->
        <div class="footer-static-bottom pt-55 pb-55">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- Begin Footer Links Area -->
                <div class="footer-links">
                  <ul>
                    <li><a href="#">Online Shopping</a></li>
                    <li><a href="#">Promotions</a></li>
                    <li><a href="#">My Orders</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Most Populars</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Special Products</a></li>
                    <li><a href="#">Manufacturers</a></li>
                    <li><a href="#">Our Stores</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Payments</a></li>
                    <li><a href="#">Warantee</a></li>
                    <li><a href="#">Refunds</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Discount</a></li>
                    <li><a href="#">Refunds</a></li>
                    <li><a href="#">Policy Shipping</a></li>
                  </ul>
                </div>
                <!-- Footer Links Area End Here -->
                <!-- Begin Footer Payment Area -->
                <div class="copyright text-center">
                  <a href="#">
                    <img src="images/payment/1.png" alt="" />
                  </a>
                </div>
                <!-- Footer Payment Area End Here -->
                <!-- Begin Copyright Area -->
                <div class="copyright text-center pt-25">
                  <span>
                    <a href="https://www.templatespoint.net" target="_blank">
                      Templates Point
                    </a>
                  </span>
                </div>
                <!-- Copyright Area End Here -->
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Static Bottom Area End Here -->
      </div>
      <!-- Footer Area End Here -->
    </div>
    <!-- Body Wrapper End Here -->
    <!-- jQuery-V1.12.4 -->
    <script src="/front/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper js -->
    <script src="/front/js/vendor/popper.min.js"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="/front/js/bootstrap.min.js"></script>
    <!-- Ajax Mail js -->
    <script src="/front/js/ajax-mail.js"></script>
    <!-- Meanmenu js -->
    <script src="/front/js/jquery.meanmenu.min.js"></script>
    <!-- Wow.min js -->
    <script src="/front/js/wow.min.js"></script>
    <!-- Slick Carousel js -->
    <script src="/front/js/slick.min.js"></script>
    <!-- Owl Carousel-2 js -->
    <script src="/front/js/owl.carousel.min.js"></script>
    <!-- Magnific popup js -->
    <script src="/front/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope js -->
    <script src="/front/js/isotope.pkgd.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="/front/js/imagesloaded.pkgd.min.js"></script>
    <!-- Mixitup js -->
    <script src="/front/js/jquery.mixitup.min.js"></script>
    <!-- Countdown -->
    <script src="/front/js/jquery.countdown.min.js"></script>
    <!-- Counterup -->
    <script src="/front/js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script src="/front/js/waypoints.min.js"></script>
    <!-- Barrating -->
    <script src="/front/js/jquery.barrating.min.js"></script>
    <!-- Jquery-ui -->
    <script src="/front/js/jquery-ui.min.js"></script>
    <!-- Venobox -->
    <script src="/front/js/venobox.min.js"></script>
    <!-- Nice Select js -->
    <script src="/front/js/jquery.nice-select.min.js"></script>
    <!-- ScrollUp js -->
    <script src="/front/js/scrollUp.min.js"></script>
    <!-- Main/Activator js -->
    <script src="/front/js/main.js"></script>
  </body>

  <!-- shopping-cart31:32-->
</html>
