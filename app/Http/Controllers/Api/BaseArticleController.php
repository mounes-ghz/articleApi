<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Article;

class BaseArticleController
{
    public function createArticle(StorePostRequest $request)
    {

        $article = Article::create($request->all());
        return response()->json([
            'message' => 'created successfully',
            'data' => $article
        ]);

    }
}
