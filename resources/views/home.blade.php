@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
            <img class="header-photo" src="{{ $post->photo }}" alt="">
            <h2>
                <a href="/read/{{$post->id}}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->intro }}</p>
        @endforeach
    </div>
</div>
@endsection