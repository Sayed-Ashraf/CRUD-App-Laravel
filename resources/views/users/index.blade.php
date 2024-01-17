<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>CRUD App</title>
</head>
<body>
    <div class="container-fluid bg-dark vh-100 d-flex justify-content-center align-items-center">
        <div class="rounded w-50  p-3 bg-white">
            <h2>Users List</h2>
            <div class="d-flex justify-content-end">
                <a href="{{route('users.create')}}" class="btn btn-success">Add +</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $user )
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->gender}}</td>
                        <td>
                            <a href="/users/{{$user->id}}" class="btn btn-info">View</a>
                            <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                            <a href="/users/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>