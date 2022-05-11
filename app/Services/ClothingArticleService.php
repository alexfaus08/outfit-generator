<?php

namespace App\Services;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Str;

class ClothingArticleService
{
    public static function store(array $data)
    {
        $path = Storage::putFileAs('public/images', new File($data['image_path']), Str::random(40) . '.png');
        $filename = pathinfo($path)['basename'];
        $path = '/storage/images/' . $filename;
        $type_id = ClothingArticleType::where(['name' => $data['clothing_article_type']])->first()->id;
        $clothing_article = ClothingArticle::create(
            [
                'image_path' => $path,
                'clothing_article_type_id' => $type_id,
                'user_id' => $data['user_id'],
            ]
        );
    }
}
