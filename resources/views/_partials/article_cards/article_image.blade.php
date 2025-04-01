@if(class_basename($article->articleable_type) === 'Card')
    <img class="w-100 card-image shadowed"  src="{{ $article->articleable->full_image_url }}" alt="{{ $article->articleable->name }}" title="{{ $article->articleable->flavor }}">
@else
    <img class="w-100 shadowed"  src="{{ asset('images/dragonshield.webp') }}" alt="{{ $article->articleable->name }}">
@endif