<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade</title>
</head>
<body>

    {{-- Include view in View page --}}
    @include('header')

    <h1>Hello Blade</h1>

    @include('inner')

    {{-- foreach loop --}}
    @foreach ($user_name as $item)
    <h2>{{ $item }}</h2>
    @endforeach

    {{-- Csrf token --}}
    @csrf

    @include('footer')

    {{-- Php in js --}}
    <script>
        var data=@json($user_name);
        console.warn(data[0]);
    </script>

</body>
</html>
