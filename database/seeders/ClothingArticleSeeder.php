<?php

namespace Database\Seeders;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Database\Seeder;

class ClothingArticleSeeder extends Seeder
{
    public function run()
    {

        $top_type_id = ClothingArticleType::where(['name' => 'tops'])->first()->id;
        $bottom_type_id = ClothingArticleType::where(['name' => 'bottoms'])->first()->id;
        $shoes_type_id = ClothingArticleType::where(['name' => 'shoes'])->first()->id;
        $fullbody_type_id = ClothingArticleType::where(['name' => 'fullbody'])->first()->id;

        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/yellow-t-shirt.png', 'clothing_article_type_id' => $top_type_id,
            'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/blue-button-up.png', 'clothing_article_type_id' => $top_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/orange-button-up.png', 'clothing_article_type_id' => $top_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/bottoms/chinos.png', 'clothing_article_type_id' => $bottom_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/bottoms/khaki.png', 'clothing_article_type_id' => $bottom_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/boots.png', 'clothing_article_type_id' => $shoes_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/oxfords.png', 'clothing_article_type_id' => $shoes_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/sneakers.png', 'clothing_article_type_id' => $shoes_type_id,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/full/overalls.png', 'clothing_article_type_id' => $fullbody_type_id,
                'user_id' => 1]
        );
    }
}
