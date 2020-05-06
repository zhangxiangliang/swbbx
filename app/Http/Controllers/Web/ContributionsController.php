<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;

class ContributionsController extends Controller
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
        $contributions = User::where('contribution_score', '>', 0)
            ->orderBy('contribution_score', 'desc')
            ->get();
        return view('contributions.index', compact('contributions'));
    }
}
