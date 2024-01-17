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
            <div class="card">
                <div class="card-header">
                User Details
                </div>
                <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <h6 class="card-text">{{$user->age}}</h6>
                <h6  class="card-text">{{$user->gender}}</h6>
                <a href="/users"  class="mt-3 btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>