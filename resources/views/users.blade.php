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
    <form action="users" method="POST">
        @csrf
        <input type="text" name="username" id="" placeholder="Enter username">
        <br>
        <br>
        <input type="password" name="password" id="" placeholder="Password">
        <br>
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>
