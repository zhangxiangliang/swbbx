<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\LevelExperience;
use App\Models\SkillExperience;
use App\Models\PracticeExperience;
use App\Http\Requests\ExperienceRequest;
use Illuminate\Support\Facades\Validator;

class PracticeExperiencesController extends Controller
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

        $query = PracticeExperience::query();

        foreach ($keywords as $keyword) {
            $query->orWhere('level', 'like', '%'. $keyword . '%');
        }

        $practices = $query->paginate();
        return view('practice-experiences.index', compact('practices'));
    }
}
