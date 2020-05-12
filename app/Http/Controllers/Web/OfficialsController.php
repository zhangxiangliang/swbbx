<?php

namespace App\Http\Controllers\Web;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialsController extends Controller
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
        $keywords =  $request->get('search', '') === '' ? [] : explode(' ', $request->search);

        $query = Official::with('level');

        foreach ($keywords as $keyword) {
            $query->orWhere('name', 'like', '%'. $keyword . '%');
        }

        $officials = $query->paginate();

        return view('officials.index', compact('officials'));
    }
}
