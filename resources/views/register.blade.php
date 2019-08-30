@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center register-header hostel-heading">Submit a request</h1>
    {!! Form::open(['url' => '/register/submit', 'method' => 'POST']) !!}
    <fieldset class="form">
        <!-- First Name -->
        <div class="form-group">
            {!! Form::label('text', 'First Name:', ['class' => 'col-lg-10 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('first_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Mark']) !!}
            </div>
        </div>
        <!-- Last Name -->
        <div class="form-group">
            {!! Form::label('text', 'Last Name:', ['class' => 'col-lg-10 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('last_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Opare']) !!}
            </div>
        </div>
        <!-- Email -->
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'col-lg-10 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email@emil.com']) !!}
            </div>
        </div>

        <!-- Password -->
        <div class="form-group">
            {!! Form::label('phone_number', 'Phone number:', ['class' => 'col-lg-10 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::tel('phone_number', $value = null, ['class' => 'form-control', 'placeholder' => '2332345678']) !!}

            </div>
        </div>

        <!-- Text Area -->
        <div class="form-group">
            {!! Form::label('textarea', 'Give some more details', ['class' => 'col-lg-10 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::textarea('textarea', $value = null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Add few details if you can to make us understand you better']) !!}
            </div>
        </div>

        <!-- Select With One Default -->
        <div class="form-group">
            {!! Form::label('select', 'Select School', ['class' => 'col-lg-10 control-label'] ) !!}
            <div class="col-lg-10">
                {!! Form::select('select', ['L' => 'University of Ghana', 'G' => 'Gimpa', 'U' => 'UPS'], 'S', ['class' => 'form-control' ]) !!}
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
@endsection