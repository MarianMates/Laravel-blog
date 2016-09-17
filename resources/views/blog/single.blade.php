@extends('main')

@section('title', "- $post->title")

@section ('content')

<div class='row'>
    <div class='col-md-8 col-md-offset-2'>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h3><strong>Comment section</strong></h3>
         <h4 class="comment-count">Currently : {{ $post->comments()->count() }}
             <span class="glyphicon glyphicon-comment"></span></h4>
        @foreach($post->comments as $comment)
        <div class="comment">
            <div class="author-info">
                <img src="{{ 'https://www.gravatar.com/avatar/' . 
                     md5(strtolower(trim($comment->email))) . "?d=wavatar" }}" class="author-image">
                <div class="author-name">
                    <h4>{{ $comment->name }}</h4>
                    <p>{{ date('M j, Y - H:i ', strtotime( $comment->created_at )) }}</p>
                </div>
            </div>

            <div class="comment-content">
                {{ $comment->comment }}
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
                {{ Form::label('mane', 'Name') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>

            <div class="col-md-12">
                {{ Form::label('comment', 'Comment') }}
                {{ Form::textarea('comment', null, ['rows' => '5', 'class' => 'form-control']) }}

                {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>
</div>


@endsection