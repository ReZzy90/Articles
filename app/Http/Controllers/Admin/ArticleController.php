<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data\ArticlesData;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = ArticlesData::getArticles();
        return view('admin.dashboard', ['articles' => $articles]);
    }

    public function show(Request $request)
    {
        $articleById = ArticlesData::getArticleById($request->route(('id')));
        return view('admin.show', ['article' => $articleById]);
    }

    public function edit()
    {
        return view('admin.edit');
    }
}
