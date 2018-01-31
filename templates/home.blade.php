{{--
  Template Name: Home Page
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="home__loader"><img src="@asset('images/loading.gif')"></div>

    <style>
    .home__loader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #DC0000;
      z-index: 10000;

      opacity: 1;
    }

    .home__loader.is-hidden {
      opacity: 0;
      pointer-events: none;

      -webkit-transition: 1s;
      -o-transition: 1s;
      transition: 1s;
    }

    .home__loader img {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%) scale(0.8);
      -o-transform: translate(-50%, -50%) scale(0.8);
      transform: translate(-50%, -50%) scale(0.8);
    }
    </style>

    <div class="home__bgVideoWrapper">
      @if (get_field( 'home_background_video' ))
        <div class="home__bgVideo">{{{ the_field( 'home_background_video' ) }}}</div>
      @endif
      @if (get_field( 'poster' ))
        <div class="home__bgPoster"><img src="{{ the_field( 'poster' ) }}" alt="Franc"></div>
      @endif
    </div>

    {{-- <iframe src="https://player.vimeo.com/video/209304203?autoplay=1&loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}

    <!-- Jumbo Franc Logo -->
    <!-- <div class="home__bigLogo">
      <div class="container">
        <div class="flex middle-xs center-xs">
          <div class="col-xs-8 col-md-6">
            @include('partials.svg-logo')
          </div>
        </div>
      </div>
    </div> -->

    <div class="home__play">
      <a href="#" class="home__playLink" title="Play Video">
        <svg class="home__playSvg" width="52.3px" height="52.3px" viewBox="0 0 52.3 52.3" xml:space="preserve"><path d="M50.3 25.2c0 13.9-11.3 25.2-25.2 25.2C11.3 50.3 0 39.1 0 25.2S11.3 0 25.2 0s25.1 11.3 25.1 25.2zm-33 9.3l20.5-9.3-20.5-9.3v18.6z"/></svg>
      </a>
      <!-- <h6 class="home__playCaption">What is @include('partials.svg-logo')?</h6> -->
    </div>

    <div class="home__brandVideoWrapper">
      <div class="home__brandVideo">
        {{{ the_field( 'home_brand_video' ) }}}
      </div>
      <a href="#" class="home__closeLink">
        <svg class="home__closeSvg" viewBox="0 0 54 54"><circle class="st0" cx="27" cy="27" r="26"/><path d="M27.2 29.6c-2.2 2.3-4.3 4.5-6.4 6.7-.8.9-1.7 1.7-2.8.6-1-1-.2-1.9.6-2.7 2.1-2.2 4.2-4.5 6.4-6.8-2.2-2.3-4.4-4.6-6.5-6.9-.8-.8-1.5-1.7-.5-2.7 1.1-1 1.8-.2 2.7.6 2.2 2.2 6.5 6.7 6.5 6.7s3.9-4.2 5.8-6.2c.9-.9 1.8-2.6 3.3-1.3 1.6 1.5-.1 2.5-1 3.5-1.9 2.1-3.9 4.1-5.9 6.3 2.1 2.3 4.2 4.4 6.2 6.6.8.8 2 1.7.8 2.9s-2.1.1-2.9-.8c-2-2.1-4-4.2-6.3-6.5z"/></svg>
      </a>
    </div>

  @endwhile
@endsection
