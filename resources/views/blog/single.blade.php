@extends('main')

@section('title', "- $post->title")

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {{ Html::style('css/video.css') }}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code image',
            menubar: false,
            image_caption : true
        });
    </script>

@endsection

@section ('content')

  <div class="background-wrap">
    <video class="video-bg-elem1" preload="auto" autoplay="true" loop="loop" muted="muted">
      <source src="{{ URL::to('vid/backgr01.mp4') }}" type="video/mp4">
        Video not supported
      </video>
    </div>

<div class='row'>
    <div class='col-md-8 col-md-offset-2 wrappers'>
      <!--  <img src="{{ asset('images/' . $post->image) }}"/> -->
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h3><strong>Comment section</strong></h3>
         <h4 class="comment-count">Currently : {{ $post->comments()->count() }}
             <span class="glyphicon glyphicon-comment"></span></h4>
        @foreach($post->comments as $comment)
        <div class="comment wrappersC">
            <div class="author-info">
                <img src="{{ 'https://www.gravatar.com/avatar/' .
                     md5(strtolower(trim($comment->email))) . "?d=wavatar" }}" class="author-image">
                <div class="author-name">
                    <h4>{{ $comment->name }}</h4>
                    <p>{{ date('M j, Y - H:i ', strtotime( $comment->created_at )) }}</p>
                </div>
            </div>

            <div class="comment-content">
                {!! $comment->comment !!}
            </div>
        </div>
        @endforeach
    </div>
</div>

<hr>

<div class="row">
    <div id="comment-form" class="col-md-8 col-md-offset-2">
        {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
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
                {{ Form::label('comment', 'Comment') }}
                {{ Form::textarea('comment', null, ['rows' => '5', 'class' => 'form-control']) }}

                {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block btn-h5-spacing']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>
</div>


@endsection
