<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleBottomController extends Controller
{
    public function index()
    {
        $bottom_type_id = ClothingArticleType::where(['name' => 'bottom'])->first()->id;
        return ClothingArticle::where(['clothing_article_type_id' => $bottom_type_id])->get();
    }
}
