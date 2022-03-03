<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleBottomController extends Controller
{
    private $bottom_type_id;

    public function __construct()
    {
        $this->bottom_type_id = ClothingArticleType::where(['name' => 'bottom'])->first()->id;
    }

    public function index()
    {
        return ClothingArticle::where(['clothing_article_type_id' => $this->bottom_type_id])->get();
    }
}
