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
                <th>Transaction id</th>
                <th>Booking id</th>
                <th>Price</th>
                <th>User id</th>
                <th>Status</th>

            </tr>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->transaction_id }}</td>
                    <td>{{ $payment->booking_id }}</td>
                    <td>{{ $payment->price }}</td>
                    <td>{{ $payment->user_id }}</td>
                    <td>{{ $payment->status }}</td>

                </tr>
            @endforeach
        </table>

    </body>

    </html>
@stop
