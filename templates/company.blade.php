{{--
  Template Name: Company
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="navOffset"></div>

    <div class="panel panel--gray panel--accent">
      <div class="container">
        <div class="flex">

          <div class="col-xs-9">
            <h1 class="company__jumboHeader">{{ the_field( 'hero_title' ) }}</h1>
          </div>

          <div class="col-xs-3">
            {{-- <img src="" /> --}}
          </div>

          <div class="col-xs-12">
            <h1 class="text-thinHeader line--xxxl marginBottom--lg underscore">Approach</h1>
          </div>

          <div class="col-xs-12 company__approachText">
            {{ the_field( 'approach' ) }}
          </div>

        </div>
      </div>
    </div>

    @if(have_rows('capabilities'))
      <div class="panel">
        <div class="container">
          <h1 class="text-thinHeader line--xxxl underscore marginBottom--xxl">Capabilities</h1>

          <div class="flex">

            @while(have_rows('capabilities')) @php(the_row())
              <div class="col-xs-12 col-lg-6 marginBottom--xl capability">
                <div class="flex">
                  <div class="col-xs-8 col-xs-offset-2 col-md-3 col-md-offset-0"><img class="capability__image" src="{{get_sub_field('image')}}" alt=""></div>
                  <div class="col-xs-12 col-md-9 capability__content">
                    <h2>{{get_sub_field('title')}}</h2>
                    <p>{{get_sub_field('description')}}</p>
                  </div>
                </div>
              </div>
            @endwhile

          </div>
        </div>
      </div>
    @endif

    <div class="leadershipSlider">
      <div class="container">
        <h1 class="text-thinHeader leadershipSlider__title line--xxl underscore">Leadership</h1>
      </div>

      @php
        $args = array(
          'post_type' => 'bios',
          'posts_per_page' => 10,
          'orderby' => 'order',
	        'order' => 'ASC'
        );
        $bios = new WP_Query( $args );
      @endphp

      <div class="leadershipSlider__slides">

        @while($bios->have_posts()) @php($bios->the_post())
          <div class="leadershipSlider__slide">
            <div class="container">
              <div class="flex middle-xs">
                <div class="col-xs-12 last-xs first-md col-md-6 leadershipSlider__imageWrapper">
                  <img class="leadershipSlider__image" src="{{ the_field( 'photo' ) }}" alt="{{ get_the_title() }}">
                </div>
                <div class="col-xs-12 last-md first-xs col-md-6 col-lg-6 leadershipSlider__textWrapper">
                  <h6 class="leadershipSlider__name">{{ get_the_title() }}</h6>
                  <h5><strong>{{ the_field( 'job_title' ) }}</strong></h5>
                  <div class="leadershipSlider__description">{{ the_field( 'description' ) }}</div>
                </div>
              </div>
            </div>
          </div>
        @endwhile

      </div>
      <div class="leadershipSlider__controls">
        <a class="leadershipSlider__next" href="" title="Next"></a>
        <a class="leadershipSlider__prev" href="" title="Previous"></a>
      </div>
    </div>

    @include('partials.footer')

  @endwhile
@endsection
