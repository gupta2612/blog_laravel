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
            <h1>Show List from Database Table</h1>
            <table class="table table-bordered">
                <tr>
                    <td scope="col">Id</td>
                    <td scope="col">Name</td>
                    <td scope="col">Username</td>
                    <td scope="col">Password</td>
                    <td scope="col">Token Key</td>
                    <td scope="col">Created</td>
                    <td scope="col">Updated</td>
                    <td scope="col">Action</td>
                </tr>
                @foreach ($collection as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->token_key }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td><a href="{{ 'delete/'.$item->id }}">Delete</a> | <a href="{{ 'edit/'.$item->id }}">Edit</a></td>
                </tr>
                @endforeach

            </table>
            {{-- <div class="pagi" style="margin-top: 20px">
                <a href="#">{{ $collection->links() }}</a>
            </div> --}}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>