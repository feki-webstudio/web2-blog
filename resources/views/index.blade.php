@extends('layout')

@section('body')

    @if(Auth::check())
        <div class="panel panel-success">
            <div class="panel-heading">Írj egy új cikket!</div>
            <div class="panel-body">
                <a href="/new-post" class="btn btn-success"><i
                        class="glyphicon glyphicon-plus"></i> Új cikk írása</a>
            </div>
        </div>
    @endif

    @foreach($posts as $post)
        <article>
            <h2>
                {{ $post->title }}
                <small>- {{$post->user->name}}</small>
            </h2>

            <p>
                {{ $post->content }}
            </p>

            @if(Auth::check())
                <a class="btn btn-default" href="/edit-post/{{ $post->id }}"><i
                        class="glyphicon glyphicon-pencil"></i> Cikk
                    szerkesztése</a>

                <form class="pull-right" action="/delete-post/{{ $post->id }}"
                      method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger"><i
                            class="glyphicon glyphicon-trash"></i> Törlés
                    </button>
                </form>
            @endif
        </article>

        {{--<hr>--}}
    @endforeach
@endsection
