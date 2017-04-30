<div class="navOffset"></div>

<div class="caseStudy">

  <div class="caseStudy__hero">
    <div class="container">
      {{ the_field( 'subtitle' ) }}
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

          @if(get_sub_field('type') === 'Description')
            <div class="panel panel--gray caseStudy__description">
              <div class="container">
                <div class="flex">
                  <div class="col-xs-12 col-lg-3 marginBottom--lg">
                    <h4 class="line--xl marginBottom--md underscore"><strong>Client</strong></h4>
                    <h1 class="text-thinHeader">{{ get_the_title() }}</h1>
                  </div>
                  <div class="col-xs-12 col-lg-5 marginBottom--lg">
                    <h4 class="line--xl marginBottom--md underscore"><strong>Challenge and Solution</strong></h4>
                    <div>
                      {{ the_sub_field('challenge') }}
                    </div>
                  </div>
                  <div class="col-xs-12 col-lg-3 col-lg-offset-1">
                    <h4 class="line--xl marginBottom--md underscore"><strong>Deliverables</strong></h4>
                    <div class="caseStudy__description__deliverables">
                      {{ the_sub_field('deliverables') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif

      </div>
    @endwhile
  @endif

</div>
@include('partials.footer')
