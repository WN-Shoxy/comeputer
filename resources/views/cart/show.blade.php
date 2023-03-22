extends("layouts.app")



@section("content")
    <h1>{{ $article->title }}</h1>
    <div>{{ $article->content }}</div>
    <div>{{ $article->price  }}</div>
    <div>{{ $article->qte  }}</div>
@endsection
