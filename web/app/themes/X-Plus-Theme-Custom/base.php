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
            <!-- ANYTHING INSIDE OF MAIN IS FULL WIDTH, ANTHTING INSIDE OF CONTAINER IS CONTAINED -->

            <!-- hero image element - MAKE H1 and IMAGE EDITABLE IN ACF -->
            <!-- IF SEARCH MODULE ENABLED OR IF HOME PAGE -->
            <?php if ( is_front_page()) : ?>
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
                                <button type="submit" class="xbutton alternate-btn">Search <i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
<!--                <img src="--><?//= get_template_directory_uri(); ?><!--/dist/images/home-lifestyle.jpg" class="searchModule-image">-->
            </div>
            <? endif ?>
            <!-- end hero image element -->

            <div class="container">
                <?php include Wrapper\template_path(); ?>
            </div>
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
  </body>
</html>
