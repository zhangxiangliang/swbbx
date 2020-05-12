<?php

namespace App\Http\Controllers\Web;

use App\Models\Produce;
use Illuminate\Http\Request;

class BarbecuesController extends Controller
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

        $query = Produce::where('category', '篝火派对');

        foreach ($keywords as $keyword) {
            $query->where('name', 'like', '%'. $keyword . '%');
        }

        $produces = $query->recent()->paginate();

        // 传参变量话题和分类到模板中
        return view('barbecues.index', compact('produces'));
    }
}
