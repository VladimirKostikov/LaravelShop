<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Shop / Bootstrap</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    @vite(['resources/js/app.js'])
    
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex gap-3 flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center gap-2 mb-lg-0 text-white text-decoration-none">
              <img src="{{ asset('media/img/laravel.png') }}" alt="" width="40">
              <div class="ml-3">
                <b class="lead fw-bold">Laravel Shop</b>
              </div>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 link-light">Home</a></li>
              <li><a href="#" class="nav-link px-2 link-light">Features</a></li>
              <li><a href="#" class="nav-link px-2 link-light">Pricing</a></li>
              <li><a href="#" class="nav-link px-2 link-light">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 link-light">About</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Sign in</button>
              <button type="button" class="btn btn-warning">Sign up</button>
            </div>
          </div>
        </div>
      </header>
      
      <div class="container mt-5">
        @yield('content')
      </div>
</body>
</html>