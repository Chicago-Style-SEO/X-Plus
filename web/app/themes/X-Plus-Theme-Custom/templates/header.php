<header class="banner">
  <div class="container">
      <div class="row">
          <div class="col-md-5">
              <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                  <img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" class="logo" alt="X-Plus Real Estate Logo">
                  <h1>X-Plus Real Estate</h1>
              </a>
          </div>
          <div class="col-md-7">
              <nav class="nav-primary">
                  <?php
                  if (has_nav_menu('primary_navigation')) :
                      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                  endif;
                  ?>
              </nav>
          </div>
      </div>
  </div>
</header>
