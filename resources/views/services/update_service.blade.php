@extends('layout.main_layout')

@section('page-content')


    <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input style="margin: 20px" value="{{ $service->name }}" name="name" type="text" class="form-control"
                placeholder="name" aria-label="ProductName" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <textarea style="margin: 20px" name="description" class="form-control" aria-label="Description"
                placeholder="Description">{{ $service->description }}</textarea>
        </div>
        <div class="mb-3">
            <input style="margin: 20px" type="file" name="image">
            <img width="100" height="50" src="{{ asset('/uploads/' . $service->image) }}" alt="">
        </div>

        <button style="margin: 20px">Save</button>

    </form>
@stop
