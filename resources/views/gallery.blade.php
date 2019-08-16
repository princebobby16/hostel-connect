@extends('layouts.app')

@section('content')
<div class="container-fluid jumbo">
    <div class="jumbotron">
        <div class="welcome text-center padding">
            <!-- Do this dynamically -->
            <h1 class="display-4">Ark Hostel</h1>
        </div>
    </div>

    <!-- Welcome content -->

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-3">Welcome to <!-- Do this dynamically --> ark hostel</h1>
            </div>

            <hr/>

            <div class="col-12">
                <p class="lead">
                    <!-- Do this dynamically -->
                    Welcome to ark hostel! Here we have different kinds of rooms. 
                    We also have a kitchen and each room has its own bathroom. Again
                    each room has an AC... yeah I mean it AC ... cool right?
                </p>
            </div>

        </div>
    </div>

</div>
@endsection