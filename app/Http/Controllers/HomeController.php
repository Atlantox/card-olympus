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
        $recent_articles = Article::where('active', 1)->with('articleable')->orderBy('articles.created_at', 'DESC')->limit(10)->get();

        $bs_cards = Article::whereHasMorph('articleable', [Card::class])->with('articleable')->where('active', 1)->limit(6)->get();
        $bs_products = Article::whereHasMorph('articleable', [Product::class])->with('articleable')->where('active', 1)->limit(6)->get();

        $best_selling_articles = [
            'cards' => $bs_cards,
            'products' => $bs_products,
        ];

        $offer_articles = Article::where('offer_finish', '>=', 'TODAY()')->with('articleable')->where('active', 1)->orderBy('articles.offer_finish', 'DESC')->limit(12)->get();
        
        return view('Home/Home', compact(['recent_articles', 'best_selling_articles', 'offer_articles']));
    }
}
