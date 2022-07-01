<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    {{-- !-- Link fonts --> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    {{-- My style --}}
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
  </head>
  <body>

      @include('partials.navbar')

      <section>
          @yield('container')
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script>
      TweenMax.to('#hero img', 3.5 , { y: -20, repeat: -1,  yoyo: true });
      gsap.from('#hero h1', {duration: 1, x: -50, opacity: 0, delay: 0.5});
      gsap.from('#hero h2', {duration: 1, x: -50, opacity: 0, delay: 0.5});
      gsap.from('#hero p', {duration: 1, x: -50, opacity: 0, delay: 1});
      gsap.from('#hero button', {duration: 1.5, x: -50, opacity: 0, delay: 1.5});
      gsap.from('#hero a', {duration: 1.5, x: -50, opacity: 0, delay: 2});
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    const cardTentang = document.querySelectorAll('.card-tentang');
    cardTentang.forEach((card, i)=> {
    card.dataset.aos = 'fade-up';
       card.dataset.aosDelay = i * 200;
      card.dataset.aosDuration = 1500;
    });

    const cardTentang = document.querySelectorAll('.card-artikel');
    cardTentang.forEach((card, i)=> {
    card.dataset.aos = 'fade-up';
       card.dataset.aosDelay = i * 200;
      card.dataset.aosDuration = 1500;
    });

    const cardTim = document.querySelectorAll('.card-kategori');
    cardTim.forEach((card, i)=> {
    card.dataset.aos = 'fade-up';
        card.dataset.aosDelay = i * 200;
        card.dataset.aosDuration = 1500;
    });

  </script>
  <script>
    AOS.init();
  </script>
  </body>
</html>