@extends('layouts.main')
@section('content')
    <div></div>
    <div>
        {{ $list->title }}
    </div>
    <form action="{{ route('lists.delete', $list->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    <div class="form-group mb-3">
        <a href = "{{ route('lists.index') }}" class="btn btn-outline-primary mb-3">Back</a>
    </div>
    </div>
@endsection
