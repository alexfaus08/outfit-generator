<?php

namespace Database\Seeders;

use App\Services\ClothingArticleService;
use Illuminate\Database\Seeder;

class ClothingArticleSeeder extends Seeder
{
    public function run()
    {
        $fileExtension = 'png';
        $rootFolderPath = '/Users/alexander/Downloads/small-clothes';
        $this->populateClothingArticleType($rootFolderPath, 'tops', 'top', $fileExtension);
        $this->populateClothingArticleType($rootFolderPath, 'bottoms', 'bottom', $fileExtension);
        $this->populateClothingArticleType($rootFolderPath, 'fullbody', 'fullbody', $fileExtension);
        $this->populateClothingArticleType($rootFolderPath, 'shoes', 'shoes', $fileExtension);
    }

    public function populateClothingArticleType($rootFolderPath, $clothingFolder, $clothingType, $fileExtension)
    {
        $fullpath = $rootFolderPath.'/'.$clothingFolder.'/';
        $imgs = scandir($fullpath);
        foreach ($imgs as $img) {
            if (pathinfo($img)['extension'] === $fileExtension) {
                $data = [
                    'image_path' => $fullpath.$img,
                    'clothing_article_type' => $clothingType,
                    'user_id' => 1,
                ];
                ClothingArticleService::store($data);
            }
        }
    }
}
