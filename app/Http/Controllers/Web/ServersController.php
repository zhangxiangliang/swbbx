<?php

namespace App\Http\Controllers\Web;

use App\Models\Server;
use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;

class ServersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $servers = Server::with('subjects')
            ->where('pid', 0)
            ->recent()
            ->get();

        return view('servers.index', compact('servers'));
    }
}
