<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\SkillExperience;
use App\Http\Requests\ExperienceRequest;

class SkillExperiencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responseå
     */
    public function index(Request $request)
    {
        $keywords =  $request->get('search', '') === '' ? [] : explode(' ', $request->search);

        $query = SkillExperience::query();

        foreach ($keywords as $keyword) {
            $query->orWhere('level', 'like', '%'. $keyword . '%');
        }

        $skills = $query->paginate();
        return view('skill-experiences.index', compact('skills'));
    }
}
