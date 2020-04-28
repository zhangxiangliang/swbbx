<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWumingSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '无名谷')->first();
        $npc = Npc::where('name', '姬长歌')->first();

        $items = [
            [
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "物理攻击目标有20%几率恢复自身气血，若击倒目标则必然恢复，恢复的气血为伤害结果的20%",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "天刀破阵额外攻击一个目标（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "天刀破阵和锢神的暴击率增加15%（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "天刀破阵和锢神的伤害结果增加10%（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "受到伤害时，若自身气血低于上限50%，有26%几率获得云隐状态，状态持续2回合",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "受到伤害时，若自身气血低于上限30%，有6%几率获得1回合斗转星移状态",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "对目标造成伤害时，若自身气血低于上限的30%，有20%几率在攻击完成后获得云隐状态，状态持续3回合",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "斗转星移成功复制法术后，有13%几率令复制的法术持续回合数+1",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "成功使用归原或无为临锋后，有20%几率返还1点能量",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "成功使用风临解除封印状态后，获得的风临提高自身等级*0.3的效果",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "攻击的所有目标进入2回合的“晦命”状态，该状态下死亡无法触发复活类效果",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "攻击本回合还未出手的目标时，有26%几率伤害结果增加10%，只对选中目标生效",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "击倒目标后，有17%几率获得风临状态3回合，该状态下攻击力提高",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用锢神击倒目标时，有6%几率用锢神随机攻击另一个目标",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "使用无为临锋恢复的气血和魔法额外增加自身等级*1",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "成功使用遁虚影或斗转星移后，有20%几率返还1点能量",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "触发星穹之力时，额外恢复自身等级*0.6的伤势",
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
