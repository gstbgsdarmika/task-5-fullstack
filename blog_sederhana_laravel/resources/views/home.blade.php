@extends('layouts.main')
@section('container')
<!-- Hero -->
    <section id="hero">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-6 my-auto order-1 text-center text-lg-start">
                    <h1 class="fw-bold">Temukan Informasi Seputar <span class="fw-cold color-acsent">Pendidikan</span></h1>
                    <p><span class="fw-bold">Maju Bersama</span> hadir untuk membantu mahasiswa ataupun siswa untuk mempermudah dalam pencarian artikel yang bermanfaat bagi pengguna .
                    </p>
                    <button class="fw-bold btn btn-custom2 my-1">Temukan Info</button>
                    <a href="#">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.375 14.125L12.375 7C11.875 6.5 11.125 6.5 10.625 7C10.125 7.5 10.125 8.25 10.625 8.75L16.75 14.875L10.625 21C10.375 21.25 10.25 21.5 10.25 21.875C10.25 22.625 10.75 23.125 11.5 23.125C11.875 23.125 12.125 23 12.375 22.75L19.5 15.625C19.875 15.375 19.875 14.625 19.375 14.125Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                    <div class="col-lg-6 col-md-6 order-md-2">
                        <img src="img/hero.png" alt="" width="80%" class="float-lg-end mx-auto d-block" >
                    </div>
                </div>
            </div>
            <div class="gelombang">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,74.7C640,96,800,160,960,160C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
    </section>
<!-- Akhir Hero -->

<!-- Tentang -->
<section id="tentang">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" data-aos-offset="-300">
                <h2 class="fw-bold"><span class="color-acsent2">Layanan </span><span class="color-acsent">Kami</span></h2>
                <span class="sub-title">Maju Bersama mewadahi lembaga, institusi atau yang lainnya dalam<br>menyebarkan informasi terkait lomba, beasiswa hingga<br>event - event lainnya.</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card-tentang">
                    <div class="icon-tentang position-relative mx-auto">
                        <img src="img/icons/tentang 1.svg" alt="" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                        <h3 class="fw-bold">Informasi Terbaru</h3>
                        <p>Maju Bersama banyak memberikan informasi terbaru terkait pendidikan. </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-tentang">
                        <div class="icon-tentang position-relative mx-auto">
                            <img src="img/icons/tentang 2.svg" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="fw-bold">Corporate Cooperation</h3>
                        <p>Maju Bersama berkeja sama dengan lembaga, institusi atau yang lainnya dalam menyediakaninformasi  </p>
                    </div>
                </div>
            <div class="col-md-4 text-center">
                <div class="card-tentang">
                    <div class="icon-tentang position-relative mx-auto">
                        <img src="img/icons/tentang 3.svg" alt="" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="fw-bold">Informasi Terbaru</h3>
                    <p>Pengguna Maju Bersama akan mendapatkan dukungan layanan, tutorial hingga pelatihan langsung dari TIM Profesional kami.</p>
                </div>
            </div>
        </div>
        <div class="lingkaran end-0">
            <svg width="79" height="371" viewBox="0 0 79 371" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="185.5" cy="185.5" r="155.5" stroke="#E1FCF3" stroke-width="60"/>
            </svg>            
        </div>
    </div>
</section>
<!-- Tentang -->

<!-- artikel -->
<section id="artikel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                <h2 class="fw-bold"><span class="color-acsent2">Info </span> </span><span class="color-acsent">Artikel</span></h2>
                <span class="sub-title">Maju Bersama menyediakan beragaram informasi terkait artikel yang <br> terupdate dan berkualitas.
                </span>
            </div>
            <div class="lingkaran2 start-0">
                <svg  width="123" height="255" viewBox="0 0 123 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="-4.5" cy="127.5" r="127.5" fill="#B0CBF8"/>
                </svg>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card-artikel">
                    <img src="img/artikel 1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Pemrograman Web</h5>
                        <p class="card-text">Web Programming atau Pemrograman Web merupakan istilah yang erat kaitannya dengan internet dan website. Memang benar, karena pemrograman web ...</p>
                        <a class="text-decoration-none end-0 me-4" href="/posts">Selengkapnya
                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.4965 16.9458C26.4271 16.7668 26.323 16.6033 26.1902 16.4646L18.8986 9.1729C18.7626 9.03693 18.6012 8.92907 18.4235 8.85548C18.2459 8.78189 18.0555 8.74402 17.8632 8.74402C17.4748 8.74402 17.1024 8.89829 16.8277 9.1729C16.6918 9.30888 16.5839 9.4703 16.5103 9.64796C16.4367 9.82561 16.3989 10.016 16.3989 10.2083C16.3989 10.5967 16.5531 10.9691 16.8277 11.2437L21.6402 16.0417H10.5715C10.1847 16.0417 9.81379 16.1953 9.5403 16.4688C9.2668 16.7423 9.11316 17.1132 9.11316 17.5C9.11316 17.8868 9.2668 18.2577 9.5403 18.5312C9.81379 18.8047 10.1847 18.9583 10.5715 18.9583H21.6402L16.8277 23.7562C16.6911 23.8918 16.5826 24.0531 16.5085 24.2308C16.4345 24.4085 16.3964 24.5991 16.3964 24.7917C16.3964 24.9842 16.4345 25.1748 16.5085 25.3525C16.5826 25.5302 16.6911 25.6915 16.8277 25.8271C16.9633 25.9638 17.1246 26.0722 17.3023 26.1463C17.48 26.2203 17.6706 26.2584 17.8632 26.2584C18.0557 26.2584 18.2463 26.2203 18.424 26.1463C18.6017 26.0722 18.763 25.9638 18.8986 25.8271L26.1902 18.5354C26.323 18.3967 26.4271 18.2332 26.4965 18.0542C26.6423 17.6991 26.6423 17.3009 26.4965 16.9458Z" fill="#01358D"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card-artikel">
                    <img src="img/artikel 2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Mengenal Pekerjaan Web Developerb</h5>
                        <p class="card-text"> Web developer merupakan pekerjaan yang menarik belakangan ini. Gaji yang tinggi serta lingkungan yang fleksibel membuat...</p>
                        <a class="text-decoration-none end-0 me-4" href="/posts">Selengkapnya
                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.4965 16.9458C26.4271 16.7668 26.323 16.6033 26.1902 16.4646L18.8986 9.1729C18.7626 9.03693 18.6012 8.92907 18.4235 8.85548C18.2459 8.78189 18.0555 8.74402 17.8632 8.74402C17.4748 8.74402 17.1024 8.89829 16.8277 9.1729C16.6918 9.30888 16.5839 9.4703 16.5103 9.64796C16.4367 9.82561 16.3989 10.016 16.3989 10.2083C16.3989 10.5967 16.5531 10.9691 16.8277 11.2437L21.6402 16.0417H10.5715C10.1847 16.0417 9.81379 16.1953 9.5403 16.4688C9.2668 16.7423 9.11316 17.1132 9.11316 17.5C9.11316 17.8868 9.2668 18.2577 9.5403 18.5312C9.81379 18.8047 10.1847 18.9583 10.5715 18.9583H21.6402L16.8277 23.7562C16.6911 23.8918 16.5826 24.0531 16.5085 24.2308C16.4345 24.4085 16.3964 24.5991 16.3964 24.7917C16.3964 24.9842 16.4345 25.1748 16.5085 25.3525C16.5826 25.5302 16.6911 25.6915 16.8277 25.8271C16.9633 25.9638 17.1246 26.0722 17.3023 26.1463C17.48 26.2203 17.6706 26.2584 17.8632 26.2584C18.0557 26.2584 18.2463 26.2203 18.424 26.1463C18.6017 26.0722 18.763 25.9638 18.8986 25.8271L26.1902 18.5354C26.323 18.3967 26.4271 18.2332 26.4965 18.0542C26.6423 17.6991 26.6423 17.3009 26.4965 16.9458Z" fill="#01358D"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card-artikel">
                    <img src="img/artikel 3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Ketahui Apa Itu NFT?</h5>
                        <p class="card-text">NFT sendiri adalah aset digital yang bisa digunakan sebagai bukti kepemilikan barang yang dapat dibeli dengan mata uang kripto....</p>
                        <a class="text-decoration-none end-0 me-4" href="/posts">Selengkapnya
                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.4965 16.9458C26.4271 16.7668 26.323 16.6033 26.1902 16.4646L18.8986 9.1729C18.7626 9.03693 18.6012 8.92907 18.4235 8.85548C18.2459 8.78189 18.0555 8.74402 17.8632 8.74402C17.4748 8.74402 17.1024 8.89829 16.8277 9.1729C16.6918 9.30888 16.5839 9.4703 16.5103 9.64796C16.4367 9.82561 16.3989 10.016 16.3989 10.2083C16.3989 10.5967 16.5531 10.9691 16.8277 11.2437L21.6402 16.0417H10.5715C10.1847 16.0417 9.81379 16.1953 9.5403 16.4688C9.2668 16.7423 9.11316 17.1132 9.11316 17.5C9.11316 17.8868 9.2668 18.2577 9.5403 18.5312C9.81379 18.8047 10.1847 18.9583 10.5715 18.9583H21.6402L16.8277 23.7562C16.6911 23.8918 16.5826 24.0531 16.5085 24.2308C16.4345 24.4085 16.3964 24.5991 16.3964 24.7917C16.3964 24.9842 16.4345 25.1748 16.5085 25.3525C16.5826 25.5302 16.6911 25.6915 16.8277 25.8271C16.9633 25.9638 17.1246 26.0722 17.3023 26.1463C17.48 26.2203 17.6706 26.2584 17.8632 26.2584C18.0557 26.2584 18.2463 26.2203 18.424 26.1463C18.6017 26.0722 18.763 25.9638 18.8986 25.8271L26.1902 18.5354C26.323 18.3967 26.4271 18.2332 26.4965 18.0542C26.6423 17.6991 26.6423 17.3009 26.4965 16.9458Z" fill="#01358D"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        <div class="text-center"> <a href="/posts"><button class="fw-bold btn btn-custom3">Selengkapnya</button></a></div>
    </div>
</section>
<!-- Akhir artikel -->


<!-- kategori -->
<section id="kategori">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                <h2 class="fw-bold"><span class="color-acsent">Kategori</span> </span><span class="color-acsent2">Artikel</span></h2>
                <span class="sub-title">Maju Bersama menyediakan beragaram jenis kategori yang <br> mungkin anda sukai.
                </span>
            </div>
            <div class="lingkaran2 start-0">
                <svg  width="123" height="255" viewBox="0 0 123 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="-4.5" cy="127.5" r="127.5" fill="#B0CBF8"/>
                </svg>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card-kategori">
                    <img src="img/kategori 1.jpg" class="card-img-top rounded " alt="...">
                    <div class="card-body">
                        <p class="card-text text-center fw-bold">Web Programming</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-kategori">
                    <img src="img/kategori 2.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center fw-bold">Web Design</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-kategori">
                    <img src="img/kategori 3.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center fw-bold">Personal</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center"> <a href="/categories"><button class="fw-bold btn btn-custom3">Selengkapnya</button></a></div>
</section>
<!-- Akhir kategori -->

<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5 foot">
            <img src="img/logo 2.png" alt=""> <span class="nama-logo color-acsent">Maju Bersama</span>
            <p class="sub-title">Untuk mendapatkan informasi terbaru tentang kami, <br>
                kamu dapat mengunjungi akun media sosial kami</p>
            <div class="sosial-icon mt-5">
                <a href="#"><img src="img/icons/Whatsapp.svg" alt=""></a>
                <a href="#"><img src="img/icons/facebook.svg" alt=""></a>
                <a href="#"><img src="img/icons/instagram.svg" alt=""></a>
                <a href="#"><img src="img/icons/twitter.svg" alt=""></a>
            </div>
            <div class="aplikasi mt-5">
                <img src="img/footer 2.png" alt="">
                <img src="img/footer 1.png" alt="">
            </div>
            </div>
            <div class="col-4 kolom2">
                <h2 class="color-acsent">Tautan Terkait</h2>
            <ul>
                <li><a class="text-decoration-none" href="/">Beranda</a></li>
                <li><a class="text-decoration-none" href="#tentang">Tentang</a></li>
                <li><a class="text-decoration-none" href="/posts">Artikel</a></li>
                <li><a class="text-decoration-none" href="/categories">Kategori</a></li>
            </ul>
            </div>
            <div class="col-3 kolom3">
            <h2 class="color-acsent">Bantuan</h2>
            <ul>
                <li><a class="text-decoration-none" href="#">FAQS</a></li>
                <li><a class="text-decoration-none" href="#">Kebijakan Privasi</a></li>
                <li><a class="text-decoration-none" href="#">Ketentuan Layanan</a></li>
            </ul>
            </div>
        </div>
    </div>
    </footer>
<!-- akhir footer -->
@endsection