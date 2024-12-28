@extends('Layout.main_Layout')

@section('page-content')
    <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <input style="margin: 20px" name="name" type="text" class="form-control" placeholder="name"
                aria-label="EventName" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <textarea style="margin: 20px" name="description" class="form-control" aria-label="Description"
                placeholder="Description"></textarea>
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="date" type="date" class="form-control" placeholder="date"
                aria-label="EventDate" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="cost" type="number" class="form-control" placeholder="cost"
                aria-label="EventCost" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="organizer" type="text" class="form-control" placeholder="organizer"
                aria-label="EventOrganizer" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="rating" type="number" class="form-control" placeholder="rating from 0 to 5"
                aria-label="EventRating" aria-describedby="basic-addon1">
        </div>
        <button style="margin: 20px" type="submit">Save</button>

    </form>
@stop
