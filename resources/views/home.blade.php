@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach ($posts as $post)
                    <h2>
                        <a href="/read/{{$post->id}}">{{ $post->title }}</a>
                    </h2>
                    <p>{{ $post->intro }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection