<?php

namespace App\Http\Controllers;

use App\Collection;
use Illuminate\Http\Request;
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
        $collection = Collection::all()->toArray();
        return view('collection', compact ('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['series'] = Series::select('title')->get();
        $data['name'] = Character::select('name')->get();
        $data['class'] = Classification::select('class_name')->get();

        return view('createcollection');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'condition' => 'required',
            'class' => 'required',
            'price' => 'required',
            'bought_year' => 'required',
        ]);
        $collection = new Collection([
            'title' => $request->get('title'),
            'name' => $request->get('name'),
            'condition' => $request->get('condition'),
            'class' => $request->get('class'),
            'price' => $request->get('price'),
            'bought_year' => $request->get('bought_year'),
        ]);
        $collection->save();
        return redirect()->route('CreateCollection')->with('success','Collection was successfully added');
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
        //
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
