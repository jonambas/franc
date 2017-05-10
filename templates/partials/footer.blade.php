<footer class="footer">
  <div class="container">

    <div class="flex">
      <div class="col-xs-12 col-lg-3 marginBottom--xl">
        <div class="brand">
          <a class="brand__link" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
            @include('partials.svg-logo')
          </a>
        </div>
      </div>

      <div class="col-xs-12 col-lg-3 marginBottom--xl">
        <p class="footer__desc"><strong>Franc</strong> is an animation and design studio based in Annapolis, Maryland.</p>
      </div>

      <div class="col-xs-6 col-lg-2 col-lg-offset-1">
        <h6 class="underscore"><strong>Follow Us</strong></h6>
        <ul class="footer__list">
          <li class="footer__listItem">
            <a href="https://www.facebook.com/franchq/" title="Facebook" target="_blank">Facebook</a>
          </li>
          <li class="footer__listItem">
            <a href="https://www.instagram.com/franc_hq/" title="Instagram" target="_blank">Instagram</a>
          </li>
          <li class="footer__listItem">
            <a href="https://twitter.com/franc_hq" title="Twitter" target="_blank">Twitter</a>
          </li>
          <li class="footer__listItem">
            <a href="https://vimeo.com/franchq" title="Vimeo" target="_blank">Vimeo</a>
          </li>
        </ul>
      </div>

      <div class="col-xs-6 col-lg-3 text--right">
        <p class="marginBottom--none">&copy; 2017 <strong>Franc LLC</strong></p>
        <p>All Rights Reserved</p>
      </div>
    </div>

  </div>
</footer>
