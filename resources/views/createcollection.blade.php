@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add To Collection</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
    <div class="row">
            <div class="col-md-12">
                <br />
                <h3 aling="center">Add A Figure To Your Collection</h3>
                <br />
                @if(count($errors) > 0) <!-- if $array has a value execute below code -->
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error) <!-- if there is an error display error -->
                            <li>{{$error}}</li> <!-- show validation error -->
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(\Session::has('success')) <!-- execute success method (in this case go to correct page and display records) -->
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
                @endif

                <form method="post" action="{{url('collection')}}"> <!-- creates a post method where data entry is possible -->
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="data-ins">
                        <input type="text" name="title"
                        class="form-control" placeholder="Enter Series Name" />
                        </div>
                        <div class="data-ins">
                        <input type="text" name="name"
                        class="form-control" placeholder="Enter Figure Name" />
                        </div>
                        <div class="data-ins">
                        <input type="text" name="condition"
                        class="form-control" placeholder="Enter Figure Condition" />
                        </div>
                        <div class="data-ins">
                        <input type="text" name="class"
                        class="form-control" placeholder="Enter Figure Class" />
                        </div>
                        <div class="data-ins">
                        <input type="text" name="price"
                        class="form-control" placeholder="Enter Figure Price" />
                        </div>
                        <div class="data-ins">
                        <input type="text" name="bought_year"
                        class="form-control" placeholder="Enter Year Bought" />
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
