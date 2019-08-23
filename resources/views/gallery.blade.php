@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="welcome padding">
        <!-- Do this dynamically -->
        <div class="container">
            <div class="row clear-fix">
                <div class="pull-left col-lg-6 padding">
                    <img src="{{ url($img) }}" height="100%" width="100%" class="img-responsive img-fluid" alt="Hostel Image">
                </div>
                <div class="pull-right col-lg-6 text-center paddding">
                    <div class="container">
                        <h1 class="display-4">{{ $hostel_name }}</h1>
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table">
                                    <caption>Some more hostel info</caption>
                                    <thead>
                                        <tr>
                                            <th>Property</th>
                                            <th>Value</th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Facilities</td>
                                            <td>
                                                @foreach($facilities as $facility)
                                                <li>{{ $facility }}</li>
                                                @endforeach
                                            </td>
                                            <td>{{ $location }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Welcome content -->

<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12">
            <h1>Welcome to
                <!-- Do this dynamically --> <i><b>{{ $hostel_name }}</b></i> </h1>
            <hr class="my-4">
        </div>
        <div class="col-12">
            <p class="lead">
                <!-- Do this dynamically -->
                {{ $description }}
            </p>
        </div>

    </div>
</div>

<!-- Image Gallery -->

<div class="album py-5 bg-light">
    <div class="container padding">
        <div class="row">
            @foreach($img1 as $imgs)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url($imgs) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-text">Some part of the hostel</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <hr class="my-4">
    </div>
</div>

<div class="container-fluid text-center padding register-btn">
    <a href="/register" class="btn btn-info">Register with Hostel Connect Now</a>
</div>
@endsection