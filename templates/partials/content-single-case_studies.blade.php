<div class="navOffset"></div>

<div class="caseStudy">

  <div class="container">
    <a class="caseStudy__back" href="{{ get_permalink(get_page_by_title('Case Studies')) }}">Case Studies</a>
  </div>


  @if(have_rows('sections'))
    @while(have_rows('sections')) @php(the_row())
      <div class="caseStudy__section caseStudy__section--{{get_sub_field('type')}}">

          @if(get_sub_field('type') === 'Section Title')
            <div class="container">
              <h1 class='caseStudy__sectionTitle'>{{ the_sub_field('section_title')}}</h1>
            </div>
          @endif

          @if(get_sub_field('type') === 'Half Title Text')
            <div class="panel caseStudy__halfPanel">
              <div class="container">
                <div class="flex">
                  <div class="col-xs-12 col-lg-6 marginBottom--lg">
                    <h3 class="line--xl marginBottom--md underscore underscore--red caseStudy__halfTitle">{{ the_sub_field('half_title')}}</h3>
                  </div>
                  <div class="col-xs-12 col-lg-6 marginBottom--lg">
                    <div class="caseStudy__halfText">
                      {{ the_sub_field('half_text')}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif

          @if(get_sub_field('type') === 'Half Image Text')
            <div class="panel caseStudy__halfPanel has-image">
              <div class="caseStudy__halfImageWrapper" style="background-image: url({{ the_sub_field('half_image')}})"><img src="" /></div>
              <div class="container">
                <div class="flex">
                  <div class="col-xs-12 col-md-6 col-md-offset-6 marginBottom--lg">
                    <div class="caseStudy__halfText">
                      {{ the_sub_field('half_text')}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif

          @if(get_sub_field('type') === 'Image')
            <img class="caseStudy__image" src="{{ get_sub_field('image') }}" alt="">
          @endif

          @if(get_sub_field('type') === 'Video')
            <div class="caseStudy__video" style="padding-bottom: {{ get_sub_field('video_aspect_ratio') }}%">
              {{{ the_sub_field('video') }}}
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
            <div class="panel caseStudy__description">
              <div class="container">
                <div class="flex">
                  <div class="col-xs-12 col-lg-4 marginBottom--lg">
                    <h3 class="line--xl marginBottom--md underscore underscore--red">Client</h3>
                    <h3 class="text-thinHeader marginBottom--xl caseStudy__description__client">{{ get_the_title() }}</h3>

                    <h3 class="line--xl marginBottom--md underscore underscore--red">Deliverables</h3>
                    <div class="caseStudy__description__deliverables">
                      {{ the_sub_field('deliverables') }}
                    </div>
                  </div>
                  <div class="col-xs-12 col-lg-8 marginBottom--lg">
                    <div class="caseStudy__description__challenge">
                      <div class='caseStudy__straightDivider'></div>
                      {{ the_sub_field('challenge') }}
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
