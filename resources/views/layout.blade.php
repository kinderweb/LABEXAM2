<!DOCTYPE html>
<html>
<head>
<title>Task Manager</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>
        body {
    background: linear-gradient(135deg,rgb(160, 212, 167), #f1f8e9);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    min-height: 100vh;
    margin: 0;
    padding: 0;
    }

    .container {
    background: rgb(195, 224, 161);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    margin-top: 40px;
    }

    h2 {
    color: #00796b;
    font-weight: bold;
    }

    .table-header-custom{
        background-color:rgb(186, 243, 236);
        color:white;
    }
</style>
</head>
<body>
<div class="container mt-5">
<h2 class="mb-4 text-center bg-success p-2 text-white bg-opacity-75">MANAGE YOUR TASK NOW!</h2>
<nav>
<a href="{{ route('tasks.index') }}" class="btn btn-outline-primary mb-3"><i class="bi bi-arrow-down"></i> All Tasks</a>
<a href="{{ route('tasks.create') }}" class="btn btn-outline-success mb-3"><i class="bi bi-arrow-up"></i>Add Task</a>
</nav>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@yield('content')
</div>
</body>
</html>