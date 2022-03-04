<?php

namespace App\Http\Controllers;

use App\TypeId;
use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;
use App\Http\Resources\ClothingArticleTop as ClothingArticleTopResource;

class ClothingArticleTopController extends Controller
{

    public function index()
    {
        return ClothingArticleTopResource::collection(ClothingArticle::where(['clothing_article_type_id' => TypeId::Top])->get());
    }

    public function show()
    {
        $chance_of_fullbody = 50;
        $dice_roll = rand(0,99);
        if ($dice_roll > $chance_of_fullbody) {
            return new ClothingArticleTopResource(ClothingArticle::where(['clothing_article_type_id' => TypeId::Fullbody])
                ->inRandomOrder()
                ->first());
        }
        return new ClothingArticleTopResource(ClothingArticle::where(['clothing_article_type_id' => TypeId::Top])
            ->inRandomOrder()
            ->first());
    }
}
