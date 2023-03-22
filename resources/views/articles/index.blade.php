@extends('layouts.app')
@section("title", 'Nos Produits')
@section('content')

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

    <div class="flex flex-wrap justify-center md:justify-start lg:justify-start lg:flex-wrap">
        @foreach ($article as $index => $article)
            <div class="flex p-3">
                <div class="p-3 bg-gray-300 rounded-xl">
                    <a href="{{ url('articles/'. $article->id) }}" class=""><img class="w-44 ml-auto mr-auto" src="{{ asset('storage/'.$article->picture) }}"></a>
                    <h2 class="font-extrabold text-2xl">{{ $article->title }}</h2>
                    <p class="mb-2">{{ Str::limit($article->content, 25) }}</p>
                    <div class="flex justify-end">
                        <a href="{{ url('articles/'. $article->id) }}" class="bg-noir mb-0 text-white px-2 py-0.5 rounded">En savoir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection