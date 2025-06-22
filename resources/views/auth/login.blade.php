<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>


<body>
    @if ($errors->any())
        <div>
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif
    <div class="login-form">
        <h2>Login</h2>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
