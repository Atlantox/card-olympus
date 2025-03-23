@extends('layouts.app')
@section('page_title', 'Home')

@section('main')
    <!-- Hero -->
    <section>

    </section>

    <!-- Best selling by categories -->
    <section>

    </section>

    <!-- Human banner -->
    <section>

    </section>

    <!-- Recent added -->
    <section>

    </section>

    @foreach($articles as $article)
        <article class="col-4 border">
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
@endsection