<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTiangongBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '凌霄天宫')->first();
        $npc = Npc::where('name', '杨戬')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值 和 10点气血值",
                "description" => "使用后可以瞬间回到自己的门派，需要当前气血 ≥ 气血上限的 40% ",
                "name" => "通天彻地"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "使用火系法术攻击敌方多个目标（技能50级以上作用3个目标、100级以上作用4个目标）",
                "name" => "天火"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.2点魔法值",
                "description" => "有几率令对手一定回合内无法使用物理攻击",
                "name" => "捆仙绳"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "使用雷系法术攻击单个目标",
                "name" => "疾风雷"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "有几率令对手一定回合内无法使用法术",
                "name" => "镇魔塔"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "临时提高自身攻击力重创敌人，使用后进入筋疲力竭2回合并且只能执行召唤指令或使用药品，需要当前气血≥气血上限的30%",
                "name" => "毁天灭地"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.8点魔法值",
                "description" => "有几率令对手一定回合内出现错乱（使用法术和物理攻击时无法指定目标，并且会变成普通攻击）",
                "name" => "迷乱"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔力值",
                "description" => "临时提高攻击力对目标造成攻击后减少双方防御力，减少幅度受力量属性影响，敌方防御力降低持续5回合，自身持续3回合",
                "name" => "惊雷斩"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值",
                "description" => "物理攻击目标，并使其进入“孤立”状态3回合，该状态下受到的保护将失败；所需能量：5",
                "name" => "画地为牢"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.6点魔法值",
                "description" => "使用给予敌人重击，可破高防御目标",
                "name" => "怒雷"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔力值",
                "description" => "临时提高攻击力对目标造成攻击同时减少双方法术防御力，减少幅度受力量属性影响，敌方法力防御力降低持续5回合，自身持续3回合",
                "name" => "乱神斩"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值，非战斗时消耗技能等级 * 7点魔法值",
                "description" => "攻击敌人造成 50% 的伤害，同时得知其气血、魔法、防御力、速度情况；技能等级小于对方人物等级10级则无法探知属性",
                "name" => "千里眼"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5魔法值",
                "description" => "有几率令对手进入“束缚”一定回合，该状态下使用法术和物理攻击，将会减少一定气血",
                "name" => "契约束缚"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "以较高的出售速率解除天魔里封类法术的影响",
                "name" => "凝神诀"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "物理攻击多个目标（技能50级以上作用3个目标，100级以上作用4个目标）",
                "name" => "雷霆斩"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "战斗中保护指定的队友，并为目标临时增加物理防御力",
                "name" => "天灵护佑"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.8 魔法值",
                "description" => "减少敌人 25% 当前气血和魔法（最高不超过技能等级*50），失败则只减少 5% 的当前气血（最高不超过技能等级 * 15）",
                "name" => "雷劫天降"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "攻击目标，伤害结果降低 30%，同时在一定回合内临时提高自身的法术防御力和抗封几率",
                "name" => "天罡法障"
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
