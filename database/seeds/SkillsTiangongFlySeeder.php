<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTiangongFlySeeder extends Seeder
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
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值，所需能量：4",
                "description" => "召唤哮天犬参与战斗",
                "name" => "哮天犬"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值",
                "description" => "物理攻击敌人，若对手因此死亡，则其在3回合内无法被复活",
                "name" => "夺命斩"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值",
                "description" => "对敌方全体目标造成伤害，成功则减少当前25%气血、魔法，并使其每回合收到第一次攻击会造成当前生命值的额外伤害；使用失败则只减少5%当前气血",
                "name" => "雷神之怒"
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
