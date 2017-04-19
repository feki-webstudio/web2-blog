@extends('layout')

@section('body')
    <a href="/new-post">Új cikk írása</a>

    @foreach($posts as $post)
        <article>
            <h1>{{ $post->title }}</h1>

            <div>
                {{ $post->content }}
            </div>

            <a href="/edit-post/{{ $post->id }}">Cikk szerkesztése</a>

            <br>

            <form action="/delete-post/{{ $post->id }}" method="POST">
                {{ csrf_field() }}
                <button type="submit">Törlés</button>
            </form>
        </article>

        <hr>
        @endforeach
@endsection
