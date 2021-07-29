@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-12">

                        <h2>Index Schools Page</h2>
                        <p>list:</p>
                    </div>

                </div>
                @forelse($schools as $school)
                    <ul>
                        <li><a href="./schools/{{ $school->id }}"> {{ $school->name }}</a></li>
                    </ul>


                @empty
                    <p class="text-warning">No schools</p>
                @endforelse
                {{ $schools->links() }}
            </div>
        </div>
    </div>
@endsection
