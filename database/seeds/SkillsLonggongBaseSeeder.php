<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsLonggongBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '东海龙宫')->first();
        $npc = Npc::where('name', '龙王敖广')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "战斗外使用需当前气血≥气血上限的40%；战斗中使用需要当前气血≥10且当前魔法≥10",
                "description" => "平时使用后可以瞬间回到自己的门派，战斗中使用有一定机率失败。",
                "name" => "龙游四海"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.2点魔法值",
                "description" => "使用水系法术攻击单个目标，减少30%的伤害效果，同时在一定回合内增加自身的物理躲避率和法术躲避率",
                "name" => "游龙步"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "消耗人物等级 * 2点魔法值",
                "description" => "使用水系法术攻击对方多个目标（技能25级以上作用2个目标、50级以上作用3个目标、75级以上作用4个目标、100级以上作用5个目标）",
                "name" => "疾风骤雨"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.6点魔法值",
                "description" => "使用雷系法术攻击敌人，可攻击隐身的怪物和宠物，同时能将其打出隐身状态。",
                "name" => "飞龙在天"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "减少敌方全体队员一定的气血和魔法值",
                "name" => "龙啸"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "技能等级 / 2的活力",
                "description" => "暂时为武器附加攻击效果，持续24小时",
                "name" => "龙威"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "使用水系法术攻击单个目标",
                "name" => "升龙"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.4点魔法值",
                "description" => "为自己附加魔法反击效果，受普通物理攻击则以升龙反击对手，伤害为正常的 80%",
                "name" => "神龙回首"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.2点魔法值",
                "description" => "使用水系法术攻击单个目标，减少30%的伤害结果，同时在一定回合内增加自己的武器攻击力",
                "name" => "蛟龙出海"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.7魔法值",
                "description" => "使用火系法术攻击两个目标",
                "name" => "双龙戏珠"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "解除自己或队友所中的毒状态，同时附加“抗毒”状态3回合",
                "name" => "龙涎"
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
