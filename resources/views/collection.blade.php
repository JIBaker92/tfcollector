@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Your Collection</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <div class="content">
            <p>Here is your current collection.</p>
            <a href="/characters">Want to add a new character to your collection?</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($collection as $row)
                <tr>
                    <td>{{$row['']}}</td>
                    <td>{{$row['']}}</td>
                    <td>{{$row[''']}}</td>
                    <td>{{$row['']}}</td>
                    <td>{{$row['']}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection