<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$data['title'] or ""}}  Admin - TechFest</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('style')
</head>
<body>
<div id="app">
    <form action="{{route('admin.loginPost')}}" method="post">
        @csrf
        <label>
            User Name :
            <input type="text" name="name" required autofocus/>
        </label>
        <label>
            Password :
            <input type="password" name="password" required >
        </label>
        <input type="submit">
    </form>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>