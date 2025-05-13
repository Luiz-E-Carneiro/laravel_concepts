<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alunos</h1>

    <form action="{{ route('aluno.gravar') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Aluno">
        <input type="number" name="idade" placeholder="Idade do Aluno">
        <input type="text" name="turma" placeholder="Nome da Turma">
        <input type="number" name="ano" placeholder="Ano Letivo do Aluno">
        
        <br>
        <button type="submit">Gravar aluno</button>
    </form>

    <hr>

    @foreach ( $alunos as $aluno)
        <div>
            <ul>
                <li>
                    Nome: {{ $aluno->nome }}
                </li>
                <li>
                    Idade: {{ $aluno->idade }}
                </li>
                <li>
                    Turma: {{ $aluno->turma }}
                </li>
                <li>
                    Ano: {{ $aluno->ano }}
                </li>
            </ul>
            <a href="{{ route('aluno.editar', $aluno->id) }}">Editar</a>
            <a href="{{ route('aluno.deletar', $aluno->id) }}">Delete</a>
        </div>
        <br>
    @endforeach
</body>
</html>