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
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($places as $place)
                <tr>
                    <td>{{ $place->name }}</td>
                    <td><img width="100" height="50" src="{{ asset('/uploads/' . $place->image) }}" alt="">
                    </td>

                    <td><a href="{{ route('admin.place.edit', $place->id) }} "> Update </a></td>
                    <td><a href="{{ route('admin.place.destroy', $place->id) }}">

                            <form action="{{ route('admin.place.destroy', $place->id) }}" method="POST">
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
