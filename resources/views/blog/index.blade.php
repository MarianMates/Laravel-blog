@extends('main')

@section('title', '- Blog')

@section('stylesheets')

  {{ Html::style('css/video.css') }}

@endsection

@section('content')

  <div class="background-wrap">
    <video class="video-bg-elem1" preload="auto" autoplay="true" loop="loop" muted="muted">
      <source src="{{ URL::to('vid/backgr01.mp4') }}" type="video/mp4">
        Video not supported
      </video>
    </div>

@foreach ($posts as $post)
<div class='row'>
    <div class="col-md-10 col-md-offset-1 wrappers">
        <h2>{{ $post->title }}</h2>
        <h5>Published: {{ date('M j, Y H:i', strtotime($post->created_at)) }}</h5>

        <p>{!! substr($post->body, 0, 250) !!}
            {{ strlen(strip_tags($post->body)) > 250 ? '...' : '' }}</p>

        <a href="{{ url('blog/'.$post->slug) }}" class='btn btn-primary cb'>Continue reading</a>

    </div>
</div>

@endforeach

<div class='row'>
    <div class='col-md-12'>
        <div class='text-center'>
            {!! $posts->links() !!}
        </div>
    </div>
</div>

@endsection
