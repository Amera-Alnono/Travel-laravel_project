@extends('Layout.main_Layout')

@section('page-content')
<form action="{{ route('admin.hotel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <input style="margin: 20px" name="name" type="text" class="form-control" placeholder="name"
            aria-label="HotelName" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input style="margin: 20px" name="country" type="text" class="form-control" placeholder="country"
            aria-label="HotelCountry" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input style="margin: 20px" name="price_per_night" type="number" class="form-control" placeholder="price_per_night"
            aria-label="price_per_night" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input style="margin: 20px" name="avarage_rating" type="number" class="form-control" placeholder="avarage_rating"
            aria-label="avarage_rating" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input style="margin: 20px" name="quantity_rating" type="number" class="form-control" placeholder="quantity_rating"
            aria-label="quantity_rating" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input style="margin: 20px" name="status" type="text" class="form-control" placeholder="status"
            aria-label="HotelStatus" aria-describedby="basic-addon1">
    </div>

    <button style="margin: 20px" type="submit">Save</button>
@stop
