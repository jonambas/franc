<div class="navigation__wrapper">
  <div class="container">
    <div class="brand">
      <a class="brand__link" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
        @include('partials.svg-logo')
      </a>
    </div>

    <nav class="navigation__bar">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</div>
