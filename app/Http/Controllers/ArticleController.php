<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Article::all());
    }

    public function articles() { 
        
        return view('articles'); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function show($id)
    {
        return Article::find($id);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return response()->json(null, 204);
    }
}
