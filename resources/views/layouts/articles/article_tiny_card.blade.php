<article class="row col-12 m-0 p-0 border-top rounded bg-white overflow-hidden shadowed tiny-article-card" title="{{ $article->articleable->flavor }}">
    <div class="col-12 d-flex p-0 justify-content-center align-items-center">
        <figure class="col-2 col-lg-2 m-0 text-start">
            @if($article->Type === 'Card')
                <img class="col-12" height="80" src="{{ $article->articleable->art_image_url }}" alt="{{ $article->articleable->name }}">
            @else
                <img class="col-9 border" height="80" src="{{ asset('images/dragonshield.webp') }}" alt="{{ $article->articleable->name }}">
            @endif
        </figure>
        <div class="col-8 d-flex flex-wrap text-start ps-2">
            <h4 class="col-12 fs-5 text-break m-0">
                {{ $article->articleable->name }}
            </h4>
            <div class="col-12 d-flex justiy-content-start align-items-center">
                <h5 class="fs-6 italic m-0">{{ $article->articleable->set }}</h5>
                @include('layouts.articles.foil_tag')
            </div>
        </div>
        <div class="col-2 h-100 d-flex justify-content-center align-items-center border-start flex-column">
            <span class="text-black p-0 px-2 my-1 rounded-pill align-middle fw-bold">
                @include('layouts.articles.price')
            </span>
            @if($article->onOffer)
                <span class="p-0 px-2 my-1 rounded-pill align-middle text-shadow-l">
                    @include('layouts.articles.offer')
                </span>
            @endif
        </div>
    </div>
</article>