<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWuzhuangBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '镇元五庄')->first();
        $npc = Npc::where('name', '镇元子')->first();

        $items =[
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值和10点气血值 ",
                "description" => "使用后可以瞬间回到自己的门派，当前气血≥气血上限的40%",
                "name" => "逍遥游"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "30点气血值 ",
                "description" => "一定回合内恢复自己或队友的魔法，当前气血≥气血上限的20%",
                "name" => "凝神聚气"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "为队友附加神佑效果2回合，死亡时自动复活并恢复一定气血；每回合最多神佑1次；所需能量：5",
                "name" => "七星还魂"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "一定回合内恢复自己或队友的气血（技能60级以上作用3个目标、90级以上作用4个目标、120级以上作用5个目标）",
                "name" => "生生不息"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "牺牲本人5%的物理防御力为队友附加乾坤罩状态，使其不受敌人攻击，但其自身无法行动。玩家对战中只能对目标使用一次法术，需要完成“门派技法”任务或使用“妙法秘籍”学习",
                "name" => "三清护法"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用法术、特技、物理攻击",
                "name" => "袖里乾坤"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.3点魔法值 ",
                "description" => "连续物理攻击目标2次，当前气血≥气血上限的50%",
                "name" => "穿云斩"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "临时提高速度攻击敌人，并将伤害结果的50%转化为治疗效果为己方气血最低的目标进行恢复；所需能量：4，速率180%",
                "name" => "御烟破"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => " 人物等级 * 2点魔法值 ",
                "description" => "物理攻击多个目标（技能50级以上作用3个目标）",
                "name" => "天罡剑气"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => " 人物等级 * 3点魔法值和10点愤怒值 ",
                "description" => "为自己或队友附加法术护罩，免疫敌人的法术攻击，但防御 降低30%",
                "name" => "日月同辉"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "使用火系法术固定伤害敌方多个目标，使其在一定回合内命中率降低",
                "name" => "迷幻术"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "30点气血值 ",
                "description" => "消耗一定的气血来恢复魔法，非战斗时每2分钟使用1次；只能对自己使用，当前气血≥气血上限的20%",
                "name" => "五气朝元"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "以较高的出手速率解除七星方寸封类法术的影响",
                "name" => "解咒术"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "以较高的出手速率解除自己或队友所中的毒状态",
                "name" => "驱毒术"
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
