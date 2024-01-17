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
            <h2>Create User</h2>
            <form action="/users" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Age</label>
                    <input type="number" name="age" id="" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Gender</label>
                    <input type="text" name="gender" id="" class="form-control">
                </div>
                <div>
                    <input type="submit" value="Add" class="btn btn-success">
                    <a href="/users" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>