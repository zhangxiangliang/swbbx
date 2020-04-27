<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsDifuFlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '幽冥地府')->first();
        $npc = Npc::where('name', '地藏菩萨')->first();

        $items = [
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "鬼影缠身",
                "description" => "将目标全部技能的能量数减2并为其附加“鬼影缠身”状态2回合，该状态下无法获得愤怒，速率180%",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3.5点魔法值，所需能量：5"
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "生死判",
                "description" => "使用土系法术固定伤害敌人；一定概率出现双倍伤害，若未造成双倍伤害，则双方会分别受到伤害；造成较高的伤害",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值，所需能量：5"
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "阎罗炼狱",
                "description" => "创造一个持续3回合的领域，场上所有目标死亡都会进入恐怖状态。每回合结束时必定为己方气血最低的目标增加死亡缠绕状态3回合；领域释放者死亡，领域效果结束（不可叠加使用次数）",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值，所需能量：8"
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
