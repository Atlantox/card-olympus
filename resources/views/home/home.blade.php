<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($articles as $article)
        <article>
            <div>
                @if(class_basename($article->articlegable_type) === 'Card')
                    <h2>{{ $article->articlegable->name }}</h2>
                    <figure>
                        <img width="211" height="296"  src="{{ $article->articlegable->image_url }}" alt="{{ $article->articlegable->name }}">
                    </figure>
                    <h3>{{ $article->articlegable->set }}</h3>
                    <p>
                        {{ $article->articlegable->text }}
                    </p>
                @else
                    <h2>{{ $article->articlegable->name }}</h2>
                    <p>
                        {{ $article->articlegable->description }}
                    </p>
                @endif
            </div>
        </article>
    @endforeach
</body>
</html>