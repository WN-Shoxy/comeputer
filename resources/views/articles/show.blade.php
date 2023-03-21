@extends("layouts.app")
@section("title", $article->title)

@section("content")
    <a href="{{ route('articles.index') }}" class=" absolute font-semibold ml-3 mt-3 text-black uppercase bg-white tracking-widest rounded border-2 border-black hover:bg-black hover:border-2 hover:border-transparent hover:text-white hover:transition-all hover:ease-in-out hover:duration-200 py-2 px-4">
        Retour
    </a>
    <div class="flex justify-center items-center p-5">
        <div class="py-5 px-16 bg-gray-300 rounded-xl flex flex-col w-96">
            <div class="ml-auto mr-auto">
                <img class="w-44" src="{{ asset('storage/'.$article->picture) }}">
            </div>
            <div class="mt-2">
                <h2 class="font-extrabold text-2xl mb-0">{{ $article->title }}</h2>
                <p class="mb-2 mt-0 break-all">{{ $article->content }}</p>
                <p class="">Prix : {{ $article->price }} €</p>
                <p class="mb-4">Quantité : {{ $article->qte }}</p>
            </div>
            <div class="flex justify-end">
                <a href="" class="bg-noir mb-0 text-white px-2 py-1 rounded">Ajouter au panier</a>
            </div>
        </div>
    </div>
@endsection
