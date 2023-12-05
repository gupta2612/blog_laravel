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
    <h1>File Upload Form</h1>
    <form action="fileupload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="docs" id="">
        <br>
        <br>
        <button type="submit">Upload</button>
    </form>

</body>
</html>
