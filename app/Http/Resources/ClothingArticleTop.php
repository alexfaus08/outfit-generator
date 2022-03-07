<?php

namespace App\Http\Resources;

use App\TypeId;
use Illuminate\Http\Resources\Json\JsonResource;

// TODO if randomizing on FE remove this file
class ClothingArticleTop extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $isFullbody = $this->clothing_article_type_id === TypeId::Fullbody;
        return [
            'id' => $this->id,
            'image_path' => $this->image_path,
            'is_fullbody' => $isFullbody,
        ];
    }
}
