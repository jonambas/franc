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
          <img src="{{ get_sub_field('image') }}" alt="">
        @endif

        @if(get_sub_field('type') === 'Video')
          {{{ get_sub_field('video') }}}
        @endif

      </div>
    @endwhile
  @endif



  <div class="container">
  </div>
</div>



@include('partials.footer')
