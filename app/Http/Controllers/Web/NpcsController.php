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
        $this->middleware('auth', ['except' => ['index']]);
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
}
