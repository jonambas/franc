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
          <a href="#" class="home__playLink">Play</a>
        </div>
      </div>
    </div>

  @endwhile
@endsection
