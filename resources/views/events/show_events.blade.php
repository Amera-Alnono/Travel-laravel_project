@extends('Layout.main_Layout')

@section('page-content')
<!DOCTYPE html>
    <html>

    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>

    <body>

        @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('msg') }}
            </div>
        @endif

        @include('errors')


        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Cost</th>
                <th>Organizer</th>
                <th>Rating</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->cost }}$</td>
                    <td>{{ $event->organizer }}</td>
                    <td>{{ $event->rating }}</td>


                    <td><a href="{{ route('admin.event.edit', $event->id) }} "> Update </a></td>
                    <td><a href="{{ route('admin.event.destroy', $event->id) }}">

                            <form action="{{ route('admin.event.destroy', $event->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are You Sure to Delete ?')">Delete</button>
                            </form>

                        </a></td>
                </tr>
            @endforeach
        </table>

    </body>

    </html>
@stop
