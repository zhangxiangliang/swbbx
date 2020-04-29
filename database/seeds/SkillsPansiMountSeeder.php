<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPansiMountSeeder extends Seeder
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
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4.5）点魔法值和70点精气，速率：100%，所需能量：5",
                "description" => "以极高的封印率封印目标，令其两回合内无法使用法术和物理攻击",
                "name" => "神魂颠倒"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值和40点精气，速率：180%，所需能量：4",
                "description" => "解除自己或队友所中的凌霄天宫封印法术，并附加免疫凌霄天宫封印法术状态一定回合，自身处于禁止使用法术状态时无法使用",
                "name" => "媚眼如丝"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4.5）点魔法值和60点精气，速率：100%，所需能量：6",
                "description" => "召唤一个姐妹助战，每回合较大概率对敌方使用情意绵绵、较小概率对敌方使用千蛛手",
                "name" => "姐妹随行"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*5）点魔法值和70点精气，速率：100%，所需能量：6",
                "description" => "牺牲掉自身当前气血-1的气血和当前伤势-1的伤势，复活所有已倒地的队友。被复活的当回合无法使用该法术",
                "name" => "血祭"
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
