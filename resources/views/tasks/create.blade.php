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
        <h3 class="text-center mb-4 text-success">Create Task for {{ $user->first_name }}</h3>

        <form action="{{ route('tasks.store', $user->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter task title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter task description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="pending">
            </div>

            <div class="d-grid mb-2">
                <button type="submit" class="btn btn-success">Create Task</button>
            </div>

            <div class="text-center">
                <a href="{{ route('tasks.index', $user->id) }}" class="btn btn-outline-secondary btn-sm">Back to Task List</a>
            </div>
        </form>
    </div>
</div>
@endsection
