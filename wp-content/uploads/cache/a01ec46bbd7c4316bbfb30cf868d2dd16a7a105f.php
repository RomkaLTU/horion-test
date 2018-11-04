<nav class="nav">
  <div class="container">
    <div class="nav-inner">
      <div class="left">
        <a href="<?php echo e(home_url('/')); ?>">
          <img src="<?= App\asset_path('images/woodstock_logo_white.png'); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>">
        </a>
      </div>
      <div class="right">
        <div class="right-top clearfix">
          <a href="javascript:" class="btn-main float-right">BOOK NOW</a>
          <a href="javascript:" class="btn-main btn-mobile-menu float-right">MENU</a>
        </div>
        <div class="right-bottom">
          <?php if(has_nav_menu('primary_navigation')): ?>
            <?php echo wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'nav-menu'
            ]); ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</nav>
