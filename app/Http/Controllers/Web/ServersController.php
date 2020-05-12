<?php

namespace App\Http\Controllers\Web;

use App\Models\Server;
use Illuminate\Http\Request;

class ServersController extends Controller
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

        $query = Server::with('branches', 'master');

        foreach ($keywords as $keyword) {
            $query->where('name', 'like', '%'. $keyword . '%');
        }

        $servers = $query->recent()->paginate();
        return view('servers.index', compact('servers'));
    }
}
