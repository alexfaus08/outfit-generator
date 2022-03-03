<?php

namespace Database\Seeders;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Database\Seeder;

class ClothingArticleSeeder extends Seeder
{
    public function run()
    {
        $top = ClothingArticleType::create(
            ['name' => 'top']
        );
        $bottom = ClothingArticleType::create(
            ['name' => 'bottom']
        );
        $shoes = ClothingArticleType::create(
            ['name' => 'shoes']
        );
        $fullbody = ClothingArticleType::create(
            ['name' => 'fullbody']
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/yellow-t-shirt.png', 'clothing_article_type_id' => $top->id,
            'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/blue-button-up.png', 'clothing_article_type_id' => $top->id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/orange-button-up.png', 'clothing_article_type_id' => $top->id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/bottoms/chinos.png', 'clothing_article_type_id' => $bottom->id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/bottoms/khaki.png', 'clothing_article_type_id' => $bottom->id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/boots.png', 'clothing_article_type_id' => $shoes->id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/oxfords.png', 'clothing_article_type_id' => $shoes->id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/sneakers.png', 'clothing_article_type_id' => $shoes->id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/full/overalls.png', 'clothing_article_type_id' => $fullbody->id,
                'user_id' => 1]
        );
    }
}
