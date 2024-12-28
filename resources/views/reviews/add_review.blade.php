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
                <th>Comment</th>
                <th>User Name</th>
                <th>Rating</th>
              <!--  <th>Add it</th>-->
            </tr>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $review->comment }}</td>
                    <td>{{ $review->user_name }}</td>
                    <td>{{ $review->rating }}</td>
                  <!--  <td><a href="{{ route('admin.review.create', $review->id) }} "> Add </a></td>-->
                </tr>
            @endforeach
        </table>

    </body>

    </html>
@stop
