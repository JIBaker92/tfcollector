@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Faction</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <br />
                <h3 aling="center">Add Faction</h3>
                <br />
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
                @endif

                <form method="post" action="{{url('faction')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                            <div class="data-ins">
                            <input type="text" name="faction_name"
                            class="form-control" placeholder="Enter Faction Name" />
                        </div>
                            <div class="button">
                                <input type="submit" class="btn btn-primary" />
                            </div>
                    </div>
                </form>
            </div>
        </div>

    </body>
    @endsection