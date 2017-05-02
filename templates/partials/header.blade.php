<div class="navigation__wrapper">
  <div class="container">
    <div class="brand">
      <a class="brand__link" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
        @include('partials.svg-logo')
      </a>
    </div>

    <nav class="navigation__bar">
      <a href="" class="navigation__hamburgerWrapper"><span class="navigation__hamburger"></span></a>
    </nav>
  </div>
</div>

<nav class="navigation__menu">
  <div class="flex center-xs middle-xs">
    <div class="col-xs">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>
  </div>
  <a href="#" class="navigation__closeLink">
    <svg class="navigation__closeSvg" viewBox="0 0 54 54"><circle class="st0" cx="27" cy="27" r="26"/><path d="M27.2 29.6c-2.2 2.3-4.3 4.5-6.4 6.7-.8.9-1.7 1.7-2.8.6-1-1-.2-1.9.6-2.7 2.1-2.2 4.2-4.5 6.4-6.8-2.2-2.3-4.4-4.6-6.5-6.9-.8-.8-1.5-1.7-.5-2.7 1.1-1 1.8-.2 2.7.6 2.2 2.2 6.5 6.7 6.5 6.7s3.9-4.2 5.8-6.2c.9-.9 1.8-2.6 3.3-1.3 1.6 1.5-.1 2.5-1 3.5-1.9 2.1-3.9 4.1-5.9 6.3 2.1 2.3 4.2 4.4 6.2 6.6.8.8 2 1.7.8 2.9s-2.1.1-2.9-.8c-2-2.1-4-4.2-6.3-6.5z"/></svg>
  </a>
</nav>
