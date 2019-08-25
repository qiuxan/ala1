<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{asset('css/page.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png
favicon.png')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{route('welcome')}}">
                <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo">
                <img class="logo-light" src="{{asset('img/logo-light.png')}}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>
            <ul class="nav nav-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about-page')}}">关于同乡会</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">联系同乡会</a>
                </li>



            </ul>


        </section>

        <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Log in</a>

    </div>
</nav><!-- /.navbar -->




<!-- Header -->

@yield('header')



<!-- Main Content -->
@yield('content')


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="/"><img src="{{asset('img/logo-dark.png')}}" alt="logo"></a>
            </div>

            <div class="col-6 col-lg-3 text-right order-lg-last">
                <div class="social">
                    Web Developed By <label for="qx-git"><a style="display: inline;" href="https://github.com/qiuxan">Ian Qiu</a></label>
                    <a class="social-git" href="https://github.com/qiuxan" id="qx-git"><i class="fa fa-git"></i></a>
                </div>
            </div>


        </div>
    </div>
</footer><!-- /.footer -->


<!-- Scripts -->
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
