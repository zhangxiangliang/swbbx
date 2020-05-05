<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;

class ResourcesController extends Controller
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
        $mps = User::where('mp_name', '<>', '')->get();
        return view('resources.index', compact('mps'));
    }
}
