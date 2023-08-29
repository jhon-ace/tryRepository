<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INDEX</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="text-center">
    <h2>Add Employee Page</h2>
    <a href="{{route('employees.index')}}"></a>
    <br>

    @if(session('status'))
        {{session('status')}}
    @endif

    <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        Fullname: <input type="text" name="fullname"><br><br>
        @error('fullname')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }} </div>
        @enderror

        Email Address: <input type="text" name="email_address"><br><br>
        @error('email_address')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }} </div>
        @enderror
        Username: <input type="text" name="username"><br><br>
        @error('username')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }} </div>
        @enderror
        Password: <input type="text" name="password"><br><br>
        @error('password')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }} </div>
        @enderror
        Status: <input type="text" name="status"><br><br>
        @error('status')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }} </div>
        @enderror
        <button type="submit" class="btn btn-outline-success">ADD EMPLOYEE</button>

    </form>


</body>
</html>
