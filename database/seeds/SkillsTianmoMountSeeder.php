<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTianmoMountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '天魔里')->first();
        $npc = Npc::where('name', '袁飞')->first();

        $items = [
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 70,
                "name" => "缚魔真言",
                "description" => "一定几率将敌方最多三个目标封印，令其一定回合内无法使用法术",
                "cost" => "（坐骑等级*3）点魔法值 60点精气，速率：100%，所需能量：6"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 70,
                "name" => "寒樱似雪",
                "description" => "临时增加暗器伤害，使用暗器攻击敌方最多五个目标，并可能使目标陷入“冰霜”状态一定回合；对非BOSS的怪物伤害结果加倍",
                "cost" => "1点暗器耐久度 40点精气，速率：100%，所需能量：5"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 70,
                "name" => "燕返",
                "description" => "一定几率将敌人封印，令其一定回合内无法使用法术，且使用后自身进入“空蝉”状态一回合",
                "cost" => "（坐骑等级*3）点魔法值 60点精气，速率：100%，所需能量：4"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 70,
                "name" => "影闪",
                "description" => "使用暗器攻击敌人，且自身进入“潜行”状态一定回合",
                "cost" => "1点暗器耐久度 50点精气，速率：110%，所需能量：5"
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
