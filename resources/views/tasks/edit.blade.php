@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-lg p-4 w-100" style="max-width: 600px;">
        <h3 class="text-center mb-4 text-primary">Edit Task</h3>

        <form action="{{ route('tasks.update', [$user->id, $task->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $task->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea name="description" id="description" rows="4" class="form-control" required>{{ old('description', $task->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $task->status) }}">
            </div>

            <div class="d-grid mb-2">
                <button type="submit" class="btn btn-primary">Update Task</button>
            </div>

            <div class="text-center">
                <a href="{{ route('tasks.index', $user->id) }}" class="btn btn-outline-secondary btn-sm">Back to Tasks</a>
            </div>
        </form>
    </div>
</div>
@endsection
