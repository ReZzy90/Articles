<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data\ArticlesData;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $isAdmin = $request->query('admin'); // Get the ?admin=1 from URL
    
        $articles = ArticlesData::getArticles();
    
        return view('admin.dashboard', [
            'articles' => $articles,
            'adminMode' => $isAdmin == '1' // Pass boolean to Blade
        ]);
    }
    

    public function show(Request $request)
    {
        $articleById = ArticlesData::getArticleById($request->route(('id')));
        return view('admin.show', ['article' => $articleById]);
    }

    public function edit($id)
    {
        $articleById = ArticlesData::getArticleById($id);
        $allTags = ['PHP', 'Laravel', 'Framework', 'Web', 'Routing', 'URL', 'HTTP', 'Contrôleurs', 'MVC', 'Architecture', 'API', 'Sécurité', 'Sanctum', 'Authentification', 'Performance', 'Optimisation', 'Cache'];
    
        return view('admin.edit', ['article' => $articleById, 'allTags' => $allTags]);
    }
    
}
