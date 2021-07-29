@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <h2>Create staff page</h2>
                {{ Form::open(array('url' => 'staff')) }}

                <div class="form-group">
                    {{ Form::label('first name', 'first name') }}
                    {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('last name', 'last name') }}
                    {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('phone', 'phone') }}
                    {{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('school_id', 'school_id') }}
                    {{ Form::text('school_id', Input::old('logo'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Create staff', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
@endsection
