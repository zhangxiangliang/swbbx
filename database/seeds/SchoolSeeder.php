<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\School;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ["npc_id" => "程将军", "map_id" => "天策", "name" => "天策", "intro" => "擅长单体物理点杀", "description" => "天策弟子单体输出能力极为强大，对于武器装备十分熟悉，可以鉴定武器和铠甲的优劣。"],
            ["npc_id" => "地藏菩萨", "map_id" => "幽冥地府", "name" => "幽冥地府", "intro" => "擅长吸引伤害和干扰敌方", "description" => "幽冥地府的法术大多附带负面效果，让敌人陷入生不如死的境地，同时地府弟子还能强制吸引伤害。"],
            ["npc_id" => "大慧禅师", "map_id" => "佛门", "name" => "佛门", "intro" => "擅长群体治疗和增益、减免物理伤害", "description" => "佛门弟子精通佛法和医术，拥有多种治疗和解毒法术，可以为队友施加各种辅助状态。"],
            ["npc_id" => "镇元子", "map_id" => "镇元五庄", "name" => "镇元五庄", "intro" => "擅长封印和物理攻击", "description" => "镇元五庄门下弟子博学多才，既能以乾坤仙术封印敌人，也能为队友施加各种辅助状态。"],
            ["npc_id" => "大觉金仙", "map_id" => "七星方寸", "name" => "七星方寸", "intro" => "擅长使用降敌属性的封印", "description" => "七星方寸的弟子们最擅长符咒之术，可以用不同的灵符封印住敌人的行动，同时降低敌人的抵御能力。"],
            ["npc_id" => "盘丝大仙", "map_id" => "盘丝岭", "name" => "盘丝岭", "intro" => "擅长封印和干扰控制", "description" => "盘丝岭的弟子都具有绝世的美貌，吸收敌人的气血和魔法为己用；还拥有诸多增益和减益法术。"],
            ["npc_id" => "大慧禅师", "map_id" => "佛门", "name" => "佛门", "intro" => "擅长群体治疗和增益、减免物理伤害", "description" => "佛门弟子精通佛法和医术，拥有多种治疗和解毒法术，可以为队友施加各种辅助状态。"],
            ["npc_id" => "观音菩萨", "map_id" => "南海普陀", "name" => "南海普陀", "intro" => "擅长持续治疗和增益、减免法术伤害", "description" => "观音菩萨的弟子们特别擅长单体治疗法术；同时也精通自然法术的攻击和防御。"],
            ["npc_id" => "平天大圣", "map_id" => "魔王山", "name" => "魔王山", "intro" => "擅长法术攻击，法术暴击率高", "description" => "魔王山的弟子们修习威力强大的攻击法术的同时，也会使用一些其他类型的法术来辅助自己的战斗。"],
            ["npc_id" => "袁飞", "map_id" => "天魔里", "name" => "天魔里", "intro" => "擅长封印和使用暗器", "description" => "天魔里以忍法闻名于世。除了使用忍术封印和攻击敌人外，天魔里弟子也十分擅长暗器的各种手法。"],
            ["npc_id" => "杨戬", "map_id" => "凌霄天宫", "name" => "凌霄天宫", "intro" => "擅长物理攻击和封印", "description" => "凌霄天宫门下的弟子武艺精湛且擅长仙术，既有强大的物理攻击能力，也可以运用各种仙法。"],
            ["npc_id" => "龙王敖广", "map_id" => "东海龙宫", "name" => "东海龙宫", "intro" => "擅长法术攻击且必中", "description" => "东海龙宫门下弟子精通各种攻击型法术，尤以水系法术最为擅长。"],
            ["npc_id" => "万兽之王", "map_id" => "万兽岭", "name" => "万兽岭", "intro" => "擅长群体物理攻击", "description" => "万兽岭的门下弟子具有强横的物理攻击能力，单体和群体输出都令人畏惧。"],
            ["npc_id" => "姬长歌", "map_id" => "无名谷", "name" => "无名谷", "intro" => "擅长物理输出且保命能力较强", "description" => "无名谷对攻击、生存之道研究颇深，除了破除对手生存手段外，亦能在攻击时为自己增添保护。"],
        ];

        $npcs = Npc::whereIn("name", [
            "程将军", "地藏菩萨", "大慧禅师", "镇元子",
            "大觉金仙", "盘丝大仙", "大慧禅师", "观音菩萨",
            "平天大圣", "袁飞", "杨戬", "龙王敖广", "万兽之王",
            "姬长歌",
        ])->get()->keyBy("name");

        $maps = Map::whereIn("name", [
            "天策", "幽冥地府", "佛门", "镇元五庄",
            "七星方寸", "盘丝岭", "佛门", "南海普陀",
            "魔王山", "天魔里", "凌霄天宫", "东海龙宫",
            "万兽岭", "无名谷",
        ])->get()->keyBy('name');

        $items = collect($items)->map(function ($item) use ($npcs, $maps) {
            return array_merge($item, [
                "npc_id" => $npcs[$item["npc_id"]]['id'],
                "map_id" => $maps[$item["map_id"]]['id'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        School::insert($items);
    }
}
