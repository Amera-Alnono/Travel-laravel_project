@extends('front.Layout.main_Layout')

@section('page_content')
<header class="header2 p-5">
    <center>
    <h1 class="pt-3 pb-3">About Us</h1>
    <p class="pt-3">TravelBuddy The best service travel</p>
</center>
</header>
<section class="section6 pt-5">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-sm-12">
        <img src={{ asset('assets/front/img/Logo_(1)_2.png')}} class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-3 ps-3">
            <h6 class="who">Who we are</h6>
            <h4 class="h4">We love to discover Indonesia</h4>
            <h6 class="text-black-50">Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one.
                 Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.
                </h6>
                <h6 class="text-black-50">Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one.
                    Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.
                   </h6>
        </div>
</div>
</div>
</section>

 <!-- Slider -->
       <section >
        <div class="position-relative slider">
            <div class="position-absolute ss">
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                    @foreach ($events as $event )
                  <div class="carousel-item active">
                    <div class="backGroundcolor">
                      <div class="ps-5 mt-3 pe-3">

                        <p style="color: #ff5403">Upcoming Event</p>
                        <div class="balii"><h4>{{$event->name}}</h4></div>
                        <p class="text-black-50">
                         {{$event->name}}
                        </p>
                        <p class="text-black-50">date : {{$event->date}}</p>
                        <p class="text-black-50">cost : Start from Rp{{$event->cost}}.000,00</p>
                        <p class="text-black-50">organizer : {{$event->organizer}}</p>
                        <div class="d-flex">
                          <p class="text-black-50">Rating :</p>
                          <i
                            class="fa-solid fa-star mt-1 ms-2"
                            style="color: yellow"
                          ></i>
                          <i
                            class="fa-solid fa-star mt-1 mx-2"
                            style="color: yellow"
                          ></i>
                          <i class="fa-solid fa-star mt-1" style="color: yellow"></i>
                          <i
                            class="fa-solid fa-star mt-1 mx-2"
                            style="color: yellow"
                          ></i>
                          <i class="fa-solid fa-star mt-1" style="color: yellow"></i>
                        </div>
                        <div>
                          <button
                            type="button"
                            class="btn px-4"
                            style="background-color: #ff5403"
                          >
                            <div class="Plan">
                              <a href="" style="color: #fff">Plan Details</a>
                            </div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>

        </section>
<section class="section5 pt-5 pb-5">
    <center>
    <h2>We offered best services</h2>
    <p>The Best Service</p>
</center>
    <div class="container">
        <div class="row">
            @foreach ($services as $service )
            <div class="col-lg-4 col-sm-12 "><!-- {{ asset('/uploads/' . $service->image) }}-->
                <img src={{ asset('assets/front/img/img-card-tsp-03.png')}} alt="">
                <p>{{$service->name}}</p>
                <h6 class="text-black-50">{{$service->description}}</h6>
            </div>
            @endforeach
        </div>
    </div>
</section>
@stop
