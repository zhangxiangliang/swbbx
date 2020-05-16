<?php

namespace App\Http\Controllers\Web;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingsController extends Controller
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

        $query = Meeting::with('maps', 'official', 'levelExperience');

        foreach ($keywords as $keyword) {
            $query->orWhere('name', 'like', '%'. $keyword . '%')
                ->orWhere('description', 'like', '%'. $keyword . '%');
        }

        $meetings = $query->recent()->paginate();

        return view('meetings.index', compact('meetings'));
    }
}
