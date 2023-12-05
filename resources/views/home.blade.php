<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Http Client | Home</title>
</head>
<body>

    <h1>API Call</h1>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Email</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Image</td>
        </tr>
        @foreach ($collection as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['first_name'] }}</td>
            <td>{{ $item['last_name'] }}</td>
            <td><img src="{{ $item['avatar'] }}"></td>
        </tr>
        @endforeach

    </table>

</body>
</html>