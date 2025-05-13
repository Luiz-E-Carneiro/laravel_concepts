<h2>Edit Aluno</h2>

<form action="{{ route('aluno.editarGravar') }}" method="post">
    <!-- VERY NICE -->
    @method('PUT')
    @csrf

    <input type="hidden" name='id' value="{{ $aluno->id }}">
    <br>
    <input type="text" name="nome" value="{{ $aluno->nome }}" >
    <br>
    <input type="number" name="idade" value="{{ $aluno->idade }}" >
    <br>
    <input type="text" name="turma" value="{{ $aluno->turma }}" >
    <br>
    <input type="number" name="ano" value="{{ $aluno->ano }}" >
    <br>
    <button type="submit">Gravar aluno</button>
</form>