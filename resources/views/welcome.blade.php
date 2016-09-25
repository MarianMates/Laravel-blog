@extends('main')

@section ('title', '- Home')

  @section('stylesheets')

    {{ Html::style('css/video.css') }}

  @endsection

  @section('content')
    <!--          <div class="row">
    <div class="col-md-12">
    <div class="jumbotron">
    <h1 class="hw">Welcome!</h1>
  </div>
</div>
</div> -->
<div class="background-wrap">
  <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
    <source src="{{ URL::to('vid/intro480.mp4') }}" type="video/mp4">
      Video not supported
    </video>
  </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1 class="hw">Welcome!</h1>
  </div>
  </div>

@endsection
