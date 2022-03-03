<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleFullbodyController extends Controller
{
    public function index()
    {
        $fullbody_type_id = ClothingArticleType::where(['name' => 'fullbody'])->first()->id;
        return ClothingArticle::where(['clothing_article_type_id' => $fullbody_type_id])->get();
    }
}
