@extends('layouts.app')
@section('title')
    MyBlog
@endsection
@section('content')
    <div class="section-quote">
        <div class="container d-flex flex-column justify-content-center">
            <h1>Muvaffaqqiyat</h1>
            <h3>Yosh va muvaffaqqiyatlilar uchun</h3>
        </div>
        <div class="container">
            <div class="row pt-5">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-sm-6 p-3">
                        <div class="card">
                            <img src="https://picsum.photos/640/480" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: 600">{{ $post->title }}</h5>
                                <a href="{{ route('post.show', $post->slug) }}">
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 100) }}</p>
                                </a>
                                <div class="icons d-flex justify-content-between align-items-center">
                                    <span class="d-flex justify-content-between align-items-center"><i class="bi bi-eye-fill pe-1"></i> {{ $post->count }}</span>
                                    <span><i class="bi bi-heart"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div> {{ $posts->links() }} </div>
    </div>
@endsection
