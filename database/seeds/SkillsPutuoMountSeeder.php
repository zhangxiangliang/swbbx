<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPutuoMountSeeder extends Seeder
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
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 40点精气，速率：180%，所需能量：4",
                "description" => "解除队友所中的镇元五庄封印法术，并附加免疫镇元五庄封印法术状态一定回合，自身处于禁止使用法术状态时无法使用",
                "name" => "妙解乾坤"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：230%，所需能量：4",
                "description" => "高速复活法术，复活死亡的队友并恢复一定气血和伤势",
                "name" => "娑罗双"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：100%，所需能量：5",
                "description" => "恢复自己或队友的气血和伤势；若目标已死亡则将其复活",
                "name" => "极乐回天"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 30点精气，速率：100%，所需能量：4",
                "description" => "为本方最多三个宠物附加“气血治疗”状态（优先选择气血较少的目标）一定回合，该状态下每回合恢复一定的气血",
                "name" => "春风化雨"
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
