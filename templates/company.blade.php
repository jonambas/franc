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

          <div class="col-xs-12">
            <h3 class="line--xl marginBottom--lg underscore"><strong>Strategy &amp; Design</strong></h3>
            <h1 class="text-thinHeader marginBottom--xl">Approach</h1>
          </div>

          <div class="col-xs-12 col-lg-6">
            <p>Franc is a design driven animation partner. We believe strongly that animation is the most powerful and versatile tool in the communication arsenal. It can convey information and emotion in ways impossible in any other medium. By a process of simplifying, clarifying, and energizing, we are able to strip content down to its most comprehensible and visually arresting form. With versatility and consistency as the foundation for all designs, content can be reused and evolved across channels. Each element of an animation can be disassembled, reconfigured, reused, and repurposed as necessary.</p>
          </div>

          <div class="col-xs-12 col-lg-3">
            <img src="" />
          </div>

        </div>
      </div>
    </div>

    <div class="panel">
      <div class="container">
        <h1 class="line--xxl underscore marginBottom--xxl">Capabilities</h1>

        <div class="flex">

          <div class="col-xs-12 col-lg-5 marginBottom--xl">
            <div class="flex">
              <div class="col-xs-3">img</div>
              <div class="col-xs-9">
                <h2>Animation</h2>
                <p>From initial ideation through final delivery, we act as a creative partner. Animated content is produced with an eye to both execution and strategy. It is important for the success of every piece that it not only looks and sounds amazing, but serves a clear strategic goal.</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-5 col-lg-offset-1 marginBottom--xl">
            <div class="flex">
              <div class="col-xs-3">img</div>
              <div class="col-xs-9">
                <h2>Mixed Media</h2>
                <p>While animation is our primary focus, there are times when the addition of live action elements are needed. Partnerships with live action production companies allow us to capture that content and serve the needs of organizations more completely.</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-5 marginBottom--xl">
            <div class="flex">
              <div class="col-xs-3">img</div>
              <div class="col-xs-9">
                <h2>360 Video</h2>
                <p>Immersive experiences are powerful tools when paired with the right approach. The combination of 360° video with animated worlds and elements allows organizations to communicate with audiences in a completely new way.</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-5 col-lg-offset-1 marginBottom--xl">
            <div class="flex">
              <div class="col-xs-3">img</div>
              <div class="col-xs-9">
                <h2>Presentations</h2>
                <p>While presenters may have a captive audience, it is easy to lose their attention. Whether the audience is two or two thousand, the message and delivery must be engaging and, above all, memorable. The use of animation as a central component in presentations elevates them from ordinary to transformative.</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-5 marginBottom--xl">
            <div class="flex">
              <div class="col-xs-3">img</div>
              <div class="col-xs-9">
                <h2>Brand Graphics</h2>
                <p>Organizations have become media channels.. Like any channel, consistent branded elements are needed to reinforce the brand voice and aesthetic while efficiently creating a unified look across content and across vendors.</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-5 col-lg-offset-1 marginBottom--xl">
            <div class="flex">
              <div class="col-xs-3">img</div>
              <div class="col-xs-9">
                <h2>Flexible Solutions</h2>
                <p>The modularity and reusability inherent in animation can be wielded to design solutions for teams looking to create large amounts of high-end content quickly and efficiently. Libraries of custom animated elements are created and then used to form complete videos within days or hours rather than weeks. Short clips or looping elements can be placed within apps, on webpages, in ebooks, and on social media.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="leadershipSlider">
      <div class="container">
        <h1 class="leadershipSlider__title line--xxl underscore">Leadership</h1>
      </div>

      <div class="leadershipSlider__slides">

        {{--  Slide 1 --}}
        <div class="leadershipSlider__slide">
          <div class="container">
            <div class="flex middle-xs">
              <div class="col-xs-12 col-md-5">
                img
              </div>
              <div class="col-xs-12 col-md-7 col-lg-5">
                <h1 class="leadershipSlider__name">Asher Warren</h1>
                <h4><strong>Creative Director</strong></h4>
                <p>We believe that animation is one of the most powerful tools in the communication arsenal. It can convey information and emotion in ways impossible in any other medium. By a process of simplifying, clarifying, and energizing, we are able to strip content down to its most comprehensible and visually arresting form.</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Slide 2 --}}

          <div class="leadershipSlider__slide">
            <div class="container">
              <div class="flex middle-xs">
                <div class="col-xs-12 col-md-5">
                  img
                </div>
                <div class="col-xs-12 col-md-7 col-lg-5">
                  <h1 class="leadershipSlider__name">Mike Cheeyou</h1>
                  <h4><strong>Animator</strong></h4>
                  <p>We believe that animation is one of the most powerful tools in the communication arsenal. It can convey information and emotion in ways impossible in any other medium. By a process of simplifying, clarifying, and energizing, we are able to strip content down to its most comprehensible and visually arresting form.</p>
                </div>
              </div>
            </div>
          </div>

      </div>
      <div class="leadershipSlider__controls">
        <a class="leadershipSlider__next" href="" title="Next"></a>
        <a class="leadershipSlider__prev" href="" title="Previous"></a>
      </div>
    </div>

    @include('partials.footer')

  @endwhile
@endsection
