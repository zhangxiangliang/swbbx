<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillTianceBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '天策')->first();
        $npc = Npc::where('name', '程将军')->first();

        $items = [
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "人物等级 * 0.5点魔法值 和 10点气血值",
                "description" => "使用后可以瞬间回到自己的门派，需要当前气血 ≥ 气血上限的 40% ",
                "name" => "神行千里"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "一定的活力",
                "description" => "可以鉴定出武器和铠甲的特殊效果，也可以直接制作或者到长安城“林惊羽”处制作天策兵书",
                "name" => "天策兵书"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "气血上限的 5%",
                "description" => "使用后第一回合休息，并临时提高物理防御和灵力；第二回合临时提高攻击力和速度并自动攻击目标",
                "name" => "以守为攻"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "气血上限的 10%",
                "description" => "同时攻击敌方 3 个目标，使用后虚弱 2 回合，降低一定防御和灵力，同时不能进行任何行动；所需能量：5，需要当前气血 ≤ 气血上限 50%",
                "name" => "背水一战"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "当前气血的 5%",
                "description" => "临时提高自身的速度，攻击敌方单个目标，伤害结果减少 40%",
                "name" => "先发制人"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "当前气血的 5%",
                "description" => "物理攻击对方多个目标（非玩家战斗中伤害结果降低，玩家战斗中伤害结果减半），技能25级以上作用2个目标、50级以上作用3个目标",
                "name" => "百战"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "当前气血 ≥ 气血上限的 50%",
                "description" => "连续攻击目标（技能达到50级可以攻击3次），使用后进入筋疲力竭2回合，降低一定防御和灵力，并且只能执行召唤指令或使用药品",
                "name" => "横扫天下"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "当前气血的 3%",
                "description" => "攻击目标，伤害结果降低 30%，同时在一定回合内临时提高自身灵力",
                "name" => "定神诀"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "人物等级 * 3点魔法值",
                "description" => "令目标一定回合内陷入混乱状态（有较高概率普通攻击队友），只能对NPC使用",
                "name" => "离间计"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "当前气血的 5% 和 3点愤怒值",
                "description" => "攻击敌人同时为自身附加反击效果，只能反击 1 次，需要当前气血≤ 气血上限的 90%",
                "name" => "抛砖引玉"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "cost" => "当前气血的 3%",
                "description" => "攻击目标，伤害结果降低 10%，同时在一定回合内提高自己和随从一名队友的命中率",
                "name" => "鹰眼"
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
