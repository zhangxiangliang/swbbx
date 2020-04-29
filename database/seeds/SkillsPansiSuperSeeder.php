<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPansiSuperSeeder extends Seeder
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
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "免疫暗器伤害，被NPC击倒时100%触发守护网保留一定气血（非NPC击倒时，则50%触发），每场战斗最多触发1次",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "封印持续的回合数+1（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ",
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "封印的基础命中率和命中率上限+5%（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "千蛛手的暴击率增加15%（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "当自身由于被封印而未出手时，有10%几率为自身附加“天蚕茧”状态",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "受到单体物理攻击时，有6%的几率获得2回合的天蚕茧状态",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "触发守护网时，额外回复致死伤害值26%的气血和伤势",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体封印法术失败时，有13%几率返还此次技能的消耗",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用门派封印法术后，若自身血量低于25%，有13%的几率回复等级*1.5的气血值",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "自身被封印成功时，有13%的几率给施法者附加3回合的意乱状态",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "星爆状态下，使用封印法术命中目标时，使目标当回合内第一次获得的治疗转成扣除 ",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体封印法术的基础命中率提升3%",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "当敌方没有任何单位被封印时，施放单体封印技能时，临时增加3%的封印基础命中率和最高命中率",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体封印法术失败时，下次单体封印法术的基础命中率和最高命中率均提升3%（与行者·阴共存时，该效果减半）",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "红颜薄命对减速的目标额外增加3%的基础命中率和最高命中率",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "当自身的封印被解除时，被解除目标有20%几率获得3回合的意乱状态",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "红颜薄命速率提升10%，但持续回合减1",
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
