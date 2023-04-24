<header>
    <!-- Begin Header Top Area -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <!-- Begin Header Top Left Area -->
          <div class="col-lg-3 col-md-4">
            <div class="header-top-left">
              <ul class="phone-wrap">
                <li>
                  <span>Telephone Enquiry:</span>
                  <a href="#">(+84) 896 217 058</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Header Top Left Area End Here -->
          <!-- Begin Header Top Right Area -->
          <div class="col-lg-9 col-md-8">
            <div class="header-top-right">
              <ul class="ht-menu">
                <!-- Begin Setting Area -->
                @if(Auth::check())
                    <li>
                      <div class="ht-setting-trigger">
                        <span>
                            <i class="fa fa-user"></i>
                            {{Auth::user()->name}}
                        </span>
                      </div>
                      <div class="setting ht-setting">
                        <ul class="ht-setting-list">
                          <li><a href="\account/my-order">My Order</a></li>
                          <li><a href="\checkout">Checkout</a></li>
                          <li><a href="/account/logout">Sign Out</a></li>
                        </ul>
                      </div>
                    </li>
                @else 
                    <li>
                      <div class="ht-setting-trigger"><span>Setting</span></div>
                      <div class="setting ht-setting">
                        <ul class="ht-setting-list">
                          <li><a href="\checkout">Checkout</a></li>
                          <li><a href="\account/login">Sign In</a></li>
                        </ul>
                      </div>
                    </li>
                @endif
                <!-- Setting Area End Here -->
                <!-- Begin Currency Area -->
                <li>
                  <span class="currency-selector-wrapper">Currency :</span>
                  <div class="ht-currency-trigger"><span>USD $</span></div>
                  <div class="currency ht-currency">
                    <ul class="ht-setting-list">
                      <li><a href="#">EUR €</a></li>
                      <li class="active"><a href="#">USD $</a></li>
                    </ul>
                  </div>
                </li>
                <!-- Currency Area End Here -->
                <!-- Begin Language Area -->
                <li>
                  <span class="language-selector-wrapper">Language :</span>
                  <div class="ht-language-trigger">
                    <span>English</span>
                  </div>
                  <div class="language ht-language">
                    <ul class="ht-setting-list">
                      <li class="active">
                        <a href="#">
                          <img src="images/menu/flag-icon/1.jpg" alt="" />
                          English
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/menu/flag-icon/2.jpg" alt="" />
                          Français
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Language Area End Here -->
              </ul>
            </div>
          </div>
          <!-- Header Top Right Area End Here -->
        </div>
      </div>
    </div>
    <!-- Header Top Area End Here -->
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
      <div class="container">
        <div class="row">
          <!-- Begin Header Logo Area -->
          <div class="col-lg-3">
            <div class="logo pb-sm-30 pb-xs-30">
              <a href="\shop">
                <img src="/images/menu/logo/1.jpg" alt="" />
              </a>
            </div>
          </div>
          <!-- Header Logo Area End Here -->
          <!-- Begin Header Middle Right Area -->
          <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
            <!-- Begin Header Middle Searchbox Area -->
            <form action="\shop" class="hm-searchbox">
              <input type="text" placeholder="Enter your search key ..." name = "search" value = "{{request('search')}}"/>
              <button class="li-btn" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
            <!-- Header Middle Searchbox Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="header-middle-right">
              <ul class="hm-menu">
                <!-- Begin Header Middle Wishlist Area -->
               
                <!-- Header Middle Wishlist Area End Here -->
                <!-- Begin Header Mini Cart Area -->
                <li class="hm-minicart">
                  <div class="hm-minicart-trigger">
                    <span class="item-icon"></span>
                    <span class="item-text">
                      ${{Cart::subtotal()}}
                      <span class="cart-item-count">{{Cart::count()}}</span>
                    </span>
                  </div>
                  <span></span>
                  <div class="minicart">
                    <ul class="minicart-product-list">
                      @foreach (Cart::content() as $cart)
                      <li>
                        <a
                          href="\shop/product/{{$cart->id}}"
                          class="minicart-product-image"
                        >
                          <img
                            src="/front/images/product/{{$cart->options->images[0]->path ?? ''}}"
                            alt="cart products"
                          />
                        </a>
                        <div class="minicart-product-details">
                          <h6>
                            <a href="\shop/product/{{$cart->id}}">
                              {{$cart->name}}
                              
                            </a>
                          </h6>
                          <span>${{$cart->price}} x {{$cart->qty}}</span>
                        </div>
                        
                          
                            <a href="cart/delete/{{$cart->rowId}}"><i class="fa fa-close" class="li-button li-button-dark li-button-fullwidth li-button-sm"></i></a>
                          
                        
                      </li>
                      @endforeach
                    </ul>
                    <p class="minicart-total">
                      SUBTOTAL:
                      <span>${{Cart::subtotal()}}</span>
                    </p>
                    <div class="minicart-button">
                      <a
                        href="\cart"
                        class="li-button li-button-dark li-button-fullwidth li-button-sm"
                      >
                        <span>View Full Cart</span>
                      </a>
                      <a
                        href="\checkout"
                        class="li-button li-button-fullwidth li-button-sm"
                      >
                        <span>Checkout</span>
                      </a>
                    </div>
                  </div>
                </li>
                <!-- Header Mini Cart Area End Here -->
              </ul>
            </div>
            <!-- Header Middle Right Area End Here -->
          </div>
          <!-- Header Middle Right Area End Here -->
        </div>
      </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- Begin Header Bottom Menu Area -->
            <div class="hb-menu hb-menu-2 d-xl-block">
              <nav>
                <ul>
                  <li><a href="\shop">Home</a></li>
                  <li class="megamenu-holder">
                    <a href="\shop">Shop</a>
                  </li>
                  <li class="megamenu-static-holder">
                    <a href="\shop">Pages</a>
                    <ul class="megamenu hb-megamenu">
                      <!-- <li>
                                <a href="blog-left-sidebar.html">Blog Layouts</a>
                                <ul>
                                  <li>
                                    <a href="blog-2-column.html">Blog 2 Column</a>
                                  </li>
                                  <li>
                                    <a href="blog-3-column.html">Blog 3 Column</a>
                                  </li>
                                  <li>
                                    <a href="blog-left-sidebar.html">
                                      Grid Left Sidebar
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blog-right-sidebar.html">
                                      Grid Right Sidebar
                                    </a>
                                  </li>
                                  <li><a href="blog-list.html">Blog List</a></li>
                                  <li>
                                    <a href="blog-list-left-sidebar.html">
                                      List Left Sidebar
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blog-list-right-sidebar.html">
                                      List Right Sidebar
                                    </a>
                                  </li>
                                </ul>
                              </li> -->
                      <!-- <li>
                                <a href="blog-details-left-sidebar.html">
                                  Blog Details Pages
                                </a>
                                <ul>
                                  <li>
                                    <a href="blog-details-left-sidebar.html">
                                      Left Sidebar
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blog-details-right-sidebar.html">
                                      Right Sidebar
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blog-audio-format.html">
                                      Blog Audio Format
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blog-video-format.html">
                                      Blog Video Format
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blog-gallery-format.html">
                                      Blog Gallery Format
                                    </a>
                                  </li>
                                </ul>
                              </li> -->
                      <li>
                        <a href="\shop">Other Pages</a>
                        <ul>
                          <li>
                            <a href="\account/login">My Account</a>
                          </li>
                          <li><a href="\checkout">Checkout</a></li>
                          <li><a href="\account/my-order">My Order</a></li>
                          <li>
                            <a href="\cart">Shopping Cart</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="\about">About Us</a></li>
                  <li><a href="\contact">Contact</a></li>
                  <!-- Begin Header Bottom Menu Information Area -->
                  <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                    <span>
                      56 Huynh Van Nghe, Ngu Hanh Son, Da Nang, Vietnam
                    </span>
                    <!-- Header Bottom Menu Information Area End Here -->
                  </li>
                </ul>
              </nav>
            </div>
            <!-- Header Bottom Menu Area End Here -->
          </div>
        </div>
      </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->
    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
      <div class="container">
        <div class="row">
          <div class="mobile-menu"></div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area End Here -->
  </header>