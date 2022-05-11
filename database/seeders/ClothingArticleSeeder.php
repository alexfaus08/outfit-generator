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
        // tops folder
        $topsFolder = $rootFolderPath . '/tops/';
        $topsImages = scandir($topsFolder);
        foreach($topsImages as $topimg) {
            if (pathinfo($topimg)['extension'] === $fileExtension) {
                $data = [
                    'image_path' => $topsFolder . $topimg,
                    'clothing_article_type' => 'top',
                    'user_id' => 1
                ];
                ClothingArticleService::store($data);
            }
        }
        // bottoms folder
        $bottomsfolder = $rootFolderPath . '/bottoms/';
        $bottomsImages = scandir($bottomsfolder);
        foreach($bottomsImages as $bottomimg) {
            if (pathinfo($bottomimg)['extension'] === $fileExtension) {
                $data = [
                    'image_path' => $bottomsfolder . $bottomimg,
                    'clothing_article_type' => 'bottom',
                    'user_id' => 1
                ];
                ClothingArticleService::store($data);
            }
        }
        // shoes folder
        $shoesfolder = $rootFolderPath . '/shoes/';
        $shoesImages = scandir($shoesfolder);
        foreach($shoesImages as $shoeimg) {
            if (pathinfo($shoeimg)['extension'] === $fileExtension) {
                $data = [
                    'image_path' => $shoesfolder . $shoeimg,
                    'clothing_article_type' => 'shoes',
                    'user_id' => 1
                ];
                ClothingArticleService::store($data);
            }
        }
        // fullbody folder
        $fullbodyfolder = $rootFolderPath . '/fullbody/';
        $fullbodysImages = scandir($fullbodyfolder);
        foreach($fullbodysImages as $fullbodyimg) {
            if (pathinfo($fullbodyimg)['extension'] === $fileExtension) {
                $data = [
                    'image_path' => $fullbodyfolder . $fullbodyimg,
                    'clothing_article_type' => 'fullbody',
                    'user_id' => 1
                ];
                ClothingArticleService::store($data);
            }
        }
    }

    public function populateClothingArticleType($rootFolderPath, $clothingType, $fileExtension) {

        // $fullpath = $rootFolderPath . '/fullbody/';
        $fullpath = $rootFolderPath . '/' . $clothingType . '/';
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
