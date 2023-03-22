<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

		$article = Article::latest()->get();
        
        return view("cart.index", compact("cart"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Article $article)
    {
        // 1. La validation
        $this->validate($request, [
            'title' => 'bail|required|string|max:255',
            "price" => 'bail|required|int|max:1000',
            "qte" => 'bail|required|int|max:10',
        ]);
        
        // 3. On enregistre les informations du Post
        Article::create([
            "title" => $request->title,
            "price" => $request->price,
            "qte" => $request->qte,
        ]);
        
        // 4. On retourne vers tous les posts : route("posts.index")

        return redirect(route("articles.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("cart.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

    }
}
