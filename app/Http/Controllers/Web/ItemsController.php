<?php

namespace App\Http\Controllers\Web;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
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

        $query = Item::query();

        foreach ($keywords as $keyword) {
            $query->where('name', 'like', '%'. $keyword . '%');
        }

        $items = $query->recent()->paginate(12);

        return view('items.index', compact('items'));
    }
}