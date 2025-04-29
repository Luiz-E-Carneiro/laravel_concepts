<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Keepinho</h1>

    <form action="{{ route('keep.gravar') }}" method="post">
        @csrf
        <textarea name="texto" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Gravar nota</button>
    </form>

    <hr>

    @foreach ( $notas as $nota)
        <div>
            {{ $nota->texto }}
        </div>
    @endforeach
</body>
</html>