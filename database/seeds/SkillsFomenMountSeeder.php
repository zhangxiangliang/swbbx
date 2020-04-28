<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFomenMountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '佛门')->first();
        $npc = Npc::where('name', '大慧禅师')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 50点精气，速率：5%，所需能量：4",
                "description" => "低速复活法术，复活死亡的队友并恢复一定气血和伤势",
                "name" => "摩诃无量"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4.5）点魔法值 50点精气，速率：100%，所需能量：5",
                "description" => "为自身或队友恢复大量气血",
                "name" => "洗髓换骨"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：100%，所需能量：6",
                "description" => "为己方全体恢复气血",
                "name" => "万物回春"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：230%，所需能量：4",
                "description" => "清除己方全体的毒类状态，被解毒的队员同时获得一个持续恢复生命值的状态。",
                "name" => "药师咒"
            ],
        ];

        $items = collect($items)->map(function ($item) use ($map, $npc) {
            return array_merge($item, [
                "map_id" => $map["id"],
                "npc_id" => $npc["id"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        Skill::insert($items);
    }
}
