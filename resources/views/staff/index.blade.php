@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-12">

                        <h2>Index Staff Page</h2>
                        <p>list:</p>
                    </div>

                </div>
                @forelse($staff as $staff_item)
                    <ul>
                        <li><a href="./staff/{{ $staff_item->id }}"> {{ $staff_item->first_name }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No staff</p>
                @endforelse
                {{ $staff->links() }}
            </div>
        </div>
    </div>
@endsection
