<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsLonggongSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '东海龙宫')->first();
        $npc = Npc::where('name', '龙王敖广')->first();

        $items = [
            [
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "使用法术攻击时不受敌方法术躲避率影响（对免疫等必定躲避的特殊效果无效）；完成师门任务时，获得的信誉增加20%",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "双龙戏珠有15%出现连击（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "疾风骤雨和升龙有15%的几率增加一个目标（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "疾风骤雨和升龙增加10%的伤害结果（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "疾风骤雨和升龙的暴击率增加10%",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "疾风骤雨和升龙有10%几率出现连击，连击伤害为50%",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "升龙和双龙戏珠有13%几率忽略选中目标30%的灵力",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用门派法术击倒选中的目标时，有20%几率使其减少自身等级*2.5的魔法值",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "每场战斗中，前三次施放龙啸或怒龙吟效果增强10%",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用门派法术击倒选中目标时，有25%几率返还此次技能消耗的魔法值",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "星爆状态下，两回合内可攻击处于隐身或潜行状态下的单位，攻击成功则取消其隐身或潜行状态",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "门派法术被吸收后，下次门派法术对选中目标的伤害结果增加10%，3回合内有效",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "攻击后，如果目标剩余的气血低于上限的5%，则有20%的几率使其直接死亡（与罗刹阳共存时，几率减半）",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "对正处于隐身和潜行的目标伤害结果增加12%",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 100,
                "type" => "super",
                "description" => "攻击时，有6%几率驱散选中目标的随机一个祝福状态",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 100,
                "type" => "super",
                "description" => "释放群体法术时，若自身魔法值高于上限的90%，则本次伤害结果增加6%",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 100,
                "type" => "super",
                "description" => "释放群体法术时，若攻击的目标魔法值小于15%，则对其造成的伤害结果增加10%",
                "name" => "赤霄·Ⅲ"
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
