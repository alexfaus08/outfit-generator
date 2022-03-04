<?php

namespace App\Http\Controllers;

use App\TypeId;
use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;
use App\Http\Resources\ClothingArticleTop as ClothingArticleTopResource;


class ClothingArticleFullbodyController extends Controller
{
    public function index()
    {
        return ClothingArticleTopResource::collection(ClothingArticle::where(['clothing_article_type_id' => TypeId::Fullbody])->get());
    }
}
