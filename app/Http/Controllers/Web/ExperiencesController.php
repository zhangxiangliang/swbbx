<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\LevelExperience;
use App\Models\SkillExperience;

class ExperiencesController extends Controller
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
        $levels = LevelExperience::all();
        $skills = SkillExperience::all();

        // 传参变量话题和分类到模板中
        return view('experiences.index', compact('levels', 'skills'));
    }
}
