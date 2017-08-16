<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <!-- breadcrumbs, under nav when no hero -->
    <?php global $post; if ( is_page() && $post->post_parent ) { custom_breadcrumbs(); } ?>
    <!-- end breadcrumbs -->
    <div class="wrap" role="document">
      <div class="content row">
        <main class="main">
            <!-- ANYTHING INSIDE OF MAIN IS FULL WIDTH, ANYTHING INSIDE OF CONTAINER IS CONTAINED -->

            <!-- hero image element - MAKE H1 and IMAGE EDITABLE IN ACF -->

            <!-- IF SEARCH MODULE ENABLED OR IF HOME PAGE -->
            <?php if ( is_front_page() || is_page( 'Style Guide' )) : ?>
            <div class="searchModule">
                <h1 class="searchModule-title">Find the home or investment property you’ve been looking for!</h1>
                <div class="searchModule-formContainer">
                    <form action="" class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="form-location">Location</label>
                                <input type="text" id="form-location">
                            </div>
                            <div class="col-md-2">
                                <label for="form-min-price">Min Price</label>
                                <input type="text" id="form-min-price">
                            </div>
                            <div class="col-md-2">
                                <label for="form-max-price">Max Price</label>
                                <input type="text" id="form-max-price">
                            </div>
                            <div class="col-md-2">
                                <label for="form-units">&#35; of Units </label>
                                <input type="text" id="form-units">
                            </div>
                            <div class="col-md-3">
                                <a href="/property-search/">
                                    <button type="submit" class="xbutton alternate-btn">Search <i class="fa fa-search"></i></button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <? endif ?>
            <!-- end hero image element -->

            <!-- ANYTHING WITHIN CONTAINER IS CONTAINED AND NOT FULL WIDTH -->
            <div class="container">
                <?php include Wrapper\template_path(); ?>
            </div>
            <!-- END CONTAINER -->
            <!-- TESTIMONIALS SECTION -->
            <?php if ( is_front_page() || is_page( 'Style Guide' )) : ?>
            <div class="testimonialsModule">
                <h2>WHAT OUR CLIENTS SAY</h2>
                <div class="slider-container">
                    <div class="testimonial">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <p class="quote">Weston went above and beyond to ensure that I not only found a condo but that I found the right condo for me. He was punctual, friendly, thorough, and always had my best interests in mind. I could not have asked for more in realtor. I would highly recommend Weston to anyone in the market to purchase a new home or condo, you will be in excellent hands!</p>
                                <p class="quoteAuthor">-April, River North</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <p class="quote">Weston went above and beyond to ensure that I not only found a condo but that I found the right condo for me. He was punctual, friendly, thorough, and always had my best interests in mind. I could not have asked for more in realtor. I would highly recommend Weston to anyone in the market to purchase a new home or condo, you will be in excellent hands!</p>
                                <p class="quoteAuthor">-April, River North</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? endif; ?>
            <!-- END TESTIMONIALS SECTION -->

            <!-- EXPLORE NEARBY NEIGHBORHOODS - IMAGE WITH TEXT OVERLAY BOTTOM MODULE -->
            <?php if ( is_page( 'Style Guide' )) : ?>
                <div class="nearbyNeighborhoods container">
                    <h4>Explore Nearby Neighborhoods</h4>
                    <div class="row">
                        <div class="col-md-4 nearbyModule">
                            <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Nearby Neighborhoods X-Plus Real Estate">
                            <div class="nearbyModule-text">
                                <p class="location">Lincoln Park</p>
                            </div>
                        </div>
                        <div class="col-md-4 nearbyModule">
                            <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Nearby Neighborhoods X-Plus Real Estate">
                            <div class="nearbyModule-text">
                                <p class="location">Lincoln Square</p>
                            </div>
                        </div>
                        <div class="col-md-4 nearbyModule">
                            <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Nearby Neighborhoods X-Plus Real Estate">
                            <div class="nearbyModule-text">
                                <p class="location">North Center</p>
                            </div>
                        </div>
                    </div>
                </div>
            <? endif; ?>
            <!-- END EXPLORE NEARBY NEIGHBORHOODS -->

            <!-- SOLO SEARCH MODULE -- NO IMAGE -->
            <?php if ( is_page( 'Style Guide' )) : ?> <!-- REMOVE/REFINE THIS -->
            <div class="searchModule--solo">
                <div class="searchModule-formContainer">
                    <form action="" class="container">
                        <p class="searchModule--solo--label">Refine your search:</p>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="form-location">Location</label>
                                <input type="text" id="form-location">
                            </div>
                            <div class="col-md-2">
                                <label for="form-min-price">Min Price</label>
                                <input type="text" id="form-min-price">
                            </div>
                            <div class="col-md-2">
                                <label for="form-max-price">Max Price</label>
                                <input type="text" id="form-max-price">
                            </div>
                            <div class="col-md-2">
                                <label for="form-units">&#35; of Units </label>
                                <input type="text" id="form-units">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="xbutton primary-btn">Search <i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php endif; ?>
            <!-- END SOLO SEARCH MODULE -->

        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <!-- IF TESTIMONIALS EXIST OR PAGE THAT NEEDS SLIDER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script>
        jQuery('.slider-container').slick({
            infinite: true,
            slidesToShow: 1
        });
    </script>
    <!-- END -->
  </body>
</html>

<!-- Drip -->
<script type="text/javascript">
    var _dcq = _dcq || [];
    var _dcs = _dcs || {};
    _dcs.account = '5856660';

    (function() {
        var dc = document.createElement('script');
        dc.type = 'text/javascript'; dc.async = true;
        dc.src = '//tag.getdrip.com/5856660.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(dc, s);
    })();
</script>

<script>
    jQuery(".subscription_details .cancel").click(function(event){
        if (confirm('Are you sure you want to cancel this subscription?'))
        {
            alert('Thanks for confirming');
        } else {
            e.preventDefault()
        }
    });
</script>
