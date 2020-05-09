<?php

namespace App\Http\Controllers\Web;

use App\Models\Skill;
use App\Models\Title;
use Illuminate\Http\Request;

class TitlesController extends Controller
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

        $query = Title::with('map', 'npc');

        foreach ($keywords as $keyword) {
            $query->where('name', 'like', '%'. $keyword . '%');
        }

        $titles = $query->paginate(12);
        return view('titles.index', compact('titles'));
    }
}
