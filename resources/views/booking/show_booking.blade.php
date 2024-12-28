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
                <th>User Name</th>
                <th>Hotel id</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
            </tr>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->first_Name}}</td>
                    <td>{{ $booking->hotel_id }}</td>
                    <td>{{ $booking->start_date }}</td>
                    <td>{{ $booking->end_date }}</td>
                    <td>{{ $booking->status }}</td>
                </tr>
            @endforeach
        </table>

    </body>

    </html>
@stop
