<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClothingArticleTop as ClothingArticleTopResource;
use App\Models\ClothingArticle;
use App\TypeId;

class ClothingArticleFullbodyController extends Controller
{
    public function index()
    {
        return ClothingArticleTopResource::collection(ClothingArticle::where(['clothing_article_type_id' => TypeId::Fullbody])->get());
    }

    public function show()
    {
        return new ClothingArticleTopResource(ClothingArticle::where(['clothing_article_type_id' => TypeId::Fullbody])
            ->inRandomOrder()
            ->first());
    }
}
