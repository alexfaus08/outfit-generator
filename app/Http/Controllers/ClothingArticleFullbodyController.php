<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;
use App\Http\Resources\ClothingArticleTop as ClothingArticleTopResource;


class ClothingArticleFullbodyController extends Controller
{
    private $fullbody_type_id;

    public function __construct() {
        $this->fullbody_type_id = ClothingArticleType::where(['name' => 'fullbody'])->first()->id;
    }

    public function index()
    {
        return ClothingArticleTopResource::collection(ClothingArticle::where(['clothing_article_type_id' => $this->fullbody_type_id])->get());
    }
}
