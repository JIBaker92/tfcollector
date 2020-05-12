<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\Series;
use App\Faction;
use App\Classification;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all()->toArray();
        return view('characters', compact ('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['series'] = Series::select('title')->get();
        $data['class'] = Classification::select('class_name')->get();
        $data['faction'] = Faction::select('faction_name')->get();

        return view('createcharacters', $data);
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
            'description' => 'required',
            'faction' => 'required',

        ]);
            $characters = new Character([
                'title' => $request->get('title'),
                'name' => $request->get('name'),
                'description' => $request->get('description'),
                'class' => $request->get('class'),
                'faction' => $request->get('faction'),
            ]);
            $characters->save();
            return redirect()->route('CreateCharacters')->with('success','Character was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
