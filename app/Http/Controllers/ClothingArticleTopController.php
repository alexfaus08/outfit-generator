<?php

namespace App\Http\Controllers;

use App\TypeId;
use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;
use App\Http\Resources\ClothingArticle as ClothingArticleResource;

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
