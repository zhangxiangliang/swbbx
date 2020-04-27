<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWanshouBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '万兽岭')->first();
        $npc = Npc::where('name', '万兽之王')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 0.5点魔法值和10点气血值 ",
                "description" => "使用后可以瞬间回到自己的门派，当前气血≥气血上限的40%",
                "name" => "振翅回营"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 4点魔法值 ",
                "description" => "兽神附体状态下能使用，疯狂地连续攻击敌人（技能60级以上攻击3次、90级以上攻击4次、120级以上攻击5次）；使用后取消兽神附体状态，并休息1回合",
                "name" => "疯狂连击"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 2点魔法值 ",
                "description" => "物理攻击对方多个目标（造成的伤害结果降低），技能25级以上作用2个、50级以上作用3个目标",
                "name" => "狂爪"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"30点气血值 ",
                "description" => "一定回合内为自己恢复魔法值",
                "name" => "归灵咒"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 2.5点魔法值 ",
                "description" => "攻击目标，伤害结果降低30%，同时在一定回合内临时提高自身灵力",
                "name" => "聚灵术"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 2点魔法值 ",
                "description" => "兽神附体状态下才能使用，攻击对方单个目标",
                "name" => "撕咬"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 4点魔法值 ",
                "description" => "兽神附体状态下才能使用，攻击对方多人（技能50级以上作用3个目标、75级以上作用4个目标），使用后次回合只能执行防御、保护、召唤指令或使用药品",
                "name" => "飞击"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 2.2点魔法值 ",
                "description" => "兽神附体状态下才能使用，攻击单人并令其2回合内无法使用法术、特技、物理攻击（可对鬼魂目标生效）；使用后取消兽神附体状态，自身次回合无法使用法术",
                "name" => "践踏"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 2点魔法值 ",
                "description" => "有几率令怪物或宠物一定回合内无法使用法术和物理攻击，对玩家无效",
                "name" => "兽威"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 2.7点魔法值 ",
                "description" => "攻击目标、伤害结果降低30%，令自身一定回合内攻击力、狂暴几率提高，但受到的伤害结果提高并且封印成功率提高",
                "name" => "兽神狂怒"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"无消耗 ",
                "description" => "为自己附加反击状态，受到普通物理攻击时会自动反击敌人",
                "name" => "以牙还牙"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 2.3点魔法值 ",
                "description" => "兽神附体后使用，攻击单个敌人，同时对目标造成伤势；使用后自身次回合无法使用法术",
                "name" => "破胆怒吼"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" =>"人物等级 * 1.5点魔法值 ",
                "description" => "攻击目标并为自己附加兽神附体状态，临时提升自己的攻击力（没有可攻击目标则直接兽神附体），是使用践踏、飞击、撕咬、疯狂连击、破胆怒吼的前提",
                "name" => "兽神附体"
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
