<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClothingArticle as ClothingArticleResource;
use App\Models\ClothingArticle;
use App\TypeId;

class ClothingArticleTopController extends Controller
{
    public function index()
    {
        return ClothingArticleResource::collection(ClothingArticle::where(['clothing_article_type_id' => TypeId::Top])->get());
    }

    public function show()
    {
        return new ClothingArticleResource(ClothingArticle::where(['clothing_article_type_id' => TypeId::Top])
            ->inRandomOrder()
            ->first());
    }
}
