<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Prdoutos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-link-button href="{{ route('produtos.create') }}">
                        + Produto
                    </x-link-button>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100 flex">

                    @foreach($produtos as $produto)
                        <div class="max-w-30 flex flex-col items-center">
                            <h3 class="text-lg">{{ $produto->nome }}</h3>
                            <img src="{{ asset('storage'. '/' . $produto->imagem) }}" alt="imagem" class="w-full">
                            <p>{{ $produto->descricao }}</p>
                            <h4>R$ {{ $produto->preco }},00</h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
