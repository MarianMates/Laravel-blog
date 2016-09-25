<!DOCTYPE html>
<html lang="en">

    @include('partials._head')

    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<!--                    <img src="../../public/img/logo.jpg" style="width:160px;height:50px;">-->
                    <a class="navbar-brand" href="/">World of Tanks</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{Request::is('/') ? 'active':''}}"><a href="/">Home</a></li>
                        <li class="{{Request::is('blog') ? 'active':''}}"><a href="/blog">Blog</a></li>
                        <li class="{{Request::is('about') ? 'active':''}}"><a href="/about">About</a></li>
                        <li class="{{Request::is('contact') ? 'active':''}}"><a href="/contact">Contact</a></li>
                    </ul>

                    @include('partials._search')

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://eu.wargaming.net/" target="_blank">WarGaming</a></li>

                        @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        @else

                        <a href='{{ route('login') }}' class='btn btn-default btn-h5-spacing'>Login</a>

                        @endif

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            @include('partials._messages')

            @yield('content')

            <hr>

        </div> <!-- container end -->

        <footer class="text-center">Marian Mates @ mates.marian_n@yahoo.com</footer>


        @include('partials._scripts')
        @yield('scripts')
    </body>
</html>
