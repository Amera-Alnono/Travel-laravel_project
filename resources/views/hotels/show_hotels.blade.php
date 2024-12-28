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
                <th>Rating</th>
                <th>country</th>
                <th>price_per_night</th>
                <th>status</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->avarage_rating }}</td>
                    <td>{{ $hotel->country }}</td>
                    <td>{{ $hotel->price_per_night }}</td>
                    <td>{{ $hotel->status }}</td>
                    <td><a href="{{ route('admin.hotel.edit', $hotel->id) }} "> Update </a></td>
                    <td><a href="{{ route('admin.hotel.destroy', $hotel->id) }}">

                            <form action="{{ route('admin.hotel.destroy', $hotel->id) }}" method="POST">
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
