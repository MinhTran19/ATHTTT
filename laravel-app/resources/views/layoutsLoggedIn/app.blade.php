<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ url('images/logo3.png') }}" type="image/x-icon">
    
    <!-- Phần css cho header, footer, tours -->
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/tours.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/app.css') }}">
    {{-- <link rel="stylesheet" type="'text/css" href="{{ asset('./css/custom.css') }}"> --}}
    
    <title>TripsTour</title>
  </head>
  <body>
    <!-- Add header -->
    {{-- @include('layoutsLoggedIn.header') --}}
    
    <!-- Add content -->
    <div class="main grid">
      <section class="main">
        <section class="left">
            <img src="{{ url('images/logo2.png') }}" alt="logo" width="100%">
          <ul>
              <li>
                  <a href="{{ route('home') }}">
                      <i class="fa-solid fa-house"></i>
                      Trang chủ
                  </a>
              </li>
              <li>
                  <a href="{{ route('tours') }}">
                      <i class="fa-solid fa-location-dot"></i>
                      Đặt tour
                  </a>
              </li>
              <li>
                  <a href="{{ route('carts') }}">
                      <i class="fa-solid fa-bag-shopping"></i>
                      Giỏ hàng
                  </a>
              </li>
              <li>
                  <a href="#">
                      <i class="fa-solid fa-credit-card"></i>
                      Thanh toán
                  </a>
              </li>
              <li>
                  <a href="{{ route('users-management') }}">
                      <i class="fa-solid fa-user"></i>
                      Trang cá nhân
                  </a>
              </li>
          </ul>
        </section>
        <section class="right">
            <div class="line"></div>
            <div class="banner under-space"></div>
            @yield('main')
        </section>
      </section>
    </div>
    

    <!-- Add footer -->
    @include('layoutsLoggedIn.footer')
  </body>
</html>