<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
                                initial-scale=1.0, 
                                maximum-scale=1.0, 
                                user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/jpg" href="/assets/img/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <title>Hostel Connect @yield('title')</title>
</head>

<body>
    <nav class="navi navbar navbar-nav navbar-dark bg-dark navbar-dropdown align-items-center navbar-toggleable-sm navbar-expand-md sticky-top" role="navigation" id="myTopnav">
        <div class="container-fluid nav-container">
            <a class="navbar-brand" href="#">
                <img src="{{ url('../assets/img/logo.jpg') }}" alt="logo" width="40px" height="30px">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#fall">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-links " id="fall">
                <ul class="nav navbar-nav ml-auto">
                    <li> <a href="/contact" class="nav-link">Contact Us</a> </li>
                    <li> <a href="/about" class="nav-link">About</a> </li>
                    <li> <a href="/register" class="nav-link">Register</a> </li>
                    <li class="active"> <a href="/" class="nav-link">Home</a> </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- 
    <nav>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <ul class="nav-links">
            <li> <a href="/contact">Contact Us</a> </li>
            <li> <a href="/about" >About</a> </li>
            <li> <a href="/register">Register</a> </li>
            <li class="active"> <a href="/">Home</a> </li>
        </ul>
    </nav> -->

    <div class="container">
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
        @endforeach
        @endif

        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
    </div>
    @yield('content')
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-text">
                        <h6>&copy;copyright | Hostel Connect Ltd 2019 | All rights Reserved</h6>
                        <h6>New to HC? <a href="/about">Visit our About page</a> or read our <a href="/terms-of-service">Terms of Service</a></h6>
                        <h6>or Learn more about our<a href="/privacy-policy"> Privacy Policy</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>