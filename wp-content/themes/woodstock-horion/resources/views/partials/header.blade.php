<section class="slider" id="slider">
  <nav class="nav">
    <div class="left">
      <a href="{{ home_url('/') }}">
        <img src="@asset('images/woodstock_logo_white.png')" alt="{{ get_bloginfo('name', 'display') }}">
      </a>
    </div>
    <div class="right">
      <div class="right-top"></div>
      <div class="right-bottom">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav-menu'
          ]) !!}
        @endif
      </div>
    </div>
  </nav>
</section>
