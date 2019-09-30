      <nav class="navbar-fixed navbar-sticked" style="background:black;">
        <div class="container">
          <!-- ==========  Top navigation ========== -->
          <div class="navigation navigation-top clearfix">
            <ul>
              <!--add active class for current page-->
              <li>
                <a href="https://www.facebook.com/envato" target="_blank">
                  <i class="fa fa-facebook">
                  </i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/envato" target="_blank">
                  <i class="fa fa-twitter">
                  </i>
                </a>
              </li>
              <li>
                <a href="https://plus.google.com/+envato" target="_blank">
                  <i class="fa fa-google-plus">
                  </i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/envato" target="_blank">
                  <i class="fa fa-instagram">
                  </i>
                </a>
              </li>
              <li class="nav-settings" id="currency" data-action="#" data-redirect="#">
                <a href="javascript:void(0);" class="nav-settings-value">
                  $ USD
                </a>
                <ul class="nav-settings-list">
                  <li data-name="EUR">EUR €
                  </li>
                  <li data-name="GBP">£ GBP
                  </li>
                </ul>
              </li>
              <li class="nav-settings" id="language" data-action="#" data-redirect="#">
                <a href="javascript:void(0);" class="nav-settings-value">
                  ENG
                </a>
                <ul class="nav-settings-list">
                  <li data-name="ru-ru">
                    RUS
                  </li>
                  <li data-name="ar">
                    لعربية
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);" class="open-login">
                  <i class="icon icon-user">
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="open-search">
                  <i class="icon icon-magnifier">
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="open-cart">
                  <i class="icon icon-cart">
                  </i>
                </a>
              </li>
            </ul>
          </div>
          <!-- ==========  Main navigation ========== -->
          <div class="navigation navigation-main">
            <a href="#" class="logo">
              <!-- <img src="images/logo.png" title="Your Store" alt="Your Store" /> -->
			  <h2 style="color:white;">Logo</h2>
            </a>                
            <a href="javascript:void(0);" class="open-login">
              <i class="icon icon-user">
              </i>
            </a>
            <a href="javascript:void(0);" class="open-search">
              <i class="icon icon-magnifier">
              </i>
            </a>
            <a href="javascript:void(0);" class="open-cart">
              <i class="icon icon-cart">
              </i>
            </a>
            <a href="javascript:void(0);" class="open-menu">
              <i class="icon icon-menu">
              </i>
            </a>
            <div class="floating-menu">
              <!--mobile toggle menu trigger-->
              <div class="close-menu-wrapper">
                <span class="close-menu">
                  <i class="icon icon-cross">
                  </i>
                </span>
              </div>
              <ul>
                <li>
                  <a href="/">Home
                  </a>
                </li>
                <li>
                  <a href="">Category 
                    <span class="open-dropdown">
                      <i class="fa fa-angle-down">
                      </i>
                    </span>
                  </a>
                  <div class="navbar-dropdown navbar-dropdown-single">
                    <div class="navbar-box">
                      <div class="box-2">
                        <div class="box clearfix">
                          <ul>
                            <li>
                              <a href="desktops">Desktops
                              </a>
                            </li>
                            <li>
                              <a href="laptop-notebook">Laptops &amp; Notebooks
                              </a>
                            </li>
                            <li>
                              <a href="smartphone">Phones &amp; PDAs
                              </a>
                            </li>
                            <li>
                              <a href="mp3-players">MP3 Players
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="blog">Blog
                  </a>
                </li>
                <li>
                  <a href="about_us">About
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div id="search" class="search-wrapper">
            <input class="form-control" type="text" name="search" autocomplete="off" value="" placeholder="Search" />
            <button class="btn btn-main btn-search">
              <i class="fa fa-search">
              </i>
            </button>
            <div class="search-results" style="display: none;">
            </div>
          </div>
          <!-- ==========  Login wrapper ========== -->
          <div class="login-wrapper">
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="email" class="form-control" name="email" value="" placeholder="E-Mail Address">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" value="" placeholder="Password" placeholder="Password">
              </div>
              <div class="form-group">
                <a href="#" class="open-popup">Forgotten Password
                </a>
                <a href="#">Register Account
                </a>
              </div>
              <button type="submit" class="btn btn-block btn-main">Login
              </button>
              <input type="hidden" name="redirect" value="#" />
            </form>
          </div>
          <div id="cart" class="cart-wrapper">
            <div class="checkout">
              <div class="clearfix">
                <p class="text-center">Your shopping cart is empty!
                </p>
              </div>
            </div>
          </div>
        </div>
      </nav>