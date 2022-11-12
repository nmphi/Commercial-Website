<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- single-product-tab-style-top31:50-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Single Product Tab Style Top || limupa - Digital Products Store eCommerce
      Bootstrap 4 Template
    </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
              <li><a href="\shop">Shop</a></li>
              <li class="active">Product</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Li's Breadcrumb Area End Here -->
      <!-- content-wraper start -->
      <div class="content-wraper">
        <div class="container">
          <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
              <!-- Product Details Left -->
              <div class="product-details-left pt-60">
                
                <div class="product-details-images slider-navigation-1">
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="/front/images/product/{{$products->product_image[0]->path}}"
                      data-gall="myGallery"
                    >
                      <img
                        src="/front/images/product/{{$products->product_image[0]->path}}"
                        alt="product image"
                      />
                    </a>
                  </div>
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="/front/images/product/large-size/2.jpg"
                      data-gall="myGallery"
                    >
                      <img
                        src="images/product/large-size/2.jpg"
                        alt="product image"
                      />
                    </a>
                  </div>
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="images/product/large-size/3.jpg"
                      data-gall="myGallery"
                    >
                      <img
                        src="images/product/large-size/3.jpg"
                        alt="product image"
                      />
                    </a>
                  </div>
                  <div class="lg-image">
                    <img
                      src="images/product/large-size/4.jpg"
                      alt="product image"
                    />
                  </div>
                  <div class="lg-image">
                    <img
                      src="images/product/large-size/5.jpg"
                      alt="product image"
                    />
                  </div>
                  <div class="lg-image">
                    <img
                      src="images/product/large-size/6.jpg"
                      alt="product image"
                    />
                  </div>
                </div>
              </div>
              <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
              <div class="product-details-view-content pt-60">
                <div class="product-info">
                  <h2>{{$products->name}}</h2>
                  <span class="product-details-ref">Reference: demo_15</span>
                  <div class="rating-box pt-20">
                    <ul class="rating rating-with-review-item">
                      @for($i=1; $i <= 5;$i++)
                        @if ($i <= $products->avgRating)
                          <li><i class="fa fa-star-o"></i></li>
                        @else
                          <li class="no-star"><i class="fa fa-star-o"></i></li>                        
                        @endif                      
                      @endfor
                      
                      
                      
                      
                      
                    </ul>
                  </div>
                  <div class="price-box pt-20">
                    @if ($products->discount != null)
                     <span class="new-price new-price-2">${{$products->discount}}</span>
                     <span class="old-price">${{$products->price}}</span>
                    @else 
                     <span class="new-price new-price-2">${{$products->price}}</span>
                    @endif 
                  </div>
                  <div class="product-desc">
                    <p>
                      <span>
                        
                      </span>
                    </p>
                  </div>
                 
                  <div class="single-add-to-cart">
                    <form action="\cart" class="cart-quantity">
                      <div class="quantity">
                        <label>Quantity</label>
                        <div class="cart-plus-minus">
                          <input
                            class="cart-plus-minus-box"
                            value="1"
                            type="text"
                          />
                          <div class="dec qtybutton">
                            <i class="fa fa-angle-down"></i>
                          </div>
                          <div class="inc qtybutton">
                            <i class="fa fa-angle-up"></i>
                          </div>
                        </div>
                      </div>
                      <button class="add-to-cart" type="submit">
                        <a href="\cart\add/{{$products->id}}">add to cart</a>
                      </button>
                    </form>
                  </div>
                  <div class="product-additional-info pt-25">
                    <a class="wishlist-btn" href="wishlist.html">
                      <i class="fa fa-heart-o"></i>
                      Add to wishlist
                    </a>
                    <div class="product-social-sharing pt-25">
                      <ul>
                        <li class="facebook">
                          <a href="#">
                            <i class="fa fa-facebook"></i>
                            Facebook
                          </a>
                        </li>
                        <li class="twitter">
                          <a href="#">
                            <i class="fa fa-twitter"></i>
                            Twitter
                          </a>
                        </li>
                        <li class="google-plus">
                          <a href="#">
                            <i class="fa fa-google-plus"></i>
                            Google +
                          </a>
                        </li>
                        <li class="instagram">
                          <a href="#">
                            <i class="fa fa-instagram"></i>
                            Instagram
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="block-reassurance">
                    <ul>
                      <li>
                        <div class="reassurance-item">
                          <div class="reassurance-icon">
                            <i class="fa fa-check-square-o"></i>
                          </div>
                          <p>
                            Security policy (edit with Customer reassurance
                            module)
                          </p>
                        </div>
                      </li>
                      <li>
                        <div class="reassurance-item">
                          <div class="reassurance-icon">
                            <i class="fa fa-truck"></i>
                          </div>
                          <p>
                            Delivery policy (edit with Customer reassurance
                            module)
                          </p>
                        </div>
                      </li>
                      <li>
                        <div class="reassurance-item">
                          <div class="reassurance-icon">
                            <i class="fa fa-exchange"></i>
                          </div>
                          <p>
                            Return policy (edit with Customer reassurance
                            module)
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wraper end -->
      <!-- Begin Product Area -->
      <div class="product-area pt-35">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="li-product-tab">
                <ul class="nav li-product-menu">
                  <li>
                    <a class="active" data-toggle="tab" href="#description">
                      <span>Description</span>
                    </a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#product-details">
                      <span>Product Details</span>
                    </a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#reviews">
                      <span>Reviews</span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Begin Li's Tab Menu Content Area -->
            </div>
          </div>
          <div class="tab-content">
            <div id="description" class="tab-pane active show" role="tabpanel">
              <div class="product-description">
                <span>
                  {{$products->description}}
                </span>
              </div>
            </div>
            <div id="product-details" class="tab-pane" role="tabpanel">
              <div class="product-details-manufacturer">
                <a href="#">
                </a>
                <p>
                  <span>Product' amount:</span>
                  {{$products->qty}}
                </p>
                <p>
                  <span>Product' weight:</span>
                  {{$products->weight}}
                </p>
              </div>
            </div>
            <div id="reviews" class="tab-pane" role="tabpanel">
              <div class="product-reviews">
                <div class="product-details-comment-block">   
                  
                @foreach($products->product_comment as $productComment)
                 
                  <div class="comment-review">
                    <span>{{$productComment->name}}</span>
                    <ul class="rating">
                      @for($i = 1; $i <= 5; $i++)
                       @if($i <= $productComment->rating)
                        <li><i class="fa fa-star-o"></i></li>
                       @else
                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                       @endif
                      @endfor
                    </ul>
                  </div>
                  <div class="comment-details">
                    <p>{{$productComment->messages}}</p>
                  </div>
                @endforeach
                  
                  <div class="review-btn">
                    <a
                      class="review-links"
                      href="#"
                      data-toggle="modal"
                      data-target="#mymodal"
                    >
                      Write Your Review!
                    </a>
                  </div>
                  <!-- Begin Quick View | Modal Area -->
                  <div class="modal fade modal-wrapper" id="mymodal">
                    <div
                      class="modal-dialog modal-dialog-centered"
                      role="document"
                    >
                      <div class="modal-content">
                        <div class="modal-body">
                          <h3 class="review-page-title">Write Your Review</h3>
                          <div class="modal-inner-area row">
                            <div class="col-lg-6">
                              <div class="li-review-product">
                                <div class="li-review-product-desc">
                                  <p class="li-product-name">
                                    {{$products->name}}
                                  </p>
                                  <p>
                                    <span>
                                      {{$products->description}}
                                    </span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="li-review-content">
                                <!-- Begin Feedback Area -->
                                <div class="feedback-area">
                                  <div class="feedback">
                                    <h3 class="feedback-title">Our Feedback</h3>
                                    <form action="" method="post">
                                      @csrf
                                      <input type="hidden" name="product_id" value="{{$products->id}}">
                                      <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id ?? null}}">
                                      <p class="your-opinion">
                                        <label>Your Rating</label>
                                        <div class="personal-rating">
                                          <div class="rate">
                                              <input type="radio" id="star5" name="rating" value="5" />
                                              <label for="star5" title="text">5 stars</label>
                                              <input type="radio" id="star4" name="rating" value="4" />
                                              <label for="star4" title="text">4 stars</label>
                                              <input type="radio" id="star3" name="rating" value="3" />
                                              <label for="star3" title="text">3 stars</label>
                                              <input type="radio" id="star2" name="rating" value="2" />
                                              <label for="star2" title="text">2 stars</label>
                                              <input type="radio" id="star1" name="rating" value="1" />
                                              <label for="star1" title="text">1 star</label>
                                          </div>
                                      </div>
                                      </p>
                                      <p class="feedback-form">
                                        
                                        <textarea
                                          id="feedback"
                                          name="messages"
                                          cols="45"
                                          rows="8"
                                          aria-required="true"
                                        ></textarea>
                                      </p>
                                      <div class="feedback-input">
                                        <p class="feedback-form-author">
                                          <label for="author">
                                            Name
                                            <span class="required">*</span>
                                          </label>
                                          <input
                                            id="author"
                                            name="name"
                                            value=""
                                            size="30"
                                            aria-required="true"
                                            type="text"
                                          />
                                        </p>
                                        <p
                                          class="feedback-form-author feedback-form-email"
                                        >
                                          <label for="email">
                                            Email
                                            <span class="required">*</span>
                                          </label>
                                          <input
                                            id="email"
                                            name="email"
                                            value=""
                                            size="30"
                                            aria-required="true"
                                            type="text"
                                          />
                                          <span class="required">
                                            <sub>*</sub>
                                            Required fields
                                          </span>
                                        </p>
                                        <div class="feedback-btn pb-15">
                                          <button type="submit" class="btn btn-primary">Send Message</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <!-- Feedback Area End Here -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Quick View | Modal Area End Here -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Area End Here -->
      <!-- Begin Li's Laptop Product Area -->
      <section class="product-area li-laptop-product pt-30 pb-50">
        <div class="container">
          <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
              <div class="li-section-title">
                <h2>
                  <span>Products in the same category:</span>
                </h2>
              </div>
              <div class="row">
                
                <div class="product-active owl-carousel">
                  @foreach ($relatedProducts as $relatedProduct)

                  <div class="col-lg-12">
                    <!-- single-product-wrap start -->
                    <div class="single-product-wrap">
                      <div class="product-image">
                        <a href="\shop\product/{{$relatedProduct->id}}">
                          <img
                            src="/front/images/product/{{$relatedProduct->product_image[0]->path}}"
                            alt="Li's Product Image"
                          />
                        </a>
                        
                      </div>
                      <div class="product_desc">
                        <div class="product_desc_info">
                          <div class="product-review">
                            <h5 class="manufacturer">
                              <a href="\shop\product/{{$relatedProduct->id}}">{{$relatedProduct->description}}</a>
                            </h5>
                            
                          </div>
                          <h4>
                            <a class="product_name" href="\shop\product/{{$relatedProduct->id}}">
                              {{$relatedProduct->name}}
                            </a>
                          </h4>
                          <div class="price-box">
                            @if ($relatedProduct->discount != null)
                              <span class="new-price new-price-2">${{$relatedProduct->discount}}</span>
                              <span class="old-price">${{$relatedProduct->price}}</span>
                            @else 
                              <span class="new-price new-price-2">${{$relatedProduct->price}}</span>
                            @endif 
                          </div>
                        </div>
                        <div class="add-actions">
                          <ul class="add-actions-link">
                            <li class="add-cart active">
                              <a href="#">Add to cart</a>
                            </li>
                            <li>
                              <a
                                href="#"
                                title="quick view"
                                class="quick-view-btn"
                                data-toggle="modal"
                                data-target="#exampleModalCenter"
                              >
                                <i class="fa fa-eye"></i>
                              </a>
                            </li>
                            <li>
                              <a class="links-details" href="wishlist.html">
                                <i class="fa fa-heart-o"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- single-product-wrap end -->
                  </div>
                  @endforeach
                  
        
                </div>
              </div>
            </div>
            <!-- Li's Section Area End Here -->
          </div>
        </div>
      </section>
      <!-- Li's Laptop Product Area End Here -->
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
                          title="Google +"
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
      <!-- Begin Quick View | Modal Area -->
      <div class="modal fade modal-wrapper" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal-inner-area row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <!-- Product Details Left -->
                  <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">
                      <div class="lg-image">
                        <img
                          src="/front/images/product/{{$products->product_image[0]->path}}"
                          alt="product image"
                        />
                      </div>
                      <div class="lg-image">
                        <img
                          src="images/product/large-size/2.jpg"
                          alt="product image"
                        />
                      </div>
                      <div class="lg-image">
                        <img
                          src="images/product/large-size/3.jpg"
                          alt="product image"
                        />
                      </div>
                      <div class="lg-image">
                        <img
                          src="images/product/large-size/4.jpg"
                          alt="product image"
                        />
                      </div>
                      <div class="lg-image">
                        <img
                          src="images/product/large-size/5.jpg"
                          alt="product image"
                        />
                      </div>
                      <div class="lg-image">
                        <img
                          src="images/product/large-size/6.jpg"
                          alt="product image"
                        />
                      </div>
                    </div>
                    <div class="product-details-thumbs slider-thumbs-1">
                      <div class="sm-image">
                        <img
                          src="images/product/small-size/1.jpg"
                          alt="product image thumb"
                        />
                      </div>
                      <div class="sm-image">
                        <img
                          src="images/product/small-size/2.jpg"
                          alt="product image thumb"
                        />
                      </div>
                      <div class="sm-image">
                        <img
                          src="images/product/small-size/3.jpg"
                          alt="product image thumb"
                        />
                      </div>
                      <div class="sm-image">
                        <img
                          src="images/product/small-size/4.jpg"
                          alt="product image thumb"
                        />
                      </div>
                      <div class="sm-image">
                        <img
                          src="images/product/small-size/5.jpg"
                          alt="product image thumb"
                        />
                      </div>
                      <div class="sm-image">
                        <img
                          src="images/product/small-size/6.jpg"
                          alt="product image thumb"
                        />
                      </div>
                    </div>
                  </div>
                  <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6 col-sm-6">
                  <div class="product-details-view-content pt-60">
                    <div class="product-info">
                      <h2>Today is a good day Framed poster</h2>
                      <span class="product-details-ref">
                        Reference: demo_15
                      </span>
                      <div class="rating-box pt-20">
                        <ul class="rating rating-with-review-item">
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li class="no-star"><i class="fa fa-star-o"></i></li>
                          <li class="no-star"><i class="fa fa-star-o"></i></li>
                          <li class="review-item">
                            <a href="#">Read Review</a>
                          </li>
                          <li class="review-item">
                            <a href="#">Write Review</a>
                          </li>
                        </ul>
                      </div>
                      <div class="price-box pt-20">
                        <span class="new-price new-price-2">$57.98</span>
                      </div>
                      <div class="product-desc">
                        <p>
                          <span>
                            100% cotton double printed dress. Black and white
                            striped top and orange high waisted skater skirt
                            bottom. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. quibusdam corporis, earum facilis
                            et nostrum dolorum accusamus similique eveniet quia
                            pariatur.
                          </span>
                        </p>
                      </div>
                      <div class="product-variants">
                        <div class="produt-variants-size">
                          <label>Dimension</label>
                          <select class="nice-select">
                            <option value="1" title="S" selected="selected">
                              40x60cm
                            </option>
                            <option value="2" title="M">60x90cm</option>
                            <option value="3" title="L">80x120cm</option>
                          </select>
                        </div>
                      </div>
                      <div class="single-add-to-cart">
                        <form action="#" class="cart-quantity">
                          <div class="quantity">
                            <label>Quantity</label>
                            <div class="cart-plus-minus">
                              <input
                                class="cart-plus-minus-box"
                                value="1"
                                type="text"
                              />
                              <div class="dec qtybutton">
                                <i class="fa fa-angle-down"></i>
                              </div>
                              <div class="inc qtybutton">
                                <i class="fa fa-angle-up"></i>
                              </div>
                            </div>
                          </div>
                          <button class="add-to-cart" type="submit">
                            Add to cart
                          </button>
                        </form>
                      </div>
                      <div class="product-additional-info pt-25">
                        <a class="wishlist-btn" href="wishlist.html">
                          <i class="fa fa-heart-o"></i>
                          Add to wishlist
                        </a>
                        <div class="product-social-sharing pt-25">
                          <ul>
                            <li class="facebook">
                              <a href="#">
                                <i class="fa fa-facebook"></i>
                                Facebook
                              </a>
                            </li>
                            <li class="twitter">
                              <a href="#">
                                <i class="fa fa-twitter"></i>
                                Twitter
                              </a>
                            </li>
                            <li class="google-plus">
                              <a href="#">
                                <i class="fa fa-google-plus"></i>
                                Google +
                              </a>
                            </li>
                            <li class="instagram">
                              <a href="#">
                                <i class="fa fa-instagram"></i>
                                Instagram
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Quick View | Modal Area End Here -->
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

  <!-- single-product-tab-style-top31:50-->
</html>
