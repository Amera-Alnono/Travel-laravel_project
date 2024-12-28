@extends('layout.main_layout')

@section('page-content')
    <form action="{{ route('admin.hotel.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input style="margin: 20px" value="{{ $hotel->name }}" name="name" type="text" class="form-control"
                placeholder="name" aria-label="ProductName" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="country" value="{{ $hotel->country }}" type="text" class="form-control" placeholder="country"
                aria-label="HotelCountry" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="price_per_night" value="{{ $hotel->price_per_night }}" type="number" class="form-control" placeholder="price_per_night"
                aria-label="price_per_night" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="avarage_rating" value="{{ $hotel->avarage_rating }}" type="number" class="form-control" placeholder="avarage_rating"
                aria-label="avarage_rating" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="quantity_rating" value="{{ $hotel->quantity_rating }}" type="number" class="form-control" placeholder="quantity_rating"
                aria-label="quantity_rating" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="status" value="{{ $hotel->status }}" type="text" class="form-control" placeholder="status"
                aria-label="HotelStatus" aria-describedby="basic-addon1">
        </div>

        <button style="margin: 20px">Save</button>

    </form>
@stop
