@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/schools" class="btn btn-outline-primary btn-sm">Go back</a>
                <hr>

                <img src="/storage/schools/{{$school->logo}}" width="100px" height="auto">
                <p>id : {{ $school->id }}</p>
                <p>name : {{ $school->name }}</p>
                <p>phone : {{ $school->email }}</p>
                <p>website : {{ $school->website }}</p>
                <p>logo : {{ $school->logo }}</p>
                <hr>

                <a href="/schools/{{ $school->id }}/edit" class="btn btn-outline-primary">Edit school</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete school</button>
                </form>
            </div>
        </div>
    </div>
@endsection
