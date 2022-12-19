<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- checkout31:27-->
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
              <li class="active">Checkout</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Li's Breadcrumb Area End Here -->
      <!--Checkout Area Strat-->
      <div class="checkout-area pt-60 pb-30">
        <div class="container">
          
          <div class="row">
            @if(Cart::count() > 0)
            <div class="col-lg-6 col-12">
              <form action="" method="post">
                @csrf
                <div class="checkbox-form">
                  <h3>Billing Details</h3>
                  <div class="row">

                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                    
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>
                         Name
                        <span class="required">*</span>
                        </label>
                        <input required placeholder="" type="text" name = "name" value="{{ Auth::user()->name ?? '' }}"/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Company Name</label>
                        <input placeholder="" type="text" name="company_name" value="{{ Auth::user()->company_name ?? '' }}"/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>
                          Country
                          <span class="required">*</span>
                        </label>
                        <input required placeholder="" type="text" name = "country" value="{{ Auth::user()->country ?? '' }}"/>
                      
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>
                          Address
                          <span class="required">*</span>
                        </label>
                        <input required placeholder="Street address" type="text" name="street_address" value="{{ Auth::user()->street_address ?? '' }}"/>
                      </div>
                    </div>         
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>
                          Town / City
                          <span class="required">*</span>
                        </label>
                        <input required type="text" name="town_city"value="{{ Auth::user()->town_city ?? '' }}"/>
                      </div>
                    </div>                
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>
                          Postcode / Zip
                          <span class="required">*</span>
                        </label>
                        <input required placeholder="" type="text" name= "postcode_zip" value="{{ Auth::user()->postcode_zip ?? '' }}"/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>
                          Email Address
                          <span class="required">*</span>
                        </label>
                        <input required placeholder="" type="email" name="email" value="{{ Auth::user()->email ?? '' }}"/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>
                          Phone
                          <span class="required">*</span>
                        </label>
                        <input required type="text" name="phone" value="{{ Auth::user()->phone ?? '' }}"/>
                      </div>
                    </div>
                  </div>                  
                </div>
            </div>
           

            <div class="col-lg-6 col-12">
              <div class="your-order">
                <h3>Your order</h3>
                <div class="your-order-table table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-product-total">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($carts as $cart)
                      <tr class="cart_item">
                        <td class="cart-product-name">
                          {{$cart->name}}
                          <strong class="product-quantity">× {{$cart->qty}}</strong>
                        </td>
                        <td class="cart-product-total">
                          <span class="amount">${{$cart->total}}</span>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr class="cart-subtotal">
                        <th>Cart Subtotal</th>
                        <td><span class="amount">$ {{$subtotal}}</span></td>
                      </tr>
                      <tr class="order-total">
                        <th>Order Total</th>
                        <td>
                          <strong><span class="amount">${{$total}}</span></strong>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                
                 

                    
                    <div class="order-button-payment">
                      <input value="Place order" type="submit" />
                    </div>
                
                  
                </div>
              </div>
            </div>
            @else
            <div class="col-lg-3">
              Your cart is empty
              <div class="minicart-button">
                <a
                 href="\shop"
                 class="li-button li-button-dark li-button-fullwidth li-button-sm"
                >
                 <span>Continue Shopping</span>
                </a>
               </div>
            </div>
            @endif
           </form>
          </div>
        </div>
      </div>
      <!--Checkout Area End-->
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
                        src="/front/images/shipping-icon/1.png"
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
                        src="/front/images/shipping-icon/2.png"
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
                        src="/front/images/shipping-icon/3.png"
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
                        src="/front/images/shipping-icon/4.png"
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
                    <img src="/front/images/menu/logo/1.jpg" alt="Footer Logo" />
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
                    <img src="/front/images/payment/1.png" alt="" />
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

  <!-- checkout31:27-->
</html>
