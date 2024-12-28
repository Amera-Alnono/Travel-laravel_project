@extends('layout.main_layout')

@section('page-content')


    <form action="{{ route('admin.place.update', $place->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input style="margin: 20px" value="{{ $place->name }}" name="name" type="text" class="form-control"
                placeholder="name" aria-label="ProductName" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3">
            <input style="margin: 20px" type="file" name="image">
            <img width="100" height="50" src="{{ asset('/uploads/' . $place->image) }}" alt="">
        </div>

        <button style="margin: 20px">Save</button>

    </form>
@stop
