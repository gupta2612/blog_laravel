<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade</title>
</head>
<body>
    <h1>Hello Blade</h1>

    {{-- <h1 class="h">Auto Plus {{ 10+10 }}</h1> --}}
    {{-- <h1 class="h">User Count {{ count($user_name) }}</h1> --}}


    {{-- if and else condition --}}
    {{-- @if ($user_name == 'Manish')
    <h1>{{ $user_name }}</h1>
    @elseif($user_name == 'Gupta')
    <h1>{{ $user_name }}</h1>
    @else
    <h1>Unknown User</h1>
    @endif --}}

    {{-- for loop --}}
    @for($i=0; $i<10; $i++)
    <p>{{ $i }}</p>
    @endfor

    {{-- foreach loop --}}
    @foreach ($user_name as $user)
    <h2>{{ $user }}</h2>
    @endforeach

</body>
</html>
