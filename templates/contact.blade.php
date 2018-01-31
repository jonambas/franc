{{--
  Template Name: Contact
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="container">
      <div class="container--contact flex middle-xs">
        <div class="col-xs">

          <div class="flex center-xs text--left">

            <div class="col-xs-6 col-md-2">
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
                <li class="contact__listItem"><a href="#">{{ the_field( 'email' ) }}</a></li>
              </ul>

              <h6 class="contact__header">Phone</h6>
              <ul class="contact__list">
                <li class="contact__listItem"><a href="#">{{ the_field( 'phone_number' ) }}</a></li>
              </ul>

            </div>

            <div class="col-xs-12 col-md-3 col-xl-3">

              <h6 class="contact__header">Address</h6>
              <ul class="contact__list">
                <li class="contact__listItem"><a href="#" class="contact__address">{{ the_field( 'address' ) }}</a></li>
              </ul>

            </div>
<!-- //col-lg-offset-1  -->
            <div class="col-xs-12 col-md-7 col-lg-7 col-xl-4">
              <h6 class="contact__header">Subscribe to our newsletter</h6>
              @include('partials.mailchimp')
            </div>
          </div>

        </div>
      </div>
    </div>

  @endwhile
@endsection
