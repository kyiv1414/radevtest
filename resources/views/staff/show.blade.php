@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/staff" class="btn btn-outline-primary btn-sm">Go back</a>
                <hr>

                <p>id : {{ $staff->id }}</p>
                <p>first_name : {{ $staff->first_name }}</p>
                <p>last_name : {{ $staff->last_name }}</p>
                <p>email : {{ $staff->email }}</p>
                <p>phone : {{ $staff->phone }}</p>
                <p>school_id : {{ $staff->school_id }}</p>
                <hr>

                <a href="/staff/{{ $staff->id }}/edit" class="btn btn-outline-primary">Edit staff</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete staff</button>
                </form>
            </div>
        </div>
    </div>
@endsection
