<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;
use App\Http\Resources\ClothingArticleTop as ClothingArticleTopResource;

class ClothingArticleTopController extends Controller
{
    private $top_type_id;
    private $fullbody_type_id;

    public function __construct() {
        $this->top_type_id = ClothingArticleType::where(['name' => 'top'])->first()->id;
        $this->fullbody_type_id = ClothingArticleType::where(['name' => 'fullbody'])->first()->id;
    }

    public function index()
    {
        return ClothingArticleTopResource::collection(ClothingArticle::where(['clothing_article_type_id' => $this->top_type_id])->get());
    }

    public function show()
    {
        $chance_of_fullbody = 50;
        $dice_roll = rand(0,99);
        if ($dice_roll > $chance_of_fullbody) {
            return new ClothingArticleTopResource(ClothingArticle::where(['clothing_article_type_id' => $this->fullbody_type_id])
                ->inRandomOrder()
                ->first());
        }
        return new ClothingArticleTopResource(ClothingArticle::where(['clothing_article_type_id' => $this->top_type_id])
            ->inRandomOrder()
            ->first());
    }
}
