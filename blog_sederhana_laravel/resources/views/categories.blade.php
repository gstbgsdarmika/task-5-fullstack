@extends('layouts.main')
@section('container')
<section id="kategori-artikel">
    <div class="container">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
            <h2 class="fw-bold"><span class="color-acsent">Kategori</span> </span><span class="color-acsent2">Artikel</span></h2>
            <span class="sub-title mb-5">Maju Bersama menyediakan beragaram jenis kategori yang <br> mungkin anda sukai.
            </span>
        </div>
        <article class="mb-5 mt-5">
            <div class="container">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-4">
                            <a href="/posts?category={{ $category->slug }}">
                                <div class="card bg-dark text-white">
                                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img-top" class="card-img" alt="{{ $category->name }}">
                                    <div class="card-img-overlay d-flex align-items-center p-0">
                                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </article>
    </div>
</section>

@endsection


