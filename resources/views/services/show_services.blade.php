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
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($service as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td><img width="100" height="50" src="{{ asset('/uploads/' . $service->image) }}" alt="">
                    </td>

                    <td><a href="{{ route('admin.service.edit', $service->id) }} "> Update </a></td>
                    <td><a href="{{ route('admin.service.destroy', $service->id) }}">

                            <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST">
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
