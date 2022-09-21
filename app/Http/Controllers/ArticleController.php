<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Article::with('users');
            return DataTables::eloquent($model)->addColumn('users', function (Article $article) {
                return $article->users->name;
            })->toJson();
        }
        return view('users');
    }
}
