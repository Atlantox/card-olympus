<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Article;
use App\Models\Card;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index():View
    {
        $recent_cards = DB::table('cards')->orderBy('created_at', 'DESC')->get();
        $recent_products = DB::table('products')->orderBy('created_at', 'DESC')->get();
        $recent_sealed = DB::table('products')->orderBy('created_at', 'DESC')->get();

        $bs_cards = Article::whereHasMorph('articleable', [Card::class])->with('articleable')->where('active', 1)->limit(6)->get();
        $bs_products = Article::whereHasMorph('articleable', [Product::class])->with('articleable')->where('active', 1)->limit(6)->get();
        $bs_sealed = [];

        $best_selling_articles = [
            'cards' => $bs_cards,
            'products' => $bs_products,
            'sealed' => $bs_sealed
        ];
        
        return view('Home/Home', [
            'recent_cards' => $recent_cards, 
            'recent_products' => $recent_products, 
            'recent_sealed' => $recent_sealed, 
            'best_selling_articles' => $best_selling_articles
        ]);
    }
}
