<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPutuoBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '南海普陀')->first();
        $npc = Npc::where('name', '观音菩萨')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值和10点气血值",
                "description" => "使用后可以瞬间回到自己的门派，当前气血≥气血上限的40%",
                "name" => "心入莲境"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "以雷系法术固定伤害敌人，25%几率对目标造成伤势，对普通怪物伤害增加；如果目标为NPC，则作用多人（技能45级以上作用3个目标、技能90级以上作用4个目标）",
                "name" => "雷灵决"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => " 以火系法术固定伤害敌人，25%几率对目标造成伤势，对普通怪物伤害增加；如果目标为NPC，则作用多人（技能45级以上作用3个目标、技能90级以上作用4个目标）",
                "name" => "火灵决"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => " 以土系法术固定伤害敌人，25%几率对目标造成伤势，对普通怪物伤害增加；如果目标为NPC，则作用多人（技能45级以上作用3个目标、技能90级以上作用4个目标）",
                "name" => "土灵决"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => " 以水系法术固定伤害敌人，25%几率对目标造成伤势，对普通怪物伤害增加；如果目标为NPC，则作用多人（技能45级以上作用3个目标、技能90级以上作用4个目标）",
                "name" => "水灵决"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "一定回合内减少对方的气血并对其造成伤势",
                "name" => "伏魔圈"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "为目标恢复少量气血，并附加感化效果（技能等级140级以上，可以作用5个目标），接受恢复治疗效果增加",
                "name" => "大悲咒"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 4点魔法值",
                "description" => "使用可复活已经死亡的队友，并恢复一定气血和伤势",
                "name" => "回魂甘露"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 4.5点魔法值",
                "description" => "将自己或队友的莲华度世治疗状态清除，并将该状态剩余回合（最低按两回合计算）应恢复的气血量和伤势一次性结算为目标恢复且额外恢复一定气血；所需能量：3",
                "name" => "大海无量"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "为自己或队友临时提高法术伤害结果（技能105级以上作用4个目标）",
                "name" => "灵耀九州"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "为自己或队友临时提高法术防御，并恢复少量气血（技能105级以上作用4个目标）",
                "name" => "灵贯三界"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "为自己或队友附加雷火不入效果（技能60级以上作用2个目标）；受雷系或火系法术攻击时有一定几率将伤害吸收为自己恢复气血，并不会受到物理必杀、法术暴击或暗器暴击",
                "name" => "雷火不入"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值和20点愤怒值",
                "description" => "临时提高速率为自己或队友附加“琉璃状态”，该回合下受到的伤害结果降低60%",
                "name" => "莲心琉璃"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值",
                "description" => "为自己或队友附加水土不侵效果（技能60级以上作用2个目标）；受水系或土系攻击时有一定几率将伤害吸收为自己恢复气血，并且不会受到物理必杀、法术暴击或暗器暴击",
                "name" => "水土不侵"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => " 人物等级 * 2点魔法值",
                "description" => "一定回合内恢复自己或队友的气血和伤势，使用首回合可额外为目标恢复一定气血；对NPC战斗中使用时可额外作用一个目标，玩家战斗中有几率额外作用一个目标",
                "name" => "莲华度世"
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
