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
                    <div class="post">
                        <h3>Post title</h3>
                        <p>Post intro ...</p>
                        <a href="#" class="btn btn-primary">Continue reading</a>
                    </div>
                    <hr>
                    <div class="post">
                        <h3>Post title</h3>
                        <p>Post intro ...</p>
                        <a href="#" class="btn btn-primary">Continue reading</a>
                    </div>
                    <hr>
                    <div class="post">
                        <h3>Post title</h3>
                        <p>Post intro ...</p>
                        <a href="#" class="btn btn-primary">Continue reading</a>
                    </div>
                    <hr>
                    <div class="post">
                        <h3>Post title</h3>
                        <p>Post intro ...</p>
                        <a href="#" class="btn btn-primary">Continue reading</a>
                    </div>
                </div> <!-- articles end -->
                
                <div class="col-md-3 col-md-offset-1"> <!-- sidebar start -->
                    <h2>Sidebar</h2>
                </div> <!-- sidebar end -->
            </div>
@endsection
  