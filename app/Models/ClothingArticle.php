<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClothingArticle extends Model
{
    protected $guarded = [];

    public function clothingArticleType() {
        return $this->belongsTo(ClothingArticleType::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
