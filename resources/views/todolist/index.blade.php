@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href = "{{ route('lists.create') }}" class="btn btn-primary mb-3">Add one</a>
        </div>
        @foreach ($user->toDoLists as $toDoList)
            <div>
                <a href = "{{ route('lists.show', $toDoList->id) }}">{{ $toDoList->title }}</a>
            </div>
        @endforeach
    </div>
@endsection
