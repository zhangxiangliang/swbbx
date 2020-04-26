<?php

namespace App\Http\Controllers\Web;

use App\Models\Map;
use App\Models\Npc;
use App\Models\Produce;
use Illuminate\Http\Request;

class NpcsController extends Controller
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
        $keywords = $request->get('search', '') === '' ? [] : explode(' ', $request->search);

        $query = Npc::query();

        foreach ($keywords as $keyword) {
            $query->where('name', 'like', '%'. $keyword . '%');
        }

        $npcs = $query->orWhereHas('friends', function($query) use ($keywords) {
            foreach ($keywords as $keyword) {
                $query->where('name', 'like', '%'. $keyword . '%');
            }
        })->orWhereHas('favorites', function($query) use ($keywords) {
            foreach ($keywords as $keyword) {
                $query->where('name', 'like', '%'. $keyword . '%');
            }
        })->orWhereHas('map', function($query) use ($keywords) {
            foreach ($keywords as $keyword) {
                $query->where('name', 'like', '%'. $keyword . '%');
            }
        })->recent()->paginate(12);

        return view('npcs.index', compact('npcs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Npc  $npc
     * @return \Illuminate\Http\Response
     */
    public function show(Npc $npc)
    {
        $npc->load(
            'map', 'favorites',
            'friends.favorites', 'friends.friends', 'friends.map',
            'baseSkills', 'mountSkills', 'flySkills'
        );
        return view('npcs.show', compact('npc'));
    }
}
