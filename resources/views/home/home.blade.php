@extends('layouts.app')
@section('page_title', 'Home')

@section('main')
    <!-- Hero -->
    <section class="row col-12 m-0 p-0">
        <div class="col-12 p-0">
            <figure class="row col-12 m-0 p-0 justify-content-center align-items-center text-white">
                <img class="w-100 text-center p-0" height="400" src="{{ asset('charix.jpg') }}" alt="hero">
                <h1 class="position-absolute outline-black-l hero-title">Card Olympus</h1>
                <h3 class="position-absolute outline-black-l font-italic hero-subtitle" style="bottom:55%;">« The most personal way to buy your Magic cards »</h3>
            </figure>
        </div>
    </section>

    <!-- Best selling by categories -->
    <section class="row col-12 m-0 p-0 best-selling">
        <div class="row col-12 text-center">
            <h2 class="h1">Best selling</h2>
        </div>
        <div class="row col-12 justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center">
                <ul class="col-8 nav nav-underline flex-row justify-content-around fs-5" id="bs_tabs" role="tablist">
                    <li class="nav-item bg-none" role="presentation">
                        <button 
                        class="nav-link active text-black pb-0" 
                        id="bs_cards-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#bs_cards-tab-pane" 
                        type="button" 
                        role="tab" 
                        aria-controls="bs_cards-tab-pane" 
                        aria-selected="true"
                        >
                        Cards
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button 
                        class="nav-link text-black pb-0" 
                        id="bs_products-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#bs_products-tab-pane" 
                        type="button" 
                        role="tab" 
                        aria-controls="bs_products-tab-pane"
                        aria-selected="false"
                        >
                        Products
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button 
                        class="nav-link text-black pb-0" 
                        id="bs_sealed-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#bs_sealed-tab-pane" 
                        type="button" 
                        role="tab" 
                        aria-controls="bs_sealed-tab-pane" 
                        aria-selected="false"
                        >
                        Sealed
                        </button>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content mt-3" id="bs_tabsContent">
                <div class="tab-pane fade show active" id="bs_cards-tab-pane" role="tabpanel" aria-labelledby="bs_cards-tab" tabindex="0">
                    <div class="row col-12 m-0 p-0 justify-content-center align-items-start" id="best_selling_cards">
                        @foreach($articles as $article)
                            @include('layouts.article_card')
                        @endforeach  
                    </div>
                </div>

                <div class="tab-pane fade" id="bs_products-tab-pane" role="tabpanel" aria-labelledby="bs_products-tab" tabindex="0">
                    Products
                </div>

                <div class="tab-pane fade" id="bs_sealed-tab-pane" role="tabpanel" aria-labelledby="bs_sealed-tab" tabindex="0">
                    Sealed
                </div>
            </div>
        </div>
    </section>

    <!-- Human banner -->
    <section>

    </section>

    <!-- Recent added -->
    <section>

    </section>

    
@endsection