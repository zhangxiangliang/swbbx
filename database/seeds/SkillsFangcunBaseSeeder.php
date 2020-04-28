<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFangcunBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '七星方寸')->first();
        $npc = Npc::where('name', '大觉金仙')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值和10点气血值；战斗中使用消耗90%的当前气血值和100%当前的魔法值 ",
                "description" => "平时使用后可以瞬间回到自己的门派，战斗中使用有一定几率失败，战斗外使用需当前气血≥气血上限的40%，战斗中使用需当前气血>10且当前魔法≥10 ",
                "name" => "仙人指路"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "将对手催眠，令其一定回合内无法进行任何行动；但受到伤害即解除；连续对同一目标使用，将额外降低成功率",
                "name" => "入梦符"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用法术，并降低灵力",
                "name" => "离魂失心"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.8点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用物理攻击和逃跑，并降低物理防御力和灵力",
                "name" => "陷地符"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用法术，并降低物理防御力",
                "name" => "追魂破甲"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.2点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用物理攻击，并降低物理防御力",
                "name" => "夺魂卸甲"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "以雷系法术攻击敌方单个目标，对NPC伤害结果增加50%",
                "name" => "神霄雷法"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "以雷系法术固定伤害多个敌人（技能45级以上作用3个目标，90级以上作用4个目标）；对NPC伤害加倍",
                "name" => "太乙神雷"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "技能等级/2的活力 ",
                "description" => "暂时为武器附加速度效果，持续24小时",
                "name" => "神行符"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "20点气血值 ",
                "description" => "消耗一定的气血来恢复魔法，非战斗时每两分钟使用一次；只能对自己使用，当前气血≥气血上限的50%",
                "name" => "化气归灵"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 4点魔法值 ",
                "description" => "使自己一定回合里免疫每回合受到的首次任何攻击或诅咒；所需能量：5（不可叠加使用次数）",
                "name" => "缥缈符"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 1.5点魔法值 ",
                "description" => "战斗中消耗魔法值补充自己的气血",
                "name" => "凝神归元"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "120点愤怒值 ",
                "description" => "驱散全场异常、辅助、临时状态",
                "name" => "返璞归真"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用物理攻击，并暂时镇住目标的鬼魂效果",
                "name" => "镇魂符"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.8点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用法术和物理攻击",
                "name" => "失魂落魄"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用特技",
                "name" => "特技封印"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "有几率令对手一定回合内出现错乱（使用法术和物理攻击时无法指定目标，并且会变成普通攻击）",
                "name" => "乱神"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 1.5点魔法值和2点活力 ",
                "description" => "平时使用可制作一张传送符，使用传送符可立即飞到指定的城市",
                "name" => "制符术"
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
