<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClothingArticle as ClothingArticleResource;
use App\Models\ClothingArticle;
use App\TypeId;

class ClothingArticleBottomController extends Controller
{
    public function index()
    {
        return ClothingArticle::where(['clothing_article_type_id' => TypeId::Bottom])->get();
    }

    public function show()
    {
        return new ClothingArticleResource(ClothingArticle::where(['clothing_article_type_id' => TypeId::Bottom])
            ->inRandomOrder()
            ->first());
    }
}
