<article class="col-6 col-sm-4 col-md-3 col-lg-2 p-3 h-100">    
    <div class="col-12 p-0 text-center d-flex justify-content-center flex-column align-items-center px-2 article-card animated">
        <span class="fw-bold text-center rounded-top align-middle pt-1 h-auto px-3 lb-bg-primary-d" style="color: rgb(255,255,255)">
            ${{ $article->articleable->price }}
        </span>
        @if(class_basename($article->articleable_type) === 'Card')
            <figure class="col-12 m-0">
                <img class="w-100"  src="{{ $article->articleable->image_url }}" alt="{{ $article->articleable->name }}">
            </figure>
            <h4 class="col-12 fs-5 m-0 text-start">{{ $article->articleable->name }}</h4>
            <h5 class="col-12 fs-6 text-start m-0 font-italic">
                {{ $article->articleable->set }}
                <span class="ms-2 h5 foil-tag rounded-pill p-1 px-2 fw-bold">FOIL</span>
            </h5>
        @else
            <figure class="col-12 m-0">
                <img class="w-100"  src="{{ asset('images/dragonshield.webp') }}" alt="{{ $article->articleable->name }}">
            </figure>
            <h4 class="col-12 fs-5 m-0 text-start">{{ $article->articleable->name }}</h4>
        @endif
    </div>
</article>