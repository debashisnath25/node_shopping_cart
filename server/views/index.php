<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Your Store
    </title>
   
    <meta name="description" content="My Store" />
	<?php include ('meta_links.php');?>

    <!-- <script src="catalog/view/theme/mf/js/opencart.js"></script> -->
  </head>
  <body>
    <div class="page-loader">
    </div>
    <div class="wrapper">
      <!-- ======================== Navigation ======================== -->
	<?php include ('header.php');?>

      <section id="ela-icons-carousel-0" class="owl-icons-wrapper" style="margin-top:100px;">
        <header class="hidden">
          <h2>Ela Icons Carousel
          </h2>
        </header>
        <div class="container" >
             <div class="owl-icons">
            <a href="/">
              <figure>
                <i class="f-icon f-icon-accessories">
                </i>
                <figcaption>Accessories
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-armchair">
                </i>
                <figcaption>Armchair
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-bar-set">
                </i>
                <figcaption>Bar Set
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-bathroom">
                </i>
                <figcaption>Bathroom
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-bedroom">
                </i>
                <figcaption>Bedroom
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-bookcase">
                </i>
                <figcaption>Bookcase
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-nightstand">
                </i>
                <figcaption>Cabinet
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-shoe-cabinet">
                </i>
                <figcaption>Carpet
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-chair">
                </i>
                <figcaption>Chair
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-carpet">
                </i>
                <figcaption>Children room
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-dining-table">
                </i>
                <figcaption>Dining Table
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-children-room">
                </i>
                <figcaption>Kitchen
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-kitchen">
                </i>
                <figcaption>Lightning
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-lightning">
                </i>
                <figcaption>Nightstand
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-media-cabinet">
                </i>
                <figcaption>Office
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-sofa">
                </i>
                <figcaption>Sofa
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-table">
                </i>
                <figcaption>Table
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-office">
                </i>
                <figcaption>Wardrobe
                </figcaption>
              </figure>
            </a>
            <a href="/">
              <figure>
                <i class="f-icon f-icon-wardrobe">
                </i>
                <figcaption>Wardrobe
                </figcaption>
              </figure>
            </a>
          </div>
        </div>
      </section>
      <script>
        var arrowIcons = [
          '<span class="icon icon-chevron-left"></span>',
          '<span class="icon icon-chevron-right"></span>'
        ];
        $('#ela-icons-carousel-0 .owl-icons').owlCarousel({
          autoHeight: false,
          pagination: false,
          navigation: true,
          navigationText: arrowIcons,
          items: 6,
          itemsDesktop: [1199, 5],
          itemsDesktopSmall: [979, 5],
          itemsTablet: [768, 4],
          itemsTabletSmall: false,
          itemsMobile: [479, 3],
          addClassActive: true,
          autoPlay: 5500,
          stopOnHover: true
        }
                                                         );
      </script>
      <section class="products" id="ela-features-products-0">
        <div class="container">
      
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('31'); return false;">
                      <img src="images/product-1-640x480.png" alt="Nikon D300"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">ACCESSORIES
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('48'); return false;">
                      <img src="images/product-2-640x480.png" alt="iPod Classic"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#ipod-classic">DESK
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-xs-6">
              <article>
        
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('44'); return false;">
                      <img src="images/product-3-640x480.png" alt="MacBook Air"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">DESK ACCESSORIES
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                 
                  <div class="image">
                    <a href="#" onclick="preview.product('42'); return false;">
                      <img src="images/product-4-640x480.png" alt="Apple Cinema 30&quot;"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">LIGHTING
                      </a>
					</h6>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('30'); return false;">
                      <img src="images/product-5-640x480.png" alt="Canon EOS 5D"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">PRIVACY
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">SEATING
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
			<div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">SOFA SEATING
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
			<div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">TASK SEATING
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
			 <div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">MOBILE STORAGE
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
			<div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">STORAGE
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
			<div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">SPINES
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
			<div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">TABLES
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
			<div class="col-md-3 col-xs-6">
              <article>
                <div class="figure-grid">
                  <div class="image">
                    <a href="#" onclick="preview.product('47'); return false;">
                      <img src="images/product-6-640x480.png" alt="HP LP3065"  />
                    </a>
                  </div>
                  <div class="text">
                    <h6 class="title h6">
                      <a href="#">TABLETOPS
                      </a>
                    </h6>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <div>  

      </div>

      <section class="instagram" id="ela-instagram-0" style="display: none;">
        <header>
          <div class="container">
            <div class="row">
              <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="h2 title">Follow us 
                  <i class="fa fa-instagram fa-2x">
                  </i> Instagram 
                </h2>
                <div class="text">
                  <p>@InstaFurnitureFactory
                  </p>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="gallery clearfix">
        </div>
      </section>
   
	<?php include ('footer.php');?>
    </div>
  </body>
</html>
