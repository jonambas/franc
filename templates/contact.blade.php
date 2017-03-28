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

            <div class="col-xs-2">
              <h6 class="contact__header">Links</h6>
              <ul class="contact__list">
                <li class="contact__listItem"><a href="#">Facebook</a></li>
                <li class="contact__listItem"><a href="#">Instagram</a></li>
                <li class="contact__listItem"><a href="#">Twitter</a></li>
                <li class="contact__listItem"><a href="#">Vimeo</a></li>
              </ul>
            </div>

            <div class="col-xs-2">
              <h6 class="contact__header">Email</h6>

              <ul class="contact__list marginBottom--md">
                <li class="contact__listItem"><a href="#">hello@franc.tv</a></li>
              </ul>

              <h6 class="contact__header">Phone</h6>
              <ul class="contact__list">
                <li class="contact__listItem"><a href="#">443 995 0117</a></li>
              </ul>
            </div>

            <div class="col-xs-3">
              <h6 class="contact__header">Address</h6>
              <address class="contact__address">6 Porter Drive<br>Annapolis, Marlyand<br>21401</address>
            </div>

            <div class="col-xs-3">
              <h6 class="contact__header">Subscribe to our newsletter</h6>
              <form>
                <input type="text" />
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

  @endwhile
@endsection
