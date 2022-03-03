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

    public function show(ClothingArticleType $clothingArticleType)
    {
        //
    }

    public function edit(ClothingArticleType $clothingArticleType)
    {
        //
    }

    public function update(Request $request, ClothingArticleType $clothingArticleType)
    {
        //
    }

    public function destroy(ClothingArticleType $clothingArticleType)
    {
        //
    }
}
