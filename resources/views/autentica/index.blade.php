<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
</head>

<body>
    
    @if (Auth::user())
        <h4>Olá {{ Auth::user()->name }}</h4>
        <a href="{{ route('autentica.logout') }}">Deslogar agora!</a>
        @else
        <h2>Você ainda n está logado!!!</h2>
        <a href="{{ route('autentica.login') }}">Fazer login agora!</a>
    @endif

    @if ($errors->any())
        <h5 style="color:red">
            Erro, magrão
        </h5>
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('autentica.gravar') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        <br>
        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
        <br>
        <input type="password" name="password" placeholder="Pass">
        <br>
        <input type="password\" name="password_confirmation">
        <br>
        <button type="submit">Gravar</button>
    </form>
    <hr>
    @foreach ($usuarios as $user)
        <li>{{ $user->name }}</li>
    @endforeach
    
</body>

</html>