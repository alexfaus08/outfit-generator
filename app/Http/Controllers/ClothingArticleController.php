<?php

namespace App\Http\Controllers;

use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ClothingArticleController extends Controller
{
    public function index()
    {
        return ClothingArticle::all();
    }

    public function store(Request $request)
    {
        // TODO determine if storage should be separate folders, if so change the path var to reflect
        $path = Storage::putFile('public/images', $request->file('image'));
        $type_id = ClothingArticleType::where(['name' => $request->clothing_article_type])->first()->id;
        ClothingArticle::create(
            [
                'image_path' => $path,
                'clothing_article_type_id' => $type_id,
                'user_id' => $request->user_id,
            ]
        );
    }

    public function show(ClothingArticle $clothingArticle)
    {
        //
    }

    public function edit(ClothingArticle $clothingArticle)
    {
        //
    }

    public function update(Request $request, ClothingArticle $clothingArticle)
    {
        //
    }

    public function destroy(ClothingArticle $clothingArticle)
    {
        $clothingArticle->delete();
        return response([], Response::HTTP_NO_CONTENT);
    }
}
