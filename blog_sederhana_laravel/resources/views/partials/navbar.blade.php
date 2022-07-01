{{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-custom">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="">   
      </a>
      <a class="navbar-brand fw-bold me-5" href="">Maju Bersama</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav mx-auto">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link ms-5 me-3 page-scroll {{ ($active === "home") ? 'active' : ''}}" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3 page-scroll  {{ ($active  === "about") ? 'active' : ''}}" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3 page-scroll  {{ ($active  === "posts") ? 'active' : ''}}" href="#artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3 page-scroll  {{ ($active  === "categories") ? 'active' : ''}}" href="#kategori">Kategori</a>
            </li>
            @auth
            <li class="nav-item dropdown position-absolute end-0 me-5">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle me-3"></i>{{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
            <li class="nav-item position-absolute end-0">
              <a href="/login {{ ($active  === "login") ? 'active' : ''}}"><button class="fw-bold btn btn-outline-custom1">Masuk</button></a>      
              <a href="/register"><button class="btn btn-custom1 ms-3 me-5">Daftar</button></a> 
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </div>
  </nav>
{{-- End Navbar --}}
