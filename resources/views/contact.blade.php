@extends('main')

@section ('title', '- Contact')

@section('stylesheets')

      {!! Html::style('css/parsley.css') !!}
      {{ Html::style('css/video.css') }}

@endsection

@section('content')

  <div class="background-wrap">
    <video class="video-bg-elem1" preload="auto" autoplay="true" loop="loop" muted="muted">
      <source src="{{ URL::to('vid/backgr01.mp4') }}" type="video/mp4">
        Video not supported
      </video>
    </div>

<h1 class="text-center">Contact me</h1>

<hr>

  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          {{ Form::open(['route' => 'contacts.store', 'method' => 'POST']) }}
          {!! csrf_field() !!}
          <div class="row">
              <div class="col-md-6">
                  {{ Form::label('name', 'Name') }}
                  {{ Form::text('name', null, ['class' => 'form-control',
                              'required' => '', 'maxlength' => '30']) }}
              </div>

              <div class="col-md-6">
                  {{ Form::label('email', 'Email') }}
                  {{ Form::text('email', null, ['class' => 'form-control',
                              'required'=>'','type'=>'email']) }}
              </div>

              <div class="col-md-12">
                  {{ Form::label('message', 'Message') }}
                  {{ Form::textarea('message', null, ['rows' => '5', 'class' => 'form-control']) }}

                  {{ Form::submit('Send message', ['class' => 'btn btn-success btn-block btn-h5-spacing']) }}
              </div>
          </div>

          {{ Form::close() }}
      </div>
  </div>

@endsection
