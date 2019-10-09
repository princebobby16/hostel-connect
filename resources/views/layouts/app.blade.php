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
    <link id="" rel="icon" type="image/jpg" href="/assets/img/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <script type="text/javascript" src="/js/app.js"></script>
    <title>Hostel Connect @yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"><img width="40px" height="30px" src="{{ url('../assets/img/logo.jpg') }}" alt=""></a>
        </div>
        <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Menu">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="/rent">Rent an Apartment</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
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
    <footer class="navbar-dark bg-dark section-padding">
        <div class="container footer-text padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <h1>Logo</h1>
                    <hr class="light">
                    <p>555-555-5555</p>
                    <p>email@email.com</p>
                    <p>GW-9060-2789</p>
                    <p>Accra, Ghana</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our School Hours</h5>
                    <hr class="light">
                    <p>Monday -- Friday</p>
                    <p>9am - 4:30pm</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Service Area</h5>
                    <hr class="light">
                    <p>City, State, 00233</p>
                    <p>City, State, 00233</p>
                    <p>City, State, 00233</p>
                    <p>City, State, 00233</p>
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