@extends('main')

@section ('title', '- About')

  @section('stylesheets')

      {!! Html::style('css/styles.css') !!}

  @endsection

@section('content')
            <div class="row">
                <div class="col-md-12">
                    <h1>About the blog</h1>
                    <p>This blog was made with <a href="https://laravel.com/" target="_blank">
                      <img src="{{ asset('images/laravel.png') }}" id="a01"/></a></p>
                </div>
            </div>
@endsection
