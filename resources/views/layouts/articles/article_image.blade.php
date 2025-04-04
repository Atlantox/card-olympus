@if($article->Type === 'Card')
    <img class="w-100 card-image shadowed article-image" src="{{ $article->articleable->full_image_url }}" alt="{{ $article->articleable->name }}" title="{{ $article->articleable->flavor }}">
@else
    <img class="w-100 shadowed article-image" src="{{ asset('images/dragonshield.webp') }}" alt="{{ $article->articleable->name }}">
@endif