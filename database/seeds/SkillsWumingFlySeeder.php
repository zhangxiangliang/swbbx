<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWumingFlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '无名谷')->first();
        $npc = Npc::where('name', '姬长歌')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "人物等级 * 2点魔法值，所需能量 5",
                "description" => "物理攻击敌方三个目标，有较高几率优先攻击敌方宠物的效果",
                "name" => "云龙三现"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "人物等级 * 2.5点魔法值，所需能量 5",
                "description" => "提高攻击力对目标造成伤害，攻击后自身获得“灭魂”状态3回合，该状态下击倒目标可无视其复活、保命类效果",
                "name" => "千刃袭魂"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "临时提高速度攻击敌人，击倒目标则令自己进入“灭魂”状态2回合，该状态下攻击目标可无视其复活、保命类效果",
                "name" => "登云之跃"
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
