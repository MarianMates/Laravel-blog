@extends('main')

@section ('title', '- About')

  @section('stylesheets')

      {!! Html::style('css/styles.css') !!}
      {{ Html::style('css/video.css') }}

  @endsection

@section('content')

  <div class="background-wrap">
    <video class="video-bg-elem1" preload="auto" autoplay="true" loop="loop" muted="muted">
      <source src="{{ URL::to('vid/backgr01.mp4') }}" type="video/mp4">
        Video not supported
      </video>
    </div>

            <div class="row">
                <div class="col-md-12 wrappers">
                    <h1>About the blog</h1>
                    <p>This blog was made with <a href="https://laravel.com/" target="_blank">
                      <img src="{{ asset('images/laravel.png') }}" id="a01"/></a></p>
                </div>
            </div>
@endsection
