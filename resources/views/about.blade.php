@extends('layouts.app')

@section('content')
<div class="container-fluid padding contact-banner bg-dark">
    <br>
    <div class="contact-header">
        <div class="welcome text-center padding">
            <h1 class="display-4">About Hostel Connect</h1>
            <hr class="light">
        </div>
        <p class="lead text-center">This is just a simple contact page to show you how things work</p>
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="md-12 col-md-6">
                    <p class="lead text-center">
                        <a href=".">
                            <i class="fa fa-phone"></i>
                            Our Policy
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="lead text-center">
                        <a href=".">
                            <i class="fa fa-envelope-open"></i>
                            Our Values
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<h1 class="about-header text-center">Who <we>Are</we> We? <br> <small>We provide the best
        hostel services you can ever get</small></h1><br><br>
<div class="container">

    <div id="content">
        <div class="about-content text-center jumbotron">
            <p>Hostel Connect is a start-up company with expertise in liaising with hostel <br>
                operators to make finding accommodation easier and more convenient for <br>
                students and other individuals. With an established network of hostels on our <br>
                site, we have shifted the onus from hostel operators to the customers. We<br>
                provide content that makes finding your dram accommodation possible. With <br>
                a rich customer service culture, that is we do all we can to make your hostel <br>
                search a touch less hectic. With our faultless expertise and experience in <br>
                solving accommodation problems, we are your one-stop shop for your off- <br>
                campus accommodation needs.
            </p>

            <div class="row">
                <div class="col-md-4">
                    <h2 class="about-header">Our Mission</h2>
                    <ul>
                        <li>Making your transition from home to your hostel hassle free</li>
                        <li>Providing comprehensive data on potential hostels</li>
                        <li>Providing more than 50+ hostels</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2 class="about-header">Our Vision</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                </div>
                <div class="col-md-4">
                    <h2 class="about-header">Our Values</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                </div>
            </div>

        </div>
        <hr>

    </div>

    <div class="container">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Meet the Team</h1>
                <hr>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('assets/img/img1.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card  mb-4 shadow-sm">
                    <img src="{{ url('assets/img/img1.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('assets/img/img1.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('assets/img/img1.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('assets/img/img1.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection