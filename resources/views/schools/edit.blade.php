@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">

                {{ Form::model($school, array('route' => array('schools.update', $school->id), 'method' => 'PUT')) }}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('website', 'website') }}
                    {{ Form::text('website', Input::old('website'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('logo', 'logo') }}
                    {{ Form::text('logo', Input::old('logo'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Update school', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>

@endsection
