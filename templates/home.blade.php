{{--
  Template Name: Home Page
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="home__bgVideoWrapper">
      <div class="home__bgVideo">{{{ the_field( 'home_background_video' ) }}}</div>
    </div>

    {{-- <iframe src="https://player.vimeo.com/video/209304203?autoplay=1&loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}

    <div class="home__boxWrapper">
      <div class="home__box">
        {{ the_field( 'home_title' ) }}
        <div class="home__play">
          <a href="#" class="home__playLink" title="Play Video">
            <svg class="home__playSvg" width="52.3px" height="52.3px" viewBox="0 0 52.3 52.3" xml:space="preserve"><path class="st0" d="M51.3 26.2c0 13.9-11.3 25.2-25.2 25.2C12.3 51.3 1 40.1 1 26.2S12.3 1 26.2 1c13.9 0 25.1 11.3 25.1 25.2zm-32 9.3l20.5-9.3-20.5-9.3v18.6z"/></svg>
          </a>
        </div>
      </div>
    </div>

    <div class="home__brandVideoWrapper">
      <div class="home__brandVideo">
        <a href="#" class="home__closeLink">Close</a>
        {{{ the_field( 'home_brand_video' ) }}}
      </div>
    </div>

  @endwhile
@endsection
