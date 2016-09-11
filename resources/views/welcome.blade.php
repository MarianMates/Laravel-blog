@extends('main')

@section ('title', '- Home')

@section('content')
            <div class="row"> <!-- header start -->
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Welcome!</h1>
                        <p>...</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
                    </div>
                </div>
            </div> <!-- header end -->
            
            <div class="row">
                <div class="col-md-8"> <!-- articles start -->
                    
                    @foreach ($posts as $post)
                    
                        <div class="post">
                            <h3>{{ $post->title }}</h3>
                            <p>{{ substr($post->body, 0 , 300) }} {{ strlen($post->body)>300 ? '...' : '' }}</p>
                            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Continue reading</a>
                        </div>
                   
                        <hr>
                    
                    @endforeach
                </div> <!-- articles end -->
                
                <div class="col-md-3 col-md-offset-1"> <!-- sidebar start -->
                    <h2>Sidebar</h2>
                </div> <!-- sidebar end -->
            </div>
@endsection
  