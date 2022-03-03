<?php

namespace Database\Seeders;

use App\Models\ClothingArticleType;
use Illuminate\Database\Seeder;

class ClothingArticleTypeSeeder extends Seeder
{
    public function run()
    {
        ClothingArticleType::create(
            ['name' => 'top']
        );
        ClothingArticleType::create(
            ['name' => 'bottom']
        );
        ClothingArticleType::create(
            ['name' => 'shoes']
        );
        ClothingArticleType::create(
            ['name' => 'fullbody']
        );
    }
}
