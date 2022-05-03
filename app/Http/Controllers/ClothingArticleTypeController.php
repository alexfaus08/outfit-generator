<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleTypeController extends Controller
{
    public function index()
    {
        return ClothingArticleType::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ClothingArticleType $clothing_article_type)
    {
        //
    }

    public function edit(ClothingArticleType $clothing_article_type)
    {
        //
    }

    public function update(Request $request, ClothingArticleType $clothing_article_type)
    {
        //
    }

    public function destroy(ClothingArticleType $clothing_article_type)
    {
        //
    }
}
