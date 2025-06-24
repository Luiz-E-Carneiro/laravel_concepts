<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Carrinho!!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100 flex">
                    
                    @if(count($carrinho) > 0)
                        @foreach($carrinho as $id => $item)
                            <div class="max-w-30 flex flex-col items-center">
                                <h3 class="text-lg">{{ $item->nome }}</h3>
                                <img src="{{ asset('storage'. '/' . $item->imagem) }}" alt="imagem" class="w-full">
                                <p>{{ $item->descricao }}</p>
                                <h4>R$ {{ $item->preco }},00</h4>

                                <div>
                                    <x-link-button href="{{ route('carrinho.delete', $id) }}">
                                        Remover
                                    </x-link-button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2>Sem produto</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
