<?php

namespace App\Http\Controllers\Web;

use App\Models\Map;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map::paginate(13);

        return view('maps.index', compact('maps'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        $map->load('teacher', 'npcs.favorites', 'npcs.friends', 'npcs.map', 'baseSkills', 'mountSkills');
        return view('maps.show', compact('map'));
    }
}
