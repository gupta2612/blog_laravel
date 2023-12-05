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
    <h1>Flash Form</h1>
    @if (session('name'))
    <h3>Data Saved for {{ session('name') }}</h3>

    @endif
    <form action="storedata" method="POST">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter Name">
        <br>
        <br>
        <input type="text" name="email" id="" placeholder="Enter Email">
        <br>
        <br>
        <input type="text" name="mobile" id="" placeholder="Enter Mobile">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
