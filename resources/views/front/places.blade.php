@extends('front.Layout.main_Layout')

@section('page_content')
<header class="header2 p-5">
    <center>
    <h1 class="pt-3 pb-3">Places</h1>
    <p class="pt-3">The best places for you</p>
</center>
</header>

<section class="section7 pt-5 pb-5">
    <center>
    <h4>Places</h4>
    <h6 class="text-black-50 pt-2">The Best Place to Stay in Indonesia</h6>
</center>
<div class="container">
    <div class="row mb-5">
        <div class="col-md-6 col-sm-12 ">
            <img src={{ asset('assets/front/img/img-box-02.png')}} class="img-fluid" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <img src={{ asset('assets/front/img/img-box-place.png')}} class="img-fluid" alt="">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6 col-sm-12 ">
            <img src={{ asset('assets/front/img/img-box-place1.png')}} class="img-fluid" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <img src={{ asset('assets/front/img/img-box-025.png')}} class="img-fluid" alt="">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6 col-sm-12 ">
            <img src={{ asset('assets/front/img/img-box-026.png')}} class="img-fluid" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <img src={{ asset('assets/front/img/img-box-027.png')}} class="img-fluid" alt="">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6 col-sm-12 ">
            <img src={{ asset('assets/front/img/img-box-028.png')}} class="img-fluid" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <img src={{ asset('assets/front/img/img-box-029.png')}} class="img-fluid" alt="">
        </div>
    </div>
</div>
</div>
</section>

@stop
