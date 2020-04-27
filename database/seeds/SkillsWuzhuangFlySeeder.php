<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWuzhuangFlySeeder extends Seeder
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
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3.5点魔法值，所需能量：4",
                "description" => "将目标队友的封印及毒类异常状态转移至自身",
                "name" => "四象同归"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，乾坤袖达到130级，人物等级*5点魔法值，所需能量：4",
                "description" => "召唤剑灵参与战斗，剑灵每2回合可在队友受到致命伤害时进行保护",
                "name" => "化气为剑"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，当前气血的10%",
                "description" => "恢复己方所有目标一定魔法值",
                "name" => "星尘归神"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*4点魔法值，速率：180%",
                "description" => "临时提高速度攻击目标，随后为自己附加“星月”状态，该状态下攻击力提高并且可无视气血限制使用一次穿云斩或玉石俱焚",
                "name" => "星月破云"
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
