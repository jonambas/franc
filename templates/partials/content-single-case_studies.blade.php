<div class="navOffset"></div>

<div class="caseStudy">

  <div class="caseStudy__hero">
    <div class="container">
      {{ the_field( 'client' ) }}
      {{ get_the_title() }}
    </div>
  </div>


  @if(have_rows('sections'))
    @while(have_rows('sections')) @php(the_row())
      <div class="caseStudy__section caseStudy__section--{{get_sub_field('type')}}">



          @if(get_sub_field('type') === 'Image')
            <div class="container">
              <img class="caseStudy__image" src="{{ get_sub_field('image') }}" alt="">
            </div>
          @endif

          @if(get_sub_field('type') === 'Video')
            <div class="container">
              <div class="caseStudy__video">
                {{{ the_sub_field('video') }}}
              </div>
            </div>
          @endif

          @if(get_sub_field('type') === 'Quote')
            <div class="caseStudy__quote">
              <div class="container">
                <h1 class="underscore">{{ get_sub_field('quote') }}</h1>
                <p>{{{ the_sub_field('quote_from') }}}</p>
              </div>
            </div>
          @endif

      </div>
    @endwhile
  @endif

</div>
@include('partials.footer')
