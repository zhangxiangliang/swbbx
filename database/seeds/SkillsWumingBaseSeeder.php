<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWumingBaseSeeder extends Seeder
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
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值和10点气血值",
                "description" => "平时使用后可以瞬间回到自己的门派，战斗中使用有一定几率失败，当前气血≥气血上限的40%，战斗中使用需要当前气血≥10且当前魔法≥10",
                "name" => "踏雪"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "解除自身所有封印状态，成功解除后可获得2回合“风临”状态，该状态下攻击力提高",
                "name" => "风临"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "使用物理攻击敌方2个目标并额外提高攻击力，不受反震、反击影响",
                "name" => "天刀破阵"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值，所需能量 5",
                "description" => "提高攻击力对目标造成伤害，为自己恢复伤害结果30%的气血和魔法",
                "name" => "无为临锋"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "提高攻击力对目标造成伤害，本次攻击将无视目标的复活、保命类技能",
                "name" => "锢神"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值.所需能量 4",
                "description" => "物理攻击目标，且会驱散敌人的所有正面、负面状态",
                "name" => "归原"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值，所需能量 5",
                "description" => "物理攻击目标，并且会免疫接下来受到的首次任何攻击或法术，并在下回合获得该法术的使用权（只会获得人物法术、宠物法术、特技）",
                "name" => "斗转星移"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "物理攻击目标，同时在一定回合内增加自身的物理躲避率和法术躲避率",
                "name" => "云隐"
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
