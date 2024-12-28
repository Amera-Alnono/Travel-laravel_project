<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel</title>
    <link rel="stylesheet" href={{ asset('assets/front/css/bootstrap.min.css')}} />
    <link rel="stylesheet" href={{ asset('assets/front/css/all.min.css')}} />
    <link rel="stylesheet" href={{ asset('assets/front/css/style.css')}} />
    <link rel="stylesheet" href={{ asset('assets/front/css/style2.css')}} />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap"
      rel="stylesheet" />


  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
              <img src={{ asset('assets/front/img/Vector.png ')}} alt=""/>
              <img src={{ asset('assets/front/img/Vector1.png')}} alt="">
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#main"
            aria-controls="main"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <center>
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href={{ route('travel.home')}}>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href={{ route('travel.about')}}>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href={{ route('travel.packages')}}>Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href={{ route('travel.places')}}>Places</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href={{ route('travel.contact')}}>Contact</a>
              </li>
            </ul>
            <div class="search ps-3 pe-3 d-none d-lg-block">
              <a class="btn" href={{ route('admin.booking.create')}}>Book Now</a>
            </div>
          </div>
        </div>
      </nav>

    @yield('page_content')

    <div class="footer pt-5 pb-5 text-white-50 text-center text-md-start">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="info mb-5">
                <img src={{ asset('assets/front/img/Logo_(1)_1.png')}} alt="">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="links">
                <h5 class="text-light ">DISCOVER DESTINATION</h5>
                <ul class="list unstyled lh-lg">
                  <li>Bali</li>
                  <li>Karimun Jawa</li>
                  <li>Jepara</li>
                  <li>Lombok</li>
                  <li>Yogyakarta</li>
                  <li>Flores</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="contact">
                <h5 class="text-light">CONTACT US</h5>
                <h6>24 Shipley St.Arvada, CO 80003</h6>
                <h6>09378493810</h6>
                <h6>TravelBuddy@gmail.com</h6>
                <h6 class="social">Social Media</h6>
                <div class="row">
                    <div class="col-lg-3">
                    <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-square-facebook" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-square-twitter" style="color: #ffffff;"></i>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright text-white-50">
        <div class="text-center">&copy;Copyright 2022 TravelBuddy</div>
      </div>

    <script src={{ asset('assets/front/js/bootstrap.bundle.min.js')}}></script>
    <script src={{ asset('assets/front/js/all.min.js')}}></script>
  </body>
</html>
