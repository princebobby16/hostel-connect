<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../assets/img/pic1.jpg');
            background-repeat: no-repeat;
            height: 100vh;
            background-size: cover;
        }
    </style>
    <title>Condo Rentals & Hostels - Hostel Connect</title>
</head>

<body>
    <div class="navbar-header">
        <a href="#" class="navbar-brand"><img width="120px" height="120px" src="{{ url('../assets/img/logo2.png') }}" alt=""></a>
    </div>
    <div class="welcome-page">
        <!-- <h1 class="text-center">Welcome Page</h1> -->
        <div class="container">
            {!! Form::open(['url' => '/home', 'method' => 'GET']) !!}
            <fieldset class="info-shadow">

                <!-- Email -->
                <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'col-lg-10 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email@emil.com']) !!}
                    </div>
                </div>

                <!-- Select With One Default -->
                <div class="form-group">
                    {!! Form::label('where', 'Where?', ['class' => 'col-lg-10 control-label'] ) !!}
                    <div class="col-lg-10">
                        {!! Form::select('select', ['E' => 'East of Legon', 'G' => 'Gimpa', 'W' => 'West of Legon'], 'S', ['class' => 'form-control' ]) !!}
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                    </div>
                </div>
            </fieldset>
            {!!Form::close()!!}
        </div>
    </div>

</body>

</html>