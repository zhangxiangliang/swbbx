<?php

use App\Models\PetSkill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class PetSkillBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                "name" => "必杀",
                "cover" => "必杀.jpg",
                "category" => "初级技能",
                "description" => "物理攻击时造成必杀的几率提高10%",
                "sort" => 0
            ],
            [
                "name" => "连击",
                "cover" => "连击.jpg",
                "category" => "初级技能",
                "description" => "使用普通物理攻击时，45%几率对目标连续攻击2次；拥有此技能则对敌的所有物理伤害结果减少25%",
                "sort" => 1
            ],
            [
                "name" => "强力",
                "cover" => "强力.jpg",
                "category" => "初级技能",
                "description" => "根据自身等级增加等级×0.6的攻击力",
                "sort" => 2
            ],
            [
                "name" => "追击",
                "cover" => "追击.jpg",
                "category" => "初级技能",
                "description" => "普通物理攻击时，如果目标被击倒，则随机追击敌方下一个目标；追击的伤害结果为正常的50%",
                "sort" => 3
            ],
            [
                "name" => "反震",
                "cover" => "反震.jpg",
                "category" => "初级技能",
                "description" => "受物理攻击时，30%几率反震对方（反震伤害结果等于所受伤害结果的25%，攻击方≥目标20级时不会被反死）；不会受到物理连击（对方有偷袭技能除外）",
                "sort" => 4
            ],
            [
                "name" => "反击",
                "cover" => "反击.jpg",
                "category" => "初级技能",
                "description" => "受物理攻击时，30%几率使用普通物理攻击反击对方；反击伤害结果为正常的50%",
                "sort" => 5
            ],
            [
                "name" => "魔法反击",
                "cover" => "魔法反击.jpg",
                "category" => "初级技能",
                "description" => "受物理攻击时，30%几率使用法术反击对方；反击伤害结果为正常的50%",
                "sort" => 6
            ],
            [
                "name" => "鬼魂术",
                "cover" => "鬼魂术.jpg",
                "category" => "初级技能",
                "description" => "鬼魂生物，一般死亡不会飞出场，死亡后5回合自动复活。不能接受任何药物和法术恢复。不受异常、辅助等效果影响",
                "sort" => 7
            ],
            [
                "name" => "驱鬼",
                "cover" => "驱鬼.jpg",
                "category" => "初级技能",
                "description" => "对鬼魂生物伤害结果增加50%；如果将鬼魂生物打死，则同时将其打出场外",
                "sort" => 8
            ],
            [
                "name" => "吸血",
                "cover" => "吸血.jpg",
                "category" => "初级技能",
                "description" => "物理攻击时，吸取对方所掉气血的20%恢复为自身气血；对鬼魂生物无效，如果对方有异常状态，吸血后自己会中毒",
                "sort" => 9
            ],
            [
                "name" => "飞行",
                "cover" => "飞行.jpg",
                "category" => "初级技能",
                "description" => "物理躲避率增加5%；物理命中率增加10%，速度提高5%；受暗器伤害结果增加20%；被部分法术克制",
                "sort" => 10
            ],
            [
                "name" => "隐身",
                "cover" => "隐身.jpg",
                "category" => "初级技能",
                "description" => "进入战斗自动附加隐身状态2~3回合（消耗魔法值=自身等级×3）；拥有此技能对敌人伤害结果减少20%；隐身状态下无法使用法术；会被感知能力的对手看见",
                "sort" => 11
            ],
            [
                "name" => "感知",
                "cover" => "感知.jpg",
                "category" => "初级技能",
                "description" => "可以看见隐身、潜行效果，对隐身和潜行的目标伤害结果增加10%",
                "sort" => 12
            ],
            [
                "name" => "冥思",
                "cover" => "冥思.jpg",
                "category" => "初级技能",
                "description" => "战斗中每回合恢复（自身等级×0.5）的魔法",
                "sort" => 13
            ],
            [
                "name" => "慧根",
                "cover" => "慧根.jpg",
                "category" => "初级技能",
                "description" => "使用法术时，消耗减少30%",
                "sort" => 14
            ],
            [
                "name" => "神佑复生",
                "cover" => "神佑复生.jpg",
                "category" => "初级技能",
                "description" => "死亡时，最高25%几率自动复活并恢复一半的气血。体质属性点数分配的比例越高，复活的几率越低；与鬼魂术或高级鬼魂术共存时，神佑复生技能无效。",
                "sort" => 15
            ],
            [
                "name" => "神迹",
                "cover" => "神迹.jpg",
                "category" => "初级技能",
                "description" => "战斗中每回合结束时，35%几率清除所有异常状态",
                "sort" => 16
            ],
            [
                "name" => "夜战",
                "cover" => "夜战.jpg",
                "category" => "初级技能",
                "description" => "夜战能力，不受夜间战斗能力减弱影响",
                "sort" => 17
            ],
            [
                "name" => "幸运",
                "cover" => "幸运.jpg",
                "category" => "初级技能",
                "description" => "不会受到物理必杀、法术暴击或暗器暴击；并且法术躲避率增加5%",
                "sort" => 18
            ],
            [
                "name" => "再生",
                "cover" => "再生.jpg",
                "category" => "初级技能",
                "description" => "战斗中每回合自动恢复（自身等级×1）的气血",
                "sort" => 19
            ],
            [
                "name" => "法术连击",
                "cover" => "法术连击.jpg",
                "category" => "初级技能",
                "description" => "法术攻击时，25%几率对原目标追加一次相同的法术攻击，第二次攻击的伤害结果为正常的50%",
                "sort" => 20
            ],
            [
                "name" => "法术暴击",
                "cover" => "法术暴击.jpg",
                "category" => "初级技能",
                "description" => "法术攻击时，10%几率造成暴击",
                "sort" => 21
            ],
            [
                "name" => "法术波动",
                "cover" => "法术波动.jpg",
                "category" => "初级技能",
                "description" => "法术攻击伤害结果在原基础上会有90%到120%的波动",
                "sort" => 22
            ],
            [
                "name" => "灵蕴",
                "cover" => "灵蕴.jpg",
                "category" => "初级技能",
                "description" => "对敌人的法术伤害结果增加10%",
                "sort" => 23
            ],
            [
                "name" => "防御",
                "cover" => "防御.jpg",
                "category" => "初级技能",
                "description" => "根据自身等级增加防御力=等级×0.6 ",
                "sort" => 24
            ],
            [
                "name" => "偷袭",
                "cover" => "偷袭.jpg",
                "category" => "初级技能",
                "description" => "不会受到目标反弹类技能效果（比如反击、魔法反击和反震、挣扎）的影响；物理攻击伤害结果增加5%",
                "sort" => 25
            ],
            [
                "name" => "毒",
                "cover" => "毒.jpg",
                "category" => "初级技能",
                "description" => "物理或法术攻击时有15%几率使目标中毒，每回合损失气血=中毒时所受伤害结果的1/3（对拥有强壮、高级强壮的单位触发几率翻倍），持续5回合",
                "sort" => 26
            ],
            [
                "name" => "凝神",
                "cover" => "凝神.jpg",
                "category" => "初级技能",
                "description" => "35%几率免疫封类异常状态；自身物理攻击伤害结果减少10%",
                "sort" => 27
            ],
            [
                "name" => "灵敏",
                "cover" => "灵敏.jpg",
                "category" => "初级技能",
                "description" => "躲避率增加10%，不受报复和逆击效果影响",
                "sort" => 28
            ],
            [
                "name" => "敏捷",
                "cover" => "敏捷.jpg",
                "category" => "初级技能",
                "description" => "速度增加10%",
                "sort" => 29
            ],
            [
                "name" => "恐怖",
                "cover" => "恐怖.jpg",
                "category" => "初级技能",
                "description" => "攻击时，5%几率使目标下回合内被迫执行防御；夜间几率加倍",
                "sort" => 30
            ],
            [
                "name" => "勇敢",
                "cover" => "勇敢.jpg",
                "category" => "初级技能",
                "description" => "不会逃跑，不受恐怖和恐吓效果影响，不受气势、震慑类效果的伤害加成影响。",
                "sort" => 31
            ],
            [
                "name" => "雷系吸收",
                "cover" => "雷系吸收.jpg",
                "category" => "初级技能",
                "description" => "被雷系法术攻击时，25%几率将本次伤害吸收为自身恢复最多不超过等级x3的气血；但被土系法术攻击则伤害结果增加30%",
                "sort" => 32
            ],
            [
                "name" => "火系吸收",
                "cover" => "火系吸收.jpg",
                "category" => "初级技能",
                "description" => "被火系法术攻击时，25%几率将本次伤害吸收为自身恢复最多不超过等级x3的气血；但被水系法术攻击则伤害结果增加30%",
                "sort" => 33
            ],
            [
                "name" => "水系吸收",
                "cover" => "水系吸收.jpg",
                "category" => "初级技能",
                "description" => "被水系法术攻击时，25%几率将本次伤害吸收为自身恢复最多不超过等级x3的气血；但被火系法术攻击则伤害结果增加30%",
                "sort" => 34
            ],
            [
                "name" => "土系吸收",
                "cover" => "土系吸收.jpg",
                "category" => "初级技能",
                "description" => "被土系法术攻击时，25%几率将本次伤害吸收为自身恢复最多不超过等级x3的气血；但被雷系法术攻击则伤害结果增加30%",
                "sort" => 35
            ],
            [
                "name" => "精准",
                "cover" => "精准.jpg",
                "category" => "初级技能",
                "description" => "物理攻击命中增加10%，法术命中增加5%，对拥有飞行、高级飞行、灵敏、高级灵敏的目标伤害结果增加20%",
                "sort" => 36
            ],
            [
                "name" => "永恒",
                "cover" => "永恒.jpg",
                "category" => "初级技能",
                "description" => "受到的辅助类法术持续效果增加2回合",
                "sort" => 37
            ],
            [
                "name" => "强壮",
                "cover" => "强壮.jpg",
                "category" => "初级技能",
                "description" => "气血上限提高=自身等级×2+25，受到毒类异常状态的伤害提高30%",
                "sort" => 38
            ],
            [
                "name" => "冲击",
                "cover" => "冲击.jpg",
                "category" => "初级技能",
                "description" => "攻击时，如果对目标伤害结果大于目标等级×5，则有可能使目标停止本回合行动。对BOSS和玩家无效",
                "sort" => 39
            ],
            [
                "name" => "保命",
                "cover" => "保命.jpg",
                "category" => "初级技能",
                "description" => "如果被攻击后会死亡，则有30%几率保命，保留1点气血。与神佑复生或高级神佑复生技能同时存在时保命技能无效",
                "sort" => 40
            ],
            [
                "name" => "报复",
                "cover" => "报复.jpg",
                "category" => "初级技能",
                "description" => "攻击时根据自身当前气血与气血上限的比例增加一定伤害结果。气血比例越低，增加的伤害结果越多，最低增加5%，最高增加20%",
                "sort" => 41
            ],
            [
                "name" => "援助",
                "cover" => "援助.jpg",
                "category" => "初级技能",
                "description" => "被击飞出场时有15%几率为本方召唤一个救兵。如果场上本方已经有召唤的怪物，则召唤失败",
                "sort" => 42
            ],
            [
                "name" => "逆击",
                "cover" => "逆击.jpg",
                "category" => "初级技能",
                "description" => "攻击本回合未出手的单位则伤害增加5%，如果目标有祝福类状态，则对其伤害结果再增加10%",
                "sort" => 43
            ],
            [
                "name" => "凝气",
                "cover" => "凝气.jpg",
                "category" => "初级技能",
                "description" => "使用主动技能时有10%几率不消耗魔法值；增加自身等级×0.3的法术攻击力",
                "sort" => 44
            ],
            [
                "name" => "冰霜",
                "cover" => "冰霜.jpg",
                "category" => "初级技能",
                "description" => "使用法术攻击目标时，有一定几率使目标4回合内速度降低10%。自身魔力点加得越多，成功几率越大",
                "sort" => 45
            ],
            [
                "name" => "气势",
                "cover" => "气势.jpg",
                "category" => "初级技能",
                "description" => "出战前2回合物理伤害结果增加10%",
                "sort" => 46
            ],
            [
                "name" => "震慑",
                "cover" => "震慑.jpg",
                "category" => "初级技能",
                "description" => "出战前2回合法术伤害结果增加10%",
                "sort" => 47
            ],
            [
                "name" => "审判",
                "cover" => "审判.jpg",
                "category" => "初级技能",
                "description" => "将敌人击倒时，其神佑类技能效果无效。对拥有神佑复生、高级神佑复生的目标伤害结果增加20%",
                "sort" => 48
            ],
            [
                "name" => "恐吓",
                "cover" => "恐吓.jpg",
                "category" => "初级技能",
                "description" => "物理攻击时，有较小几率将不高于自身5级的目标击退出场。自身力量点加得越多，成功几率越大。对拥有勇敢技能的目标无效、对玩家和BOSS无效",
                "sort" => 49
            ],
            [
                "name" => "自愈",
                "cover" => "自愈.jpg",
                "category" => "初级技能",
                "description" => "接受气血治疗时，恢复效果提高20%，每回合末有30%概率解除毒类效果",
                "sort" => 50
            ],
            [
                "name" => "隔山打牛",
                "cover" => "隔山打牛.png",
                "category" => "初级技能",
                "description" => "攻击单个目标时，有20%几率对敌方另一随机目标造成正常的40%伤害",
                "sort" => 51
            ],
            [
                "name" => "盾气",
                "cover" => "盾气.png",
                "category" => "初级技能",
                "description" => "受到群体物理攻击时，有30%几率触发盾气效果持续到回合结束（此状态下受到的物理伤害结果降低30%），受人物攻击时触发几率减半",
                "sort" => 52
            ],
            [
                "name" => "厄运",
                "cover" => "厄运.png",
                "category" => "初级技能",
                "description" => "攻击时，如果对目标造成伤害大于目标等级*6，则有30%几率取消目标身上的随机一个祝福类状态。对拥有幸运类技能的目标伤害结果提高20%",
                "sort" => 53
            ],
            [
                "name" => "机智",
                "cover" => "机智.png",
                "category" => "初级技能",
                "description" => "速度提高5%；对拥有勇敢类技能的目标伤害结果提高15%",
                "sort" => 54
            ],
            [
                "name" => "惊雷",
                "cover" => "惊雷.jpg",
                "category" => "初级技能",
                "description" => "单体雷系攻击法术，消耗的魔法值=自身等级×2",
                "sort" => 55
            ],
            [
                "name" => "焚炎",
                "cover" => "焚炎.jpg",
                "category" => "初级技能",
                "description" => "单体火系攻击法术，消耗的魔法值=自身等级×2",
                "sort" => 56
            ],
            [
                "name" => "洪流",
                "cover" => "洪流.jpg",
                "category" => "初级技能",
                "description" => "单体水系攻击法术，消耗的魔法值=自身等级×2",
                "sort" => 57
            ],
            [
                "name" => "滚石",
                "cover" => "滚石.jpg",
                "category" => "初级技能",
                "description" => "单体土系攻击法术，消耗的魔法值=自身等级×2",
                "sort" => 58
            ]
        ];

        PetSkill::insert(collect($items)->map(function ($item, $index) {
            return array_merge($item, [
                'sort' => $index,
                "cover" => config('app.url'). "/images/skill/" . $item['cover'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray());
    }
}
