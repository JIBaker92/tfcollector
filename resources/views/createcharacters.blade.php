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
                        <div class="data-ins">
                        <select name="title">
                    @if($series->isEmpty())
                    <option value="">No series have been added.</option>
                    @endif
                    @foreach($series as $s)
                            <option value= "{{$s['title']}}"> {{$s['title']}}</option>
                    @endforeach
                        </select>
                        </div>
                        <div class="data-ins">
                        <input type="text" name="name"
                        class="form-control" placeholder="Enter character name" />
                        </div>
                            <div class="data-ins">
                                <input type="text" name="description"
                                class="form-control" placeholder="Enter character bio" />
                            </div>
                            <div class="data-ins">
                            <select name="class">
                    @if($class->isEmpty())
                    <option value="">No classes have been added.</option>
                    @endif
                    @foreach($class as $c)
                            <option value="{{$c['class_name']}}"> {{$c['class_name']}}</option>
                    @endforeach
                            </select>
                                </div>
                                <div class="data-ins">
                                <select name="faction">
                    @if($faction->isEmpty())
                    <option value="0">No factions have been added.</option>
                    @endif
                    @foreach($faction as $f)
                             <option value="{{$f['faction_name']}}"> {{$f['faction_name']}}</option>
                    @endforeach
                                </select>
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
