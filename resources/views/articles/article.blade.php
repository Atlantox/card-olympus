@extends('layouts.app')

@section('page_title', $article->articleable->name)
@section('meta_title', $article->articleable->name)

@section('main')
    <!-- Card info -->
    <section class="row col-10 m-0 p-0 justify-content-center mt-5">
        <div class="row col-12 col-lg-4 justify-content-center">
            <figure class="col-8">
                @include('layouts.articles.article_image')
            </figure>
        </div>
        <div class="row col-12 col-lg-4 align-items-start">
            <h1 class="col-12 text-center">
                {{ $article->articleable->name }}
                @if($article->articleable->foil)
                    <h3>
                        @include('layouts.articles.foil_tag')
                    </h3>
                @endif
            </h1>
            <div class="col-12">
                <table class="col-12">
                    <tr>
                        <td class="text-center fw-bold align-top px-3">Set:</td>
                        <td class="text-start pb-4">
                            @if($article->articleable === null)
                                <span class="italic">Empty</span>
                                
                            @else
                                <a class="text-black" href="">{{ $article->articleable->set }}</a>
                            @endif
                        </td>
                    </tr>
                    @if($article->Type === 'Card')
                        <tr>
                            <td class="text-center fw-bold align-top px-3">Text:</td>
                            <td class="text-start pb-4">{{ $article->articleable->text }}</td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold align-top px-3">Flavor:</td>
                            <td class="text-start pb-4 italic">{{ $article->articleable->flavor ?? 'Empty' }}</td>
                        </tr>
                    @else
                        <tr>
                            <td class="text-center fw-bold align-top px-3">Description:</td>
                            <td class="text-start pb-4">{{ $article->articleable->description }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
        <div class="row col-12 col-lg-4 ">
            <div class="col-12 ">
                <div class="d-flex col-12 lb-bg-terciary-l py-3 justify-content-center flex-wrap">
                    <div class="row col-12 m-0 p-0 justify-content-center">
                        <h3 class="col-6 fw-bold text-center m-0">
                            ${{ $article->finalPrice }}
                            @if($article->onOffer)
                                <span class="mx-2">
                                    @include('layouts.articles.offer')
                                </span>
                            @endif
                        </h3>
                    </div>

                    <div class="row col-12 m-0 p-0 justify-content-center">
                        @if($article->quantity <= 0)
                            Out of stock
                        @else
                            {{ $article->quantity }} on stock
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection