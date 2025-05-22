<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIXEIRA</title>
</head>

<body>
    <h1>Keepinho 🐏</h1>

    <hr>
    @if (session('sucesso'))
        <div style="background-color: aquamarine;">
            {{ session('sucesso') }}
        </div>
    @endif

    @foreach ($notas as $nota)
        <div>
            {{ $nota->titulo }}
            <br>
            {{ $nota->texto }}
        </div>
        <br>
        <a href="{{ route('keep.restaurar', $nota->id) }}">Restaurar</a>
        <br>
    @endforeach

    <a href="{{ route('keep.index') }}">Voltar a tela inicial</a>
</body>

</html>