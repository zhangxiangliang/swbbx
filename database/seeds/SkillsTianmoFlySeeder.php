<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTianmoFlySeeder extends Seeder
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
                "type" => "fly",
                "open_level" => 130,
                "name" => "瞒天过海",
                "description" => "一定几率将敌人封印，令其一定回合内无法使用法术，同时令自己进入瞒天过海状态2回合，此状态下死亡则会立刻复活同时令自己进入潜行状态，最多复活2次",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3.5点魔法值"
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "诱毒之术",
                "description" => "降低速度，在当回合结算全体敌人的毒伤害，最多结算5回合的毒伤害，且不超过敌人等级*20（不可叠加使用次数）",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值，所需能量：4"
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "瘴云之界",
                "description" => "创造一个持续3回合的领域，己方造成伤害时有60%几率令敌方进入植物毒状态，每回合结束时给敌方气血最低的目标附加植物毒，领域持续3回合；领域释放者死亡，领域效果结束（不可叠加使用次数）",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值，所需能量：8"
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
