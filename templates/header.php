<nav class="navbar navbar-toggleable-md navbar-inverse bg-brand-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nav-locations" aria-controls="nav-locations" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

  <div class="collapse navbar-collapse justify-content-end" id="nav-locations">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
          'theme_location' => 'primary_navigation', 
          'menu_class' => 'nav navbar-nav', 
          'container' => '',
          'container_class' => 'nav-item'
        ]);
      endif;
    ?>
  </div>
</nav>