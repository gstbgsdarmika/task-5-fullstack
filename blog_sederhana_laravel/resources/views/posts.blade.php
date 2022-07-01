@extends('layouts.main')
@section('container')
<section id="posts">
    <div class="container">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
            <h2 class="fw-bold"><span class="color-acsent2">Majubersama</span> </span><span class="color-acsent">Artikel</span></h2>
            <span class="sub-title">Maju Bersama menyediakan beragaram informasi terkait artikel yang <br> terupdate dan berkualitas.
            </span>
        </div>
        {{-- Mencari posts --}}
        <div class="row justify-content-center mb-3 mt-5">
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari artikel.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Menghitung jumlah postingan yang ada --}}
        @if ($posts->count())
        <div class="card-artikel3 mb-4">
            @if ($posts[0]->image)
            <div style="max-height: 400px; overflow:hidden">
                <img src="{{ asset('storage/' .$posts[0]->image) }}" class="img-fluid" alt="{{ $posts[0]->category->name }} ">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                    By. <a href="/posts?author={{ $posts[0]->author->username }}"class="text-decoration-none">{{ $posts[0]->author->name }} </a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        
        {{-- Menampilkan data posts yang ada --}}
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card-artikel2">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                        @if ($post->image)
                                <img src="{{ asset('storage/' .$post->image) }}" class="img-fluid" alt="{{ $post->category->name }} ">
                        @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title}}</h5>
                            <p>
                                <small class="text-muted">
                                By. <a href="/posts?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }} </a>{{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text mb-5">{{$post->excerpt}}</p>
                        </div>
                    </div>
                    <div class="position-relative me-4">
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary position-absolute  bottom-0 end-0 mt-5 mb-3">Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
            <p class="text-center fs-4">Artikel tidak ditemukan.</p>
        @endif

        <div>
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection


