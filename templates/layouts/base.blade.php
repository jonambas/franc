<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>

    @php(do_action('get_header'))
    @include('partials.header')

    <div class="view__wrapper" role="document">
      <div class="view__content">
        @yield('content')

        {{-- @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif --}}

      </div>
    </div>

    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
