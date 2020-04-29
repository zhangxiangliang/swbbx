<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTianmoBaseSeeder extends Seeder
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
                "type" => "normal",
                "open_level" => 10,
                "name" => "忍足",
                "description" => "使用后可以瞬间回到自己的门派，战斗中使用有一定几率失败。战斗外使用需要当前气血 ≥ 气血上限的40%；战斗中需要使用当前气血 ≥ 10 且当前魔法 ≥ 10",
                "cost" => "人物等级 * 0.5点魔法值 和 10点气血值；战斗中使用消耗 90% 的当前气血值和 100% 的当前魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "空蝉之术",
                "description" => "为自己附加空蝉状态，免疫敌方的法术伤害以及攻击或者诅咒类特技；但自身物理防御力减少 30%",
                "cost" => "人物等级 * 2.5点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "莲华奥术",
                "description" => "暂时为武器附加魔法上限效果，持续 24 小时",
                "cost" => "技能等级 / 2 的活力"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "忍犬",
                "description" => "召唤一只忍犬参与战斗",
                "cost" => "人物等级 * 3点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "侦察术",
                "description" => "对目标使用可得知其气血、愤怒、攻击力、灵力情况，技能等级小于对方人物等级10级则无法使用",
                "cost" => "人物等级 * 3点魔法值，非战斗时消耗技能等级*7点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "雨露千本",
                "description" => "使用暗器攻击多个目标（技能50级以上作用3个目标、75级以上作用4个目标、100级以上作用5个目标），并且可能使目标中植物毒；对怪物伤害结果加倍，需要物品栏中至少有1个以上的暗器",
                "cost" => "1点暗器耐久"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "吹矢",
                "description" => "潜行状态下才能使用，使用暗器连续攻击目标3次，每次攻击均可以令目标中魔法毒；中毒效果可叠加，需要物品栏中至少有1个以上的暗器 ，使用后有 50%几率可以在非潜行状态下使用影风车、吹矢、背刺 ",
                "cost" => "人物等级 * 1点魔法值，每次攻击消耗1点暗器耐久"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "影风车",
                "description" => "潜行状态下才能使用，使用暗器连续攻击目标（技能75级以上攻击4次、100级以上攻击5次），需要物品栏中至少有1个以上的暗器 ，使用后有 30%几率可以在非潜行状态下使用影风车、吹矢、背刺 ",
                "cost" => "人物等级 * 1.5点魔法值，每次攻击消耗1点暗器耐久"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "镰鼬斩",
                "description" => "连续攻击目标2次，需要当前气血≥气血上限的50%",
                "cost" => "人物等级 * 2点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "背刺",
                "description" => "潜行状态下才能使用，攻击敌方单目标，使用后有 40%几率可以在非潜行状态下使用影风车、吹矢、背刺 ",
                "cost" => "人物等级 * 2.5点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "水土斩",
                "description" => "物理攻击敌人同时有可能使目标中水土虚弱状态",
                "cost" => "人物等级 * 2点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "火雷斩",
                "description" => "物理攻击敌人同时有可能使目标中火雷虚落状态",
                "cost" => "人物等级 * 2点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "影缝术",
                "description" => "解除自己或队友所中的毒状态",
                "cost" => "人物等级 * 2.5点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "魔笛",
                "description" => "有几率令对手一定回合内无法使用法术、物理攻击",
                "cost" => " 无"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "影束缚",
                "description" => "有几率令对手一定回合内无法使用物理攻击。",
                "cost" => "人物等级 * 2点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "幻术封印",
                "description" => "有几率令对手一定回合内无法使用物品",
                "cost" => "人物等级 * 2.5点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "影牙",
                "description" => "临时降低自身一定速度，攻击敌人同时降低其物理防御力2回合",
                "cost" => "人物等级 * 2.6点魔法值"
            ],
            [
                "level" => 0,
                "type" => "normal",
                "open_level" => 10,
                "name" => "潜行术",
                "description" => "只能在夜间使用，令自己进入潜行状态，避免敌人的攻击；无法使用吹矢、背刺、影风车以外的法术",
                "cost" => "人物等级 * 3.5点魔力值"
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
