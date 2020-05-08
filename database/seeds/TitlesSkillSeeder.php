<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Title;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class TitlesSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 创建管理员
        $items = [
            ['name' => '护城小兵', 'teacher' => '程将军', 'map' => '天策', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '威虎校尉', 'teacher' => '程将军', 'map' => '天策', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '飞骑御使', 'teacher' => '程将军', 'map' => '天策', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '神武都尉', 'teacher' => '程将军', 'map' => '天策', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '龙城飞将', 'teacher' => '程将军', 'map' => '天策', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '刺探耳目', 'teacher' => '袁飞', 'map' => '天魔里', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '潜行使者', 'teacher' => '袁飞', 'map' => '天魔里', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '月影武士', 'teacher' => '袁飞', 'map' => '天魔里', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '霹雳军师', 'teacher' => '袁飞', 'map' => '天魔里', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '暗夜王者', 'teacher' => '袁飞', 'map' => '天魔里', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '佛门小僧', 'teacher' => '大慧禅师', 'map' => '佛门', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '游方行者', 'teacher' => '大慧禅师', 'map' => '佛门', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '妙手金刚', 'teacher' => '大慧禅师', 'map' => '佛门', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '济世神医', 'teacher' => '大慧禅师', 'map' => '佛门', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '仁心药王', 'teacher' => '大慧禅师', 'map' => '佛门', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '三清道童', 'teacher' => '大觉金仙', 'map' => '七星方寸', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '灵台道长', 'teacher' => '大觉金仙', 'map' => '七星方寸', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '平妖法师', 'teacher' => '大觉金仙', 'map' => '七星方寸', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '降魔天师', 'teacher' => '大觉金仙', 'map' => '七星方寸', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '符篆道祖', 'teacher' => '大觉金仙', 'map' => '七星方寸', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '山精地怪', 'teacher' => '平天大圣', 'map' => '魔王山', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '魔寨蛮妖', 'teacher' => '平天大圣', 'map' => '魔王山', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '黑风老妖', 'teacher' => '平天大圣', 'map' => '魔王山', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '邪魔太岁', 'teacher' => '平天大圣', 'map' => '魔王山', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '护山妖圣', 'teacher' => '平天大圣', 'map' => '魔王山', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '孤魂野鬼', 'teacher' => '地藏菩萨', 'map' => '幽冥地府', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '幽冥鬼卒', 'teacher' => '地藏菩萨', 'map' => '幽冥地府', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '勾魂使者', 'teacher' => '地藏菩萨', 'map' => '幽冥地府', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '催命无常', 'teacher' => '地藏菩萨', 'map' => '幽冥地府', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '铁面判官', 'teacher' => '地藏菩萨', 'map' => '幽冥地府', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '百媚妖灵', 'teacher' => '盘丝大仙', 'map' => '盘丝岭', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '勾魂魔女', 'teacher' => '盘丝大仙', 'map' => '盘丝岭', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '夺命妖姬', 'teacher' => '盘丝大仙', 'map' => '盘丝岭', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '玉面修罗', 'teacher' => '盘丝大仙', 'map' => '盘丝岭', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '织情魅魔', 'teacher' => '盘丝大仙', 'map' => '盘丝岭', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '巡山小妖', 'teacher' => '万兽之王', 'map' => '万兽岭', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '百兽统领', 'teacher' => '万兽之王', 'map' => '万兽岭', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '三界妖将', 'teacher' => '万兽之王', 'map' => '万兽岭', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '噬血狂魔', 'teacher' => '万兽之王', 'map' => '万兽岭', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '通天魔帅', 'teacher' => '万兽之王', 'map' => '万兽岭', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '桃园力士', 'teacher' => '杨戬', 'map' => '凌霄天宫', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '天庭守卫', 'teacher' => '杨戬', 'map' => '凌霄天宫', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '雷部天兵', 'teacher' => '杨戬', 'map' => '凌霄天宫', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '瑶池天将', 'teacher' => '杨戬', 'map' => '凌霄天宫', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '镇魔天王', 'teacher' => '杨戬', 'map' => '凌霄天宫', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '守山童子', 'teacher' => '观音菩萨', 'map' => '南海普陀', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '护法金刚', 'teacher' => '观音菩萨', 'map' => '南海普陀', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '紫竹护法', 'teacher' => '观音菩萨', 'map' => '南海普陀', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '净瓶使者', 'teacher' => '观音菩萨', 'map' => '南海普陀', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '弘法尊者', 'teacher' => '观音菩萨', 'map' => '南海普陀', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '道家仙童', 'teacher' => '镇元子', 'map' => '镇元五庄', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '三界散仙', 'teacher' => '镇元子', 'map' => '镇元五庄', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '潇湘隐士', 'teacher' => '镇元子', 'map' => '镇元五庄', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '八卦天师', 'teacher' => '镇元子', 'map' => '镇元五庄', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '混元道尊', 'teacher' => '镇元子', 'map' => '镇元五庄', 'description' => '五级称谓：等级≥110门派贡献值≥300'],

            ['name' => '混水泥鳅', 'teacher' => '龙王敖广', 'map' => '东海龙宫', 'description' => '一级称谓：等级≥30门派贡献值≥60'],
            ['name' => '巡海夜叉', 'teacher' => '龙王敖广', 'map' => '东海龙宫', 'description' => '二级称谓：等级≥50门派贡献值≥120'],
            ['name' => '翻江猛蛟', 'teacher' => '龙王敖广', 'map' => '东海龙宫', 'description' => '三级称谓：等级≥70门派贡献值≥180'],
            ['name' => '覆海神龙', 'teacher' => '龙王敖广', 'map' => '东海龙宫', 'description' => '四级称谓：等级≥90门派贡献值≥240'],
            ['name' => '飞龙在天', 'teacher' => '龙王敖广', 'map' => '东海龙宫', 'description' => '五级称谓：等级≥110门派贡献值≥300'],
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
        ])->get()->keyBy("name");

        $items = collect($items)->map(function ($item) use ($npcs, $maps) {
            $map = $maps[$item["map"]];
            $teacher = $npcs[$item["teacher"]];

            unset($item["map"]);
            unset($item["teacher"]);

            return array_merge($item, [
                "map_id" => $map['id'],
                "npc_id" => $teacher['id'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        Title::insert($items);
    }
}
