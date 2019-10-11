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
    <link id="" rel="icon" type="image/jpg" href="/assets/img/mylogo.png" />
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <script type="text/javascript" src="/js/app.js"></script>
    <title>Hostel Connect @yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark default-color text-white sticky-top">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"><img width="40px" height="30px" src="{{ url('../assets/img/mylogo.png') }}" alt=""></a>
        </div>
        <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Menu">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/register"> <i class="fa fa-pencil"></i> Register</a></li>
                <li class="nav-item"><a class="nav-link" href="/rent"> <i class="fa fa-home"></i> Rent</a></li>
                <li class="nav-item"><a class="nav-link" href="/about"> <i class="fa fa-user"></i> About</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact"> <i class="fa fa-phone"></i> Contact Us</a></li>
            </ul>
        </div>
    </nav>


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
    <footer class="navbar-dark default-color section-padding">
        <div class="container footer-text padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="{{ url('../assets/img/mylogo.png') }}" width="100" height="100" alt="..." class="img-responsive">
                    <hr class="light">
                    <p> <i class="fa fa-phone"></i> 054-537-1541</p>
                    <p> <i class="fa fa-envelope"></i> hostelconnect00@gmail.com</p>
                    <!-- <p>GW-9060-2789</p> -->
                    <p> <i class="fa fa-location-arrow"></i> Accra, Ghana</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our Working Hours</h5>
                    <hr class="light">
                    <p> <i class="fa fa-calendar-times-o"></i> Monday -- Sunday</p>
                    <p>24/7</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Service Area</h5>
                    <hr class="light">
                    <p> <i class="fa fa-location-arrow"></i> Accra, Ghana, 00233</p>
                </div>
            </div>
        </div>
        <hr class="light">
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