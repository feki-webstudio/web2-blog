@extends('layout')

@section('body')
    <form
        @if ($post->exists)
        method="POST" action="/edit-post/{{ $post->id }}"
        @else
        method="POST" action="/new-post"
        @endif
    >
        {{ csrf_field() }}
        <div>
            <label for="title">Cím</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Tartalom</label>
            <textarea name="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <button type="submit">Elküldés</button>
        </div>
    </form>
@endsection
