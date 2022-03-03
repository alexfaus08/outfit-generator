<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleTopController extends Controller
{
    public function index()
    {
        $top_type_id = ClothingArticleType::where(['name' => 'top'])->first()->id;
        return ClothingArticle::where(['clothing_article_type_id' => $top_type_id])->get();
    }
}
