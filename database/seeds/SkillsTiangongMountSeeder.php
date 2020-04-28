<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTiangongMountSeeder extends Seeder
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
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*5）点魔法值和40点精气，速率：100%，所需能量：4",
                "description" => "物理攻击敌人并同时可能使目标中法术封印一回合",
                "name" => "封魔斩"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*5）点魔法值和40点精气，速率：100%，所需能量：4",
                "description" => "锁神诀是凌霄天宫的御魂法术，其效果为：以雷系法术攻击敌人，并同时可能使目标中法术封印一回合",
                "name" => "锁神诀"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*5）点魔法值和50点精气，速率：180%，所需能量：4",
                "description" => "临时提高速度攻击敌人。如果目标被攻击后死亡，则随机追击一个目标，最多追击2次",
                "name" => "追魂斩"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*5）点魔法值和40点精气，速率：160%，所需能量：4",
                "description" => "临时提高速度以雷系法术攻击敌人，如果目标被攻击后死亡，则随机追击一个目标，最多追击两次",
                "name" => "夺魂咒"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值和40点精气，速率：180%，所需能量：4",
                "description" => "解除自己或队友所中的天魔里封印法术，并附加免疫天魔里封印法术状态一定回合，自身处于禁止使用法术状态时无法使用",
                "name" => "心神守一"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值和70点精气，速率：100%，所需能量：6",
                "description" => "物理攻击敌人并识破目标的变身卡效果，持续七个回合；并使目标中受到封印成功率增加20%的状态一定回合；识破变身卡的效果仅对敌方玩家有效。",
                "name" => "天眼"
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
