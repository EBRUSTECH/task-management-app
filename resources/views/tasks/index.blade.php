@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>{{ $user->first_name }}'s Tasks</h2>
        <a href="{{ route('tasks.create', $user->id) }}" class="btn btn-primary">+ Create Task</a>
    </div>

    @if($tasks->isEmpty())
        <div class="alert alert-info">No tasks found.</div>
    @else
        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $task->title }}</strong> - <span class="badge bg-warning text-dark">{{ $task->status }}</span><br>
                        <small>{{ $task->description }}</small>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('tasks.edit', [$user->id, $task->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('tasks.destroy', [$user->id, $task->id]) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
