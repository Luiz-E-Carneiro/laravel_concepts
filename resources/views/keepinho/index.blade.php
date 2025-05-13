<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Keepinho</h1>

    @if($errors->any())
        <h5 style="color:red">
            Erro, magrão
        </h5>
    @endif
    <form action="{{ route('keep.gravar') }}" method="post">
        @csrf
        <input type="text" name="titulo">
        <textarea name="texto" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Gravar nota</button>
    </form>

    <hr>

    @foreach ($notas as $nota)
        <div>
            {{ $nota->titulo }}
        <br>
            {{ $nota->texto }}
        </div>
        <br>
        <a href="{{ route('keep.editar', $nota->id) }}">Editar</a>
        <form action="{{ route('keep.apagar', $nota->id) }}" method="post">
            @method('DELETE')
            @csrf
            <input type="submit" value="Apagar">
        </form>
    @endforeach
</body>

</html>