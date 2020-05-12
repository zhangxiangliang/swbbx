<?php

use App\Models\Official;
use App\Models\LevelExperience;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class TitlesOfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => '九品县尉', 'level' => 60, 'experience' => 360],
            ['name' => '八品县丞', 'level' => 60, 'experience' => 820],

            ['name' => '七品长史', 'level' => 65, 'experience' => 1600],
            ['name' => '从六品司马', 'level' => 65, 'experience' => 2820],

            ['name' => '正六品都尉', 'level' => 70, 'experience' => 4600],
            ['name' => '从五品大夫', 'level' => 70, 'experience' => 7060],

            ['name' => '正五品中丞', 'level' => 75, 'experience' => 10360],
            ['name' => '从四品少监', 'level' => 75, 'experience' => 14500],

            ['name' => '正四品侍郎', 'level' => 80, 'experience' => 19720],
            ['name' => '从三品刺史', 'level' => 80, 'experience' => 26100],

            ['name' => '正三品尚书', 'level' => 85, 'experience' => 33760],
            ['name' => '从二品都督', 'level' => 85, 'experience' => 42820],

            ['name' => '正二品将军', 'level' => 90, 'experience' => 53400],
            ['name' => '从一品郡王', 'level' => 90, 'experience' => 65620],

            ['name' => '正一品太尉', 'level' => 95, 'experience' => 79000],
            ['name' => '天策上将', 'level' => 100, 'experience' => 95460],
            ['name' => '天策·传奇', 'level' => 105, 'experience' => 124652],
            ['name' => '天策·武魂', 'level' => 110, 'experience' => 159960],
            ['name' => '天策·战神', 'level' => 115, 'experience' => 202176],
            ['name' => '天策·仙尊', 'level' => 120, 'experience' => 252140],
        ];

        $levels = LevelExperience::all()->keyBy('level');
        Official::insert(collect($items)->map(function ($item) use ($levels) {
            $level = $levels[$item['level']];
            unset($item['level']);

            return array_merge($item, [
                'level_id' => $level['id'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray());
    }
}
