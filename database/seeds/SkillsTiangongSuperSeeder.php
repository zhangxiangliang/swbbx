<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTiangongSuperSeeder extends Seeder
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
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "天生拥有15%的法术躲避率（可躲避法术伤害、封印等负面法术）",
                "name" => "星穹之力"
            ],
            [
            "level" => 2,
            "open_level" => 30,
            "type" => "super",
            "description" => "雷霆斩和怒雷的暴击率增加15%（仅在非玩家战斗中有效）",
            "name" => "【输出】青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "天火和疾风雷有15%几率多攻击一个目标（仅在非玩家战斗中有效）",
                "name" => "【输出】青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "雷劫天降的成功率增加15%（仅在非玩家战斗中有效）",
                "name" => "【输出】青冥·Ⅲ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "封印持续的回合数+1（仅在非玩家战斗中有效）",
                "name" => "【封印】青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "封印的基础命中率和命中率上限+5%（仅在非玩家战斗中有效）",
                "name" => "【封印】青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "雷霆斩的暴击率增加15%（仅在非玩家战斗中有效）",
                "name" => "【封印】青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "受到法术攻击时，若自身气血低于上限30%，有10%几率获得天罡法障状态，状态持续2回合",
                "name" => "【输出】蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "被物理攻击击倒时，有20%几率使攻击方获得止戈状态，状态持续2回合",
                "name" => "【输出】蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "对目标造成伤害时，若自身气血低于上限的30%，有13%几率在攻击完成后获得天罡法障状态，状态持续2回合",
                "name" => "【输出】蓝玉·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "受到法术攻击时，若自身气血低于上限30%，有10%几率获得天罡法障状态，状态持续2回合",
                "name" => "【封印】蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "被物理攻击击倒时，有20%几率使攻击方获得止戈状态，状态持续2回合",
                "name" => "【封印】蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用封印法术后，若自身气血低于上限30%，有13%几率获得天罡法障状态，状态持续2回合",
                "name" => "【封印】蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用怒雷和疾风雷攻击的目标防御力高于自身时，有10%几率出现连击",
                "name" => "【输出】橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用雷霆斩和天火攻击速度低于自身的单位时，增加10%暴击率（与青冥·1共存时，该技能在非玩家战斗中无效）",
                "name" => "【输出】橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "每次施放门派法术后，有13%几率返还此次消耗的魔法值",
                "name" => "【输出】橙光·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体封印法术失败时，有13%几率返还此次技能的消耗",
                "name" => "【封印】橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体封印法术失败时，6%几率使目标获得2回合的孤立状态",
                "name" => "【封印】橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体封印法术失败时，6%几率使目标获得1回合的契约束缚状态",
                "name" => "【封印】橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "攻击的所有目标进入2回合的破魂状态，该状态下每回合受到的第一次伤害提高",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "攻击非人物目标时，有26%几率无视该目标的护盾、坚守、无畏技能",
                "name" => "【输出】紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "击倒目标后，有20%几率提升自身3%伤害结果3回合，最多可叠加3次，自身气血为0时则加成消失",
                "name" => "【输出】紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "攻击后若选中目标的气血低于上限30%，则有6%几率使其获得1回合的契约束缚状态",
                "name" => "【输出】紫电·Ⅲ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体封印法术的基础命中率提升3%",
                "name" => "【封印】紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "当敌方没有任何单位被封印时，施放单体封印技能时，临时增加3%的封印基础命中率和最高命中率",
                "name" => "【封印】紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体封印法术失败时，下次单体封印法术的基础命中率和最高命中率均提升3%（与行者·阴共存时，该效果减半）",
                "name" => "【封印】紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "降低攻击目标触发自动被保护几率6%",
                "name" => "【输出】赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "使用画地为牢附加的孤立状态首回合会使目标受到的物理伤害结果增加6%",
                "name" => "【输出】赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "夺命斩攻击本回合未出手的单位时，增加13%的伤害结果同时驱逐状态减少为2回合",
                "name" => "【输出】赤霄·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "受到天宫封印的单位，触发被自动保护的概率降低3%",
                "name" => "【封印】赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "使用画地为牢附加的孤立状态首回合会使目标受到的物理伤害结果增加6%",
                "name" => "【封印】赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "哮天犬对隐身或潜行的目标造成的伤害结果增加13%",
                "name" => "【封印】赤霄·Ⅲ"
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
