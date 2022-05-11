<?php

namespace Database\Seeders;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use App\TypeId;
use Illuminate\Database\Seeder;
use App\Services\ClothingArticleService;

class ClothingArticleSeeder extends Seeder
{
    public function run()
    {
        $fileExtension = 'png';
        $rootFolderPath = '/Users/alexander/Desktop/Clothes';
        $this->populateClothingArticleType($rootFolderPath, 'tops', 'top', $fileExtension);
        $this->populateClothingArticleType($rootFolderPath, 'bottoms', 'bottom', $fileExtension);
        $this->populateClothingArticleType($rootFolderPath, 'fullbody', 'fullbody', $fileExtension);
        $this->populateClothingArticleType($rootFolderPath, 'shoes', 'shoes', $fileExtension);
    }

    public function populateClothingArticleType($rootFolderPath, $clothingFolder, $clothingType, $fileExtension) {

        $fullpath = $rootFolderPath . '/' . $clothingFolder . '/';
        $imgs = scandir($fullpath);
        foreach($imgs as $img) {
            if (pathinfo($img)['extension'] === $fileExtension) {
                $data = [
                    'image_path' => $fullpath . $img,
                    'clothing_article_type' => $clothingType,
                    'user_id' => 1
                ];
                ClothingArticleService::store($data);
            }
        }
    }
}
