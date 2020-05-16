<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\LevelExperience;
use App\Models\SkillExperience;
use App\Models\PracticeExperience;
use App\Http\Requests\ExperienceRequest;
use Illuminate\Support\Facades\Validator;

class ExperiencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['level', 'computer', 'skill', 'practice']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function skill(Request $request)
    {
        $keywords =  $request->get('search', '') === '' ? [] : explode(' ', $request->search);

        $query = SkillExperience::query();

        foreach ($keywords as $keyword) {
            $query->orWhere('skill', 'like', '%'. $keyword . '%');
        }

        $skills = $query->paginate();
        return view('experiences.skill', compact('skills'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function practice(Request $request)
    {
        $keywords =  $request->get('search', '') === '' ? [] : explode(' ', $request->search);

        $query = PracticeExperience::query();

        foreach ($keywords as $keyword) {
            $query->orWhere('level', 'like', '%'. $keyword . '%');
        }

        $practices = $query->paginate();
        return view('experiences.practice', compact('practices'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function computer(Request $request)
    {
        $levels = LevelExperience::all();
        $skills = SkillExperience::all();

        // 人物经验
        $startLevel = intval($request->get("start_level", 0));
        $startLevelIsFly = boolval($request->get("start_level_is_fly", false));
        $endLevel = intval($request->get("end_level", 0));
        $endLevelIsFly = boolval($request->get("end_level_is_fly", false));
        $serverLevel = intval($request->get("server_level", 0));
        $serverLevelIsBreak = boolval($request->get("server_level_is_break", false));

        // 技能经验
        $startSkill = intval($request->get("start_skill", 0));
        $startSkillIsFly = boolval($request->get("start_skill_is_fly", false));
        $endSkill = intval($request->get("end_skill", 0));
        $endSkillIsFly = boolval($request->get("end_skill_is_fly", false));
        $totalSkill = intval($request->get("total_skill", 0));
        $totalSkillIsMax = boolval($request->get("total_skill_is_max", false));

        // 人物经验相关
        $startLevelSort = $startLevelIsFly ? $startLevel + 10 : $startLevel;
        $endLevelSort = $endLevelIsFly ? $endLevel + 10 : $endLevel;

        // 技能经验相关
        $startSkillSort = $startSkillIsFly ? $startSkill + 10 : $startSkill;
        $endSkillSort = $endSkillIsFly ? $endSkill + 10 : $endSkill;
        $totalSkill = $totalSkillIsMax ? 7 : $totalSkill;

        $levelTotal = $startLevelSort < $endLevelSort && $startLevelSort !== 0
            ? $levels->reduce(function ($carry, $item) use ($startLevelSort, $endLevelSort) {
                return $startLevelSort <= $item->sort && $item->sort < $endLevelSort
                    ? $carry + $item->experience + collect($item->star)->reduce(function ($carry, $item) {
                        return $carry + $item;
                    })
                    : $carry;
            }, 0)
            : 0;

        [$skillTotal, $skillCostTotal] = $startSkillSort < $endSkillSort && $startSkillSort !== 0 && $totalSkill !== 0
            ? $skills->reduce(function ($carry, $item) use ($startSkillSort, $endSkillSort) {

                return $startSkillSort <= $item->sort && $item->sort < $endSkillSort
                    ? [$carry[0] + $item->experience, $carry[1] + $item->cost]
                    : $carry;
            }, [0, 0])
            : [0, 0];

        $total = [
            'level' => [
                'start' => $startLevel,
                'start_is_fly' => $startLevelIsFly,

                'end' => $endLevel,
                'end_is_fly' => $endLevelIsFly,

                'experience' => intval($levelTotal),
                'cost' => 0,
                'total' => 0,
            ],
            'skill' => [
                'start' => $startSkill,
                'start_is_fly' => $startSkillIsFly,

                'end' => $endSkill,
                'end_is_fly' => $endSkillIsFly,

                'experience' => intval($skillTotal / 7 * $totalSkill),
                'cost' => intval($skillCostTotal  / 7 * $totalSkill),
                'total' => intval($totalSkill),
            ],
            'total' => [
                'start' => 0,
                'start_is_fly' => false,

                'end' => 0,
                'end_is_fly' => false,

                'experience' => intval($levelTotal) + intval($skillTotal / 7 * $totalSkill),
                'cost' => intval($skillCostTotal  / 7 * $totalSkill),
                'total' => 0,
            ],
        ];

        return view('experiences.computer', compact('total'));
    }
}
