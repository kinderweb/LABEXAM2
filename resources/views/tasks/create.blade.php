
@extends('layout')

@section('content')
    <div class= "row h-100 align-items-center justify-content-center">
        <div class="col col-lg-11 col-md-10 col-sm-12">
            <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-check mb-3">
            <input type="checkbox" name="is_completed" value="1" class="form-check-input" id="completed">
            <label for="completed" class="form-check-label">Completed?</label>
            </div>

            <button type="submit" class="btn btn-outline-success">Create Task</button>
            </form>
        </div>
    </div>
@endsection