<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTianceSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '天策')->first();
        $npc = Npc::where('name', '程将军')->first();

        $items = [
            [
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "单体物理攻击时，临时增加自身等级*0.5的攻击力 ，普通物理攻击额外提高15%命中率",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "普通攻击击倒目标后，有60%几率以普通攻击随机追击一个目标，每回合最多追击1次（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ"
            ], [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "横扫天下的暴击率提升15%，筋疲力竭状态下降低的防御力和灵力减半（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "以守为攻有35%概率按原目标伤害结果的60%溅射到随机一个敌方目标（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "先发制人的速率额外提升6%；以守为攻的第二段攻击速率额外提升3%",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "以守为攻和横扫天下使用成功后，有10%几率回复自身5%的气血值",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "若自身处于封印状态下被复活，回合末有6%几率解除封印状态（回合末若死亡则不触发）",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体物理攻击将目标击倒后，20%几率提升自身等级*0.5的攻击力3回合，最多可叠加3次，自身气血为0时则加成消失",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体物理攻击将目标击倒后，13%几率使目标进入“断魂”状态1回合，该状态下无法被复活",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体物理攻击将目标击倒后，33%几率使目标进入“重伤”状态2回合，该状态下治疗效果降低30%",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "星爆状态下，单体物理攻击将目标击倒后，使目标进入断魂3回合",
                "name" => "星爆",
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体物理攻击时，17%几率使本次伤害增加攻击目标5%最大生命的伤害值",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体物理攻击时，17%几率临时增加自身等级*1的攻击力",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体物理攻击时，24%几率使本次伤害结果增加15%",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "使用突袭或定神诀后，当回合受到物理攻击时有26%几率使伤害结果降低15%",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "被复活的当回合，使用横扫天下和一鼓作气增加13%的暴击率",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "拥有突袭或定神状态时，额外增加3%物理命中率",
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
