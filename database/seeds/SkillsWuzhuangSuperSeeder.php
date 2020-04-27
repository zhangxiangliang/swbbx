<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;


class SkillsWuzhuangSuperSeeder extends Seeder
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

        $items = [
            [
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "受到的所有负面法术减少一回合（最低减少到2回合）",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "穿云斩和天罡剑气的暴击率增加15%（仅在非玩家战斗中有效）",
                "name" => "【输出】青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "穿云斩的气血限制调整为≥30%（仅在非玩家战斗中有效）",
                "name" => "【输出】青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "天罡剑气有20%的几率多攻击一个目标（仅在非玩家战斗中有效）",
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
                "description" => "穿云斩和天罡剑气的暴击率增加15%（仅在非玩家战斗中有效）",
                "name" => "【封印】青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "被物理攻击击倒时，有20%几率使攻击者获得迷幻状态，状态持续3回合",
                "name" => "【输出】蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术后，若自身气血低于上限的20%时，有10%几率获得生生不息状态，状态持续3回合",
                "name" => "【输出】蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术后，若自身魔法值低于上限的40%，有20%几率返还此次消耗的魔法值",
                "name" => "【输出】蓝玉·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "回合末若自身气血低于上限的20%，有6%几率使自己获得生命恢复状态，状态持续2回合",
                "name" => "【封印】蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "回合末若自身魔法值低于上限的20%，有6%几率使自己获得魔法恢复状态，状态持续2回合",
                "name" => "【封印】蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "对己方宠物使用门派法术时，有13%几率使其获得生生不息状态，状态持续3回合",
                "name" => "【封印】蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "击倒非人物目标后，有13%几率使自身宠物当回合受到的伤害结果降低20%",
                "name" => "【输出】橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "击倒非人物目标后，有13%几率使自身当回合受到的伤害结果降低15%",
                "name" => "【输出】橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "击倒非人物目标后，有6%几率回复自身气血上限10%的生命值",
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
                "description" => "使用日月同辉时，若作用目标气血低于上限的30%，日月同辉状态不降低防御力，但其受到的伤害结果增加30%",
                "name" => "【封印】橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用七星还魂时，若作用目标气血低于上限的20%，有13%几率使状态回合数加1",
                "name" => "【封印】橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "星爆状态下成功出手，则下回合出手速率提升，防御、保护和逃跑不会生效",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用门派法术攻击速度比自身低的单位时，暴击率提升6%，只对选中目标生效（与青冥·Ⅰ共存时，该技能在非玩家战斗中无效）",
                "name" => "【输出】紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用门派法术攻击速度比自身低的单位时，每次攻击26%的几率伤害结果增加10%，只对选中目标生效",
                "name" => "【输出】紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "当自身由于被封印或气血限制而出手失败时，回合末有13%几率获得持续3回合的星月状态（若自身处于死亡状态，则不触发）",
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
                "description" => "当敌方没有任何单位被封印时，单体封印法术增加3%的封印基础命中率和最高命中率",
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
                "description" => "攻击时，降低目标触发自动被保护几率6%",
                "name" => "【输出】赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "攻击后，如果目标剩余的气血低于上限的5%，则有20%的几率使其直接死亡（与罗刹阳共存时，几率减半）",
                "name" => "【输出】赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "携带星月状态且当回合出手失败时，回合末有26%几率使星月状态延长一回合（若自身处于死亡状态，则不触发）",
                "name" => "【输出】赤霄·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "自身被击倒时，有20%几率召唤出“剑灵”，每场战斗最多触发1次",
                "name" => "【封印】赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "若回合末自身处于死亡状态，则有20%几率对己方血量最少的单位附加3回合生生不息状态，每场战斗最多触发4次",
                "name" => "【封印】赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "使用星辰归神时，若作用目标魔法值低于上限的15%时，额外回复自身等级*2.6的魔法值",
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
