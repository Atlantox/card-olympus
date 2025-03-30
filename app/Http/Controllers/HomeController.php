<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Article;
use App\Models\Card;
use App\Models\Product;

class HomeController extends Controller
{
    public function index():View
    {
        $recent_cards = Article::whereHasMorph('articleable', [Card::class])->with('articleable')->where('active', 1)->orderBy('articles.created_at', 'DESC')->limit(6)->get();
        $recent_products = Article::whereHasMorph('articleable', [Product::class])->with('articleable')->where('active', 1)->orderBy('articles.created_at', 'DESC')->limit(6)->get();

        $recent_articles = [
            'cards' => $recent_cards,
            'products' => $recent_products
        ];

        $bs_cards = Article::whereHasMorph('articleable', [Card::class])->with('articleable')->where('active', 1)->limit(6)->get();
        $bs_products = Article::whereHasMorph('articleable', [Product::class])->with('articleable')->where('active', 1)->limit(6)->get();

        $best_selling_articles = [
            'cards' => $bs_cards,
            'products' => $bs_products,
        ];
        
        return view('Home/Home', compact(['recent_articles', 'best_selling_articles']));
    }
}
