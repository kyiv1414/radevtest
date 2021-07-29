@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 pt-2">
                <h2>Create school page</h2>
                {{ Form::open(array('url' => 'schools', 'files' => true )) }}

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
                    {{ Form::label('image', 'image') }}
                    {{ Form::file('image', array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Create school', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
@endsection
