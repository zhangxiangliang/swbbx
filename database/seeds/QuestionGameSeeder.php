<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                "category" => "游戏",
                "question" => "佛家招式“天甘玉露”和“推气过宫”他们的本质区别在哪里？",
                "answer" => "一个速度快，一个速度慢"
            ],
            [
                "category" => "游戏",
                "question" => "逢年过节时，游戏中哪个NPC会给大家送上节日的祝福和礼物？",
                "answer" => "礼物仙子"
            ],
            [
                "category" => "游戏",
                "question" => "宠物以下哪个技能克制“飞行”和“灵敏”类技能？",
                "answer" => "精准"
            ],
            [
                "category" => "游戏",
                "question" => "游戏的时候，可以将你在游戏中的精彩瞬间截图保存以提供以后欣赏，请问游戏截图的功能键是哪个呢？",
                "answer" => "PrintScreen"
            ],
            [
                "category" => "游戏",
                "question" => "下列那个宠物可能出现在寒冰宫三层？",
                "answer" => "小葫芦"
            ],
            [
                "category" => "游戏",
                "question" => "每当逢年过节时，有位仙子会为大家发放礼物，请问她是？",
                "answer" => "礼物仙子"
            ],
            [
                "category" => "游戏",
                "question" => "戏中金悦轩二楼有一位美女NPC，她的名字叫什么？",
                "answer" => "百合"
            ],
            [
                "category" => "游戏",
                "question" => "在三打白骨精剧情中，野猪王说自己的野果被谁抢走了？",
                "answer" => "山贼"
            ],
            [
                "category" => "游戏",
                "question" => "让角色“自动跟随鼠标”跑动的操作方法是？",
                "answer" => "压下左键几秒钟"
            ],
            [
                "category" => "游戏",
                "question" => "在世界地图中，狮驼岭离哪个城市最近？",
                "answer" => "临仙镇"
            ],
            [
                "category" => "游戏",
                "question" => "查看小地图的快捷键是什么？",
                "answer" => "Tab"
            ],
            [
                "category" => "游戏",
                "question" => "在三打白骨精剧情中，蒙面人最后露出了自己得真面目，他到底是谁呢？",
                "answer" => "魑魅"
            ],
            [
                "category" => "游戏",
                "question" => "以下暗器中伤害最高的是？",
                "answer" => "迷离"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个法术效果不能避免“龙卷雨击”的伤害？",
                "answer" => "普陀山的御水咒"
            ],
            [
                "category" => "游戏",
                "question" => "战斗中按下“Alt+A”的组合键，角色会怎样行动?",
                "answer" => "随机攻击某个敌人"
            ],
            [
                "category" => "游戏",
                "question" => "在家中摆放家具时，怎样转换家具的朝向？",
                "answer" => "英文输入法下按空格键"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪项不是高级鬼魂术的效果？",
                "answer" => "不能接受药物和法术恢复"
            ],
            [
                "category" => "游戏",
                "question" => "每个驱魔香使用后可以维持多长时间？",
                "answer" => "60分钟"
            ],
            [
                "category" => "游戏",
                "question" => "使用什么物品可以解除“驱魔香”的效果？",
                "answer" => "荧光草"
            ],
            [
                "category" => "游戏",
                "question" => "在庭院中种植什么样的植物，可能收获“植物的果实”？",
                "answer" => "2至4级植物"
            ],
            [
                "category" => "游戏",
                "question" => "“长在山中的美味野果，富含各种营养，可以补充气血”是什么物品的描述？",
                "answer" => "山长青"
            ],
            [
                "category" => "游戏",
                "question" => "宠物同时拥有“神佑复生”和“保命”技能时，哪个技能有效？",
                "answer" => "神佑复生"
            ],
            [
                "category" => "游戏",
                "question" => "在三打白骨精剧情中，白骨精变成的老婆婆骗你说自己的女儿呗谁抓去吃了？",
                "answer" => "媚灵"
            ],
            [
                "category" => "游戏",
                "question" => "在三打白骨精剧情中，地藏王说地府有名鬼差通晓辨别妖怪之法，让你去找他帮忙，请问他是谁呢？",
                "answer" => "谛听"
            ],
            [
                "category" => "游戏",
                "question" => "哪种坐骑无法获得性格、御兽秘籍以及御魂法诀？",
                "answer" => "双人坐骑"
            ],
            [
                "category" => "游戏",
                "question" => "佛门中主持“水陆法会”需要几天时间？",
                "answer" => "7天"
            ],
            [
                "category" => "游戏",
                "question" => "“长安”两个字一共有多少画？",
                "answer" => "10画"
            ],
            [
                "category" => "游戏",
                "question" => "在成就系统里，如何获得成就“心诚则灵”？",
                "answer" => "祈福出现三个以上相同的结果"
            ],
            [
                "category" => "游戏",
                "question" => "快捷键Alt+V的效果是打开什么界面？",
                "answer" => "队伍搜索"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种属性不影响人物的灵力？",
                "answer" => "敏捷"
            ],
            [
                "category" => "游戏",
                "question" => "学习哪一项技能后可以制作鞋子？",
                "answer" => "炼金"
            ],
            [
                "category" => "游戏",
                "question" => "天策弟子使用“抛砖引玉”技能不需要消耗什么？",
                "answer" => "魔法值"
            ],
            [
                "category" => "游戏",
                "question" => "80级副本《三打白骨精》中，哪个人物不是白骨精变的？",
                "answer" => "土地公"
            ],
            [
                "category" => "游戏",
                "question" => "长安城哪个场景可以观看神武舞台剧？",
                "answer" => "乐艺坊"
            ],
            [
                "category" => "游戏",
                "question" => "宠物同时拥有“神佑复生”和“鬼魂术”技能时，哪个技能有效？",
                "answer" => "鬼魂术"
            ],
            [
                "category" => "游戏",
                "question" => "佛门的哪位NPC可以放生宠物？",
                "answer" => "慧心"
            ],
            [
                "category" => "游戏",
                "question" => "使用灵光图鉴不能鉴定下列哪种类型装备？",
                "answer" => "衣服"
            ],
            [
                "category" => "游戏",
                "question" => "庭院门口最多可以放置多少个“玉石狮子”？",
                "answer" => "两个"
            ],
            [
                "category" => "游戏",
                "question" => "游戏中一共有几种武器？",
                "answer" => "十二门派版本为八种，十三门派版本为九种。"
            ],
            [
                "category" => "游戏",
                "question" => "帮助不高于自身等级多少的角色完成图鉴任务中的组队战斗任务，可获得善恶值？",
                "answer" => "10级"
            ],
            [
                "category" => "游戏",
                "question" => "装备特效“愤怒”能够降低多少愤怒值的消耗？",
                "answer" => "20%"
            ],
            [
                "category" => "游戏",
                "question" => "60级以上的角色帮助新人完成以下哪种任务中的组队战斗不会获得善恶值？",
                "answer" => "任务链"
            ],
            [
                "category" => "游戏",
                "question" => "“裁缝符”无法用于制造以下哪种装备？",
                "answer" => "鞋子"
            ],
            [
                "category" => "游戏",
                "question" => "使用附魔符后的临时附魔效果能持续多长时间？",
                "answer" => "36小时"
            ],
            [
                "category" => "游戏",
                "question" => "玩家使用“践踏”后的次回合不能进行以下哪项操作？",
                "answer" => "使用法术"
            ],
            [
                "category" => "游戏",
                "question" => "易容院的易容师不提供以下哪项功能？",
                "answer" => "人物染色"
            ],
            [
                "category" => "游戏",
                "question" => "使用哪种食品可以增加队伍的士气？",
                "answer" => "狮子头"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个夫妻技能可以复活对方？",
                "answer" => "情深似海"
            ],
            [
                "category" => "游戏",
                "question" => "玩家最低多少级可以申请成为帮派的学徒",
                "answer" => "11级"
            ],
            [
                "category" => "游戏",
                "question" => "哪个NPC处可以打听门派妙药秘方？",
                "answer" => "顺风耳"
            ],
            [
                "category" => "游戏",
                "question" => "佩戴哪个等级段的装备需要完成“装备认证”任务？",
                "answer" => "大于等于50级"
            ],
            [
                "category" => "游戏",
                "question" => "游戏中的“鸾凤和鸣灯”属于几级家具",
                "answer" => "二级家具"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种变身卡的附带技能为必杀？",
                "answer" => "马面变身卡"
            ],
            [
                "category" => "游戏",
                "question" => "收徒弟需要什么级别？",
                "answer" => "80级"
            ],
            [
                "category" => "游戏",
                "question" => "玩家结婚双方要达到的级别是？",
                "answer" => "30级"
            ],
            [
                "category" => "游戏",
                "question" => "玩家结婚双方要达到的友好是？",
                "answer" => "1000"
            ],
            [
                "category" => "游戏",
                "question" => "人气低于多少会被通辑？",
                "answer" => "500"
            ],
            [
                "category" => "游戏",
                "question" => "能够改变玩家服饰颜色的道具有几种？",
                "answer" => "2种"
            ],
            [
                "category" => "游戏",
                "question" => "灵鹤的原形是什么动物？",
                "answer" => "丹顶鹤"
            ],
            [
                "category" => "游戏",
                "question" => "阴德低于多少会遭受天劫？",
                "answer" => "300"
            ],
            [
                "category" => "游戏",
                "question" => "宠物具备以下哪个技能时，不会受到敌方的连击(克制连击)？",
                "answer" => "反震"
            ],
            [
                "category" => "游戏",
                "question" => "药师、神佑、药王这几个装备特效，在什么装备上才可能出现？",
                "answer" => "项链"
            ],
            [
                "category" => "游戏",
                "question" => "提高制作项链腰带的技能是什么？",
                "answer" => "炼金"
            ],
            [
                "category" => "游戏",
                "question" => "辅助类技能(如强身、炼金)在帮派里学习相对于再“辅助技能导师”处学习的优势是什么？",
                "answer" => "消耗较低"
            ],
            [
                "category" => "游戏",
                "question" => "友好度多少时名字显示为绿色？",
                "answer" => "10"
            ],
            [
                "category" => "游戏",
                "question" => "玩家的召唤兽级别(宠物级别)超过玩家角色级别多少以后不长经验值？",
                "answer" => "5级"
            ],
            [
                "category" => "游戏",
                "question" => "能提高玩家气血上限的辅助技能是什么？",
                "answer" => "强身"
            ],
            [
                "category" => "游戏",
                "question" => "红萼仙子那个手拿武器？",
                "answer" => "右手"
            ],
            [
                "category" => "游戏",
                "question" => "玩家到达多少等级可以使用世界频道？",
                "answer" => "20"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种物品可以将宠物变为0级、重新生成技能和资质？",
                "answer" => "还童丹"
            ],
            [
                "category" => "游戏",
                "question" => "武器的攻击有多少比例转换为法术伤害？",
                "answer" => "25%"
            ],
            [
                "category" => "游戏",
                "question" => "长安周道人和各地杂货店里可以购买到神奇的飞行棋符，以下哪个地方是不能使用飞行符直接到达的？",
                "answer" => "长安城外"
            ],
            [
                "category" => "游戏",
                "question" => "装备收购商不会收购下面哪种装备？",
                "answer" => "耐久度为0的装备"
            ],
            [
                "category" => "游戏",
                "question" => "每件装备最多可镶嵌几种宝石？",
                "answer" => "两种"
            ],
            [
                "category" => "游戏",
                "question" => "制作家具需要先学会什么辅助技能？",
                "answer" => "巧匠"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个是一级家具？",
                "answer" => "金钱树"
            ],
            [
                "category" => "游戏",
                "question" => "下面哪项属性对“灵力”的影响最大？",
                "answer" => "魔力"
            ],
            [
                "category" => "游戏",
                "question" => "在双倍时间内，进行以下哪个玩法不会获得双倍经验奖励？",
                "answer" => "封妖"
            ],
            [
                "category" => "游戏",
                "question" => "钓鱼活动由来已久，假设现在一条大鱼咬上了你的鱼钩，用哪种方式更容易把它掉上来？",
                "answer" => "弯竿、打消耗战、拉放结合"
            ],
            [
                "category" => "游戏",
                "question" => "达到25级的玩家可以在长安城领双人处领取双倍和三倍时间，每人每个星期可以领取几个小时的三倍时间？",
                "answer" => "8小时"
            ],
            [
                "category" => "游戏",
                "question" => "多少级以上可以携带“猫女”作为宠物",
                "answer" => "25级"
            ],
            [
                "category" => "游戏",
                "question" => "查看“帮派”界面的快捷键是？",
                "answer" => "Alt+B"
            ],
            [
                "category" => "游戏",
                "question" => "2级帮派的作坊最高可以到几段？",
                "answer" => "5段"
            ],
            [
                "category" => "游戏",
                "question" => "帮派中有几种职位？",
                "answer" => "7种"
            ],
            [
                "category" => "游戏",
                "question" => "游戏中可以在房屋内设置各种功能家具，进行存储、烹饪、休息、修炼宠物等活动。想要建造房屋需要去哪里申请？",
                "answer" => "长安城“建房吏”"
            ],
            [
                "category" => "游戏",
                "question" => "下面哪项属性对攻击力的影响最大？",
                "answer" => "力量"
            ],
            [
                "category" => "游戏",
                "question" => "在游戏中需要将物品、金钱给予好友时，为了避免错给他人，以下那个办法最方便保险？",
                "answer" => "在好友档案界面点击给予按钮"
            ],
            [
                "category" => "游戏",
                "question" => "游戏中人物共分几个种族？",
                "answer" => "3"
            ],
            [
                "category" => "游戏",
                "question" => "如果宠物的忠诚度过低、不愿意参战怎么办？",
                "answer" => "找兽医恢复"
            ],
            [
                "category" => "游戏",
                "question" => "在三倍经验时间内，进行一下那个玩法可获得三倍经验奖励？",
                "answer" => "野外打怪"
            ],
            [
                "category" => "游戏",
                "question" => "战斗中按下“Alt+D”的组合键，角色会怎样行动？",
                "answer" => "防御"
            ],
            [
                "category" => "游戏",
                "question" => "指挥、愤怒这两个装备特效，在什么装备上才金额能会出现？",
                "answer" => "腰带"
            ],
            [
                "category" => "游戏",
                "question" => "在哪个城市里的商店可以购买到30级的装备？",
                "answer" => "傲来国"
            ],
            [
                "category" => "游戏",
                "question" => "在长安城的“鉴定师”处可鉴定多少级得装备？",
                "answer" => "低于等于40级"
            ],
            [
                "category" => "游戏",
                "question" => "在长安城的“鉴定师”处可鉴定多少级得装备？",
                "answer" => "低于等于40级"
            ],
            [
                "category" => "游戏",
                "question" => "长安城的药店名字(门口招牌)叫什么？",
                "answer" => "广济堂"
            ],
            [
                "category" => "游戏",
                "question" => "在那个城市里的商店可以购买到20级的装备？",
                "answer" => "长安城"
            ],
            [
                "category" => "游戏",
                "question" => "变异召唤兽和普通召唤兽的最直观区别是？",
                "answer" => "颜色不同"
            ],
            [
                "category" => "游戏",
                "question" => "如果你拥有一只变异的大耳兔，可以用什么物品对它进行染色？",
                "answer" => "玲珑花"
            ],
            [
                "category" => "游戏",
                "question" => "在游戏中结婚除了需要异性双方达到30级且好友度达到1000外，还需要以下哪个条件？",
                "answer" => "其中一人拥有入住的房子"
            ],
            [
                "category" => "游戏",
                "question" => "宠物同时拥有“神佑复生”和“鬼魂术”技能时，哪个技能有效？",
                "answer" => "鬼魂术"
            ],
            [
                "category" => "游戏",
                "question" => "宠物以下哪个技能克制气势和威慑、恐吓和恐怖类技能？",
                "answer" => "勇敢"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个物品在战斗中不能由宠物来使用？",
                "answer" => "飞刀(暗器)"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个NPC在青河镇(清河镇)？",
                "answer" => "小石头"
            ],
            [
                "category" => "游戏",
                "question" => "变异宠物拥有下列那种特性？",
                "answer" => "天生可能带一个额外技能"
            ],
            [
                "category" => "游戏",
                "question" => "每个角色每天最多可放生多少只特殊的或绑定的宠物？",
                "answer" => "5只"
            ],
            [
                "category" => "游戏",
                "question" => "临仙镇的药店名字(门口招牌)叫什么？",
                "answer" => "永安堂"
            ],
            [
                "category" => "游戏",
                "question" => "两个同类型，同等级的宝石可以合成一个同类型高一级的宝石;装备的初始锻造等级为0，镶嵌宝石可以令装备的锻造等级提高一级，镶嵌时宝石的等级只能比装备的锻造等级高1级。那么，将一件装备的锻造等级提升到4级，一共需要消耗多少颗1级的宝石？",
                "answer" => "15颗"
            ],
            [
                "category" => "游戏",
                "question" => "随着游戏中的不断发展，游戏的种类也不断增加，花样百出。有角色扮演类型游戏、战略类型游戏、益智类型游戏、音乐游戏、体育类游戏及多种游戏类型。请问游戏术语中的RPG，是指哪种类型的游戏？",
                "answer" => "角色扮演类型"
            ],
            [
                "category" => "游戏",
                "question" => "每种宠物都有一件与其对应的饰物，宠物饰物并具备以下哪个效果？",
                "answer" => "资质提高"
            ],
            [
                "category" => "游戏",
                "question" => "萤光草在战斗中的使用的效果是什么？",
                "answer" => "查看怪物当前气血"
            ],
            [
                "category" => "游戏",
                "question" => "除了帮战以外，参加以下哪个活动有机会获得神兽？",
                "answer" => "幻境寻宝"
            ],
            [
                "category" => "游戏",
                "question" => "二十八星宿巡游三界之间，有缘遇见他们并挑战成功则可获得丰厚奖励。那么挑战星宿要求达到40级并且至少几个人组队？",
                "answer" => "3人"
            ],
            [
                "category" => "游戏",
                "question" => "天策门派特色？",
                "answer" => "装备耐久消耗速度为正常的1/2"
            ],
            [
                "category" => "游戏",
                "question" => "天魔里门派特色？",
                "answer" => "暗器伤害效果增加，使用暗器5%概率出现必杀"
            ],
            [
                "category" => "游戏",
                "question" => "七星方寸门派特色？",
                "answer" => "对幽冥地府弟子的所有伤害增加10%，对鬼魂系敌人的伤害加倍；被法术恢复气血效果增加20%"
            ],
            [
                "category" => "游戏",
                "question" => "盘丝岭门派特色？",
                "answer" => "不受任何暗器伤害;被NPC击倒时，会被守护网守护而保留1点气血(每场战斗最多触发1次)"
            ],
            [
                "category" => "游戏",
                "question" => "东海龙宫门派特色？",
                "answer" => "使用攻击性法术不受负面法术抵抗率的影响;完成师门任务时，获得的信誉增加20%"
            ],
            [
                "category" => "游戏",
                "question" => "南海普陀门派特色？",
                "answer" => "倒地时有20%的概率出现神佑效果，气血恢复15%，如果在其他神佑效果下，则概率提高10%"
            ],
            [
                "category" => "游戏",
                "question" => "凌霄天宫门派特色？",
                "answer" => "15%几率躲避负面法术"
            ],
            [
                "category" => "游戏",
                "question" => "幽冥地府门派特色？",
                "answer" => "夜战能力，受封系法术命中降低20%"
            ],
            [
                "category" => "游戏",
                "question" => "万兽岭门派特色？",
                "answer" => "宠物寿命和忠诚消耗减半，宠物不会逃跑"
            ],
            [
                "category" => "游戏",
                "question" => "魔王山门派特色？",
                "answer" => "10%的几率完全招架住敌人的物理攻击(包含物理招式攻击)"
            ],
            [
                "category" => "游戏",
                "question" => "镇元五庄门派特色？",
                "answer" => "受到的所有负面法术减少1回合(最低减少到2回合)"
            ],
            [
                "category" => "游戏",
                "question" => "佛门门派特色？",
                "answer" => "受到天魔里、盘丝岭、镇元五庄的封系法术回合减半？"
            ],
            [
                "category" => "游戏",
                "question" => "拥有“吸血”技能的宠物在气血未满的情况下攻击目标，造成伤害的同时没有为自身恢复气血，可能是以下哪个原因造成？",
                "answer" => "目标是鬼魂生物"
            ],
            [
                "category" => "游戏",
                "question" => "在那个城市里的商店可以购买到40级的装备？",
                "answer" => "临仙镇"
            ],
            [
                "category" => "游戏",
                "question" => "宠物以下哪个技能克制反震和反击效果？",
                "answer" => "偷袭"
            ],
            [
                "category" => "游戏",
                "question" => "完成任务链可能获得下列那种物品奖励？",
                "answer" => "宠物装备"
            ],
            [
                "category" => "游戏",
                "question" => "游戏中的“龟鹤延年灯”属于几级家具？",
                "answer" => "二级家具"
            ],
            [
                "category" => "游戏",
                "question" => "在哪里可以看到游戏内当前的时辰？",
                "answer" => "游戏界面左上角"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种宠物可能天生具有鬼魂术？",
                "answer" => "骷髅"
            ],
            [
                "category" => "游戏",
                "question" => "一场战斗中，每人最多可以有多少只宠物出战(除子女以外)？",
                "answer" => "5只"
            ],
            [
                "category" => "游戏",
                "question" => "在仙缘活动中，以下哪个NPC可以为角色重置属性点？",
                "answer" => "五庄道童"
            ],
            [
                "category" => "游戏",
                "question" => "宠物具备以下哪个技能时，不会受到敌方的必杀和法术暴击？",
                "answer" => "幸运"
            ],
            [
                "category" => "游戏",
                "question" => "变身卡是记有三界怪物造型的神奇卡片。一级变身卡无使用条件，二级以上的变身卡需要什么条件才能使用？",
                "answer" => "二级变化之术"
            ],
            [
                "category" => "游戏",
                "question" => "以下药品可以在各大城镇的药店买到，能够用来补充气血的药是？",
                "answer" => "甘露"
            ],
            [
                "category" => "游戏",
                "question" => "完成神行任务除了可以获得金钱和信誉外，还可能获得什么特殊的物品？",
                "answer" => "八阵图"
            ],
            [
                "category" => "游戏",
                "question" => "除普通阵外，还有几种阵法？",
                "answer" => "8种"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种方式可能获得宠物装饰？",
                "answer" => "战胜怪物首领"
            ],
            [
                "category" => "游戏",
                "question" => "剧情技能“灵丹妙药”的效果是什么？",
                "answer" => "使用药物恢复气血魔法值效果提升"
            ],
            [
                "category" => "游戏",
                "question" => "在神武币交易中心购买的物品可以在多长时间之内卖回去？",
                "answer" => "当天24点以前"
            ],
            [
                "category" => "游戏",
                "question" => "在三打白骨精剧情中，索桥附近的山贼打劫你要的现金数目是多少？",
                "answer" => "50000两"
            ],
            [
                "category" => "游戏",
                "question" => "宠物以下哪个技能克制“神佑复生”技能？",
                "answer" => "审判"
            ],
            [
                "category" => "游戏",
                "question" => "已婚的两个玩家，若要怀孕生育，必须有什么物品？",
                "answer" => "千年人参或子母河水"
            ],
            [
                "category" => "游戏",
                "question" => "在三打白骨精剧情中，白骨精变成的村姑给你吃了什么，使你命丧黄泉，去了地府？",
                "answer" => "山泉水"
            ],
            [
                "category" => "游戏",
                "question" => "财迷鬼实用的武器是什么？",
                "answer" => "金元宝"
            ],
            [
                "category" => "游戏",
                "question" => "如果宠物同时拥有“高级敏捷”和“迟钝”两个技能，它的速度跟原始相比如何？",
                "answer" => "不变"
            ],
            [
                "category" => "游戏",
                "question" => "宠物拥有高级技能和对应低级技能时(例如“高级必杀”与“必杀”)效果如何计算？",
                "answer" => "取高级技能效果"
            ],
            [
                "category" => "游戏",
                "question" => "非变异的宠物霜狼是什么颜色？",
                "answer" => "蓝色"
            ],
            [
                "category" => "游戏",
                "question" => "物品栏中有豆腐等物品时，怎么样操作可以快速补充气血？",
                "answer" => "右键点击任务或宠物头像右边的气血条"
            ],
            [
                "category" => "游戏",
                "question" => "在三打白骨精剧情中，牛头制作了一种符，可以识破白骨精的变身，请问这种符叫什么名字？",
                "answer" => "显形符"
            ],
            [
                "category" => "游戏",
                "question" => "金疮药是由多味草药精心炼制而成，是最常见的特效药，它的药效是？",
                "answer" => "补充气血"
            ],
            [
                "category" => "游戏",
                "question" => "游戏中里有很多可爱的表情动画，列如“#”号加20表示什么意思？",
                "answer" => "害羞"
            ],
            [
                "category" => "游戏",
                "question" => "宠物以下哪个技能克制“强力”技能？",
                "answer" => "防御"
            ],
            [
                "category" => "游戏",
                "question" => "点击“人物属性”界面的“烹饪”按钮可能获得下面哪种物品？",
                "answer" => "叫花鸡"
            ],
            [
                "category" => "游戏",
                "question" => "在那个城市里的商店可以购买到10级的装备？",
                "answer" => "青河镇"
            ],
            [
                "category" => "游戏",
                "question" => "战斗中保护的快捷键是什么?",
                "answer" => "Alt+T"
            ],
            [
                "category" => "游戏",
                "question" => "“选美大会”活动中，冠军获得的称谓是什么？",
                "answer" => "国色天香"
            ],
            [
                "category" => "游戏",
                "question" => "“雪千寻”有可能加入哪个门派？",
                "answer" => "魔王山"
            ],
            [
                "category" => "游戏",
                "question" => "什么道具使用后可获得100场自动恢复魔法的状态？",
                "answer" => "九色甘露"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个任务不属于“仙缘”活动？",
                "answer" => "怪物首领"
            ],
            [
                "category" => "游戏",
                "question" => "使用哪种食品可以增加人物的三界威望？",
                "answer" => "海外仙山"
            ],
            [
                "category" => "游戏",
                "question" => "以下关于五行相克的描述，哪项是正确的？",
                "answer" => "火克金"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个法术并没有减少目标愤怒值的效果？",
                "answer" => "凌霄天宫的天灵护佑"
            ],
            [
                "category" => "游戏",
                "question" => "宠物技能剑气四射几级以上可以作用3个目标？",
                "answer" => "60级"
            ],
            [
                "category" => "游戏",
                "question" => "幻境寻宝活动中镜中世界一共有多少层？",
                "answer" => "30层"
            ],
            [
                "category" => "游戏",
                "question" => "黑宝石的效果是增加速度8，红玛瑙的效果是增加气血40。假设一件腰带上镶嵌了1级、2级、3级黑宝石和4级红玛瑙，这些宝石对它的属性加成如何？",
                "answer" => "速度+24；气血+40"
            ],
            [
                "category" => "游戏",
                "question" => "使用天策兵书不能鉴定下列哪种类型装备？",
                "answer" => "项链"
            ],
            [
                "category" => "游戏",
                "question" => "二十八星宿在哪个时间刷新？",
                "answer" => "整点后5分钟"
            ],
            [
                "category" => "游戏",
                "question" => "镇元五庄的明月处兑换人参果需要哪种声望？",
                "answer" => "门派贡献"
            ],
            [
                "category" => "游戏",
                "question" => "使用山水玄机图不可能产生哪种结果？",
                "answer" => "放出妖怪"
            ],
            [
                "category" => "游戏",
                "question" => "远古妖王不会由以下哪种途径刷新？",
                "answer" => "挖宝藏图"
            ],
            [
                "category" => "游戏",
                "question" => "唐刀不适用于哪一个角色？",
                "answer" => "慕子白"
            ],
            [
                "category" => "游戏",
                "question" => "哪个门派弟子死亡时可能由于星穹之力触发神佑效果？",
                "answer" => "南海普陀"
            ],
            [
                "category" => "游戏",
                "question" => "武器上不能镶嵌哪种宝石？",
                "answer" => "黑宝石"
            ],
            [
                "category" => "游戏",
                "question" => "使用剑气四射时，以下哪个技能可以同时生效？",
                "answer" => "高级恐吓"
            ],
            [
                "category" => "游戏",
                "question" => "我们游戏中以下哪种暗器的基础伤害最高？",
                "answer" => "迷离"
            ],
            [
                "category" => "游戏",
                "question" => "多少级以上的玩家可在李将军处领取官职任务？",
                "answer" => "60级"
            ],
            [
                "category" => "游戏",
                "question" => "最多可以几个人一起结拜？",
                "answer" => "5人"
            ],
            [
                "category" => "游戏",
                "question" => "为武器附魔时最多可以选择几种附魔类型？",
                "answer" => "5种"
            ],
            [
                "category" => "游戏",
                "question" => "每周任意多少天完成20次师门任务，可额外获得大量经验奖励和三界威望？",
                "answer" => "5天"
            ],
            [
                "category" => "游戏",
                "question" => "一次战斗中最多可以召唤几个子女出战？",
                "answer" => "1个"
            ],
            [
                "category" => "游戏",
                "question" => "镇元五庄的明月处兑换人参果需要哪种声望？",
                "answer" => "门派贡献"
            ],
            [
                "category" => "游戏",
                "question" => "银河沙不具有以下哪种功能？",
                "answer" => "兑换坐骑装饰"
            ],
            [
                "category" => "游戏",
                "question" => "哪种婚礼可以举办“花轿巡游”？",
                "answer" => "豪华婚礼"
            ],
            [
                "category" => "游戏",
                "question" => "万兽岭的门派导师所在的场景叫什么？",
                "answer" => "狮王洞"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种类型的家具不具有功能性？",
                "answer" => "凳子"
            ],
            [
                "category" => "游戏",
                "question" => "吉祥、小葫芦等新手宠不能通过哪个途径获得？",
                "answer" => "宠物交易中心购买"
            ],
            [
                "category" => "游戏",
                "question" => "领取师门任务的最低等级是多少？",
                "answer" => "15级"
            ],
            [
                "category" => "游戏",
                "question" => "观赏宠不具备哪项功能？",
                "answer" => "驱赶庭院强盗"
            ],
            [
                "category" => "游戏",
                "question" => "观赏宠不具备哪项功能？",
                "answer" => "驱赶庭院强盗"
            ],
            [
                "category" => "游戏",
                "question" => "65级携带宠物中，哪只宠物没变异天生技能数可能达到5个？",
                "answer" => "无常"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种方式不能获得宠物装饰？",
                "answer" => "战胜怪物统帅"
            ],
            [
                "category" => "游戏",
                "question" => "不能使用哪种货币在辅助技能导师处遗忘已经学习的剧情技能？",
                "answer" => "现金"
            ],
            [
                "category" => "游戏",
                "question" => "在哪种情况下，非变异宠物与魔兽要诀合成时必然替换原有的一项技能？",
                "answer" => "原技能数≥4"
            ],
            [
                "category" => "游戏",
                "question" => "幻境寻宝活动中开启什么箱子有几率获得源生之灵？",
                "answer" => "神秘宝箱"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪种房屋的风水最好？",
                "answer" => "紫气东来"
            ],
            [
                "category" => "游戏",
                "question" => "以下哪个门派不能从“乌斯藏”直接进入？",
                "answer" => "盘丝岭"
            ],
            [
                "category" => "游戏",
                "question" => "烽火连城活动中哪个职业擅长法术？",
                "answer" => "军师"
            ],
            [
                "category" => "游戏",
                "question" => "天魔里地图中有哪种花？",
                "answer" => "樱花"
            ],
            [
                "category" => "游戏",
                "question" => "镇元五庄的穿云斩可以攻击目标几次？",
                "answer" => "2次"
            ],
            [
                "category" => "游戏",
                "question" => "门派竞技场活动最多可以几人组队？",
                "answer" => "3人"
            ],
            [
                "category" => "游戏",
                "question" => "宠物技能红莲业火几级以上可以作用3个目标？",
                "answer" => "30级"
            ],
            [
                "category" => "游戏",
                "question" => "哪种宠物护符不可能出现剑气四射技能？",
                "answer" => "阳光护符"
            ],
            [
                "category" => "游戏",
                "question" => "下列哪位NPC不在金銮殿上？",
                "answer" => "殷丞相"
            ],
            [
                "category" => "游戏",
                "question" => "哪个NPC处可以打听门派妙药秘方？",
                "answer" => "顺风耳"
            ],
            [
                "category" => "游戏",
                "question" => "拥有时装后会增加几个宠物出战名额？",
                "answer" => "2个"
            ],
            [
                "category" => "游戏",
                "question" => "“小伙伴”不包括以下哪种？",
                "answer" => "鹦鹉"
            ],
            [
                "category" => "游戏",
                "question" => "好友度达到2000后，哪种方式不能再增加好友度?",
                "answer" => "和好友组队战斗"
            ],
        ];

        $questions = collect($questions)->map(function ($skill) {
            return array_merge($skill, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        Question::insert($questions);
    }
}
