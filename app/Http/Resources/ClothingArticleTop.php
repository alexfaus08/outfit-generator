<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
        // FIXME see if there is a way to replace 4 with top_id
        $isFullbody = $this->clothing_article_type_id === 4;
        return [
            'image_path' => $this->image_path,
            'is_fullbody' => $isFullbody,
        ];
    }
}
