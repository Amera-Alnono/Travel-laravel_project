@extends('layout.main_layout')

@section('page-content')
    <form action="{{ route('admin.event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input style="margin: 20px" value="{{ $event->name }}" name="name" type="text" class="form-control"
                placeholder="name" aria-label="ProductName" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <textarea style="margin: 20px" name="description" class="form-control" aria-label="Description"
                placeholder="Description">{{ $event->description }}</textarea>
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="date" value="{{$event->date}}" type="date" class="form-control" placeholder="date"
                aria-label="EventDate" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="cost"  value="{{$event->cost}}" type="number" class="form-control" placeholder="cost"
                aria-label="EventCost" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="organizer" value="{{$event->organizer}}" type="text" class="form-control" placeholder="organizer"
                aria-label="EventOrganizer" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input style="margin: 20px" name="rating" value="{{$event->rating}}" type="number" class="form-control" placeholder="rating from 0 to 5"
                aria-label="EventRating" aria-describedby="basic-addon1">
        </div>

        <button style="margin: 20px">Save</button>

    </form>
@stop
