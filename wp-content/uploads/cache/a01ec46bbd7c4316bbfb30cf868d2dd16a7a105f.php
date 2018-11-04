<section class="slider" id="slider">
  <nav class="nav">
    <div class="left">
      <a href="<?php echo e(home_url('/')); ?>">
        <img src="<?= App\asset_path('images/woodstock_logo_white.png'); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>">
      </a>
    </div>
    <div class="right">
      <div class="right-top"></div>
      <div class="right-bottom">
        <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav-menu'
          ]); ?>

        <?php endif; ?>
      </div>
    </div>
  </nav>
</section>
