<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFomenBaseSeeder extends Seeder
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
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值 和 10点气血值 ",
                "description" => "使用后可以瞬间回到自己的门派，需要当前气血 ≥ 气血上限的 40% ",
                "name" => "遁入空门"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "解除自己或队友所中的毒状态并恢复一定的气血，同时附加“抗毒”状态3回合",
                "name" => "净土无秽"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 4点魔法值 ",
                "description" => "使用后可以恢复自己或队友的气血和伤势（技能60级以上作用三个目标、90以上作用4个目标）",
                "name" => "固本培元"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值，非战斗时消耗减半 ",
                "description" => "可以恢复自己或队友的气血和伤势，对自己使用时效果降低",
                "name" => "治愈"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "使用后可以恢复自己或者队友的气血（技能60级以上作用3个目标、90级以上作用4个目标）",
                "name" => "泽被苍生"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级*2点魔法值，非战斗时消耗减半 ",
                "description" => "可恢复自己或者队友的气血，对自己使用时效果降低",
                "name" => "止血"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级*2.5点魔法值 ",
                "description" => "临时增加自己或队友的物理命中率和物理躲避率并恢复一定气血（技能60级以上作用3个目标、90级以上作用4个目标）",
                "name" => "明王镇狱"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5 点魔法值 ",
                "description" => "一定回合内增加自己或队友的攻击力，除选择目标外，优先作用于攻击力高的队友（技能60级以上作用3个目标、90级以上作用4个目标）",
                "name" => "伽蓝战气"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "临时增加自己或队友的气血上限，同时恢复气血，作用两个目标。效果持续至战斗结束",
                "name" => "菩提护佑"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "一定回合内增加自己或队友的物理防御力，并恢复少量气血（技能60级以上作用3个目标、90级以上作用4个目标）",
                "name" => "罗汉金身"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "使用雷系法术固定伤害敌人",
                "name" => "附魔咒"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "使用水系法术固定伤害敌人（技能45级以上作用3个目标、90级以上作用4个目标），对普通怪物伤害增加",
                "name" => "净世梵音"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 4点魔法值 ",
                "description" => "复活已经死亡的队友，并恢复一定气血和伤势",
                "name" => "往生咒"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值 ",
                "description" => "为自己或队友附加“降生”状态2回合并恢复少量气血，该状态下死亡必然复活并恢复一定气血，复活后状态消失；所需能量：5",
                "name" => "降生咒"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 4.5点魔法值 ",
                "description" => "解除自己或队友的非封系异常状态和属性异常状态并恢复一定的气血；所需能量：6（不可叠加使用次数）",
                "name" => "清净菩提"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值，非战斗时消耗减半 ",
                "description" => "为目标恢复大量气血；额外消耗目标40点愤怒值，且可对敌方目标使用；所需能量：4",
                "name" => "慈悲为怀"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "令队友使用某些攻击性法术时一定几率出现连续2次攻击",
                "name" => "三世加持"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "攻击敌方单个目标，伤害受目标防御力影响，只能对玩家和宠物使用，自身损失对方所受伤害一半的气血",
                "name" => "四大皆空"
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
