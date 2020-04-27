<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsDifuBaseSeeder extends Seeder
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
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值 和 10点气血值",
                "description" => "使用后可以瞬间回到自己的门派，需要当前气血 大于 气血上限的 40% ",
                "name" => "鬼影迷踪"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "使用土系法术固定伤害敌人气血和魔法；并可能令其中驱逐状态，一定回合内无法被复活；照成较高的伤害",
                "name" => "无常索命"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.2点魔法值",
                "description" => "令对手一定回合内中生命虹吸状态，每回合减少其7%最大气血，最多不超过目标等级*15，同时恢复自身气血，恢复的气血最多为自身等级 * 3",
                "name" => "生命虹吸"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值",
                "description" => "使用火系法术固定伤害敌方多个目标（技能25以上作用2个目标，50级以上作用3个目标，75级以上作用4个目标，100级以上作用5个目标），并对其照成伤势；照成较高的伤害",
                "name" => "修罗追魂"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "无",
                "description" => "使用水系法术固定伤害敌人，并可能使其一定回合内速度降低25%；并造成较高的伤害",
                "name" => "冷幽彻骨"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "消耗人物等级 * 3.5点魔法值",
                "description" => "为自己或则队友附加诅咒状态，此状态下受到伤害降低，受攻击时可能使攻击者陷入随机的负面状态两回合；所需能量：4",
                "name" => "死亡缠绕"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 4点魔法值",
                "description" => "复活已经死亡的队友，并增加其攻击力，降低其物理防御力",
                "name" => "阳寿未尽"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.3点魔法值",
                "description" => "使用水系法术固定伤害敌人，且会驱散敌人的所有正面状态",
                "name" => "阴魂不散"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3魔法值",
                "description" => "牺牲自己的宠物为自身恢复气血和伤势，并且当回合受到伤害减少 20%。被牺牲的宠物可以触发神佑复生，保命，鬼魂术等效果，无法对同一宠物多次使用",
                "name" => "死亡契约"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "为本方或者敌方非鬼魂宠物临时附加高级鬼魂术状态；所需能量：5",
                "name" => "招魂"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.8点魔法值",
                "description" => "对敌方多个目标进行嘲讽（技能60级以上作用4个目标，90级以上作用5个目标），每个目标分别计算成功率，目标中状态后必定将攻击对象转向你；使用时额外为自身附加护盾效果，受到伤害结果减半，玩家对战中护盾效果减半",
                "name" => "暗黑光环"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "无",
                "description" => "为自己或队友附加‘感知’状态（技能60级以上作用3个目标，90级以上作用4个目标，120级以上作用5个目标），可以看到隐身、潜行的目标，对隐身、潜行状态下的玩家及宠物伤害结果提高20%，对NPC伤害结果不增加",
                "name" => "阴阳眼"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "引爆己方或者敌方鬼魂单位的尸体来攻击3个敌人；对敌方鬼魂单位使用时照成的伤害降低为30%",
                "name" => "尸爆"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值",
                "description" => "令对手一定回合内进入蚀心蛊状态，同时为自身附加“剧毒附化”状态4回合，对敌施法使一定几率让目标受到蚀心蛊影响；所需能量：5",
                "name" => "蚀心蛊"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值",
                "description" => "只能在白天使用；隐藏自己或队友的身形，隐身状态下不能使用法术",
                "name" => "鬼影术"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "无",
                "description" => "以较高的出手速率接触盘丝岭封印类法术的影响",
                "name" => "清心寡欲"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "无",
                "description" => "可以鉴定出头盔、项链、靴子的特殊效果，也可以直接制作或者到长安“林惊羽”处制作灵光图鉴",
                "name" => "灵光宝鉴"
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
