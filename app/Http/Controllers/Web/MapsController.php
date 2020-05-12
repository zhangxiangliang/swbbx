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
    public function index(Request $request)
    {

        $keywords =  $request->get('search', '') === '' ? [] : explode(' ', $request->search);

        $query = Map::query();

        foreach ($keywords as $keyword) {
            $query->orWhere('name', 'like', '%'. $keyword . '%');
        }

        $maps = $query->paginate();
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
        $map->load([
            'titles.npc', 'titles.map',
            'teacher', 'npcs.favorites', 'npcs.friends', 'npcs.map',
            'baseSkills', 'mountSkills', 'flySkills', 'superSkills'
        ]);

        $map->superSkillsGroup = $map->superSkills->map(function ($item) {
            $item->group = explode('·', $item['name'])[0];
            return $item;
        })->groupBy('group');

        return view('maps.show', compact('map'));
    }
}
