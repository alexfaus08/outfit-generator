<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;

class ClothingArticleShoesController extends Controller
{
    private $shoes_type_id;

    public function __construct() {
        $this->shoes_type_id = ClothingArticleType::where(['name' => 'shoes'])->first()->id;
    }

    public function index()
    {
        return ClothingArticle::where(['clothing_article_type_id' => $this->shoes_type_id])->get();
    }
}
