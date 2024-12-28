@extends('Layout.main_Layout')

@section('page-content')
    <form action="{{ route('admin.place.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <input style="margin: 20px" name="name" type="text" class="form-control" placeholder="name"
                aria-label="PlaceName" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3">
            <input style="margin: 20px" type="file" name="image">
        </div>

        <button style="margin: 20px" type="submit">Save</button>

    </form>
@stop
