<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Login</h2>
    <form action="{{ route('autentica.login') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
        <br>
        <input type="password" name="password" placeholder="Pass">
        <button type="submit">Logar</button>
    </form>
</body>

</html>