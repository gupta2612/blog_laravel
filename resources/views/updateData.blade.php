<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save Data in Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Update Database Table</h1>
         <h1>Save Data in Database</h1>
            <div class="col-lg-12">
                <form method="POST" action="/edit" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value={{ $collection['id'] }}>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $collection['name'] }}">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Enter Username" value="{{ $collection['username'] }}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ $collection['password'] }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>