<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPansiBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '盘丝岭')->first();
        $npc = Npc::where('name', '盘丝大仙')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 0.5点魔法值和10点气血值 ",
                "description" => "使用后可以瞬间回到自己的门派，当前气血≥气血上限的40%",
                "name" => "飞丝走线"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用物理攻击和逃跑并且速度降低",
                "name" => "蛛网缠绕"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用法术、物理攻击且有可能无法接受保护",
                "name" => "柔情蜜意"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "有几率令对手一定回合内无法使用法术、物理攻击并每回合损失一定的气血",
                "name" => "情意绵绵"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "以土系法术固定伤害敌人，同时可能令其中动物毒；对NPC伤害加倍（技能45级以上作用3个目标、90级以上作用4个目标）",
                "name" => "千蛛手"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "一定回合内增加自身的物理防御力并且抗封几率提高",
                "name" => "天蚕茧"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.5点魔法值 ",
                "description" => "以较高的出手速率解除凌霄天宫封类法术的影响",
                "name" => "唤醒"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值 ",
                "description" => "有几率对目标造成固定伤害并令其一定回合内无法使用法术、物理攻击，同时无法被使用灵心丸之外的物品；所需能量：4",
                "name" => "封心靡音"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3点魔法值 ",
                "description" => "为自己或队友附加反射状态，受到法术攻击将随机转移给敌方目标，效果持续1回合；所需能量：5",
                "name" => "镜花缘"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值 ",
                "description" => "令对手一定回合内接受治疗恢复效果降低（技能70级以上作用3个目标、105级以上作用4个目标）",
                "name" => "意乱"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2点魔法值 ",
                "description" => "使用火系法术固定伤害敌人",
                "name" => "落花"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 1.5点魔法值 ",
                "description" => "有几率吸取对方的魔法值来补充自己的魔法值",
                "name" => "迷魂"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 2.4点魔法值 ",
                "description" => "吸取对方的气血（最高不超过技能等级 * 30）来补充自己的气血（补充量为对方损失量的一半）；失败则只减少敌人较少的当前气血（最高不超过技能等级 * 10）",
                "name" => "魅心"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "人物等级 * 3.5点魔法值 ",
                "description" => "临时降低自身一定速度，有几率令对手一定回合内无法被复活，对手的气血越低，成功率越低；对同一目标连续使用时，成功率额外降低",
                "name" => "红颜薄命"
            ],
            [
                "level" => 0,
                "open_level" => 10,
                "type" => "normal",
                "cost" => "技能等级/2的活力 ",
                "description" => "暂时为武器附加防御力效果，持续24小时",
                "name" => "丝舞阵"
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
