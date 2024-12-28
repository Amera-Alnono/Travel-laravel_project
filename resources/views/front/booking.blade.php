@extends('front.Layout.main_Layout')
@section('page_content')
    <form action="{{ route('admin.booking.store' , $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-7 col-sm-12">
            <div class="row mb-3">
                <div class="col">

                  <input type="text"  name="user_id" value="{{Auth::user()->id}}"  class="form-control" placeholder="Enter your name" />

                </div>
                <div>
                <select name="hotel_id" id="hotel">
                    @foreach ($hotels as $hotel)
                        <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                    @endforeach
                </select>
                </div>

                <div class="col">
                    <input type="date" name="start_date" class="form-control" placeholder="Enter the start_date" />
                </div>
                <div class="col">
                    <input type="date" name="end_date" class="form-control" placeholder="Enter the end_date" />
                </div>
                <div class="col">
                    <input type="text" name="status" class="form-control" placeholder="Enter your status" />
                </div>

            </div>
               <button class="btn mb-3">Book now</button>
        </div>
    </form>
@stop
