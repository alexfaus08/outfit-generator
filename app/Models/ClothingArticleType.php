<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClothingArticleType extends Model
{
    public function clothing_articles()
    {
        $this->hasMany(ClothingArticle::class);
    }
}
