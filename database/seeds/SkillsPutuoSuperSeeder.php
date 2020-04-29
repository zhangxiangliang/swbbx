<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPutuoSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '南海普陀')->first();
        $npc = Npc::where('name', '观音菩萨')->first();

        $items = [
            [
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "死亡时有20%概率出现神佑效果（自动复活并恢复15%气血）。如果在其他神佑效果下，则概率提高10%",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "提高莲华度世的首回合恢复气血量（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "莲华度世、灵贯三界、灵耀九州的持续回合提高2回合（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "使用雷灵诀、土灵诀、火灵诀、水灵诀时15%几率造成法术暴击（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术复活目标时，有10%几率为其附加莲华度世状态2回合",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术复活目标时，若目标魔法低于25%，额外为其恢复自身等级*2.6的魔法值",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术复活目标时，有20%几率使其封印状态回合数减1回合（最低回合数为1）",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用大海无量时，若恢复后目标气血仍低于60%，则有20%几率不取消莲华度世状态",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "玩家对战中，莲华度世触发额外一个目标的几率提高10%",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "对气血低于30%的目标使用莲华度世时，20%几率令选中目标的持续回合提高2回合",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "星爆状态下可复活处于驱逐阴、断魂状态下的目标，若成功复活目标，则清除目标携带的封印、驱逐、断魂状态 ",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用灵贯三界、灵耀九州、大悲咒时，13%几率使选中目标的持续回合数加2",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用灵贯三界、灵耀九州、大悲咒时，6%几率使选中目标的效果额外提升",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用灵贯三界、灵耀九州、大悲咒时，13%几率返还消耗的魔法值",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "若回合末自身处于死亡状态，20%几率为己方所有存活单位恢复气血和伤势，每场战斗只触发一次",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "若灵贯三界、灵耀九州、莲华度世被驱散时，6%几率令目标获得2回合的抗封异常状态",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "人物触发自动保护宠物几率增加13%",
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
