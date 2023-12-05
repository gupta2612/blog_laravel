<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <style>
        .err{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Login Form</h1>

        {{-- single line error show

            @if ($errors->any())
        @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
        @endif --}}

    {{-- Method GET

         <form action="users" method="GET">

      End Method GET  --}}



    {{-- Method POST --}}
    <form action="users" method="POST">
        @csrf

        {{-- @method('PUT') --}}

        {{-- @method('DELETE') --}}

        <input type="text" name="username" id="" placeholder="Enter username">
        <br>
        <br>
        <input type="password" name="password" id="" placeholder="Password">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
