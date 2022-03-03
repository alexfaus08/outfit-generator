<?php

namespace Database\Seeders;

use App\Models\ClothingArticle;
use Illuminate\Database\Seeder;

class ClothingArticleSeeder extends Seeder
{
    public function run()
    {
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/yellow-t-shirt.png', 'clothing_article_type_id' => 1,
            'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/blue-button-up.png', 'clothing_article_type_id' => 1,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/tops/orange-button-up.png', 'clothing_article_type_id' => 1,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/bottoms/chinos.png', 'clothing_article_type_id' => 2,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/bottoms/khaki.png', 'clothing_article_type_id' => 2,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/boots.png', 'clothing_article_type_id' => 3,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/oxfords.png', 'clothing_article_type_id' => 3,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/shoes/sneakers.png', 'clothing_article_type_id' => 3,
                'user_id' => 1]
        );
        ClothingArticle::create(
            ['image_path' => '/storage/app/images/full/overalls.png', 'clothing_article_type_id' => 4,
                'user_id' => 1]
        );
    }
}
