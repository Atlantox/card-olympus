
@if(class_basename($article->articleable_type) === 'Card')
    ${{ $article->articleable->foil ? $article->articleable->price_foil : $article->articleable->price }}
@else
    ${{ $article->articleable->price }}
@endif