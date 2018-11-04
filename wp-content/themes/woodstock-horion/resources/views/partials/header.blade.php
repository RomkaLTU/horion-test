<nav class="nav">
  <div class="container">
    <div class="nav-inner">
      <div class="left">
        <a href="{{ home_url('/') }}">
          <img src="@asset('images/woodstock_logo_white.png')" alt="{{ get_bloginfo('name', 'display') }}">
        </a>
      </div>
      <div class="right">
        <div class="right-top clearfix">
          <a href="javascript:" class="btn-main float-right">BOOK NOW</a>
          <a href="javascript:" class="btn-main btn-mobile-menu float-right">MENU</a>
        </div>
        <div class="right-bottom">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'nav-menu'
            ]) !!}
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>
