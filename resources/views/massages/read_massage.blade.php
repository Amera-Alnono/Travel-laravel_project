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
                <th>The Massage</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Subject</th>
            </tr>
            @foreach ($massages as $massage)
                <tr>
                    <td>{{ $massage->massege }}</td>
                    <td>{{ $massage->user_name }}</td>
                    <td>{{ $massage->email }}</td>
                    <td>{{ $massage->subject }}</td>
                </tr>
            @endforeach
        </table>

    </body>

    </html>
@stop
