<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use Illuminate\Http\Request;

class ClothingArticleController extends Controller
{
    public function index()
    {
        return ClothingArticle::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ClothingArticle $clothingArticle)
    {
        //
    }

    public function edit(ClothingArticle $clothingArticle)
    {
        //
    }

    public function update(Request $request, ClothingArticle $clothingArticle)
    {
        //
    }

    public function destroy(ClothingArticle $clothingArticle)
    {
        //
    }
}
