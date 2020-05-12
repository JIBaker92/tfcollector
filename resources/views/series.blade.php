@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Series</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <div class="content">
            <p>Here are the current series that have been added.</p>
            <a href="/series/create">Want to add a new series?</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th>Series Name</th>
                    <th>Year Released</th>
                    <th>Series Type</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($series as $row)
                <tr>
                    <td>{{$row['title']}}</td>
                    <td>{{$row['year']}}</td>
                    <td>{{$row['type']}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection
