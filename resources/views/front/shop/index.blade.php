<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- shop-left-sidebar31:47-->
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
              <li class="active">Shop Left Sidebar</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Li's Breadcrumb Area End Here -->
      <!-- Begin Li's Content Wraper Area -->
      <div class="content-wraper pt-60 pb-60 pt-sm-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">
              <!-- Begin Li's Banner Area -->
              <div class="single-banner shop-page-banner">
                <a href="#">
                  <img src="/front/images/bg-banner/2.jpg" alt="Li's Static Banner" />
                </a>
              </div>
              <!-- Li's Banner Area End Here -->
              <!-- shop-top-bar start -->
              <div class="shop-top-bar mt-30">
                <div class="shop-bar-inner">
                  <div class="product-view-mode">
                    <!-- shop-item-filter-list start -->
                    
                    <!-- shop-item-filter-list end -->
                  </div>
                  
                </div>
                <!-- product-select-box start -->
                
                  <div class="product-select-box">
                  <div class="product-short">
                    <p>Sort By:</p>
                    <form action="">
                      <select class="nice-select" name="sort_by" onchange="this.form.submit();">
                      
                      <option {{request('sort_by') == 'name-ascending' ? 'selected' :''}} value="name-ascending">Name (A - Z)</option>
                      <option {{request('sort_by') == 'name-descending' ? 'selected' :''}} value="name-descending">Name (Z - A)</option>
                      <option {{request('sort_by') == 'price-ascending' ? 'selected' :''}} value="price-ascending">Price (Low &gt; High)</option>
                      <option {{request('sort_by') == 'price-descending' ? 'selected' :''}} value="price-descending">Price (High &gt; Low) </option>
                      
                    </select>
                    </form>
                    
                  </div>
                </div>
                
                
                <!-- product-select-box end -->
              </div>
              <!-- shop-top-bar end -->
              <!-- shop-products-wrapper start -->
              <div class="shop-products-wrapper">
                <div class="tab-content">
                  <div
                    id="grid-view"
                    class="tab-pane fade active show"
                    role="tabpanel"
                  >
                    <div class="product-area shop-product-area">
                      <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                          <!-- single-product-wrap start -->
                          <div class="single-product-wrap">
                            <div class="product-image">
                              <a href="shop/product/{{$product->id}}">
                                <img
                                  src="/front/images/product/{{$product->product_image[0]->path}}"
                                  alt="Li's Product Image"
                                />
                              </a>
                              <span class="sticker">New</span>
                            </div>
                            <div class="product_desc">
                              <div class="product_desc_info">
                                <div class="product-review">
                                  <h5 class="manufacturer">
                                    <a href="product-details.html">
                                      Graphic Corner
                                    </a>
                                  </h5>
                                  <div class="rating-box">
                                    <ul class="rating">
                                      <li><i class="fa fa-star-o"></i></li>
                                      <li><i class="fa fa-star-o"></i></li>
                                      <li><i class="fa fa-star-o"></i></li>
                                      <li class="no-star">
                                        <i class="fa fa-star-o"></i>
                                      </li>
                                      <li class="no-star">
                                        <i class="fa fa-star-o"></i>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <h4>
                                  <a
                                    class="product_name"
                                    href="/shop/product/{{$product->id}}"
                                  >
                                    {{ $product->name }}
                                  </a>
                                </h4>
                                <div class="price-box">
                                  @if ($product->discount != null)
                                    <span class="new-price new-price-2">${{$product->discount}}</span>
                                    <span class="old-price">${{$product->price}}</span>
                                  @else 
                                    <span class="new-price new-price-2">${{$product->price}}</span>
                                  @endif
                                </div>
                              </div>
                              <div class="add-actions">
                                <ul class="add-actions-link">
                                  <li class="add-cart active">
                                    <a href="cart/add/{{$product->id}}">Add to cart</a>
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
                                    <a
                                      class="links-details"
                                      href="wishlist.html"
                                    >
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
                 
                  <div class="paginatoin-area">
                    <div class="row">
                      
                      <div class="col-lg-6 col-md-6">
                        {{$products->links()}}
                      </div>
                      
                        
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
              <!--sidebar-categores-box start  -->
              
              <!--sidebar-categores-box end  -->
              <!--sidebar-categores-box start  -->
              <div class="sidebar-categores-box">
                <div class="sidebar-title">
                  <h2>Filter By</h2>
                </div>
                <!-- btn-clear-all start -->
                <button class="btn-clear-all mb-sm-30 mb-xs-30">
                  Clear all
                </button>
                <!-- btn-clear-all end -->
                <!-- filter-sub-area start -->
                <div class="filter-sub-area">
                  <h5 class="filter-sub-titel">Brand</h5>
                  <div class="categori-checkbox">
                    <form action="shop">
                      <ul>
                        @foreach ($brands as $brand)
                        <li>
                          <label for="bc-{{$brand->id}}">
                           <input type="checkbox" 
                            name="brand[{{ $brand->id}}]"
                            {{(request("brand")[$brand->id] ?? '')== 'on' ? 'checked' : '' }}
                            onchange="this.form.submit();" />
                            {{$brand->name}} 
                          </label>
                          
                        </li>
                        @endforeach
                       
                      </ul>
                    </form>
                  </div>
                </div>
                <!-- filter-sub-area end -->
                <!-- filter-sub-area start -->
                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                  <h5 class="filter-sub-titel">Categories</h5>
                  <div class="categori-checkbox">
                    <form action="shop">
                      <ul>
                        
                        @foreach ($categories as $category)
                        <li>
                          <label for="bc-{{$category->id}}">
                          <input type="checkbox" 
                           name="category[{{ $category->id}}]"
                           {{(request('category')[$category->id] ?? '')== 'on' ? 'checked' : '' }}
                           onchange="this.form.submit();" />
                           {{$category->name}} 
                         </label>
                        </li>
                        
                        
                        @endforeach
                       
                      </ul>
                    </form>
                  </div>
                </div>
                <!-- filter-sub-area end -->
                
               
               
              </div>
              <!--sidebar-categores-box end  -->
              <!-- category-sub-menu start -->
              
            </div>
          </div>
        </div>
      </div>
      <!-- Content Wraper Area End Here -->
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
                          src="images/product/large-size/1.jpg"
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

  <!-- shop-left-sidebar31:48-->
</html>
