<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use Inertia\Response;
use Inertia\Inertia;

use App\Models\Article;

use mtgsdk\Card as MtgCard;
class HomeController extends Controller
{
    public function index():Response
    {
        /*
        $best_selling = [];
        $recent_cards = [];
        $recent_products = [];
        */

        $articles = Article::all();
        $mtg = MtgCard::find($articles[0]->articlegable->multiverseid);
        var_dump($mtg);
        exit;
        return Inertia::render('Home/Home',[
            'articles' => $articles
        ]);
    }
}
