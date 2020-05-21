<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;  //each of these allows for the use of data between forms and tables
use App\Character;
use App\Series;
use App\Classification;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Collection::where('userID', auth()->user()->id)->get()->toArray();
        return view('collection', compact ('collection'));
        //above two lines ensure that only records input by a specific user are seen by checking their user ID
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcollection'); //returns the create collection view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([    //fields must be filled in for record to be accepted
            'title'         => 'required',
            'name'          => 'required',
            'condition'     => 'required',
            'class'         => 'required',
            'price'         => 'required',
            'bought_year'   => 'required',
        ]);
        
        $collection = new Collection([  //create new collection record
            'title'         => $request->get('title'),
            'name'          => $request->get('name'),
            'condition'     => $request->get('condition'),
            'class'         => $request->get('class'),
            'price'         => $request->get('price'),
            'bought_year'   => $request->get('bought_year'),
            'userID'        => auth()->user()->id
        ]);
        $collection->save();    //insert record into sql table
        return redirect()->route('CreateCollection')->with('success','Collection was successfully added');
        //above line will redirect to My Collection page if successful at adding record
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        //
    }
}
