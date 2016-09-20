@extends('main')

@section('title', '- Edit Comment')

@section('stylesheets')

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

@section('content')
<div class='row'>
    <div class='col-md-8 col-md-offset-2'>
        <h1>Edit Comment</h1>
        {{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method'=>'PUT']) }}

        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, ['class'=>'form-control', 'disabled'=>'disabled']) }}

        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, ['class'=>'form-control', 'disabled'=>'disabled']) }}

        {{ Form::label('comment', 'Comment') }}
        {{ Form::textarea('comment', null, ['class'=>'form-control']) }}

        {{ Form::submit('Update', ['class' => 'btn btn-success btn-block btn-h5-spacing']) }}

        {{ Form::close() }}
    </div>
</div>
@endsection
