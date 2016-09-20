@extends('main')

@section('title', '- Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code image',
            image_caption : true
        });
    </script>

@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <h1>Create New Post</h1>
        {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
            {{Form::label('title', 'Title')}}
            {{Form::text('title', null, array('class' => 'form-control input-lg',
                        'required' => '', 'maxlength' => '255'))}}

            {{Form::label('slug', 'Slug')}}
            {{Form::text('slug', null, array('class' =>'form-control',
                        'required'=>'', 'minlength' => '5', 'maxlength' => 255))}}

            {{ Form::label('featured_image', 'Upload Featured Image') }}
            {{ Form::file('featured_image') }}

            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', null, array('class' => 'form-control'))}}

            {{Form::submit('Post', array('class' => 'btn btn-success btn-lg btn-block',
                        'style' => 'margin-top : 7px;'))}}
        {!! Form::close() !!}

    </div>
</div>

@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}

@endsection
