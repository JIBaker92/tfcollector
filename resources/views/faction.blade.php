@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Factions</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <div class="content">
            <p>Here are the current series that have been added.</p>
            <a href="/faction/create">Want to add a new faction?</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th>Faction Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($faction as $row)
                <tr>
                    <td>{{$row['faction_name']}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection
