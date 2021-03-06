<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClothingArticle as ClothingArticleResource;
use App\Models\ClothingArticle;
use App\Models\ClothingArticleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ClothingArticleController extends Controller
{
    public function index()
    {
        return ClothingArticle::all();
    }

    public function store(Request $request)
    {
        // TODO: $data = $request->validated()
        // TODO determine if storage should be separate folders, if so change the path var to reflect
        $path = Storage::putFileAs('public/images', $request->file('image'), Str::random(40).'.png');
        $filename = pathinfo($path)['basename'];
        $path = '/storage/images/'.$filename;
        $type_id = ClothingArticleType::where(['name' => $request->clothing_article_type])->first()->id;
        $clothing_article = ClothingArticle::create(
            [
                'image_path' => $path,
                'clothing_article_type_id' => $type_id,
                'user_id' => $request->user_id,
            ]
        );

        return response(['data' => $clothing_article], Response::HTTP_CREATED);
    }

    public function show(ClothingArticle $clothing_article)
    {
        return ClothingArticleResource::make($clothing_article);
    }

    public function edit(ClothingArticle $clothing_article)
    {
        //
    }

    public function update(Request $request, ClothingArticle $clothing_article)
    {
        //
    }

    public function destroy(ClothingArticle $clothing_article)
    {
        $clothing_article->delete();

        return response([], Response::HTTP_NO_CONTENT);
    }
}
