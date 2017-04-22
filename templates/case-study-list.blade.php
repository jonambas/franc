{{--
  Template Name: Case Study List
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    <div class="container">
      <div class="caseStudies">
        <div class="caseStudies__container">
          <div class="caseStudies__slides">

            {{--  Slide 1 --}}
            <div class="caseStudies__slide">

                <div class="flex middle-xs">
                  <div class="col-xs-12 col-md-10 col-lg-7">
                    <a href="" class="caseStudies__titleBox">
                      <h3 class="line--xl underscore"><strong>Flexible Solutions</strong></h3>
                      <h1 class="marginBottom--xl">Health Here</h1>
                    </a>
                  </div>
                </div>

            </div>

            {{-- Slide 2 --}}

              <div class="caseStudies__slide">
                <div class="flex middle-xs">
                  <div class="col-xs-12 col-md-10 col-lg-7">
                    <div class="caseStudies__more">
                      <h1 class="line--xl"><strong>More on the way.</strong></h1>
                      <h4><strong>
                        <a href="{{ get_permalink(get_page_by_title('Contact')) }}">Contact Us</a> to see more examples of our work.
                      </strong></h4>
                    </div>
                  </div>
                </div>
              </div>

          </div>
          <div class="caseStudies__controls">
            <a class="caseStudies__next" href="" title="Next"></a>
            <a class="caseStudies__prev" href="" title="Previous"></a>
          </div>
        </div>
      </div>

    </div>

  @endwhile
@endsection
