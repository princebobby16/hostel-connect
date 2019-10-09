@extends('layouts.app')

@section('content')
<div class="container-fluid padding contact-banner default-color">
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

            <div class="row padding">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <h2 class="card-title about-header">Our Mission</h2>
                        <div class="card-body">
                            <div class="card-text">
                                <ul>
                                    <li>Making your transition from home to your hostel hassle free</li>
                                    <li>Providing comprehensive data on potential hostels</li>
                                    <li>Providing more than 50+ hostels</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <h2 class="about-header">Our Mission</h2>
                    <ul>
                        <li>Making your transition from home to your hostel hassle free</li>
                        <li>Providing comprehensive data on potential hostels</li>
                        <li>Providing more than 50+ hostels</li>
                    </ul>
                </div> -->
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
        <hr class="light-100">
    </div>

    <div class="container">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Meet the Team</h1>
                <hr class="light-100">
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('../assets/img/dp.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card  mb-4 shadow-sm">
                    <img src="{{ url('../assets/img/dp.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('../assets/img/dp.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('../assets/img/dp.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('../assets/img/dp.jpeg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Rolland Torwoe</h4> -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
        <h1 class="text-center display-4">Where are we? ...</h1>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.431350230762!2d-0.19841844993827387!3d5.650567334242808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9c7ebaeabe93%3A0xd78257e67498c1a0!2sUniversity%20of%20Ghana%2C%20Legon!5e0!3m2!1sen!2sgh!4v1570620237297!5m2!1sen!2sgh" width="1070" height="500" frameborder="0" allowfullscreen=""></iframe>
    </div>

</div>
@endsection