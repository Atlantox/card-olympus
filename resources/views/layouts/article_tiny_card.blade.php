<article class="row col-12 m-0 p-0 border-top rounded bg-white overflow-hidden">
    <div class="col-12 d-flex p-0 justify-content-center align-items-center">
        <figure class="col-2 m-0 text-start">
            @if(class_basename($article->articleable_type) === 'Card')
                <img class="col-11" height="65" src="{{ $article->articleable->art_image_url }}" alt="{{ $article->articleable->name }}">
            @else
                <img class="col-9" height="65" src="{{ asset('images/dragonshield.webp') }}" alt="{{ $article->articleable->name }}">
            @endif
        </figure>
        <div class="col-8 d-flex flex-wrap text-start ps-2">
            <h4 class="col-12 fs-5 text-break m-0">
                {{ $article->articleable->name }}
            </h4>
            <div class="col-12 d-flex justiy-content-start align-items-center">
                <h5 class="fs-6 italic m-0">{{ $article->articleable->set }}</h5>
                @include('_partials.cards.foil_tag')
            </div>
        </div>
        <div class="col-2 h-100 d-flex justify-content-center align-items-center border-start">
            <span class="text-white lb-bg-secondary-d p-0 px-3 rounded-pill align-middle">
                @include('_partials.cards.price')
            </span>
        </div>
    </div>
</article>