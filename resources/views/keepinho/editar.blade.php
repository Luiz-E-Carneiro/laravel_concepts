<h2>Edit keepinho</h2>

<form action="{{ route('keep.editarGravar') }}" method="post">
    <!-- VERY NICE -->
    @method('PUT');
    @csrf

    <input type="hidden" name='id' value="{{ $nota->id }}">
    <textarea name="texto" cols="30" rows="10">{{ $nota->texto }}</textarea>
    <br>
    <button type="submit">Gravar nota</button>
</form>


