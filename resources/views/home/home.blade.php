@extends('layouts.app')
@section('page_title', 'Home')

@section('main')
    <!-- Hero -->
    <section class="row col-12 m-0 p-0">
        <div class="col-12 p-0">
            <figure class="row col-12 m-0 p-0 justify-content-center align-items-center text-white">
                <img class="w-100 text-center p-0" height="400" src="{{ asset('charix.jpg') }}" alt="hero">
                <h1 class="position-absolute text-shadow hero-title">Card Olympus</h1>
                <h3 class="position-absolute text-shadow italic hero-subtitle" style="bottom:55%;">« The most personal way to buy your Magic cards »</h3>
            </figure>
        </div>
    </section>

    <!-- Recent added by categories -->
    <section class="row col-12 m-0 p-0 py-5 recent-added" style="z-index:1">
        <div class="row col-12 text-center">
            <h2 class="h1 fw-bold">Recently added</h2>
        </div>
        <div class="row col-12 justify-content-center align-items-center">
            <div class="d-flex col-12 col-xl-8 px-3 flex-wrap">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="row col-12 px-3">
                        @foreach($recent_articles['cards'] as $article)
                            @include('layouts.article_tiny_card')
                        @endforeach 
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="row col-12 px-3">
                        @foreach($recent_articles['products'] as $article)
                            @include('layouts.article_tiny_card')
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Human banner -->
    <section class="row col-12 m-0 p-0 py-5 lb-bg-secondary shadowed bg-image align-items-center" style="z-index:2; background-image:url('{{ asset('images/world_tree.avif') }}')">
        <div class="col-12 col-lg-8 text-bright-h fw-bold">
            <div class="col-12">
                <h2 class="h1col-12 text-center fw-bold fs-1">Our Philosophy</h2>
                <h3 class="italic fs-2">« More human, less automatic »</h3>
            </div>
            <div class="row col-12 m-0 p-0">
                <div class="col-12 fs-4">
                    <p>                    
                        We prioritize your convenience, making your purchases as personal and accessible as possible.
                    </p>
                    <p>
                        Place your order and ask any questions you need before proceeding with our live chat.
                    </p>
                </div>
            </div>
            <div class="row col-12 m-0 p-0 justify-content-center">
                <a href="">
                    <button class="col-2 lb-bg-terciary py-2 border-0 rounded-pill shadowed hover-bigger-l">Read more</button>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <img class="col-8 rounded shadowed-l" src="{{ asset('images/naturalize.jpg') }}" alt="">
        </div>
        
    </section>

    <!-- Best selling by categories -->
    <section class="row col-12 m-0 p-0 py-5 best-selling h-100" style="z-index:1">
        <div class="row col-12 text-center">
            <h2 class="h1 fw-bold">Best selling</h2>
        </div>
        <div class="row col-12 justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center">
                <ul class="col-8 nav nav-underline flex-row justify-content-center fs-5" id="bs_tabs" role="tablist">
                    <li class="nav-item bg-none px-2" role="presentation">
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
                    <li class="nav-item px-2" role="presentation">
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
                </ul>
            </div>
            
            <div class="tab-content mt-3" id="bs_tabsContent">
                <div class="tab-pane fade show active" id="bs_cards-tab-pane" role="tabpanel" aria-labelledby="bs_cards-tab" tabindex="0">
                    <div class="row col-12 m-0 p-0 justify-content-center align-items-start" id="best_selling_cards">
                        @foreach($best_selling_articles['cards'] as $article)
                            @include('layouts.article_card')
                        @endforeach  
                    </div>
                </div>

                <div class="tab-pane fade" id="bs_products-tab-pane" role="tabpanel" aria-labelledby="bs_products-tab" tabindex="0">
                    <div class="row col-12 m-0 p-0 justify-content-center align-items-start" id="best_selling_cards">
                        @foreach($best_selling_articles['products'] as $article)
                            @include('layouts.article_card')
                        @endforeach  
                    </div>
                </div>

            </div>
        </div>
    </section>

    
@endsection