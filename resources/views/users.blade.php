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

    {{-- <form action="users" method="post">
        @csrf
        <input type="text" name="username" id="" placeholder="Enter username">
        <br>
        <span class="err">@error('username')
            {{ $message }}
        @enderror</span>
        <br>
        <input type="password" name="password" id="" placeholder="Password">
        <br>
        <span class="err">@error('password')
            {{ $message }}
        @enderror</span>
        <br>
        <button type="submit">Submit</button>
    </form> --}}

</body>
</html>
