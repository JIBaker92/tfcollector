@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Characters</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <div class="content">
            <p>Here are the current characters that have been added.</p>
            <a href="/characters/create">Want to add a new character?</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th>Series Name</th>
                    <th>Character Name</th>
                    <th>Character Bio</th>
                    <th>Class Type</th>
                    <th>Faction</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($characters as $row)
                <tr>
                    <td>{{$row['title']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['description']}}</td>
                    <td>{{$row['class']}}</td>
                    <td>{{$row['faction']}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection