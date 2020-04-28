<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFomenFlySeeder extends Seeder
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
                "open_level" => 120,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3.5点魔法值，所需能量：5",
                "description" => "为队友恢复一定气血并将指定技能的能量数加3，同时附加“渡世”状态2回合，该状态下死亡不会进入异常状态，并消耗掉“渡世”状态",
                "name" => "慈悲渡世"
            ],
            [
                "level" => 0,
                "open_level" => 120,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3.5点魔法值，所需能量：5",
                "description" => "为自身或队友恢复大量气血，但之后每回合会损失一定气血",
                "name" => "饮鸩止渴"
            ],
            [
                "level" => 0,
                "open_level" => 120,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值，所需能量：5",
                "description" => "创造一个持续3回合的领域，己方进行物理攻击时无视目标的防御操作，回合末为己方攻击最高的单位附加伽蓝战气状态2回合，领域持续3回合；领域释放者死亡，领域效果结束",
                "name" => "万佛朝宗"
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
