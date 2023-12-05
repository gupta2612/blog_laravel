<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <h2>Hello, {{ session('username') }}</h2>

    <h4><a href="/logout">logout</a></h4>

</body>
</html>