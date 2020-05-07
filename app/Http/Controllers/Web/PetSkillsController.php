<?php

namespace App\Http\Controllers\Web;

use App\Models\PetSkill;
use Illuminate\Http\Request;

class PetSkillsController extends Controller
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

        $query = PetSkill::query();

        foreach ($keywords as $keyword) {
            $query->where('name', 'like', '%'. $keyword . '%')
                ->orWhere('category', 'like', '%'. $keyword . '%');
        }

        $petSkills = $query
            ->orderBy('sort', 'asc')
            ->paginate();

        // 传参变量话题和分类到模板中
        return view('pet-skills.index', compact('petSkills'));
    }
}
