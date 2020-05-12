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
            <a href="/collection/create">Want to add a new character to your collection?</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th>Series Name</th>
                    <th>Character Name</th>
                    <th>Figure Condition</th>
                    <th>Class Type</th>
                    <th>Price</th>
                    <th>Year Purchased</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($collection as $row)
                <tr>
                    <td>{{$row['title']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['condition']}}</td>
                    <td>{{$row['class']}}</td>
                    <td>{{$row['price']}}</td>
                    <td>{{$row['bought_year']}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection