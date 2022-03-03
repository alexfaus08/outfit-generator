<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleShoesController extends Controller
{
    public function index()
    {
        $shoes_type_id = ClothingArticleType::where(['name' => 'shoes'])->first()->id;
        return ClothingArticle::where(['clothing_article_type_id' => $shoes_type_id])->get();
    }
}
