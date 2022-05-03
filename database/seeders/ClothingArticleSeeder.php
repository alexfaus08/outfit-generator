<?php

namespace Database\Seeders;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use App\TypeId;
use Illuminate\Database\Seeder;

class ClothingArticleSeeder extends Seeder
{
    public function run()
    {
        $top_type_id = TypeId::Top;
        $bottom_type_id = TypeId::Bottom;
        $shoes_type_id = TypeId::Shoes;
        $fullbody_type_id = TypeId::Fullbody;

        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/tops/yellow-t-shirt.png', 'clothing_article_type_id' => $top_type_id,
            'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/tops/blue-button-up.png', 'clothing_article_type_id' => $top_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/tops/orange-button-up.png', 'clothing_article_type_id' => $top_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/bottoms/chinos.png', 'clothing_article_type_id' => $bottom_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/bottoms/khaki.png', 'clothing_article_type_id' => $bottom_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/shoes/boots.png', 'clothing_article_type_id' => $shoes_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/shoes/oxfords.png', 'clothing_article_type_id' => $shoes_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/shoes/sneakers.png', 'clothing_article_type_id' => $shoes_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/public/images/full/overalls.png', 'clothing_article_type_id' => $fullbody_type_id,
                'user_id' => 1]
        );
    }
}
