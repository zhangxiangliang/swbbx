<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPansiFlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '盘丝岭')->first();
        $npc = Npc::where('name', '盘丝大仙')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3.5点魔法值",
                "description" => "以较高的出手速率对两个目标施加“同醉”状态（除选中的目标外，优先作用于玩家）。处于该状态下的目标增加愤怒时，施法者将获得等量的愤怒",
                "name" => "与君同醉"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*2点魔法值",
                "description" => "对自己或队友使用，一定回合内增加抗封概率，并使物理攻击、法术攻击、封印它的目标在一定回合内降低速度",
                "name" => "冷若冰霜"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*4点魔法值",
                "description" => "令目标进入动物毒状态一定回合，同时有几率使其无法使用法术、物理攻击",
                "name" => "情毒绕魂"
            ]
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
