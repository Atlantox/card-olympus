<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Article;
class HomeController extends Controller
{
    public function index():View
    {
        /*
        $best_selling = [];
        $recent_cards = [];
        $recent_products = [];
        */

        $articles = Article::all();
        return view('Home/Home', compact('articles'));
    }
}
