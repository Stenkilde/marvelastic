@extends('layouts.app')

@section('content')
    <div class="blog-container">
        <header class="header">
            <img src="{{ $post->photo }}" alt="">
        </header>
        <div class="read-me">
            <div class="inner">
                <div>
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="the-body">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection
