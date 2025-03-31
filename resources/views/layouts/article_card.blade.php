<article class="col-6 col-sm-4 col-md-3 col-lg-2 p-3 h-100">    
    <div class="col-12 p-0 text-center d-flex justify-content-center flex-column align-items-center px-2 article-card animated">
        <span class="fw-bold text-center rounded-top align-middle pt-1 h-auto px-3 lb-bg-secondary-d border border-white" style="color: rgb(255,255,255)">
            @include('_partials.article_cards.price')
            @if($article->onOffer)
                <span class="text-gradient">
                    @include('_partials.article_cards.offer')
                </span>
            @endif
        </span>
        <figure class="col-12 m-0">
            @include('_partials.article_cards.article_image')
        </figure>
        @if(class_basename($article->articleable_type) === 'Card')
            <h4 class="col-12 fs-5 m-0 text-start">{{ $article->articleable->name }}</h4>
            <h5 class="col-12 fs-6 text-start m-0 italic">
                {{ $article->articleable->set }}
                @include('_partials.article_cards.foil_tag')
            </h5>
        @else
            <h4 class="col-12 fs-5 m-0 text-start">{{ $article->articleable->name }}</h4>
            <h5 class="col-12 fs-6 text-start m-0 italic">
                {{ $article->articleable->set }}
            </h5>
        @endif
    </div>
</article>