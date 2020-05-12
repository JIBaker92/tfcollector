@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Characters</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <br />
                <h3 aling="center">Add Characters</h3>
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

                <form method="post" action="{{url('characters')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="series-title">
                        <input type="text" name="title"
                        class="form-control" placeholder="Enter character series" />
                        </div>
                        <div class="character-name">
                        <input type="text" name="name"
                        class="form-control" placeholder="Enter character name" />
                        </div>
                            <div class="character-desc">
                                <input type="text" name="description"
                                class="form-control" placeholder="Enter character bio" />
                            </div>
                            <div class="class-name">
                                    <input type="text" name="class"
                                    class="form-control" placeholder="Enter class type" />
                                </div>
                                <div class="faction-name">
                                    <input type="text" name="faction"
                                    class="form-control" placeholder="Enter faction" />
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
