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
    <!-- hero image element - MAKE IN ACF -->
    <!-- breadcrumbs, under nav when no hero -->
    <?php global $post; if ( is_page() && $post->post_parent ) { custom_breadcrumbs(); } ?>
    <div class="wrap" role="document">
      <div class="content row">
        <main class="main">
            <!-- ANYTHING INSIDE OF MAIN IS FULL WIDTH, ANTHTING INSIDE OF CONTAINER IS CONTAINED -->

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
