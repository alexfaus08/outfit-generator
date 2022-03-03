<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleTopController extends Controller
{
    private $top_type_id;

    public function __construct() {
        $this->top_type_id = ClothingArticleType::where(['name' => 'top'])->first()->id;
    }

    public function index()
    {
        return ClothingArticle::where(['clothing_article_type_id' => $this->top_type_id])->get();
    }
}
