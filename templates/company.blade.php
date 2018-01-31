{{--
  Template Name: Company
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="navOffset"></div>

    <div class="panel">
      <div class="container">
        <div class="flex comapy__headerImageWrapper">

          <div class="col-xs-12 col-md-8">
            <h1 class="company__jumboHeader">{{ the_field( 'hero_title' ) }}</h1>
            <a class="company__headerContact" href="{{ get_permalink(get_page_by_title('Contact')) }}">Contact Us</a>
          </div>

          <div class="col-xs-12 col-md-4">

          </div>

          <div class="col-xs-12 company__approachContact">

          </div>
          <div class="col-xs-12 col-md-6 company__approachText">
            {{ the_field( 'approach' ) }}
          </div>
          <div class="col-xs-12 col-md-6"></div>

          <div class='company__headerImage'>
            <img src="{{ the_field( 'hero_image' ) }}" />
          </div>

        </div>
      </div>
    </div>

    @if( get_field('show_clients') === 'show' )
      @if(have_rows('clients'))
        <div class="clientSlider">
          <div class="clientSlider__slides">

            @php
              $clientIdx = 0;
              $clientCount = count(get_field('clients'));
            @endphp

            @while(have_rows('clients')) @php(the_row())

              @if($clientIdx % 4 === 0)
                <div class="clientSlider__slide gsap__slide">
                  <div class="container">
                    <div class="flex middle-xs">
              @endif

              <div class="col-xs-3 clientSlider__imageWrapper">
                <img src="{{ get_sub_field('image') }}" />
              </div>

              @if( ($clientIdx + 1) % 4 === 0  || ($clientIdx + 1) === $clientCount)
                    </div>
                  </div>
                </div>
              @endif

              @php
                $clientIdx = $clientIdx + 1;
              @endphp
            @endwhile
          </div>
          <div class="clientSlider__controls">
            <a class="clientSlider__next" href="" title="Next"></a>
            <a class="clientSlider__prev" href="" title="Previous"></a>
          </div>
        </div>
      @endif
    @endif

    @if(have_rows('capabilities'))
      @php
        $capabilitiesIdx = 0;
      @endphp
      <div class="panel marginBottom--xl">
        <div class="container">
          <h2 class="text-thinHeader line--xl underscore--red marginBottom--xxl">Disciplines</h2>

          <div class="flex">

            @while(have_rows('capabilities')) @php(the_row())

              @if($capabilitiesIdx % 2 === 0)
                <div class="col-xs-12 capability capability--left">
                  <div class="flex">
                    <div class="col-xs-12 col-md-6 capability__imageWrapper">
                      <img class="capability__image" src="{{get_sub_field('image')}}" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6 capability__content">
                      <h4>{{get_sub_field('title')}}</h4>
                      <p>{{get_sub_field('description')}}</p>
                    </div>
                  </div>
                  <div class='capability__straightDivider'></div>
                </div>
              @endif

              @if($capabilitiesIdx % 2 === 1)
                <div class="col-xs-12 capability capability--right">
                  <div class="flex">
                    <div class="col-xs-12 col-md-6 capability__content">
                      <h4>{{get_sub_field('title')}}</h4>
                      <p>{{get_sub_field('description')}}</p>
                    </div>
                    <div class="col-xs-12 col-md-6 capability__imageWrapper">
                      <img class="capability__image" src="{{get_sub_field('image')}}" alt="">
                    </div>
                  </div>
                  <div class='capability__straightDivider'></div>
                </div>
              @endif


              @php
                $capabilitiesIdx = $capabilitiesIdx + 1;
              @endphp
            @endwhile

          </div>
        </div>
      </div>
    @endif

    <div class="leadershipSlider">
      <div class="container">
        <h2 class="text-thinHeader leadershipSlider__title line--xxl underscore--red">Leadership</h2>
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
          <div class="leadershipSlider__slide gsap__slide">
            <div class="container">
              <div class="flex middle-xs">
                <div class="col-xs-12 last-xs first-md col-md-6 leadershipSlider__imageWrapper">
                  <img class="leadershipSlider__image" src="{{ the_field( 'photo' ) }}" alt="{{ get_the_title() }}">
                </div>
                <div class="col-xs-12 last-md first-xs col-md-6 col-lg-6 leadershipSlider__textWrapper">
                  <h6 class="leadershipSlider__name">{{ get_the_title() }}</h6>
                  <h5 class="leadershipSlider__jobTitle">{{ the_field( 'job_title' ) }}</h5>
                  {{--< div class="leadershipSlider__description">{{ the_field( 'description' ) }}</ div>--}}

                  @if (get_field( 'behance_link' ))
                    <a class="leadershipSlider__social" target="_blank" href="{{ the_field( 'behance_link' ) }}">@include('partials.svg-behance')</a>
                  @endif

                  @if (get_field( 'linkedin_link' ))
                    <a class="leadershipSlider__social" target="_blank" href="{{ the_field( 'linkedin_link' ) }}">@include('partials.svg-linkedin')</a>
                  @endif

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
