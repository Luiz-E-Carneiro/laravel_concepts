<h2>Edit keepinho</h2>

<form action="{{ route('keep.editarGravar') }}" method="post">
    <!-- VERY NICE -->
    @method('PUT')
    @csrf
    @if($errors->any())
        <h5 style="color:red">
            Erro, magrão
        </h5>
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif
    <input type="hidden" name='id' value="{{ $nota->id }}">
    <input name="titulo" value="{{ $nota->titulo }}"></input>
    <textarea name="texto" cols="30" rows="10">{{ $nota->texto }}</textarea>
    <br>
    <button type="submit">Gravar nota</button>
</form>


