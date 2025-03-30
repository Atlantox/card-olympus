@if(class_basename($article->articleable_type) === 'Card')
    <img class="w-100"  src="{{ $article->articleable->full_image_url }}" alt="{{ $article->articleable->name }}">
@else
    <img class="w-100"  src="{{ asset('images/dragonshield.webp') }}" alt="{{ $article->articleable->name }}">
@endif