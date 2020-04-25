<?php

namespace App\Http\Controllers\Web;

use App\Models\Produce;
use Illuminate\Http\Request;

class ProducesController extends Controller
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

        $query = Produce::with('items')->withCount('items');

        foreach ($keywords as $keyword) {
            $query->where('name', 'like', '%'. $keyword . '%');
        }

        $produces = $query
            ->whereNotIn('name', ["百花露", "变身卡"])
            ->orderBy('items_count', 'desc')
            ->paginate();

        // 传参变量话题和分类到模板中
        return view('produces.index', compact('produces'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produce $produce
     * @return \Illuminate\Http\Response
     */
    public function show(Produce $produce)
    {
        $produce->load('items.produces');
        return view('produces.show', compact('produce'));
    }
}
