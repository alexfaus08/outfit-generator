<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClothingArticle extends Model
{
    protected $guarded = [];

    public function type() {
        $this->belongsTo(ClothingArticleType::class);
    }
    public function user() {
        $this->belongsTo(User::class);
    }
}
