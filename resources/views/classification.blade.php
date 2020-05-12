@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Classification</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <div class="content">
            <p>Here are the figure classes that have been added.</p>
            <a href="/classification/create">Want to add a new class?</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th>Class type</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($classification as $row)
                <tr>
                    <td>{{$row['class_name']}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection
