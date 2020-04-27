<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWanshouFlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '万兽岭')->first();
        $npc = Npc::where('name', '万兽之王')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*4点魔法值，所需能量：4",
                "description" => "兽神附体后使用，攻击对方单个目标的同时召唤宠物跟随攻击1次，同时增加兽神附体状态2回合",
                "name" => "万兽统领"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值",
                "description" => "兽神附体后使用，攻击对方单个目标并使兽神附体状态延长1回合，攻击处于防御状态的目标，无视其防御状态并提高50%伤害结果",
                "name" => "狩猎"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*4点魔法值，速率：130%",
                "description" => "攻击目标，有几率令其一定回合内接受的气血恢复转化为0，兽神附体状态下使用必然成功",
                "name" => "狂兽怒击"
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
