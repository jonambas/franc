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
                  <div class="col-xs-12 col-md-7 col-lg-5">
                    <h4 class="line--xl underscore">Flexible Solutions</h4>
                    <h1 class="marginBottom--xl">Health Here</h1>
                  </div>
                </div>

            </div>

            {{-- Slide 2 --}}

              <div class="caseStudies__slide">
                <div class="flex middle-xs">
                  <div class="col-xs-12 col-md-7 col-lg-5">
                    <h4 class="line--xl underscore">Two</h4>
                    <h1 class="marginBottom--xl">Two</h1>
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
