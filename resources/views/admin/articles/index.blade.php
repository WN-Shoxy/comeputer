@extends('layouts.app')
@section('title', 'Créer un article')
@section('content')
	

	
	<div class="flex flex-wrap">
		@foreach ($article as $index => $article)
			<div class="flex p-5">
				<div class="p-5 bg-gray-300 rounded-xl">
					<a href="{{ url('articles/'. $article->id) }}" class=""><img class="w-44" src="{{ asset('storage/'.$article->picture) }}"></a>
					<h2 class="font-extrabold text-2xl">{{ $article->title }}</h2>
					<p class="mb-2">{{ Str::limit($article->content, 20) }}</p>
					<div class="flex justify-end">
						<a href="{{ route('admin.articles.edit', $article) }}" class="bg-noir mb-0 mr-1 text-white px-2 py-0.5 rounded" title="Modifier l'article" >Modifier</a>
						<form method="POST" action="{{ route('admin.articles.destroy', $article) }}" >
							<!-- CSRF token -->
							@csrf
							<!-- <input type="hidden" name="_method" value="DELETE"> -->
							@method("DELETE")
							<input class="bg-noir mb-0 text-white px-2 py-0.5 rounded cursor-pointer" type="submit" value="Supprimer" >
						</form>
						{{-- <a href="{{ url('articles/'. $article->id) }}" class="bg-noir mb-0 text-white px-2 py-0.5 rounded">En savoir plus</a> --}}
					</div>
				</div>
			</div>
		@endforeach
	</div>
	{{-- <table border="1" >
		<thead>
			<tr>
				<th>Titre</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($article as $article)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('articles.show', $article) }}" title="Lire l'article" >{{ $article->title }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					<a href="{{ route('admin.articles.edit', $article) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
					<form method="POST" action="{{ route('admin.articles.destroy', $article) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table> --}}
@endsection