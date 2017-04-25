@extends('layout')

@section('body')
    <form
        @if ($post->exists)
        method="POST" action="/edit-post/{{ $post->id }}"
        @else
        method="POST" action="/new-post"
        @endif
    >
        @if ($post->exists)
            <h1>Cikk szerkesztése</h1>
        @else
            <h1>Cikk felvitele</h1>
        @endif

        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Cím</label>
            <input class="form-control" type="text" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="content">Tartalom</label>
            <textarea class="form-control" name="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <a href="/" class="btn btn-default">mégsem</a>
            <button class="btn btn-success pull-right" type="submit">Mentés</button>
        </div>
    </form>
@endsection
