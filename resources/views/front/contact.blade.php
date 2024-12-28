@extends('front.Layout.main_Layout')
@section('page_content')
    <header class="header2 p-5">
        <center>
            @include('errors')
            <h1 class="pt-3 pb-3">Contact</h1>
            <p class="pt-3">TravelBuddy The best service travel</p>
        </center>
    </header>
    <div class="container">
        <div class="mt-5" style="width: 100%">
            <iframe width="100%;" height="500px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                    href="https://www.maps.ie/population/">Find Population on Map</a></iframe>
        </div>
        <section class="Get">
            <div class="mt-5">
                <h3 style="color: #041562">Get in touch</h3>
                <div class="mb-3">
                    <div class="row">
                        <form action="{{ route('admin.massage.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-7 col-sm-12">
                                <textarea class="form-control mb-3" name="massege" style="resize: none" rows="5" placeholder="Enter message"></textarea>

                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" name="user_name" class="form-control"
                                            placeholder="Enter your name" />
                                    </div>
                                    <div class="col">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter your email" />
                                    </div>
                                </div>
                                <input class="form-control mb-5" name="subject" type="text"
                                    placeholder="Enter your subject" />
                                <button class="btn mb-3">SEND MESSAGE</button>
                            </div>
                        </form>

                        <div class="col-md-5">
                            <div class="d-flex mb-3">
                                <div class="home">
                                    <img src={{ asset('assets/front/img/Home.png') }} alt="" />
                                </div>
                                <div class="ms-2">
                                    <div>Semarang, Jawa Tengah</div>
                                    <div class="text-black-50">Indonesia</div>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="home">
                                    <img src={{ asset('assets/front/img/iPhone_(1).png') }} alt="" />
                                </div>
                                <div class="ms-2">
                                    <div>(024) 123981240</div>
                                    <div class="text-black-50">(024) 123981240</div>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="home">
                                    <img src={{ asset('assets/front/img/Mail.png') }} alt="" />
                                </div>
                                <div class="ms-2">
                                    <a href="" style="color: black">TravelBuddy@gmail.com</a>
                                    <div class="text-black-50">Send us your query anytime!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://kit.fontawesome.com/b03f8c0ada.js" crossorigin="anonymous"></script>

@stop
