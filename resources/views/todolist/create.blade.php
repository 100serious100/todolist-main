@extends('layouts.main')
@section('content')
    <div>
        <form action={{ route('lists.store') }} method="post">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter the task">
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
