{{--
  Template Name: Contact
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="container">

      <div class="container--fullHeight flex middle-xs">
        <div class="col-xs">

          <div class="flex center-xs text--left">

            <div class="col-xs-6 col-md-2 col-md-offset-1">
              <h6 class="contact__header">Links</h6>
              <ul class="contact__list marginBottom--md">
                <li class="contact__listItem">
                  <a href="https://www.facebook.com/franchq/" title="Facebook" target="_blank">Facebook</a>
                </li>
                <li class="contact__listItem">
                  <a href="https://www.instagram.com/franc_hq/" title="Instagram" target="_blank">Instagram</a>
                </li>
                <li class="contact__listItem">
                  <a href="https://twitter.com/franc_hq" title="Twitter" target="_blank">Twitter</a>
                </li>
                <li class="contact__listItem">
                  <a href="https://vimeo.com/franchq" title="Vimeo" target="_blank">Vimeo</a>
                </li>
              </ul>
            </div>

            <div class="col-xs-6 col-md-2">
              <h6 class="contact__header">Email</h6>

              <ul class="contact__list marginBottom--md">
                <li class="contact__listItem"><a href="#">hello@franc.tv</a></li>
              </ul>

              <h6 class="contact__header">Phone</h6>
              <ul class="contact__list">
                <li class="contact__listItem"><a href="#">443 995 0117</a></li>
              </ul>
            </div>



            <div class="col-xs-12 col-md-offset-1 col-md-6 col-lg-offset-1 col-lg-6">
              <h6 class="contact__header">Subscribe to our newsletter</h6>
              @include('partials.mailchimp')
            </div>
          </div>

        </div>
      </div>
    </div>

  @endwhile
@endsection
