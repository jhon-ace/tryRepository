<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INDEX</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <br>
                <div class="text-center text-uppercase text-danger">
                    <h2>Employee Information</h2>
                </div>
                <div class="text-end mb-2">
                    <a class="btn btn-info" href="{{ route('employees.create') }}">Add Employee</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Employee ID</th>
                    <th>Employee Fullname</th>
                    <th>Employee Email Address</th>
                    <th>Employee Username</th>
                    <th>Employee Password</th>
                    <th>Employee Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->fullname }}</td>
                        <td>{{ $employee->email_address }}</td>
                        <td>{{ $employee->username }}</td>
                        <td>
                            <form action="{{ route('employees.destroy',$employee->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>

                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $employees->links() !!}
    </div>
</body>
</html>
