<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Article;

class CardController extends Controller
{
    public function article(Article $article):View
    {
        return view('articles.article', compact('article'));
    }
}
