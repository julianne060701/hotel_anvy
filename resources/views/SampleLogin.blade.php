@section('Navbar')
    @include('Customer.components.Navbar')
@endsection
@section('Footer')
    @include('Customer.components.Footer')
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANVY Hotel And Resort Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: url('public/images/banner.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            padding: 30px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 32px;
            color: rgb(51, 204, 255); 
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 400;
            color: #ccc;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
            background: #333;
            color: #fff;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #0099ff;
            outline: none;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #ccc;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: rgb(51, 204, 255);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0066ff;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
            color: #ccc;
        }

        a {
            color: rgb(51, 204, 255);
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .error-messages {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form id="formAuthentication" method="POST" action="{{ route('loginPost') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember" id="remember">
                    Remember me
                </label>
            </div>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="{{ route(name: 'SampleSignup') }}">Sign up</a></p>
        </form>
        <!--This is where the errors from AuthController will reflect or displayed-->
        @if ($errors->any())
            <div class="error-messages">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
