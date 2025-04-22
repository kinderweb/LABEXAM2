@extends('layout')

@section('content')
    <div class= "row h-100 align-items-center justify-content-center">
       <div class="col col-lg-11 col-md-10 col-sm-12">
            <table class="table table-bordered">
                <thead class= "table-header-custom">
                <tr>
                <th>Title </th>
                <th>Description</th>
                <th>Completed</th>
                <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                @if($task->is_completed)
                <span class="badge bg-success">Yes</span>
                @else
                <span class="badge bg-warning text-dark">No</span>
                @endif
                </td>
                <td>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash3-fill"></i></button>
                </form>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>   
    </div>
@endsection
