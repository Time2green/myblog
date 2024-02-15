@extends('layouts.app')
@section('title')
    {{ $post->title }}
@endsection
@section('content')
    <div class="show-post">
        <div class="container pt-md-5">
            <div><h1>{{ $post->title }}</h1></div>
            <div class="icons d-flex pt-3">
                <span class="pe-3"><i class="bi bi-heart"></i></span>
                <span class="d-flex align-items-center"><i class="bi bi-eye-fill pe-1"></i> {{ $post->count }}</span>
            </div>
            @foreach($post->tags as $tag)
                <a href="" class="btn btn-secondary">#{{ $tag->name }}</a>
            @endforeach
            <div class="pt-3"><p class="" style="font-size: 1rem">{{ $post->content }}</p></div>
            <div class="border-bottom"></div>
            <div class="pt-3">
                <h3>Kommentariya qoldirish</h3>
                <div class="mb-3 pt-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
