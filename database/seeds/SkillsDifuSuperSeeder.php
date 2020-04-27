<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsDifuSuperSeeder extends Seeder
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
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "夜战能力；受封印命中率降低25%",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "黑暗光环的嘲讽状态、护盾状态增加一回合（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "死亡缠绕的持续回合提高2回合（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "使用修罗追魂时15%几率造成法术暴击（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "自身气血低于上限20%时，死亡契约的恢复效果增加13%",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "被封印命中时，若自身气血低于上限30%，有35%几率使该封印状态持续回合减1",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "自身被复活时，有13%几率获得死亡缠绕3回合",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "黑暗光环对选中目标的成功率提高3%",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "蚀心蛊触发传染的几率提高10%，获得剧毒附化状态时持续回合数加2",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "无常索命触发异常状态的几率提高3%；冷幽彻骨触发异常状态的几率提高6%",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "对当回合对选中的目标施放黑暗光环时命中率提高至100%",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "己方鬼魂宠物倒地时，为自身恢复等级*1.3的气血",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "受到嘲讽状态下的单位攻击时，伤害结果有6%几率降低15%",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用黑暗光环、冷幽彻骨、无常索命时，若对选中目标成功附加异常状态，则自身回复等级*0.6的气血",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "若回合末自身处于死亡状态，则有20%几率对己方血量最低的单位附加3回合死亡缠绕状态，每场战斗最多触发3次",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "自身被击倒时，有20%的几率为攻击者增加驱逐、锢魂、恐怖中的随机一个异常状态，状态持续3回合，每场战斗最多触发1次",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "生死判成功时额外增加自身等级*0.6的伤害值，失败时额外扣除自身等级*2的气血值",
                "name" => "赤霄·Ⅲ"
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
