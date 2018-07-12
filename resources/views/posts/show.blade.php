@extends('layouts/master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title}}</h1>
            {{ $post->body }}
    </div>

    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as $comment)

            @if (!empty($comment))

                <li class="list-group-item">

                    <strong>

                        {{ $comment->created_at->diffForHumans() }}: &nbsp;

                    </strong>

                    {{ $comment->body }}

                </li>

            @endif

        @endforeach

        </ul>
    </div>
    <br></br>
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments/">
            {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comments</button>
                </div>
            </form>
        </div>
    </div>



@endsection
