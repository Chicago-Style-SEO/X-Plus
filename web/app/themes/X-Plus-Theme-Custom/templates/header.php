<header class="banner">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 col-md-9 col-sm-9">
              <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                  <img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" class="logo" alt="X-Plus Real Estate Logo">
                  <h1>X-Plus Real Estate</h1>
              </a>
          </div>
          <div class="col-lg-7 col-md-3">
              <nav class="nav-primary">
                  <?php
                  if (has_nav_menu('primary_navigation')) :
                      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                  endif;
                  ?>
              </nav>

              <nav class="nav-mobile">
                  <div id="mobile-nav-icons">
                      <i class="fa fa-bars activated"></i>
                      <i class="fa fa-times"></i>
                  </div>

                  <div class="mobile-nav-menu">
                      <?php
                      if (has_nav_menu('mobile_navigation')) :
                          wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'nav']);
                      endif;
                      ?>
                  </div>

              </nav>
          </div>
      </div>
  </div>
</header>
