{{--
  Template Name: Case Study List
--}}

@extends('layouts.base')

@section('content')
  @php
    $args = array( 'post_type' => 'case_studies', 'posts_per_page' => 10 );
    $caseStudies = new WP_Query( $args );
  @endphp

  {{-- @include('partials.page-header')
  @include('partials.content-page') --}}

  <div class="container">
    <div class="caseStudies">
      <div class="caseStudies__container">
        <div class="caseStudies__slides">

          @while($caseStudies->have_posts()) @php($caseStudies->the_post())
            <div class="caseStudies__slide"> {{-- gsap__slide --}}

              @if (has_post_thumbnail( $post->ID ))
                @php
                  $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
                  $thumb_url = $thumb_url_array[0];
                @endphp
                <img class="caseStudies__bg" src="{{$thumb_url}}" alt="">
              @endif

              <a href="{{ the_permalink() }}" title="{{ get_the_title() }}" class="caseStudies__hoverArea">
                <div href="{{ the_permalink() }}" title="{{ get_the_title() }}" class="caseStudies__titleBox">
                  <h1 class="underscore"><strong>{{ get_the_title() }}</strong></h1>
                  <h3 class="">{{ the_field( 'subtitle' ) }}</h3>
                </div>
              </a>
              <div class="caseStudies__redArea"></div>

            </div>
          @endwhile


          {{-- Slide 2 --}}
          {{-- get_permalink(get_page_by_title('Contact')) --}}

            <!-- <div class="caseStudies__slide">
              <div class="flex middle-xs">
                <div class="col-xs-12 col-md-10 col-lg-7">
                  <div class="caseStudies__more">
                    <h1 class="line- -xl">More on the way.</h1>
                    <h4><strong>
                      <a href="">Contact Us</a> to see more examples of our work.
                    </strong></h4>
                  </div>
                </div>
              </div>
            </div> -->

        </div>
        <div class="caseStudies__controls">
          <a class="caseStudies__next" href="" title="Next"></a>
          <a class="caseStudies__prev" href="" title="Previous"></a>
        </div>
      </div>
    </div>

  </div>
@endsection
