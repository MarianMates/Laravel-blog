@extends('main')

@section('title', '- Edit Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code'
        });
    </script>

@endsection

@section('content')

<div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['class' => 'form-control input-lg',
                    'required' => '', 'maxlength' => '255']) }}
        
        {{Form::label('slug', 'Slug')}}
        {{Form::text('slug', null, ['class' =>'form-control',
                    'required'=>'', 'minlength' => '5', 'maxlength' => 255])}}

        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created at:</dt>
                <dd>{{ date('M j, Y H:i', strtotime($post->created_at))}}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Last updated:</dt>
                <dd>{{ date('M j, Y H:i', strtotime($post->updated_at))}}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=> 'btn btn-danger btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {{ Form::submit('Save changes', ['class'=> 'btn btn-success btn-block']) }}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection