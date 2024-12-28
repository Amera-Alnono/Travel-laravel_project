@extends('front.Layout.main_Layout')

@section('page_content')
    <header class="header pt-5 pb-5">
        <center>
            <h1 class="p-2">Travel Buddy</h1>
            <p class="p-2">Let’s start your journey with us, your dream will come true</p>
            <a class="btn p-2 m-5" href={{ route('admin.booking.create')}}>Book Now</a>
        </center>
        <div class="continer">
            <center class="ps-5 pe-5 pt-5 pb-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Hotel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                            type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">Ticket</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                            type="button" role="tab" aria-controls="contact-tab-pane"
                            aria-selected="false">Place</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="row ">
                            <div class="col-md-3 pt-3 pb-3 ps-3">
                                <div>
                                                      <select class="form-select" id="floatingSelectGrid">
                                                        <option selected>Choose Place</option>
                                                        <option value="1">One</option>
                                                      </select>
                                                      <!-- <label for="floatingSelectGrid">Choose Place</label> -->
                                                    </div>
                                                  </div>
                                                <div class="col-md-3 pt-3 pb-3 ps-3">
                                                    <div class="form-group"> <input class="form-control" type="date" required>
                                                        <span class="form-label"></span> </div>
                                                </div>
                                                <div class="col-md-3 pt-3 pb-3 ps-3">
                                                    <div class="form-group"> <input class="form-control" type="date" required>
                                                        <span class="form-label"></span> </div>
                                                </div>
                                                <div class=" col-md-3 pt-3 pb-3 pe-3">
                                                    <select class="form-select" id="floatingSelectGrid">
                                                      <option selected>Person</option>
                                                      <option value="1">One</option>
                                                    </select>
                                                    <!-- <label for="floatingSelectGrid">Person</label> -->
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">...</div>
                                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                        aria-labelledby="contact-tab" tabindex="0">...</div>
                                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                                        aria-labelledby="disabled-tab" tabindex="0">...</div>
                                      </div>
                                </center>
                            </div>
                            </header>
                            <section class="section1 pb-3">
                                <center>
                                    <h1 class="pt-5 pb-3">Top Places to visit</h1>
                                    <p class="pb-5">The Best Place to Stay in Indonesia</p>
                                </center>
                                <div class="container">
                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-12 ">
                                            <img src={{ asset('assets/front/img/img-box-02.png') }} class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-12  ">
                                            <img src={{ asset('assets/front/img/img-box-021.png') }} class="img-fluid" alt="">
                                        </div>
                                      </div>
                                      <div class="row mb-5">
                                        <div class="col-md-6 col-sm-12 ">
                                            <img src={{ asset('assets/front/img/img-box-023.png') }} class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-12  ">
                                            <img src={{ asset('assets/front/img/img-box-024.png') }} class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <a class="btn" href="#">Discover More</a>
                                </center>
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

                            <section class="section3 pt-5 pb-3">
                                <center>
                                <h2>Top Hotel & Restorants</h2>
                                <p>The Best Hotel & Restorants in Indonesia</p>
                            </center>
                            <div class="container">
                                <div class="row">

                                         @foreach ($hotels as $item)
                                    <div class="card col-lg-4 col-sm-12 p-2">
                                        <img src={{ asset('assets/front/img/img-card-hotel-03.png') }} class="card-img-top"
                                            alt="">
                                        <div class="card-body">
                                            <p class="card-text">{{ $item->name }}</p>
                                            <h5>
                                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                ({{ $item->quantity_rating }} Reviews)
                                            </h5>
                                            <h6>{{ $item->country }}</h6>
                                            <h6>From Rp1.{{ $item->price_per_night }}000.000 $</h6>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            </section>

                            <section class="section4 pt-5 pb-5 ">
                                <center>
                                    <h3 class="pe-5">What they Said
                                        <div class="btn-group dropstart " role="group">
                                            <button type="button" class="btn1 btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            </button>
                                        </div>
                                        <div class="btn-group dropend" role="group">
                                            <button type="button" class="btn1 btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            </button>
                                        </div>
                                    </h3>
                                </center>
                                <div class="container">
                                    <div class="row">
                                        @foreach ($reviews as $item)
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="card2">
                                                    <div class="card-body ps-3 pt-3 pb-4">
                                                        <p>
                                                            <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                            <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                            <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                            <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                            <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                                        </p>
                                                        <h6 class="text-white-50">{{ $item->comment }}</h6>
                                                        <h6 class="text-white-50">-{{ $item->user_name }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

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
                                            <img style="object-fit: cover" src={{ asset('assets/front/img/img-card-tsp-03.png')}} alt="">
                                            <p>{{$service->name}}</p>
                                            <h6 class="text-black-50">{{$service->description}}</h6>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>

                        @stop
