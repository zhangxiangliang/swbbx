<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWuzhuangMountSeeder extends Seeder
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
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 40点精气，速率：180%，所需能量：4",
                "description" => "解除己方成员所中的七星方寸封印法术，并附加免疫七星方寸封印法术状态一定回合，自身处于禁止使用法术状态时无法使用",
                "name" => "破符术"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：100%，所需能量：5",
                "description" => "复活队友，同时附加“天地同寿”状态一回合",
                "name" => "长生诀"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 50点精气，速率：100%，所需能量：4",
                "description" => "连续物理攻击敌人2次，每次攻击大量增加伤害结果，当前气血≤气血上限50%才能使用，使用后次回合不能使用法术",
                "name" => "玉石俱焚"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：100%，所需能量：4",
                "description" => "物理攻击敌人，同时令目标一定回合内陷入“逆转阴阳”状态，该状态下若受法术、特技或药品加血将随机转移应加血量的50%给敌方目标，自身不恢复气血",
                "name" => "逆转阴阳"
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
