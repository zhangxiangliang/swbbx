<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsPutuoFlySeeder extends Seeder
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
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*2.4点魔法值，所需能量：4",
                "description" => "为自己或队友恢复气血并附加神怜效果2回合，此状态下可吸收物理攻击造成伤害值的20%作为气血恢复到自身（对鬼魂类目标无效）；每次出手最多吸收总量为LV*3，当回合最多吸收总量为LV*12",
                "name" => "神怜苍生"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值，所需能量：5",
                "description" => "将队友的指定技能直接充满能量并为其附加一个气血恢复状态，但本人如沐春风技能的能量清0",
                "name" => "如沐春风"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值",
                "description" => "创造一个持续3回合的领域，己方造成的法术伤害无法被躲避、免疫和吸收，回合末随机给己方气血最低的目标增加莲花度世状态2回合，领域持续3回合；领域释放者死亡，领域效果结束",
                "name" => "莲台圣境"
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
