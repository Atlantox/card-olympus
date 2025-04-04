<article class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 p-3 h-100">
    <div class="col-12 p-0 text-center d-flex justify-content-center flex-column align-items-center px-2">
        <a class="text-decoration-none text-black" href="{{ route('article', $article->id) }}">
            <span class="fw-bold text-center rounded-top align-middle pt-1 h-auto px-3 bg-white shadowed">
                @include('layouts.articles.price')
                @if($article->onOffer)
                    @include('layouts.articles.offer')
                @endif
            </span>
            <figure class="col-12 m-0">
                @include('layouts.articles.article_image')
            </figure>
            @if($article->Type === 'Card')
                <h4 class="col-12 fs-5 m-0 text-start text-break">{{ $article->articleable->name }}</h4>
                <h5 class="col-12 fs-6 text-start m-0 italic">
                    {{ $article->articleable->set }}
                    <span style="font-size:12px">
                        @include('layouts.articles.foil_tag')
                    </span>
                </h5>
            @else
                <h4 class="col-12 fs-5 m-0 text-start text-break">{{ $article->articleable->name }}</h4>
                <h5 class="col-12 fs-6 text-start m-0 italic">
                    {{ $article->articleable->set }}
                </h5>
            @endif
        </a>
    </div>
</article>