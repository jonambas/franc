@extends('layouts.base')

@section('content')

  @if (!have_posts())
    <div class="container">
      <div class="container--contact flex text-center middle-xs">
        <div class="col-xs">
          <p class="alert alert-warning text-center">
            {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
          </p>
        </div>
      </div>
    </div>


  @endif
@endsection
