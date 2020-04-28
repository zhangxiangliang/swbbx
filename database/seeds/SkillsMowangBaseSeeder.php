<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsMowangBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '魔王山')->first();
        $npc = Npc::where('name', '平天大圣')->first();

        $items = [
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "泥牛入海",
                "description" => "使用后可以瞬间回到自己的门派，当前气血≥气血上限的40%",
                "cost" => "人物等级 * 0.5点魔法值和10点气血值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "怒气咒",
                "description" => "可为自身或队友恢复愤怒值，所需能量：3",
                "cost" => "人物等级 * 5点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "巡山小妖",
                "description" => "召唤出一个山精助战",
                "cost" => "人物等级 * 2.3点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "漫天狂沙",
                "description" => "使用土系法术攻击多个目标（技能50级级以上作用3个目标、100级以上作用4个目标）",
                "cost" => "人物等级 * 2点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "魔王真火",
                "description" => "使用火系法术攻击单个敌人",
                "cost" => "人物等级 * 2点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "赤炎咒",
                "description" => "一定回合内减少目标气血，同时使其任何增加愤怒值得效果减半，命中当回合减少敌人一定愤怒，并在当回合结束时造成额外法术伤害",
                "cost" => "人物等级 * 2.5点魔法值和20点愤怒值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "元神怒意",
                "description" => "使用土系法术攻击单个目标，减少30%的伤害结果，同时在一定回合内临时提高自身武器伤害，当前气血≤气血上限的80%",
                "cost" => "人物等级 * 2点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "魔炎甲",
                "description" => "为自己附加魔法反击效果，受普通物理攻击则自动以魔王真火反击对手，伤害为正常的80%",
                "cost" => "人物等级 * 2.4点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "蓄势待发",
                "description" => "使用后第一回合活的招架几率加倍的状态；第二回合临时提高伤害结果和速度以火系法术攻击目标（执行防御会减免该伤害）",
                "cost" => " 人物等级 * 3点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "魔王附化",
                "description" => "暂时为武器附加气血上限效果，持续24小时",
                "cost" => "技能等级/2的活力"
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
