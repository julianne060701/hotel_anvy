<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Login</title>
</head>
<body>
    <form id="formAuthentication" method="POST" action="{{route('loginPost')}}">
        @csrf

        <label>Email</label>
        <input type="email" id="email" name="email">
        <label>Password</label>
        <input type="password" id="password" name="password">
        <button type="submit">Submit</button>
        <div>
            <input type="checkbox" name="remember" id="remember">
            <label>Remember me</label>
        </div>

    </form>

    <!--This is where the errors from AuthController will reflect or displayed-->
    @if ($errors -> any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif

</body>
</html>
