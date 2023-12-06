<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show List from Database Table | Home</title>
    <style>
        .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Show List from Database Table</h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Username</td>
            <td>Password</td>
            <td>Token Key</td>
            <td>Created</td>
            <td>Updated</td>
        </tr>
        @foreach ($collection as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['username'] }}</td>
            <td>{{ $item['password'] }}</td>
            <td>{{ $item['token_key'] }}</td>
            <td>{{ $item['created_at'] }}</td>
            <td>{{ $item['updated_at'] }}</td>
        </tr>
        @endforeach

    </table>
    <div class="pagination">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">{{ $collection->links() }}</a></li>
        </ul>
    </div>
</body>
</html>