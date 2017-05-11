{{--
  Template Name: Home Page
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="home__bgVideoWrapper">
      <div class="home__bgVideo">{{{ the_field( 'home_background_video' ) }}}</div>
      @if (get_field( 'poster' ))
        <div class="home__bgPoster"><img src="{{ the_field( 'poster' ) }}" alt="Franc"></div>
      @endif
    </div>

    {{-- <iframe src="https://player.vimeo.com/video/209304203?autoplay=1&loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
    <div class="home__bigLogo">
      <div class="container">
        <div class="flex middle-xs center-xs">
          <div class="col-xs-8 col-md-6">
            @include('partials.svg-logo')
          </div>
        </div>
      </div>
    </div>

    <div class="home__play">
      <a href="#" class="home__playLink" title="Play Video">
        <svg class="home__playSvg" width="52.3px" height="52.3px" viewBox="0 0 52.3 52.3" xml:space="preserve"><path class="st0" d="M51.3 26.2c0 13.9-11.3 25.2-25.2 25.2C12.3 51.3 1 40.1 1 26.2S12.3 1 26.2 1c13.9 0 25.1 11.3 25.1 25.2zm-32 9.3l20.5-9.3-20.5-9.3v18.6z"/></svg>
      </a>
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
