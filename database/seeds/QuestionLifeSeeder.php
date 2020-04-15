<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionLifeSeeder extends Seeder
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
                "category" => "生活",
                "question" => "一个孩子智商为100表明他和同龄人相比？",
                "answer" => "智力平平"
            ],
            [
                "category" => "生活",
                "question" => "鲎的血液什么颜色的？",
                "answer" => "蓝色"
            ],
            [
                "category" => "生活",
                "question" => "对虾、河蟹的血液什么颜色的？",
                "answer" => "淡青色"
            ],
            [
                "category" => "生活",
                "question" => "“清明寒食”是吴王为了纪念哪一个大臣设的规矩？",
                "answer" => "介子推"
            ],
            [
                "category" => "生活",
                "question" => "企鹅产卵的季节一般是？",
                "answer" => "秋季"
            ],
            [
                "category" => "生活",
                "question" => "奥运会第一个只有女子才能参加的比赛项目是？",
                "answer" => "艺术体操"
            ],
            [
                "category" => "生活",
                "question" => "中国虽然不是双姓大国，但还是有不少双姓，请问以下哪个不是双姓？",
                "answer" => "三台"
            ],
            [
                "category" => "生活",
                "question" => "中国代表团以哪个项目夺得的首枚亚运金牌",
                "answer" => "射击"
            ],
            [
                "category" => "生活",
                "question" => "射击项目第一次出现在亚运会赛场是在第几届亚运会",
                "answer" => "第二届"
            ],
            [
                "category" => "生活",
                "question" => "广州于哪一天正式成为亚运会主办城市",
                "answer" => "2004年7月1日，广州市正式成为第16届亚运会主办城市"
            ],
            [
                "category" => "生活",
                "question" => "2010年广州亚运会会徽旗帜于2008年3月13日在哪里升起？",
                "answer" => "南极"
            ],
            [
                "category" => "生活",
                "question" => "樟脑丸的主要成分是什么？",
                "answer" => "萘"
            ],
            [
                "category" => "生活",
                "question" => "世界上二氧化碳排放量最多的是",
                "answer" => "中国的四川"
            ],
            [
                "category" => "生活",
                "question" => "一般来说，在发生通货膨胀时，固定工资的人其生活水平发生了怎么样的变化？",
                "answer" => "生活水平会下降"
            ],
            [
                "category" => "生活",
                "question" => "穿越沼泽或草丛时，应该优先选择携带以下哪种物品？",
                "answer" => "一根足够长的木棍"
            ],
            [
                "category" => "生活",
                "question" => "以下哪个并非清明节的别称？",
                "answer" => "聪明节、扫墓节、踏青节、寒食、鬼节、冥节都是清明节的别称"
            ],
            [
                "category" => "生活",
                "question" => "在隧道里，可防护眼睛的灯光颜色是？",
                "answer" => "橙色"
            ],
            [
                "category" => "生活",
                "question" => "以下哪种饮料素有“液体面包”的美称？",
                "answer" => "啤酒"
            ],
            [
                "category" => "生活",
                "question" => "“六畜兴旺”中的“六畜”是指猪、牛、马、羊、狗、鸡六种。在古代，人们对六畜有作上/下三品之分，你知道被列为下品的是那些动物吗？",
                "answer" => "鸡、狗、猪"
            ],
            [
                "category" => "生活",
                "question" => "我国民间对88岁有个俗称叫“米寿”，为什么这样叫呢？",
                "answer" => "八十八三字加起来就是米"
            ],
            [
                "category" => "生活",
                "question" => "中华台北代表团于第几届亚运会重返亚运大家庭",
                "answer" => "第十一届"
            ],
            [
                "category" => "生活",
                "question" => "广州是中国第几个获得亚运会主办权的城市？",
                "answer" => "第二个"
            ],
            [
                "category" => "生活",
                "question" => "2010年广州亚运会会徽是什么？",
                "answer" => "以五羊雕塑为主体轮廓设计的图案"
            ],
            [
                "category" => "生活",
                "question" => "洗后晒干的旅游鞋及白球鞋常在帆布与皮革或与胶底相接处出现黄印儿。要解决这个问题可以采用以下哪种方法？",
                "answer" => "将洗好的鞋用纸巾包起来再晒"
            ],
            [
                "category" => "生活",
                "question" => "假如有三个浇花用的花洒，让你选择一个能将水洒的最远的。你应该选择哪一个呢？",
                "answer" => "出水口接近底部的花洒"
            ],
            [
                "category" => "生活",
                "question" => "世界动物日是几月几日？",
                "answer" => "10月4日"
            ],
            [
                "category" => "生活",
                "question" => "依照西方的习俗，订婚戒指应该戴在左手的哪根手指上？",
                "answer" => "无名指"
            ],
            [
                "category" => "生活",
                "question" => "干洗是用科学溶剂通过渗透、溶解和稀释对衣物进行洗涤，干洗后的服装不变形、不退色、不损伤面料，有一定的消毒、灭菌效果。但干洗所用化学溶剂对人类危害较大，不应过多进行干洗。为尽量避免化学溶剂对人体的伤害，服装干洗后要怎么处理？",
                "answer" => "先在室外晾一段时间"
            ],
            [
                "category" => "生活",
                "question" => "在京剧中，“净”角是舞台上具有独特风格的人物类型，脸部化妆最为丰富多彩，“净”角因面部化妆要用各种颜色和图案勾勒脸谱，所以又被称为什么？",
                "answer" => "花脸"
            ],
            [
                "category" => "生活",
                "question" => "现存的鸟类，最大的鸟蛋是？",
                "answer" => "鸵鸟蛋"
            ],
            [
                "category" => "生活",
                "question" => "著名的“响尾蛇”空对空导弹是采用什么制导系统？",
                "answer" => "红外线制导系统"
            ],
            [
                "category" => "生活",
                "question" => "一块砖放在疏松的沙堆上，平放和竖放哪种情况下陷的深？",
                "answer" => "竖放"
            ],
            [
                "category" => "生活",
                "question" => "穿西服时衬衫袖口应该露出上衣袖口吗？",
                "answer" => "应该"
            ],
            [
                "category" => "生活",
                "question" => "一些轿车车身后有2.0、2.6、2.8等阿拉伯数字，你知道这些事指什么吗？",
                "answer" => "发动机的排量"
            ],
            [
                "category" => "生活",
                "question" => "广州亚运有多少个比赛项目",
                "answer" => "42个"
            ],
            [
                "category" => "生活",
                "question" => "首届亚运会中产生金牌最多的项目是",
                "answer" => "田径"
            ],
            [
                "category" => "生活",
                "question" => "在野外宿营时，以下几个地点哪个是较佳选择？",
                "answer" => "地势高，干燥背风处"
            ],
            [
                "category" => "生活",
                "question" => "五子棋最高段位制是多少？",
                "answer" => "九段"
            ],
            [
                "category" => "生活",
                "question" => "我们在电塔附近听到的嗡鸣声是从哪里来的？",
                "answer" => "电线发出的"
            ],
            [
                "category" => "生活",
                "question" => "人走路时手臂不由自主的摇动，是什么原因？",
                "answer" => "平衡走路的姿势"
            ],
            [
                "category" => "生活",
                "question" => "目前我国存本取息定期储蓄的起存金额为？",
                "answer" => "5000元"
            ],
            [
                "category" => "生活",
                "question" => "“沙龙”Salon是从哪国传进的外来语？",
                "answer" => "法国"
            ],
            [
                "category" => "生活",
                "question" => "我国第一座自行设计、自行建造的核电站是哪一个？",
                "answer" => "秦山核电站"
            ],
            [
                "category" => "生活",
                "question" => "世界卫生组织的新健康标准为“五好三良”，请问下列哪项不属于“五好”的范围？",
                "answer" => "头脑好、思维敏捷"
            ],
            [
                "category" => "生活",
                "question" => "我国第一部植物学词典是？",
                "answer" => "全芳备祖"
            ],
            [
                "category" => "生活",
                "question" => "极夜又称永夜，是指一日之内太阳都在地平线以下的现象(即黑夜持续超过24小时)，而极昼则相反(白天持续超过24小时)。着两种奇特的现象会出现在哪些地区？",
                "answer" => "南极圈内和北极圈内"
            ],
            [
                "category" => "生活",
                "question" => "一年有多少个月是31天的？",
                "answer" => "7个月"
            ],
            [
                "category" => "生活",
                "question" => "煮牛奶的正确方法是怎么样的？",
                "answer" => "旺火快煮"
            ],
            [
                "category" => "生活",
                "question" => "冬天的时候，我们在同样是25摄氏度的房间里，为什么往往会觉得比夏天呆的时候冷？",
                "answer" => "空气干燥"
            ],
            [
                "category" => "生活",
                "question" => "我国第一部方言词典是什么？",
                "answer" => "方言"
            ],
            [
                "category" => "生活",
                "question" => "坦克是由哪个国家首先发明的？",
                "answer" => "英国"
            ],
            [
                "category" => "生活",
                "question" => "航天飞机在轨道飞行一周需要多少分钟？",
                "answer" => "90分钟"
            ],
            [
                "category" => "生活",
                "question" => "被誉为“中国导弹之父”的是谁？",
                "answer" => "钱学森"
            ],
            [
                "category" => "生活",
                "question" => "被誉为“中国火箭之父”的是谁？",
                "answer" => "钱学森"
            ],
            [
                "category" => "生活",
                "question" => "在原子能发电厂的原子反应堆中，充当燃料的原子核所进行的是什么变化？",
                "answer" => "裂变"
            ],
            [
                "category" => "生活",
                "question" => "第一只进入太空的动物是什么品种？",
                "answer" => "狗"
            ],
            [
                "category" => "生活",
                "question" => "火箭使用能够产生高压气体的燃料来推动自己前进，是应用了牛顿第几定律？",
                "answer" => "三"
            ],
            [
                "category" => "生活",
                "question" => "咸鸭蛋的蛋黄里出现的“油”是什么物质？",
                "answer" => "脂肪"
            ],
            [
                "category" => "生活",
                "question" => "不锈钢中的什么元素使这种合金钢不生锈？",
                "answer" => "铬"
            ],
            [
                "category" => "生活",
                "question" => "豆浆中加入什么物质可以制成豆腐？",
                "answer" => "石膏"
            ],
            [
                "category" => "生活",
                "question" => "一般企鹅以居住在何处而为人们所知？",
                "answer" => "南极"
            ],
            [
                "category" => "生活",
                "question" => "汽车的后视镜使用的是什么镜子？",
                "answer" => "凸面镜"
            ],
            [
                "category" => "生活",
                "question" => "农历把每月十五叫做什么日？",
                "answer" => "望"
            ],
            [
                "category" => "生活",
                "question" => "下列金属，哪种硬度最低？",
                "answer" => "黄金"
            ],
            [
                "category" => "生活",
                "question" => "蚊子有一个习性就是对弱光很喜欢，当你穿上了适合蚊子视觉习惯的衣服后，就会吸引蚊子叮了，那你知道穿什么颜色的衣服的时候更容易挨蚊子叮？",
                "answer" => "黑色"
            ],
            [
                "category" => "生活",
                "question" => "有“植物熊猫”之称的是哪种植物？",
                "answer" => "银杉"
            ],
            [
                "category" => "生活",
                "question" => "南极最冷的月份在几月？",
                "answer" => "7月"
            ],
            [
                "category" => "生活",
                "question" => "狮子尾巴又粗又长，它的主要功能是什么？",
                "answer" => "奔跑时维持平衡"
            ],
            [
                "category" => "生活",
                "question" => "重力加速度是一个物体受重力作用的情况下所具有的加速度，也叫自由落体加速度，通常用哪个字母表示？",
                "answer" => "g"
            ],
            [
                "category" => "生活",
                "question" => "中国的国际直拨号是多少？",
                "answer" => "86"
            ],
            [
                "category" => "生活",
                "question" => "在二十四个节气中，既是节气又是节日的是？",
                "answer" => "清明"
            ],
            [
                "category" => "生活",
                "question" => "电流强度的单位是什么？",
                "answer" => "安培"
            ],
            [
                "category" => "生活",
                "question" => "树干为什么常常刷成白色？",
                "answer" => "灭菌"
            ],
            [
                "category" => "生活",
                "question" => "蟋蟀是靠什么发出鸣叫声的？",
                "answer" => "翅膀"
            ],
            [
                "category" => "生活",
                "question" => "土豆不宜存放在什么地方？",
                "answer" => "日光照射处"
            ],
            [
                "category" => "生活",
                "question" => "老三届指的是哪几年毕业的初高中毕业生？",
                "answer" => "1966-1968"
            ],
            [
                "category" => "生活",
                "question" => "狗热时用什么散热？",
                "answer" => "舌头"
            ],
            [
                "category" => "生活",
                "question" => "奥林匹克会旗——五环旗的设计者是哪位？",
                "answer" => "皮埃尔·德·顾拜旦"
            ],
            [
                "category" => "生活",
                "question" => "我国哪一银行执行中央银行的职能？",
                "answer" => "中国人民银行"
            ],
            [
                "category" => "生活",
                "question" => "发生地震时，比较恰当的求生行为是？",
                "answer" => "躲在床底"
            ],
            [
                "category" => "生活",
                "question" => "彩虹的最内层是什么颜色？",
                "answer" => "紫色"
            ],
            [
                "category" => "生活",
                "question" => "野外的苹果成熟了以后。为什么会自动掉到地上？",
                "answer" => "重力作用"
            ],
            [
                "category" => "生活",
                "question" => "眉毛的生长周期是多久？",
                "answer" => "2个月"
            ],
            [
                "category" => "生活",
                "question" => "蜜蜂窝的内部结构是什么形状？",
                "answer" => "六边形"
            ],
            [
                "category" => "生活",
                "question" => "避雷针的工作原理是？",
                "answer" => "把云层上的电荷导入大地"
            ],
            [
                "category" => "生活",
                "question" => "天安门每天升旗是在什么时间？",
                "answer" => "天文台所确定的当天真实日出时间"
            ],
            [
                "category" => "生活",
                "question" => "我国目前一共有多少个少数民族？",
                "answer" => "55"
            ],
            [
                "category" => "生活",
                "question" => "国际奥委会最高领导人任期为几年？",
                "answer" => "8"
            ],
            [
                "category" => "生活",
                "question" => "中国最大的商业银行是？",
                "answer" => "中国工商银行"
            ],
            [
                "category" => "生活",
                "question" => "下列哪种文字没有出现在人民币上？",
                "answer" => "繁体字"
            ],
            [
                "category" => "生活",
                "question" => "交通信号灯采取哪三种颜色呢？",
                "answer" => "红，黄，绿"
            ],
            [
                "category" => "生活",
                "question" => "国民生产总值的英文简写是什么？",
                "answer" => "GNP"
            ],
            [
                "category" => "生活",
                "question" => "乘坐民航班机多少岁以上不能购买儿童票？",
                "answer" => "12岁"
            ],
            [
                "category" => "生活",
                "question" => "2008年奥运会除北京外还有其他6个城市，共同举办2008年的奥运会。其中不包括以下哪个城市？",
                "answer" => "广州"
            ],
            [
                "category" => "生活",
                "question" => "人类的性别是由哪一条染色体决定？",
                "answer" => "Y染色体"
            ],
            [
                "category" => "生活",
                "question" => "我们必须如何对着太阳，喷射水雾，才能制造彩虹？",
                "answer" => "背对"
            ],
            [
                "category" => "生活",
                "question" => "泥鳅离开水后也能生存，它离开水后是用什么呼吸的？",
                "answer" => "肠"
            ],
            [
                "category" => "生活",
                "question" => "2008年北京奥运会是第几届奥林匹克运动会？",
                "answer" => "29"
            ],
            [
                "category" => "生活",
                "question" => "下列名称不属于二十四节气的是哪个？",
                "answer" => "大伏"
            ],
            [
                "category" => "生活",
                "question" => "亚太经合组织是亚洲与环太平洋地区最具影响力的经济合作组织,它的英文简写是？",
                "answer" => "APEC"
            ],
            [
                "category" => "生活",
                "question" => "中国跳水队向来被称为“中国奥运会夺金大户”，以下几位体育明星中，哪位是中国跳水队的队员？",
                "answer" => "郭晶晶"
            ],
            [
                "category" => "生活",
                "question" => "人体最坚硬的部分是？",
                "answer" => "牙齿"
            ],
            [
                "category" => "生活",
                "question" => "对人体来说安全电压是多少伏以下？",
                "answer" => "36伏"
            ],
            [
                "category" => "生活",
                "question" => "下列鸟类中哪一种是候鸟？",
                "answer" => "黄鹂"
            ],
            [
                "category" => "生活",
                "question" => "以下措施里，能够最有效地防治土地沙漠化的是哪一项？",
                "answer" => "植树造林，绿化家园"
            ],
            [
                "category" => "生活",
                "question" => "被称为中国“国球”的运动项目是？",
                "answer" => "乒乓球"
            ],
            [
                "category" => "生活",
                "question" => "第一个排球是由什么演变来的？",
                "answer" => "篮球"
            ],
            [
                "category" => "生活",
                "question" => "中秋节是我国的传统佳节，是仅次于春节的第二大节日。中秋节源远流长，有着许多的传说和别称，以下哪个并非它的别称呢？",
                "answer" => "泼水节"
            ],
            [
                "category" => "生活",
                "question" => "泼水节是我国哪一民族一年中最盛大的节日？",
                "answer" => "傣族"
            ],
            [
                "category" => "生活",
                "question" => "象脚鼓是哪个民族的打击乐器？",
                "answer" => "傣族"
            ],
            [
                "category" => "生活",
                "question" => "我国许多少数民族都使用十二生肖纪年，但各民族所用的十二生肖有所不同，请问“象”是哪个民族的生肖？",
                "answer" => "傣族"
            ],
            [
                "category" => "生活",
                "question" => "世界上第一颗人造卫星是哪个国家发射的？",
                "answer" => "前苏联"
            ],
            [
                "category" => "生活",
                "question" => "人类第一个卫星是由哪个国家发射的？",
                "answer" => "前苏联"
            ],
            [
                "category" => "生活",
                "question" => "1969年7月21日(北京时间)，人类第一次登月成功，请问，实行登月的飞船名称是什么？",
                "answer" => "阿波罗11号飞船"
            ],
            [
                "category" => "生活",
                "question" => "以下哪种并非淡水鱼？",
                "answer" => "鲨鱼"
            ],
            [
                "category" => "生活",
                "question" => "恐龙是什么动物？",
                "answer" => "爬行动物"
            ],
            [
                "category" => "生活",
                "question" => "被称为“取之不尽,用之不竭,清洁无污染”的能源是？",
                "answer" => "太阳能"
            ],
            [
                "category" => "生活",
                "question" => "制作太阳能热水器用什么颜色的容器吸收太阳能多？",
                "answer" => "黑色"
            ],
            [
                "category" => "生活",
                "question" => "晚上睡觉时发现有昆虫钻进耳朵里，以下做法不妥的是？",
                "answer" => "拿火柴把它掏出来"
            ],
            [
                "category" => "生活",
                "question" => "2008年奥运会将在以下哪个城市举行？",
                "answer" => "北京"
            ],
            [
                "category" => "生活",
                "question" => "《掀起你的盖头来》是哪个民族的民歌？",
                "answer" => "维吾尔族"
            ],
            [
                "category" => "生活",
                "question" => "以下不属于马的动物？",
                "answer" => "海马"
            ],
            [
                "category" => "生活",
                "question" => "海马是一种美丽而奇特的进陆浅海小型鱼类。如何能快速的分辨海马的雌雄？",
                "answer" => "雄性海马腹部有育儿袋"
            ],
            [
                "category" => "生活",
                "question" => "“它有马形的头，蜻蜓的眼睛，跟虾一样的身子，还有一个像象鼻一样的尾巴，皇冠式的角棱。”这段话所描述的奇特动物叫什么名字？",
                "answer" => "海马"
            ],
            [
                "category" => "生活",
                "question" => "若想治理一片草原上的鼠患，以下方法比较妥当的是？",
                "answer" => "适量投放鼠类天敌"
            ],
            [
                "category" => "生活",
                "question" => "大雨过后，天空中出现美丽的彩虹，这是什么原因？",
                "answer" => "阳光的折射"
            ],
            [
                "category" => "生活",
                "question" => "天空上美丽的彩虹经常是在什么情况下出现的？",
                "answer" => "雨后"
            ],
            [
                "category" => "生活",
                "question" => "彩虹的最外层是什么颜色？",
                "answer" => "红色"
            ],
            [
                "category" => "生活",
                "question" => "“彩虹”是指雨后大气中的小水珠经日光照射发生折射和反射所形成的圆弧形彩带，常有两个彩弧。我们平时所说的彩虹是指其中颜色鲜艳的“虹”，也叫“正虹”；而颜色较淡的是“副虹”，又叫“霓”。除了色彩深度不同之外，“霓”和“虹”的主要区别是什么",
                "answer" => "霓的颜色排列与虹相反"
            ],
            [
                "category" => "生活",
                "question" => "吸血鬼的传说最可能起源于哪种动物？",
                "answer" => "蝙蝠"
            ],
            [
                "category" => "生活",
                "question" => "2008年北京奥运的口号是：“同一个世界，同一个梦想”。那么04年雅典奥运会的口号是什么？",
                "answer" => "欢迎回家"
            ],
            [
                "category" => "生活",
                "question" => "小蜜蜂被分配到一个工蜂的岗位，以下不是他工作范围的是？",
                "answer" => "交配"
            ],
            [
                "category" => "生活",
                "question" => "小华要冻些冰块来调酒，为了赶时间，她应该怎么做？",
                "answer" => "就用冷开水"
            ],
            [
                "category" => "生活",
                "question" => "藏历新年,藏族的人们见面时都要说“扎西德勒”是什么意思？",
                "answer" => "吉祥如意"
            ],
            [
                "category" => "生活",
                "question" => "“自由女神像”是哪個国家送给美国的礼物？",
                "answer" => "法国"
            ],
            [
                "category" => "生活",
                "question" => "目前世界上体形最大的鸟是什么？",
                "answer" => "鸵鸟"
            ],
            [
                "category" => "生活",
                "question" => "以下哪个是两栖动物？",
                "answer" => "青蛙"
            ],
            [
                "category" => "生活",
                "question" => "以下几个国家当中，最可能是玉米的原产地的国家是？",
                "answer" => "墨西哥"
            ],
            [
                "category" => "生活",
                "question" => "世界上生产玉米最多的国家是哪个？",
                "answer" => "墨西哥"
            ],
            [
                "category" => "生活",
                "question" => "2010年北京奥运会的主题是什么？",
                "answer" => "同一个世界，同一个梦想"
            ],
            [
                "category" => "生活",
                "question" => "有鬃毛的狮子是雌性还是雄性？",
                "answer" => "雄狮子"
            ],
            [
                "category" => "生活",
                "question" => "被称为“中国鸽子树”的珍惜植物是？",
                "answer" => "珙桐"
            ],
            [
                "category" => "生活",
                "question" => "飞机票头等舱的票价可能是普通舱票价的多少？",
                "answer" => "150% 或则 1.5倍"
            ],
            [
                "category" => "生活",
                "question" => "猫的眼睛在白天是什么样子的？",
                "answer" => "线形"
            ],
            [
                "category" => "生活",
                "question" => "邮票的周围为什么有许多齿空？",
                "answer" => "方便撕开邮票"
            ],
            [
                "category" => "生活",
                "question" => "如果有人告诉你他们国家有现存世界上最大的宫殿，那么你可以断定他是哪国人？",
                "answer" => "中国"
            ],
            [
                "category" => "生活",
                "question" => "每年的4月1日是“愚人节”,这一节日习俗最早起源于？",
                "answer" => "西方国家"
            ],
            [
                "category" => "生活",
                "question" => "世界贸易组织成立于1995年,总部设在日内瓦,它的英文简写是？",
                "answer" => "WTO"
            ],
            [
                "category" => "生活",
                "question" => "小鸡是由鸡蛋的什么发育而成的？",
                "answer" => "蛋黄"
            ],
            [
                "category" => "生活",
                "question" => "下列哪种液体的比重(密度)最大？",
                "answer" => "水银"
            ],
            [
                "category" => "生活",
                "question" => "马戏团的驯兽员在迅雷小熊的过程中，正确的做法是？",
                "answer" => "给听话的小熊喂食物"
            ],
            [
                "category" => "生活",
                "question" => "不会游泳的人在“死海”里会？",
                "answer" => "浮在水面"
            ],
            [
                "category" => "生活",
                "question" => "邮票是人们邮寄信件所必用的物品，在邮票背后为什么会有一层胶呢？",
                "answer" => "无需胶水即可沾水粘贴"
            ],
            [
                "category" => "生活",
                "question" => "“股市有风险,入市需谨慎”,股市里行情普遍看淡,延续时间相对教长的大跌市被称为？",
                "answer" => "熊市"
            ],
            [
                "category" => "生活",
                "question" => "不同的水果有不同的挑选原则，不过它们还是有共同的原则可供参考。同样大小的某种水果。怎么样的会比较好吃？",
                "answer" => "手感相对较重的"
            ],
            [
                "category" => "生活",
                "question" => "蒲公英传播种子的方式是什么？",
                "answer" => "依靠风力"
            ],
            [
                "category" => "生活",
                "question" => "世界上最低的温度是多少？",
                "answer" => "-273.5摄氏度"
            ],
            [
                "category" => "生活",
                "question" => "下列人类活动会对环境造成损害的是？",
                "answer" => "使用一次性卫生餐具"
            ],
            [
                "category" => "生活",
                "question" => "最耐日晒的织品是以下哪种？",
                "answer" => "腈纶"
            ],
            [
                "category" => "生活",
                "question" => "假如你被一只蚊子叮了一口，那么我们可以判断叮你的蚊子是？",
                "answer" => "雌蚊子"
            ],
            [
                "category" => "生活",
                "question" => "一般正常而言，成年人大概有多少颗牙？",
                "answer" => "32颗"
            ],
            [
                "category" => "生活",
                "question" => "以下行为存在安全隐患、容易引起事故的是？",
                "answer" => "在电线附近放风筝"
            ],
            [
                "category" => "生活",
                "question" => "端午节的传统食物是什么？",
                "answer" => "粽子"
            ],
            [
                "category" => "生活",
                "question" => "如果今天你发现许多人都在吃“粽子”，那么今天可能会是？",
                "answer" => "端午节"
            ],
            [
                "category" => "生活",
                "question" => "我们通常说的“下半旗”是把旗子下降到哪个位置？",
                "answer" => "距离杆顶的1/3处"
            ],
            [
                "category" => "生活",
                "question" => "以下体育比赛中，赛场上人数最多的是下列哪种运动？",
                "answer" => "足球"
            ],
            [
                "category" => "生活",
                "question" => "人体最大的细胞是？",
                "answer" => "卵细胞"
            ],
            [
                "category" => "生活",
                "question" => "以下废弃物品对环境的污染最严重的是什么？",
                "answer" => "一颗5号电池"
            ],
            [
                "category" => "生活",
                "question" => "现在是寒冷的冬天,向一厚一薄两个玻璃杯里倒入开水,容易爆裂的杯子是？",
                "answer" => "厚的杯子"
            ],
            [
                "category" => "生活",
                "question" => "蜻蜓点水实际上是在？",
                "answer" => "产卵"
            ],
            [
                "category" => "生活",
                "question" => "下列哪一组是容易导电的物体？",
                "answer" => "碳棒、大地"
            ],
            [
                "category" => "生活",
                "question" => "以下哪一种运动，对小乌龟来说最具有挑战性？",
                "answer" => "仰卧起坐"
            ],
            [
                "category" => "生活",
                "question" => "意大利的比萨斜塔是比萨大教堂的什么建筑？",
                "answer" => "钟楼"
            ],
            [
                "category" => "生活",
                "question" => "互联网(Internet)最初是基于何种应用目标被开发出来的？",
                "answer" => "军事应用"
            ],
            [
                "category" => "生活",
                "question" => "“燕窝”是中国传统名贵食品之一，它主要是金丝燕用什么东西所筑的巢？",
                "answer" => "唾液"
            ],
            [
                "category" => "生活",
                "question" => "很多少数民族都有自己喜爱的颜色,生长在大草原的蒙古族喜爱什么颜色呢？",
                "answer" => "白色"
            ],
            [
                "category" => "生活",
                "question" => "蜜蜂中的蜂王是？",
                "answer" => "雌蜂"
            ],
            [
                "category" => "生活",
                "question" => "世界上最大的动物是哪一种？",
                "answer" => "鲸鱼"
            ],
            [
                "category" => "生活",
                "question" => "动物细胞、植物细胞内都含有哪种糖类物质？",
                "answer" => "核糖"
            ],
            [
                "category" => "生活",
                "question" => "国际奥林匹克集邮联合在哪一国家成立？",
                "answer" => "瑞士"
            ],
            [
                "category" => "生活",
                "question" => "运动健将刘翔是哪一项运动的运动员？",
                "answer" => "跨栏赛跑"
            ],
            [
                "category" => "生活",
                "question" => "如果你是一名篮球运动员，当你犯规5次的时候将？",
                "answer" => "被罚下场"
            ],
            [
                "category" => "生活",
                "question" => "民间一般用什么形容一个会带来不祥的人？",
                "answer" => "扫把星"
            ],
            [
                "category" => "生活",
                "question" => "以下哪种水果收获后稍微放置一段时间它会变得更好吃？",
                "answer" => "香蕉"
            ],
            [
                "category" => "生活",
                "question" => "一般来说，人们经常接触的计算机组件中，辐射最强的是？",
                "answer" => "键盘"
            ],
            [
                "category" => "生活",
                "question" => "中央处理器是电脑最重要的组成部件，它的英文缩写是？",
                "answer" => "CPU"
            ],
            [
                "category" => "生活",
                "question" => "按照大多数国家和地区的风俗，结婚戒指一般都应该戴在哪个手指上？",
                "answer" => "左手无名指"
            ],
            [
                "category" => "生活",
                "question" => "鱼睡觉的时候是什么样子？",
                "answer" => "睁着眼睛睡"
            ],
            [
                "category" => "生活",
                "question" => "蚯蚓的食物是什么？",
                "answer" => "泥土"
            ],
            [
                "category" => "生活",
                "question" => "寿命最长的鸟是什么？",
                "answer" => "鹦鹉"
            ],
            [
                "category" => "生活",
                "question" => "飞行速度最快的鸟是什么？",
                "answer" => "雨燕"
            ],
            [
                "category" => "生活",
                "question" => "羽毛最多的鸟是什么？",
                "answer" => "天鹅"
            ],
            [
                "category" => "生活",
                "question" => "嘴峰最长的鸟是什么？",
                "answer" => "巨嘴鸟"
            ],
            [
                "category" => "生活",
                "question" => "以下物理常识中，表述正确的是？",
                "answer" => "瓦特发明了蒸汽机"
            ],
            [
                "category" => "生活",
                "question" => "气温、水、植物等对岩石的破坏现象叫做？",
                "answer" => "风化"
            ],
            [
                "category" => "生活",
                "question" => "菜汤上浮着一层油会使菜汤？",
                "answer" => "凉得更慢"
            ],
            [
                "category" => "生活",
                "question" => "人的基本味觉有四种，这就是甜、咸、酸、苦。舌表面不同部位对这种基本味觉刺激的敏感程度不一样，舌尖部对甜味最敏感，舌两则前部对咸味最敏感，舌两侧中部对酸味最敏感，那你知道什么部位对苦味最敏感吗",
                "answer" => "舌根"
            ],
            [
                "category" => "生活",
                "question" => "“酸、甜、咸、苦、辣”五味中，舌根对什么味道最敏感？",
                "answer" => "苦"
            ],
            [
                "category" => "生活",
                "question" => "“酸、甜、咸、苦”四味中，舌尖对什么味道最敏感？",
                "answer" => "甜"
            ],
            [
                "category" => "生活",
                "question" => "下面哪一组的动物都属于两栖动物？",
                "answer" => "蟾蜍,青蛙"
            ],
            [
                "category" => "生活",
                "question" => "在杠杆上起到支撑作用的哪一点叫做？",
                "answer" => "支点"
            ],
            [
                "category" => "生活",
                "question" => "有两个外观大小均一样的鸡蛋，其中一个是生鸡蛋，另一个是熟鸡蛋。在不敲开蛋壳的前提下，如何用便捷的方法找出熟鸡蛋？",
                "answer" => "熟鸡蛋旋转速度很快"
            ],
            [
                "category" => "生活",
                "question" => "一个成熟的苹果,最甜的地方是在哪个部分？",
                "answer" => "顶部"
            ],
            [
                "category" => "生活",
                "question" => "下列哪种物态变化过程中，会释放热量？",
                "answer" => "冬天玻璃窗上出现霜花"
            ],
            [
                "category" => "生活",
                "question" => "以下属于我国珍惜保护动物的是？",
                "answer" => "藏羚羊"
            ],
            [
                "category" => "生活",
                "question" => "生物体进行生命活动的能量，究其根源都来自？",
                "answer" => "太阳光能"
            ],
            [
                "category" => "生活",
                "question" => "在树上割掉一圈树皮，过一段日子，切口上部的树皮形成了瘤状，这说明了什么？",
                "answer" => "养料通不过去积存在切口上部"
            ],
            [
                "category" => "生活",
                "question" => "受理起诉虐待案件的是什么部门？",
                "answer" => "人民法院"
            ],
            [
                "category" => "生活",
                "question" => "下列哪一项不是火山爆发所产生的后果？",
                "answer" => "使气候温暖"
            ],
            [
                "category" => "生活",
                "question" => "出纳填支票时将收款人名称写错，则会怎么样？",
                "answer" => "这张支票作废"
            ],
            [
                "category" => "生活",
                "question" => "北极最大的肉食哺乳动物是什么？",
                "answer" => "北极熊"
            ],
            [
                "category" => "生活",
                "question" => "怒熊：宝宝你知道北极最大的肉食哺乳动物是什么吗？",
                "answer" => "它可是我们的同类：北极熊"
            ],
            [
                "category" => "生活",
                "question" => "下列环境中的生物，属于“种群”概念的是？",
                "answer" => "一个蜂巢里的蜂"
            ],
            [
                "category" => "生活",
                "question" => "人们平时所说的“煤气中毒”是因为哪种有害气体吸入过多而引起的？",
                "answer" => "一氧化碳"
            ],
            [
                "category" => "生活",
                "question" => "在一个不通风的房间内使用炭来取暖，容易导致人体中毒昏阙，还有可能死亡，请问这是什么气体导致人体中毒的？",
                "answer" => "一氧化碳"
            ],
            [
                "category" => "生活",
                "question" => "中国菜有八大菜系的说法，包含川、鲁、粤、苏、浙、闽、湘、徽，请问麻婆豆腐是哪一菜系的名菜？",
                "answer" => "川"
            ],
            [
                "category" => "生活",
                "question" => "下列哪个菜系不属于八大菜系？",
                "answer" => "赣菜"
            ],
            [
                "category" => "生活",
                "question" => "神秘的大海有一种具有超强燃烧力的物质——“可燃冰”，你知道他的形状是怎么样的吗？",
                "answer" => "白色固体"
            ],
            [
                "category" => "生活",
                "question" => "一切物体在没有受到外力所用的时候，总保持匀速直线运动状态或静止状态，这是牛顿第几定律？",
                "answer" => "第一定律"
            ],
            [
                "category" => "生活",
                "question" => "海洋是个巨大的生态家园，各种生物种类繁多，数量庞大，其中种类最多的生物是？",
                "answer" => "浮游生物"
            ],
            [
                "category" => "生活",
                "question" => "“东边日出西边雨”反映的是一种自然天气现象，请问这种自然天气现象最常见的是在什么季节？",
                "answer" => "夏"
            ],
            [
                "category" => "生活",
                "question" => "风速越大，风力就会怎么样？",
                "answer" => "越强"
            ],
            [
                "category" => "生活",
                "question" => "当发现有人触电后，抢救他的正确方法是？",
                "answer" => "立即切断电源"
            ],
            [
                "category" => "生活",
                "question" => "“光年”是什么单位？",
                "answer" => "长度单位"
            ],
            [
                "category" => "生活",
                "question" => "下列几个句子中，“光年”一词使用正确的是？",
                "answer" => "两颗恒星距离两百光年"
            ],
            [
                "category" => "生活",
                "question" => "什么时候适合用“七月流火”来形容？",
                "answer" => "夏去秋来"
            ],
            [
                "category" => "生活",
                "question" => "“七月流火”是指什么样的天气？",
                "answer" => "转凉了"
            ],
            [
                "category" => "生活",
                "question" => "我们常把那些一知半解，却喜欢在人前卖弄的人叫什么？",
                "answer" => "半瓶醋"
            ],
            [
                "category" => "生活",
                "question" => "一般认为“始祖鸟”是鸟类的祖先，它在生物学上与哪种动物的关系很近？",
                "answer" => "恐龙"
            ],
            [
                "category" => "生活",
                "question" => "我国在何时将农历正月初一正式确定为春节的？",
                "answer" => "辛亥革命后"
            ],
            [
                "category" => "生活",
                "question" => "以下哪个是世界上最大的宫殿？",
                "answer" => "故宫"
            ],
            [
                "category" => "生活",
                "question" => "以下物体中，质量可能是60千克的物体是哪一个？",
                "answer" => "一个大学生"
            ],
            [
                "category" => "生活",
                "question" => "当支点到力点的距离小于支点到重点的距离时,杠杆是省力还是费力？",
                "answer" => "费力"
            ],
            [
                "category" => "生活",
                "question" => "花的颜色共有4000多种，其中哪种颜色最多？",
                "answer" => "白色"
            ],
            [
                "category" => "生活",
                "question" => "雪莲花的颜色是？",
                "answer" => "深红色"
            ],
            [
                "category" => "生活",
                "question" => "我国宪法的监督权属于什么机构？",
                "answer" => "全国人大常委会"
            ],
            [
                "category" => "生活",
                "question" => "奥运会上的马拉松比赛的起源与什么有关？",
                "answer" => "战争"
            ],
            [
                "category" => "生活",
                "question" => "一只杜鹃鸟要下蛋了，此时它会怎么做？",
                "answer" => "将蛋下到其他鸟的鸟巢里"
            ],
            [
                "category" => "生活",
                "question" => "丝绸摩擦过的玻璃棒带哪种电？",
                "answer" => "正电"
            ],
            [
                "category" => "生活",
                "question" => "现在你要熄灭一盏酒精灯，你会怎么做？",
                "answer" => "盖两次灯帽"
            ],
            [
                "category" => "生活",
                "question" => "用0.5毫米厚的纸杯装满凉水，固定好纸杯的位置，并用酒精灯在下面加热，应该会出现以下哪种情况？",
                "answer" => "水被烧开"
            ],
            [
                "category" => "生活",
                "question" => "下面哪一项对电磁铁的磁力大小没有影响？",
                "answer" => "通电时间"
            ],
            [
                "category" => "生活",
                "question" => "菜刀生锈后，以下哪种除锈方法最好？",
                "answer" => "用切开的葱头擦拭"
            ],
            [
                "category" => "生活",
                "question" => "化学变化是指有新物质产生的变化,以下各种现象里,属于化学变化的是？",
                "answer" => "菜刀生锈"
            ],
            [
                "category" => "生活",
                "question" => "光经过透明物体，进入另一透明物体时，传播方向会发生偏折，这种现象叫做？",
                "answer" => "折射"
            ],
            [
                "category" => "生活",
                "question" => "法国干邑白兰地酒的“X”和“O”标志表示什么意思？",
                "answer" => "贮藏期"
            ],
            [
                "category" => "生活",
                "question" => "早在300多年前人类发明了热气球，可以载着人升上天空，请问热气球是哪个国家人发明的？",
                "answer" => "法国"
            ],
            [
                "category" => "生活",
                "question" => "最早的热气球是用来做什么的？",
                "answer" => "空中监视"
            ],
            [
                "category" => "生活",
                "question" => "马路两旁的树木，向着路中央的那部分的枝叶会比较茂盛，这是因为路中央？",
                "answer" => "二氧化碳"
            ],
            [
                "category" => "生活",
                "question" => "怒熊：我们熊族可是一个大家庭，你知道熊族中最小的熊类叫什么名字吗？",
                "answer" => "马来熊"
            ],
            [
                "category" => "生活",
                "question" => "格林尼治天文台在哪个国家？",
                "answer" => "英国"
            ],
            [
                "category" => "生活",
                "question" => "中国古代很早就有关于“日食”现象的记载，日食产生的原理是？",
                "answer" => "月亮挡在地球与太阳之间"
            ],
            [
                "category" => "生活",
                "question" => "正在运动的物体，如果受到的所有外力突然消失，它将怎样运动？",
                "answer" => "匀速直线运动"
            ],
            [
                "category" => "生活",
                "question" => "从省力角度考虑，定滑轮和动滑轮的特点是？",
                "answer" => "动滑轮省力"
            ],
            [
                "category" => "生活",
                "question" => "蚯蚓适合生活在什么样的环境里？",
                "answer" => "阴暗潮湿"
            ],
            [
                "category" => "生活",
                "question" => "蚯蚓的血液什么颜色的？",
                "answer" => "红色"
            ],
            [
                "category" => "生活",
                "question" => "绝大多数动物的血液和人类的血液一样，是鲜红色的。但是也有一些动物的血液并不是鲜红色的，蚯蚓的血是玫瑰红色，蜘蛛的血是青绿色的，海蚌、蜗牛的血是淡蓝色的，请问，你知道田螺的血是什么颜色的吗？",
                "answer" => "白色"
            ],
            [
                "category" => "生活",
                "question" => "远古时代人们用“钻木取火”的方法获得火种，这是利用了什么原理？",
                "answer" => "摩擦生热"
            ],
            [
                "category" => "生活",
                "question" => "光学物理上把能够自身发光的物体叫做？",
                "answer" => "光源"
            ],
            [
                "category" => "生活",
                "question" => "人们常用“飞蛾扑火”来比喻自讨苦吃、自取灭亡的行为。为什么飞蛾会前扑后继的飞向火光或灯光呢",
                "answer" => "本能的为了判定方向而与光源保持固定角度"
            ],
            [
                "category" => "生活",
                "question" => "从早晨到傍晚，阳光下一棵数的影子变化情况应该是？",
                "answer" => "先变短，后变长"
            ],
            [
                "category" => "生活",
                "question" => "使用同一电源，将两只灯泡先串联后并联，哪种情况灯泡更亮？",
                "answer" => "并联"
            ],
            [
                "category" => "生活",
                "question" => "目前在中国大陆，汽车都是靠右行车“驾驶座在左的，简称“左驾右行”，以下哪个地区的汽车并非靠右行驶的？",
                "answer" => "英国"
            ],
            [
                "category" => "生活",
                "question" => "西藏布达拉宫反映了中国建筑工艺的高超，这座宫殿在取材上属于",
                "answer" => "石木结构"
            ],
            [
                "category" => "生活",
                "question" => "“交杯酒”一般出现在哪种场合",
                "answer" => "结婚喜宴"
            ],
            [
                "category" => "生活",
                "question" => "一般所说的中国四大名酒，是指1952年全国第一届评酒会评出的茅台、汾酒、泸州老窖特曲酒和西凤酒。中国著名的酒都杏花村，是以出产上述哪种名酒而闻名遐迩呢？",
                "answer" => "汾酒"
            ],
            [
                "category" => "生活",
                "question" => "中华名酒“汾酒”有着1500多年的历史，它的原产地是",
                "answer" => "山西杏花村"
            ],
            [
                "category" => "生活",
                "question" => "热传递的方式有三种,传导,对流和？",
                "answer" => "辐射"
            ],
            [
                "category" => "生活",
                "question" => "以下现象属于“水蒸气液化”的是哪一种？",
                "answer" => "清晨草叶上出现露珠"
            ],
            [
                "category" => "生活",
                "question" => "植物的茎起着对植物的运输作用，请问茎能为植物运输什么？",
                "answer" => "水分和养分"
            ],
            [
                "category" => "生活",
                "question" => "一个打开的啤酒瓶里装了半瓶水,以下哪种方法可以加快水的蒸发速度？",
                "answer" => "将水倒入一个盘子里"
            ],
            [
                "category" => "生活",
                "question" => "在中央设置的官职中，管理监察的是",
                "answer" => "御史大夫"
            ],
            [
                "category" => "生活",
                "question" => "哈达是藏族人民作为礼仪用的丝织品，是社交活动中的必备品。哈达分白色和五彩两类，五彩哈达的颜色有蓝、白、黄、绿、红、，其中黄色代表蓝天，白色是白云，红色是空间护法神，黄色象征大地，你知道其中绿色代表什么吗？",
                "answer" => "江河水"
            ],
            [
                "category" => "生活",
                "question" => "隧道内一般都有明亮的钠灯，可防眼睛疲劳，这种钠灯的灯光是什么颜色的？",
                "answer" => "橘色"
            ],
            [
                "category" => "生活",
                "question" => "蚊子有一个习惯就是对弱光很喜欢，当你穿上了合适于位子的视觉的衣服后，就会吸引蚊子叮了，那你知道穿什么颜色的衣服的时更容易挨蚊子叮？",
                "answer" => "黑色"
            ],
            [
                "category" => "生活",
                "question" => "黑火药是中国古代四大发明之一，它的混合成分不包括？",
                "answer" => "甘油"
            ],
            [
                "category" => "生活",
                "question" => "以下生物不属于昆虫的是？",
                "answer" => "蛇"
            ],
            [
                "category" => "生活",
                "question" => "单门电冰箱的冰冻室多是在哪个部分？",
                "answer" => "箱体上部"
            ],
            [
                "category" => "生活",
                "question" => "一家有色金属加工厂不大可能生产以下什么产品？",
                "answer" => "半导体材料"
            ],
            [
                "category" => "生活",
                "question" => "火焰分为外焰、内焰、焰心三部分，其中温度最高的是？",
                "answer" => "外焰"
            ],
            [
                "category" => "生活",
                "question" => "叶的光合作用不仅为植物制造了养料，也为动物和人的生存提供了什么？",
                "answer" => "养料和氧气"
            ],
            [
                "category" => "生活",
                "question" => "大螃蟹：聪明的人类你知道我们螃蟹的生物分类是哪一种吗？",
                "answer" => "十足目"
            ],
            [
                "category" => "生活",
                "question" => "雷雨天里，人们会先看到闪电，后听到雷声，这是因为？",
                "answer" => "光速大于音速"
            ],
            [
                "category" => "生活",
                "question" => "“回声定位”声纳系统在军事侦查方面有重大作用，以下哪种动物不具备类似能力？",
                "answer" => "蚊子"
            ],
            [
                "category" => "生活",
                "question" => "水蒸气是气体状态的水，请问下列对水蒸气描述错误的是？",
                "answer" => "有味道"
            ],
            [
                "category" => "生活",
                "question" => "大纸箱里放有一个种着幼苗的盆子，在纸箱左侧开一小洞并保持照光，结果盆里的幼苗会？",
                "answer" => "朝小洞方向生长"
            ],
            [
                "category" => "生活",
                "question" => "竹子属于哪一类植物？",
                "answer" => "草本植物"
            ],
            [
                "category" => "生活",
                "question" => "寒冰巨人常说“冰是水的坚强”，在这句话中，水是因为冻结而变为冰，请问水变为冰后，体积如何变化？",
                "answer" => "体积变大"
            ],
            [
                "category" => "生活",
                "question" => "路透社位于哪个国家的通讯社？",
                "answer" => "英国"
            ],
            [
                "category" => "生活",
                "question" => "在野外求生时，应该避免饮用以下哪类水源？",
                "answer" => "饮用凹地积水"
            ],
            [
                "category" => "生活",
                "question" => "我国最早的博物馆是？",
                "answer" => "南通博物馆"
            ],
            [
                "category" => "生活",
                "question" => "蚊子发出的“嗡嗡”的声音是由于？",
                "answer" => "翅膀振动"
            ],
            [
                "category" => "生活",
                "question" => "下列动物中哪个是我国特有的珍稀哺乳动物？",
                "answer" => "大熊猫"
            ],
            [
                "category" => "生活",
                "question" => "以下哪里是大熊猫的产地？",
                "answer" => "甘肃"
            ],
            [
                "category" => "生活",
                "question" => "留意观察家养的鸡，会发现它们经常啄食地上的小石子，这是为什么？",
                "answer" => "吃石子可以助消化"
            ],
            [
                "category" => "生活",
                "question" => "我国自己研制的火箭，已经多次成功的把什么送上太空？",
                "answer" => "人造卫星"
            ],
            [
                "category" => "生活",
                "question" => "如果你现在拿着一杯水，要把这杯水以最快的速度让它蒸发，你会怎么做？",
                "answer" => "倒到面积大的容器里加热"
            ],
            [
                "category" => "生活",
                "question" => "“今年麦盖三层被，来年枕着馒头睡”这句话里包含着什么科学道理，下面说法错误的是？",
                "answer" => "雪就是肥料"
            ],
            [
                "category" => "生活",
                "question" => "闰年的2月有多少天？",
                "answer" => "29"
            ],
            [
                "category" => "生活",
                "question" => "植物水分散失是通过什么途径？",
                "answer" => "蒸腾作用"
            ],
            [
                "category" => "生活",
                "question" => "人们在动物园里看到的俗称“四不象”的动物是？",
                "answer" => "麋鹿"
            ],
            [
                "category" => "生活",
                "question" => "冬天下过雪后，在太阳的照射下，干净雪和脏的雪哪一种融化得快一些？",
                "answer" => "脏的雪"
            ],
            [
                "category" => "生活",
                "question" => "蝴蝶翅膀上的鳞份除了能组成用于示警和伪装的图案外还有什么作用？",
                "answer" => "防水"
            ],
            [
                "category" => "生活",
                "question" => "被誉为“三个一千年”，生而不死一千年，死而不倒一千年，倒而不朽一千年的树木是哪种？",
                "answer" => "胡杨林"
            ],
            [
                "category" => "生活",
                "question" => "“蒙太奇”是指？",
                "answer" => "电影的剪辑和组合"
            ],
            [
                "category" => "生活",
                "question" => "花朵雍容华贵、富丽堂皇，素有“国色天香”、“花中之王”美称，被誉为“竞夸天下双无绝，独立人间第一香”的是什么花？",
                "answer" => "牡丹"
            ],
            [
                "category" => "生活",
                "question" => "“佛跳墙”即“满堂香”，又名“福寿全”，是一道集山珍海味之大全的传统名菜;据说它“坛启荤香飘四邻，佛闻弃禅跳墙来”。你知道这道菜是我国那个城市的首席名菜吗？",
                "answer" => "福州"
            ],
            [
                "category" => "生活",
                "question" => "年轮并非树木独有，人类和许多动物也有年轮，只是表现的形式不同拔了。人的年轮在手，足，牙，头中的哪一个部位？",
                "answer" => "头"
            ],
            [
                "category" => "生活",
                "question" => "举重比赛中，重量为5千克的杠铃片是什么颜色",
                "answer" => "白色"
            ],
            [
                "category" => "生活",
                "question" => "举重比赛中，重量为10千克的杠铃片是什么颜色",
                "answer" => "绿色"
            ],
            [
                "category" => "生活",
                "question" => "举重比赛中，重量为15千克的杠铃片是什么颜色",
                "answer" => "黄色"
            ],
            [
                "category" => "生活",
                "question" => "举重比赛中，重量为20千克的杠铃片是什么颜色",
                "answer" => "蓝色"
            ],
            [
                "category" => "生活",
                "question" => "举重比赛中，重量为25千克的杠铃片是什么颜色",
                "answer" => "红色"
            ],
            [
                "category" => "生活",
                "question" => "在举重比赛中，你通常可以看到杠铃片都是五颜六色的，有红色、黄色、蓝色、绿色、白色，每个颜色代表着不同的重量。那你知道最重的杠铃片是什么颜色的吗",
                "answer" => "红色"
            ],
            [
                "category" => "生活",
                "question" => "举重前，运动员为什么要往手上搓白粉？",
                "answer" => "吸取手上的汗"
            ],
            [
                "category" => "生活",
                "question" => "举重比赛的级别是按什么来划分的？",
                "answer" => "按体重划分"
            ],
            [
                "category" => "生活",
                "question" => "澳门是中华人民共和国的两个特别行政区之一，请问澳门特别区的区旗是什么颜色？",
                "answer" => "绿色"
            ],
            [
                "category" => "生活",
                "question" => "马路上表示车辆行驶方向的导向箭头是什么颜色的？",
                "answer" => "白色"
            ],
            [
                "category" => "生活",
                "question" => "世界上第一条地铁建在哪座城市？",
                "answer" => "伦敦"
            ],
            [
                "category" => "生活",
                "question" => "遇到火灾时，我们应该拨打的火警电话号码是多少？",
                "answer" => "119"
            ],
            [
                "category" => "生活",
                "question" => "当出现道路交通事故时，拨打什么电话报警？",
                "answer" => "122"
            ],
            [
                "category" => "生活",
                "question" => "目前我国部分地区已实现了120，119，110，122四台合一。请问其中122是哪方面的报警号码？",
                "answer" => "交通事故"
            ],
            [
                "category" => "生活",
                "question" => "急救中心的电话号码是多少？",
                "answer" => "120"
            ],
            [
                "category" => "生活",
                "question" => "在平信、挂号信、特快专递邮件这几种邮件里，哪一种邮件丢失邮局不负赔偿责任？",
                "answer" => "平信"
            ],
            [
                "category" => "生活",
                "question" => "将同量白糖分别放到装有热水、温水、冰水的A、B、C三个杯子中，哪个杯子里的糖溶化速度最快？",
                "answer" => "A"
            ],
            [
                "category" => "生活",
                "question" => "我们可以看到的月亮最多占月亮表面积的多少(月球)？",
                "answer" => "59%"
            ],
            [
                "category" => "生活",
                "question" => "用下面哪种餐具烹饪，对人体最有益？",
                "answer" => "铁锅"
            ],
            [
                "category" => "生活",
                "question" => "吃饭时喝汤是一个良好的习惯，请问是在饭前喝汤和饭后喝汤那个更科学？",
                "answer" => "饭后"
            ],
            [
                "category" => "生活",
                "question" => "世界杯足球赛几年举行一次？",
                "answer" => "四年"
            ],
            [
                "category" => "生活",
                "question" => "遇见违法犯罪行为时，你可以拨打什么电话报警？",
                "answer" => "110"
            ],
            [
                "category" => "生活",
                "question" => "甲的儿媳与乙的母亲是妯娌，乙应该称呼甲为",
                "answer" => "祖父/祖母"
            ],
            [
                "category" => "生活",
                "question" => "以下亲属中，辈分比自己高的是",
                "answer" => "表弟的侄女的外婆"
            ],
            [
                "category" => "生活",
                "question" => "甲的嫂子是乙的姑姑，则以下两人属于“亲家”关系的是",
                "answer" => "甲的父亲与乙的祖母"
            ],
            [
                "category" => "生活",
                "question" => "冰冻后的牛奶与鲜牛奶相比，哪一个的营养成分更容易被人体吸收？",
                "answer" => "鲜牛奶"
            ],
            [
                "category" => "生活",
                "question" => "在我国“桃月”是指哪个月份？",
                "answer" => "三月"
            ],
            [
                "category" => "生活",
                "question" => "乞巧节指的是农历的哪一天？",
                "answer" => "七月初七"
            ],
            [
                "category" => "生活",
                "question" => "在奥林匹克旗帜的五种颜色中，蓝色代表哪个洲？",
                "answer" => "欧洲"
            ],
            [
                "category" => "生活",
                "question" => "在奥林匹克旗帜的五种中,绿色代表哪个洲？",
                "answer" => "大洋洲"
            ],
            [
                "category" => "生活",
                "question" => "在奥林匹克旗帜的五种颜色中，黑色代表哪个洲？",
                "answer" => "非洲"
            ],
            [
                "category" => "生活",
                "question" => "在奥林匹克旗帜的五种颜色中，黄色代表哪个洲？",
                "answer" => "亚洲"
            ],
            [
                "category" => "生活",
                "question" => "在奥林匹克旗帜的五种颜色中，红色代表哪个洲？",
                "answer" => "美洲"
            ],
            [
                "category" => "生活",
                "question" => "以下哪个京剧目不属于“三国戏”?",
                "answer" => "《宇宙峰》"
            ],
            [
                "category" => "生活",
                "question" => "二锅头酒的酒液清亮透明，香气芬芳，酒质醇厚，入口甘润、爽洌，酒力强劲，后劲绵长，回味悠长，因此备受广大消费者的认可。请问你知道二锅头酒师蒸馏时经什么方法留下来的酒？",
                "answer" => "除去最先出和最后出的酒"
            ],
            [
                "category" => "生活",
                "question" => "在柿饼上常常会有一层白霜，请问这种白霜是果肉里析出的什么糖？",
                "answer" => "葡萄糖"
            ],
            [
                "category" => "生活",
                "question" => "被人们誉为“黑色的金子”是指的什么？",
                "answer" => "石油"
            ],
            [
                "category" => "生活",
                "question" => "“玄英”是哪个季节的别称？",
                "answer" => "冬季"
            ],
            [
                "category" => "生活",
                "question" => "火把节是哪一天？",
                "answer" => "六月二十四日"
            ],
            [
                "category" => "生活",
                "question" => "马戏团里如果熊不听话，该做什么？",
                "answer" => "给熊喂吃的"
            ],
            [
                "category" => "生活",
                "question" => "甲与乙是连襟，则甲的女儿称乙的岳丈为",
                "answer" => "外公"
            ],
            [
                "category" => "生活",
                "question" => "以下与自己“辈分相同”的亲属是谁？",
                "answer" => "姨夫的弟媳的外甥"
            ],
            [
                "category" => "生活",
                "question" => "飞机猛然拉起，飞行员容易出现？",
                "answer" => "黑视"
            ],
            [
                "category" => "生活",
                "question" => "由于钙质流失，容易出现维生素D缺乏症，导致腰腿发软，骨质疏松，下列哪项不是补充维生素D？",
                "answer" => "多吃猕猴桃等水果"
            ],
            [
                "category" => "生活",
                "question" => "“藕”是莲的？",
                "answer" => "茎"
            ],
            [
                "category" => "生活",
                "question" => "以下不属于“五谷”的农作物是？",
                "answer" => "大蒜"
            ],
            [
                "category" => "生活",
                "question" => "以下不是古代“春节”习俗的是？",
                "answer" => "赏月亮"
            ],
            [
                "category" => "生活",
                "question" => "如果发生地震，你应该做些什么？",
                "answer" => "躲在床底下"
            ],
            [
                "category" => "生活",
                "question" => "“乐羊羊”是一只高大帅气、阳光自信的大羊，着色为奥林匹克五环中的黄色，象征主办城市“穗城”什么物体的颜色？",
                "answer" => "稻穗"
            ],
            [
                "category" => "生活",
                "question" => "古人常用松鹤延年图祝寿，鹤是生长在？",
                "answer" => "沼泽"
            ],
            [
                "category" => "生活",
                "question" => "在中国5月份的第二个星期日是什么节日？",
                "answer" => "母亲节"
            ],
            [
                "category" => "生活",
                "question" => "一个月中只有固定的某天才会发生日食，请问这一天是哪一天？",
                "answer" => "初一"
            ],
            [
                "category" => "生活",
                "question" => "与针灸无关的是？",
                "answer" => "顶针"
            ],
            [
                "category" => "生活",
                "question" => "茅台酒以什么原料制成？",
                "answer" => "高粱"
            ],
            [
                "category" => "生活",
                "question" => "被广大百姓推崇为中国“国酒”的是？",
                "answer" => "茅台"
            ],
            [
                "category" => "生活",
                "question" => "以下不是贝雕工艺材料的是？",
                "answer" => "龟甲"
            ],
            [
                "category" => "生活",
                "question" => "丝绸的生产原料是？",
                "answer" => "蚕丝"
            ],
            [
                "category" => "生活",
                "question" => "“杀青”是下列那种工艺的步骤？",
                "answer" => "制茶工艺的第一道工序"
            ],
            [
                "category" => "生活",
                "question" => "古代“重阳节”里有饮酒的习俗，所饮的酒是",
                "answer" => "菊花酒"
            ],
            [
                "category" => "生活",
                "question" => "中国四大名绣指的是哪四个？",
                "answer" => "苏绣、湘绣、蜀绣、粤绣"
            ],
            [
                "category" => "生活",
                "question" => "我国四大名绣除了江苏的苏绣，湖南的湘绣、四川的蜀绣，还有以下哪种？",
                "answer" => "广东的粤绣"
            ],
            [
                "category" => "生活",
                "question" => "以下没有对废电池环境管理立法的国家是？",
                "answer" => "中国"
            ],
            [
                "category" => "生活",
                "question" => "门神一个是尉迟恭另一个是？",
                "answer" => "秦琼"
            ],
            [
                "category" => "生活",
                "question" => "紫砂壶作为茶具和工艺品已有悠久历史，它的原产地是？",
                "answer" => "宜兴"
            ],
            [
                "category" => "生活",
                "question" => "中国哪个古迹被誉为“世界八大奇迹”之一？",
                "answer" => "兵马俑"
            ],
            [
                "category" => "生活",
                "question" => "蜡染是哪个民族特有的印染工艺？",
                "answer" => "苗族"
            ],
            [
                "category" => "生活",
                "question" => "以下最早在中国出现的酒是哪一类？",
                "answer" => "黄酒"
            ],
            [
                "category" => "生活",
                "question" => "“笔墨纸砚”被称为文房四宝，其中湖笔、徽墨、端砚、宣纸又称为文房四宝之上品，你知道端砚的产地是在哪里？",
                "answer" => "广东肇庆"
            ],
            [
                "category" => "生活",
                "question" => "因出产“文房四宝”中的纸、墨、砚而闻名，简称“皖”的是我国哪个省份？",
                "answer" => "安徽"
            ],
            [
                "category" => "生活",
                "question" => "我国古代酿酒的主要原料是？",
                "answer" => "粮食"
            ],
            [
                "category" => "生活",
                "question" => "酿酒工艺中所提到的“酒曲”是指什么？",
                "answer" => "用来发酵酒的原料"
            ],
            [
                "category" => "生活",
                "question" => "景泰蓝的表层用金丝和彩釉装饰，主要原料(胎)是什么？",
                "answer" => " 铜(紫铜)"
            ],
            [
                "category" => "生活",
                "question" => "一般情况下用什么材质的桶贮藏葡萄酒？",
                "answer" => "橡木"
            ],
            [
                "category" => "生活",
                "question" => "越窑瓷器有“秘色瓷”之称，这个“秘”指的是什么颜色？",
                "answer" => "青绿色"
            ],
            [
                "category" => "生活",
                "question" => "以下不属于中国古代民间艺术的是？",
                "answer" => "石膏雕塑"
            ],
            [
                "category" => "生活",
                "question" => "古代被称为“天南贡品”的是哪种工艺品？",
                "answer" => "椰雕"
            ],
            [
                "category" => "生活",
                "question" => "墨绣起源于唐朝的刺绣工艺,墨绣所用的材料是什么？",
                "answer" => "头发"
            ],
            [
                "category" => "生活",
                "question" => "翡翠是古代一种贵重的玉器材料，它在材质上属于什么？",
                "answer" => "矿物"
            ],
            [
                "category" => "生活",
                "question" => "蝙蝠依靠什么辨别方向和觅食？",
                "answer" => "超声波"
            ],
            [
                "category" => "生活",
                "question" => "有意见要向当地的市政府反映应该拨打什么电话？",
                "answer" => "12345"
            ],
            [
                "category" => "生活",
                "question" => "电脑中的图形核心处理器的英文简写是什么？",
                "answer" => "GPU"
            ],
            [
                "category" => "生活",
                "question" => "如果鸟“坐”在树枝上睡着了，会不会跌落下来？",
                "answer" => "不会"
            ],
            [
                "category" => "生活",
                "question" => "使用液化石油气应该？",
                "answer" => "先点火后给气"
            ],
            [
                "category" => "生活",
                "question" => "除了必要的水和食物外，以下哪样东西对探险者在野外生存至关重要？",
                "answer" => "火种"
            ],
            [
                "category" => "生活",
                "question" => "中国对于婚龄有着不同的说法，结婚80年被称为钻石婚，结婚1年被称为纸婚，请问结婚50年被称为什么婚？",
                "answer" => "金婚"
            ],
            [
                "category" => "生活",
                "question" => "根据中国法律规定多大可以结婚？",
                "answer" => "男不得早于二十二周岁，女不得早于二十周岁"
            ],
            [
                "category" => "生活",
                "question" => "七夕起源于什么时候？",
                "answer" => "汉代"
            ],
            [
                "category" => "生活",
                "question" => "档案古籍类的物品起火时，最好选用以下哪种方式灭火？",
                "answer" => "二氧化碳灭火器"
            ],
            [
                "category" => "生活",
                "question" => "二十四节气是根据太阳在什么上的位置来划分的？",
                "answer" => "黄道"
            ],
            [
                "category" => "生活",
                "question" => "按照我国的交通规则，火车是靠哪侧行驶的？",
                "answer" => "左"
            ],
            [
                "category" => "生活",
                "question" => "雷电对人体能造成巨大的伤害，因此雨季的时候户外行人要特别注意安全。在雷雨天气时，一下那种行为是比较妥当的？",
                "answer" => "留在金属车身的机动车里面"
            ],
            [
                "category" => "生活",
                "question" => "当买到假冒伪劣产品时，消费者可以拨打什么电话申诉举报？",
                "answer" => "12315"
            ],
            [
                "category" => "生活",
                "question" => "中国四大节日端午、春节、中秋还有什么？",
                "answer" => "清明节"
            ],
            [
                "category" => "生活",
                "question" => "香港回归祖国是哪一年？？",
                "answer" => "1997年7月1日0時0分"
            ],
            [
                "category" => "生活",
                "question" => "2007年是香港回归祖国多少周年？？",
                "answer" => "10周年"
            ],
            [
                "category" => "生活",
                "question" => "现在的美国国旗星条旗上一共有多少颗星？",
                "answer" => "50颗"
            ],
            [
                "category" => "生活",
                "question" => "美国国旗星条旗最初制定时旗上有多少颗星？",
                "answer" => "13颗"
            ],
            [
                "category" => "生活",
                "question" => "每个地区都有自己的邮政编码，那国内邮政编码查询电话是多少呢？",
                "answer" => "184"
            ],
            [
                "category" => "生活",
                "question" => "醋放久了会生白，为了防止其生白，最好在醋内加一些黄酒后再掺入少许什么东西？",
                "answer" => "盐"
            ],
            [
                "category" => "生活",
                "question" => "花雕酒是中国黄酒中的奇葩，它选用上好糯米、优质麦曲，辅以江浙明净澄澈的湖水，用古法酿制，再贮以时日，产生出独特的风味和丰富的营养。花雕酒在游戏中的名字叫什么？",
                "answer" => "女儿红"
            ],
            [
                "category" => "生活",
                "question" => "蜂蜜用什么温度的水冲泡比较合适？",
                "answer" => "温水"
            ],
            [
                "category" => "生活",
                "question" => "春联起源于什么？",
                "answer" => "桃符"
            ],
            [
                "category" => "生活",
                "question" => "寒食节是为了纪念谁？",
                "answer" => "介子推"
            ],
            [
                "category" => "生活",
                "question" => "与清明节相关的，古代一个非常有名的节日，但现在已经失传，这个节日是什么？",
                "answer" => "寒食节"
            ],
            [
                "category" => "生活",
                "question" => "盂兰盆节又被称作什么？",
                "answer" => "中元节"
            ],
            [
                "category" => "生活",
                "question" => "以下哪类物品起火时，可使用水来扑救？",
                "answer" => "木头或布类"
            ],
            [
                "category" => "生活",
                "question" => "用以下哪个信息作为“密码”安全性最高？",
                "answer" => "若干数字加字母"
            ],
            [
                "category" => "生活",
                "question" => "“除四害，讲卫生”，“四害”是指和什么？",
                "answer" => "老鼠、蚊子、苍蝇、蟑螂"
            ],
            [
                "category" => "生活",
                "question" => "人脑中控制人平衡力的是？",
                "answer" => "小脑"
            ],
            [
                "category" => "生活",
                "question" => "猫用什么方式洗脸？",
                "answer" => "用前脚蘸口水擦"
            ],
            [
                "category" => "生活",
                "question" => "我国江南民间三月三有吃什么的习俗？",
                "answer" => "荠菜煮鸡蛋"
            ],
            [
                "category" => "生活",
                "question" => "以下三种水果，若轻摇时均发出声响，哪种是适宜食用的？",
                "answer" => "榴莲"
            ],
            [
                "category" => "生活",
                "question" => "世界气象组织决定：从2000年1月1日起，西北太平洋和南海的热带气旋采用具有亚洲风格的名字命名，事先制定一个命名表，然后按顺序年复一年地循环重复使用。请判断以下哪个台风的名字是中国提供的呢？",
                "answer" => "悟空"
            ],
            [
                "category" => "生活",
                "question" => "高温天气下，以下哪种行为容易引起中暑？",
                "answer" => "参加足球比赛"
            ],
            [
                "category" => "生活",
                "question" => "以下哪种容器装食物放进微波炉加热最危险？",
                "answer" => "不锈钢容器"
            ],
            [
                "category" => "生活",
                "question" => "从航天飞机里看太阳是什么颜色的？",
                "answer" => "白色"
            ],
            [
                "category" => "生活",
                "question" => "每年的农历8月16日到18日期间，我国的钱塘江就会发生大潮，这个时候，地球、月亮、太阳处在同一样直线上，请问哪个星球处在该直线的中间位置？",
                "answer" => "月球"
            ],
            [
                "category" => "生活",
                "question" => "钱塘江潮是世界一大自然奇观，观潮风俗自汉唐就已盛行。那么你知道去钱塘江观潮的最佳时间是什么时候吗？",
                "answer" => "9月(农历8月16日到18日)"
            ],
            [
                "category" => "生活",
                "question" => "“大鲵”是我国二级保护动物，它是由于何种原因又被称为娃娃鱼？",
                "answer" => "叫声像婴儿哭"
            ],
            [
                "category" => "生活",
                "question" => "若汽车轮胎(机动车轮胎)陷在泥泞中，最简便的处理方法是？",
                "answer" => "拿树枝或碎石垫在轮胎下"
            ],
            [
                "category" => "生活",
                "question" => "“每届中秋，世人之巧者，用黄土抟成蟾兔之像以出售。”古人中秋时会制作什么来祭月？",
                "answer" => "兔儿爷"
            ],
            [
                "category" => "生活",
                "question" => "人参果又名什么？",
                "answer" => "草还丹"
            ],
            [
                "category" => "生活",
                "question" => "我国55个少数民族中，人口最多的是什么族？",
                "answer" => "壮族"
            ],
            [
                "category" => "生活",
                "question" => "人体含水量百分比最高的器官是？",
                "answer" => "眼球"
            ],
            [
                "category" => "生活",
                "question" => "雷雨天的时候，进行以下哪种行为比较妥当？",
                "answer" => "拔掉电源插头"
            ],
            [
                "category" => "生活",
                "question" => "《国际歌》是由谁填的词？",
                "answer" => "鲍狄埃"
            ],
            [
                "category" => "生活",
                "question" => "《国际歌》是由谁谱的曲？",
                "answer" => "狄盖特"
            ],
            [
                "category" => "生活",
                "question" => "为更好的保护鸟类，维护自然生态平衡，我国每年各省市都要开展“爱鸟周”宣传活动。请问我国各地的爱鸟周大多定在哪个月份？",
                "answer" => "4月"
            ],
            [
                "category" => "生活",
                "question" => "当你乘坐火车时，车站工作人员都要在乘客持有的车票上剪一小口，那么你知道剪口的意思是什么吗？",
                "answer" => "强制保险"
            ],
            [
                "category" => "生活",
                "question" => "帽子尺寸的大小是按照帽檐的长度还是帽口的周长来确定的？",
                "answer" => "帽口的周长"
            ],
            [
                "category" => "生活",
                "question" => "“四驱车”的发动机动力传至四个轮胎，所以四轮都可发力。它的这种设计相对于普通两轮驱动的车辆而言，最大的优势是什么？",
                "answer" => "越野性能好"
            ],
            [
                "category" => "生活",
                "question" => "自古以来，老天爷一直是高兴下雪就下雪，不高兴就不下；但近代人类凭着智慧利用科学手段改变了这一境况，实现了人工降雪。人们是是对云层进行什么样的人为干预而促使降雪成功呢？",
                "answer" => "把凝结核散布到云层中"
            ],
            [
                "category" => "生活",
                "question" => "足够大的地转偏向力，是形成台风的重要条件之一。北半球的台风按逆时针方向旋转，南半球的台风按顺时针方向旋转，请问赤道地区的台风按什么方向旋转呢？",
                "answer" => "赤道地区无法形成台风"
            ],
            [
                "category" => "生活",
                "question" => "如果地震后你被困在一个小空间里，以下哪种求生方法是不合理的？",
                "answer" => "不停大声喊叫呼救"
            ],
            [
                "category" => "生活",
                "question" => "以下哪种蔬果发芽后是有毒而不能食用的？",
                "answer" => "马铃薯"
            ],
            [
                "category" => "生活",
                "question" => "“零存整取”是指将人民币存入银行储蓄机构，每月固定存额，集零成整，约定存款期限，到期一次支取本息的一种定期储蓄。请问“零存整取”的存期一般有哪三种？",
                "answer" => "1年、3年、5年"
            ],
            [
                "category" => "生活",
                "question" => "为保持果肉的新鲜口感，薄皮和软皮的水果应该经过怎样的简单处理再存放入冰箱呢？",
                "answer" => "喷洒少许水分后装入塑料袋"
            ],
            [
                "category" => "生活",
                "question" => "色彩的冷暖感觉是人们在长期生活实践中由于联想而形成的，在美术领域对颜色就有“暖色”和“冷色”，“中性色”的区分;请问以下哪种颜色属于暖色？",
                "answer" => "橙色"
            ],
            [
                "category" => "生活",
                "question" => "《马赛曲》是哪个国家的国歌？",
                "answer" => "法国"
            ],
            [
                "category" => "生活",
                "question" => "书画作品中花中四君子是指哪四种植物？",
                "answer" => "梅、兰、竹、菊"
            ],
            [
                "category" => "生活",
                "question" => "购买芒果时，应以“肉多籽小”为挑选原则。以下哪种外观的芒果符合此原则？",
                "answer" => "果型饱满的"
            ],
            [
                "category" => "生活",
                "question" => "用浸过酒精或油的棉线在玻璃瓶子的腰部绑几圈，点燃棉线，待棉线燃烧完把瓶子浸入凉水淬一下。根据热胀冷缩的原理，请猜猜结果会出现什么情况呢？",
                "answer" => "瓶子拦腰断开"
            ],
            [
                "category" => "生活",
                "question" => "“狼毫”的原料取自？",
                "answer" => "黄鼠狼尾"
            ],
            [
                "category" => "生活",
                "question" => "根据电脑的一些特殊反映，我们可以判断电脑中了病毒，当电脑出现以下哪一种情况时，我们可以初步判断电脑中了病毒？",
                "answer" => "反应缓慢，蓝屏甚至死机"
            ],
            [
                "category" => "生活",
                "question" => "假设你被洪水困在大树上，身边以下哪样物品是不应该食用的？",
                "answer" => "经过沉淀的一瓶污水"
            ],
            [
                "category" => "生活",
                "question" => "朋友送了一束鲜花，为了使鲜花在花瓶中能够保持更长时间，可以用下列哪一种方法？",
                "answer" => "将花枝的剪口用火烧焦"
            ],
            [
                "category" => "生活",
                "question" => "请问螃蟹不能和下列哪种食品一起食用？",
                "answer" => "生花生仁"
            ],
            [
                "category" => "生活",
                "question" => "很多动物有“拟态”的本领，它们可以把自己的体态、颜色改变成与其它动物、植物甚至是与环境相似，以更好的保护自己或者在其它方面受益。从生物学的角度看，部分动物之所以具有出色的伪装本领，是因为以下哪个原因？",
                "answer" => "适者生存"
            ],
            [
                "category" => "生活",
                "question" => "用微波炉煮荷包蛋时，要用牙签在蛋清、蛋黄上扎孔，这样做的主要目标是什么？",
                "answer" => "防止爆裂"
            ],
            [
                "category" => "生活",
                "question" => "台风季节来临时，应对马路边的大树进行怎样的保护措施？",
                "answer" => "修剪厚重的树枝"
            ],
            [
                "category" => "生活",
                "question" => "爱护动物已成为目前世界十大环保工作之一，中国从1997年开始纪念“世界动物日”。请问“世界动物日”是在哪一天呢？",
                "answer" => "10月4日"
            ],
            [
                "category" => "生活",
                "question" => "大气对流层中，空气的对流运动极为明显，会出现各种复杂的天气变化;而平流层则空气稀薄，较为稳定，极少出现天气变化的情况。请问民航飞机一般是在哪个“层”飞行呢？",
                "answer" => "对流层"
            ],
            [
                "category" => "生活",
                "question" => "一般情况下，艺术设计者之所以不选用液晶显示器，是由于它存在什么缺陷？",
                "answer" => "色彩效果达不到要求"
            ],
            [
                "category" => "生活",
                "question" => "人体所需要的重要元素有很多,钙就是其中一种不可缺少的，一天中哪个时候是最好的补钙时间？",
                "answer" => "晚上"
            ],
            [
                "category" => "生活",
                "question" => "你去美洲旅行，在荒野中看到了一个外出打猎的印地安猎人，他的耳朵及身体几乎完全贴在地上。如果此人是完全健康正常的，那么他很可能在做什么？",
                "answer" => "依靠听觉来辨别猎物的位置、种类、数量等相关信息"
            ],
            [
                "category" => "生活",
                "question" => "邮票的T代表什么意思？",
                "answer" => "特种邮票"
            ],
            [
                "category" => "生活",
                "question" => "按照风俗习惯戒指带在中指上表示？",
                "answer" => "正在恋爱中"
            ],
            [
                "category" => "生活",
                "question" => "食用后能使人情绪欢快，被称为“快乐水果”;营养丰富，鲜果肉质软滑、香甜可口--这是那种水果？",
                "answer" => "香蕉"
            ],
            [
                "category" => "生活",
                "question" => "火腿中有“南腿”之称的是？",
                "answer" => "金华火腿"
            ],
            [
                "category" => "生活",
                "question" => "鸵鸟受到惊吓或敌害时可能会怎么做？",
                "answer" => "会将头低垂到与地面平行，羽毛竖起"
            ],
            [
                "category" => "生活",
                "question" => "为什么在黑暗中猫的眼睛会闪闪发光？",
                "answer" => "猫眼能够反射极微弱的光"
            ],
            [
                "category" => "生活",
                "question" => "如何简便的区别一株植物是否含羞草？",
                "answer" => "碰一下它的叶子"
            ],
            [
                "category" => "生活",
                "question" => "陆地上最高的动物喜欢吃什么食物？",
                "answer" => "长颈鹿喜欢吃树叶"
            ],
            [
                "category" => "生活",
                "question" => "“骑楼”是在楼房前座跨入人行道悬空而建的,二楼向街心延伸，并使马路边房屋相互连接，形成自由步行的长廊。这是岭南民居的一个特色。那建设骑楼的目的是？",
                "answer" => "便于行人避雨和遮阳"
            ],
            [
                "category" => "生活",
                "question" => "互联网(Internet网)带edu的网站一般为？",
                "answer" => "大学或教学机构"
            ],
            [
                "category" => "生活",
                "question" => "3月12日植树节的为了记念谁？",
                "answer" => "孙中山"
            ],
            [
                "category" => "生活",
                "question" => "中山装是谁发明的(发明者是谁)？",
                "answer" => "孙中山"
            ],
            [
                "category" => "生活",
                "question" => "黑猩猩的社会阶层和人类非常相似，在它们的社会里面，不仅有权利之分，而且也会像人类一样定期举行首领选举的活动，请问什么性别的猩猩可以当首领？",
                "answer" => "雄性"
            ],
            [
                "category" => "生活",
                "question" => "世界上目前产量最大、应用最广泛的电池是以下哪种？",
                "answer" => "锌锰干电池"
            ],
            [
                "category" => "生活",
                "question" => "铁锅是什么铁制成的？",
                "answer" => "生铁"
            ],
            [
                "category" => "生活",
                "question" => "以下动物哪一种是属于哺乳类动物？",
                "answer" => "海豚"
            ],
            [
                "category" => "生活",
                "question" => "我们常吃的黄花菜是植物的什么部分？",
                "answer" => "花"
            ],
            [
                "category" => "生活",
                "question" => "外国人忌讳的数字？",
                "answer" => "13"
            ],
            [
                "category" => "生活",
                "question" => "男子自由体操的时间限制是？",
                "answer" => "50-70s"
            ],
            [
                "category" => "生活",
                "question" => "五角大楼是美国哪个机构的代称？",
                "answer" => "国防部"
            ],
            [
                "category" => "生活",
                "question" => "我们平时看到的太阳是一个光亮的圆盘，实际上这是太阳的哪个层？",
                "answer" => "光球层"
            ],
            [
                "category" => "生活",
                "question" => "太阳大气的最内层是？",
                "answer" => "光球层"
            ],
            [
                "category" => "生活",
                "question" => "铁一般含碳量小于0.2%的叫什么？",
                "answer" => "熟铁或纯铁"
            ],
            [
                "category" => "生活",
                "question" => "声音在什么介质中传播更快？",
                "answer" => "泥土中"
            ],
            [
                "category" => "生活",
                "question" => "俗称的长生果是指什么？",
                "answer" => "花生"
            ],
            [
                "category" => "生活",
                "question" => "在大小凉山地区，彝族少女成年时要举行一种神秘的仪式，你知道是什么仪式吗？",
                "answer" => "换裙子"
            ],
            [
                "category" => "生活",
                "question" => "空手道是一种发祥于琉球的武术，原称作“唐手”，含有“源自中国的武术”的意思。它源于中国古代的少林寺，发展到了现代已经成为了一项体育比赛项目。请问空手道比赛中，以下哪种行为是犯规的？",
                "answer" => "双方面、颈、胸、腹、背等部位接触"
            ],
            [
                "category" => "生活",
                "question" => "为什么麻雀经常在地上蹦来蹦去而燕子很少下地活动？",
                "answer" => "燕子在空中觅食"
            ],
            [
                "category" => "生活",
                "question" => "鲤鱼等多数淡水鱼没有以下哪种器官？",
                "answer" => "胃"
            ],
            [
                "category" => "生活",
                "question" => "被誉为“沙漠之舟”的是哪种动物？",
                "answer" => "骆驼"
            ],
            [
                "category" => "生活",
                "question" => "世界三大饮料一般是指什么？",
                "answer" => "茶、咖啡、可可"
            ],
            [
                "category" => "生活",
                "question" => "请问电视机和计算机的屏幕是由哪三种颜色组成的？",
                "answer" => "红、绿、蓝"
            ],
            [
                "category" => "生活",
                "question" => "成人每公斤体重有多少毫升血？",
                "answer" => "77升"
            ],
            [
                "category" => "生活",
                "question" => "三文治是一种典型的西方食品，以两片面包夹几片肉和奶酪、各种调料制作而成，吃法简便，深受欢迎。你知道它起源于什么娱乐活动的过程中吗？",
                "answer" => "打牌"
            ],
            [
                "category" => "生活",
                "question" => "农历把每月初一叫做什么日？",
                "answer" => "朔日"
            ],
            [
                "category" => "生活",
                "question" => "“干冰”是一种比冰更好的制冷剂，而且“干冰”溶化时，它直接蒸发称为了温度很低的、干燥的什么气体？",
                "answer" => "二氧化碳(CO2)"
            ],
            [
                "category" => "生活",
                "question" => "哪国女性不能随便与真面目视人？",
                "answer" => "阿拉伯人"
            ],
            [
                "category" => "生活",
                "question" => "晴朗的夏日，小明一家祖孙三代出去郊游野炊，当需要生火煮食时，他们发现忘了带打火机、火柴等工具。此时，物理成绩出众的小明可能利用以下哪个常见物品帮助生火？",
                "answer" => "爷爷的老花眼镜"
            ],
            [
                "category" => "生活",
                "question" => "鉴别墨的好坏时，墨色以什么颜色为最佳？",
                "answer" => "青紫色"
            ],
            [
                "category" => "生活",
                "question" => "篮球裁判不使用的数字？",
                "answer" => "123"
            ],
            [
                "category" => "生活",
                "question" => "世界最深的湖泊是哪个？",
                "answer" => "贝加尔湖"
            ],
            [
                "category" => "生活",
                "question" => "狗的鼻尖为什么经常是湿乎乎的？",
                "answer" => "滋润嗅觉细胞的分泌物"
            ],
            [
                "category" => "生活",
                "question" => "世界上流程最长的河流叫什么名字？",
                "answer" => "尼罗河"
            ],
            [
                "category" => "生活",
                "question" => "地球的公转速度为多少？",
                "answer" => "每秒29.79公里(约每秒30公里)"
            ],
            [
                "category" => "生活",
                "question" => "不同动物的冬眠形式也不尽相同：鼠类动物睡醒又吃、吃完又睡;蛙类则钻进泥土不食不动;蝙蝠在山洞顶壁一挂就是一个冬天。请打一猜：一个冬眠期能睡200多天、冬眠时几乎不呼吸、把它扔到水里过半个小时再捞出来它仍然睡着，这应该是什么动物呢？",
                "answer" => "刺猬"
            ],
            [
                "category" => "生活",
                "question" => "铁含量在1.7%以上的叫什么？",
                "answer" => "生铁"
            ],
            [
                "category" => "生活",
                "question" => "以下哪个行星的表面与月球的表面是非常相似的？",
                "answer" => "水星"
            ],
            [
                "category" => "生活",
                "question" => "太阳系中距离太阳最近的行星是哪颗？",
                "answer" => "水星"
            ],
            [
                "category" => "生活",
                "question" => "动物界从不缺少明星，你知道世界上跑得最快，每小时可达115公里的动物是什么？",
                "answer" => "猎豹"
            ],
            [
                "category" => "生活",
                "question" => "金饰品中，K是每开含金量为4.166%的意思。其中，12K的含义是含金量为50%，那你知道18K表示含金量是多少吗？",
                "answer" => "75%"
            ],
            [
                "category" => "生活",
                "question" => "动物界中千奇百怪，马是站着睡觉的;猪是躺着睡觉的;蝙蝠是倒挂着睡觉的;那你知道猫头鹰是怎么睡觉的吗？",
                "answer" => "睁一只眼，闭一只眼"
            ],
            [
                "category" => "生活",
                "question" => "被称为捕虫神刀手的动物是什么？",
                "answer" => "螳螂"
            ],
            [
                "category" => "生活",
                "question" => "中国气象部门以多长时间内的降水量来区分雨的大小？",
                "answer" => "24小时"
            ],
            [
                "category" => "生活",
                "question" => "在热传递的三种方式中,它们是如何进行的？",
                "answer" => "同时"
            ],
            [
                "category" => "生活",
                "question" => "辣椒在植物分类中，是属于什么科？",
                "answer" => "茄科"
            ],
            [
                "category" => "生活",
                "question" => "物体内有东西喷出，物体运动的方向与喷出东西的方向正好相反，这是属于什么现象？",
                "answer" => "反冲"
            ],
            [
                "category" => "生活",
                "question" => "酷热的盛夏之夜，出现那野坟墓冢的鬼火，你知道是什么来的吗？",
                "answer" => "磷化氢"
            ],
            [
                "category" => "生活",
                "question" => "口的形状反映了鱼的摄食习惯，喜欢吃水面食物的鱼的口形应该？",
                "answer" => "向上翘"
            ],
            [
                "category" => "生活",
                "question" => "在野外不幸被毒蛇咬伤或误食有毒食品，等待救援的过程中，以下哪个行为是比较适当的？",
                "answer" => "躺下，保持冷静"
            ],
            [
                "category" => "生活",
                "question" => "“干冰”的成分是什么？",
                "answer" => "二氧化碳(CO2)"
            ],
            [
                "category" => "生活",
                "question" => "秋夏两季是蛇类袭人事件的多发时期，你是某医院的实习医生，现在又三名被蛇咬伤的患者前来求医，请通过伤口状况，初步判定哪位患者是被无毒的蛇咬伤的呢？",
                "answer" => "有多个浅细小的牙痕，局部轻微疼痛"
            ],
            [
                "category" => "生活",
                "question" => "下列哪种动物不属于鱼类？",
                "answer" => "甲鱼"
            ],
            [
                "category" => "生活",
                "question" => "钢铁通常用哪种铁制成？",
                "answer" => "生铁"
            ],
            [
                "category" => "生活",
                "question" => "青蛙的皮肤具备许多功能，有的青蛙的皮肤可以分泌出毒素以防天敌，有的青蛙的颜色可以作为保护色帮助自己藏匿行踪，请问以下那种功能是青蛙皮肤可能具备的功能？",
                "answer" => "呼吸"
            ],
            [
                "category" => "生活",
                "question" => "为了保护乘客安全，应付突发事件，航空公司会安排空警在部分航班上执勤，你知道空警一般是以上呢么形式出现在飞机上的吗？",
                "answer" => "身着便衣当乘客"
            ],
            [
                "category" => "生活",
                "question" => "宇航员的衣服为什么是白色的？",
                "answer" => "白色反射率好"
            ],
            [
                "category" => "生活",
                "question" => "哪种颜色的物体反射光的能力较强？",
                "answer" => "白色"
            ],
            [
                "category" => "生活",
                "question" => "蟋蟀由于其鸣声清脆好听常被称为“小提琴家”，它是通过什么方式来鸣唱的呢？",
                "answer" => "翅膀相互摩擦"
            ],
            [
                "category" => "生活",
                "question" => "拍卖起源于西方国家形式有以下几种？",
                "answer" => "英格兰式拍卖、荷兰式拍卖、英荷相结合是拍卖"
            ],
            [
                "category" => "生活",
                "question" => "潮汐是沿海地区的一种自然现象,出现的潮汐是由于什么原因？",
                "answer" => "地月吸引力"
            ],
            [
                "category" => "生活",
                "question" => "关于九大行星的叙述错误的是？",
                "answer" => "都有固体外壳"
            ],
            [
                "category" => "生活",
                "question" => "以下几种鸟类，哪一类是依靠嗅觉捕食的？",
                "answer" => "几维鸟"
            ],
            [
                "category" => "生活",
                "question" => "铅笔坚硬标准",
                "answer" => "H"
            ],
            [
                "category" => "生活",
                "question" => "如果发现蜘蛛张网补网，说明天气将怎样变化？",
                "answer" => "变晴"
            ],
            [
                "category" => "生活",
                "question" => "“夜来香”枝条细长，夏秋开花，黄绿色花朵傍晚开放，飘出阵阵扑鼻浓香，在南方多用来布置庭院、窗前、塘边和亭畔。关于夜来香的说法中，以下哪项是错误的？",
                "answer" => "有安眠效果，宜屋内摆放"
            ],
            [
                "category" => "生活",
                "question" => "“有氧运动”的特点是强度较低、有节奏、持续不中断、时间较长。以下哪个项目一般不被归类为有氧运动呢？",
                "answer" => "1000米赛跑"
            ],
            [
                "category" => "生活",
                "question" => "遇到敌人时，部分水生动物会排放出墨汁，在水中扩散成与之自身肌体形似的烟云，这些烟云“替身”如同摆下了真假莫辨的阵，使它们得以逢凶化吉、绝境逢生。以下哪种动物具备上述的本领？",
                "answer" => "乌贼"
            ],
            [
                "category" => "生活",
                "question" => "一闪一闪亮晶晶，满天都是小星星。在繁星点点的夜空里，你知道在太阳系内，哪一颗行星是夜空中最亮的吗？",
                "answer" => "金星"
            ],
            [
                "category" => "生活",
                "question" => "“世界艾滋病日”是哪一天？",
                "answer" => "12月1日"
            ],
            [
                "category" => "生活",
                "question" => "在服装上下身颜色不一致时，皮鞋的颜色应尽量接近？",
                "answer" => "上衣颜色"
            ],
            [
                "category" => "生活",
                "question" => "目前我国公布的空气质量日报中，将空气污染指数分为五级。101-200是属于？",
                "answer" => "三级"
            ],
            [
                "category" => "生活",
                "question" => "“干冰”可以产生多少度的低温？",
                "answer" => "-78摄氏度"
            ],
            [
                "category" => "生活",
                "question" => "生物发展的中间时期叫？",
                "answer" => "中生代"
            ],
            [
                "category" => "生活",
                "question" => "为什么移栽花草树苗时，常常要带一些土？",
                "answer" => "不损坏植物的根毛"
            ],
            [
                "category" => "生活",
                "question" => "世界上存在很多种鸟类，其中体型最小的鸟类是？",
                "answer" => "蜂鸟"
            ],
            [
                "category" => "生活",
                "question" => "唯一能够前后左右飞行的鸟是什么鸟？",
                "answer" => "蜂鸟"
            ],
            [
                "category" => "生活",
                "question" => "俗称“孑孓”的幼虫成年后是什么？",
                "answer" => "蚊子"
            ],
            [
                "category" => "生活",
                "question" => "台湾自古以来就是中国领土不可分割的一部分。下列有关台湾叙述正确的是①三国时，台湾称夷洲②元朝时加强了对台湾的管辖③明朝后期荷兰殖民者侵占台湾④1662年郑成功收复台湾⑤1684年清朝设台湾隶属广东省。",
                "answer" => "①②③④"
            ],
            [
                "category" => "生活",
                "question" => "会开屏的孔雀是雌性还是雄性",
                "answer" => "雄孔雀"
            ],
            [
                "category" => "生活",
                "question" => "“鸟中皇后”孔雀是属于我国一级保护动物，在孔雀的大尾屏上，我们可以看到五色金翠线纹，非常美丽。请问孔雀一般会在什么情问下开屏",
                "answer" => "求偶"
            ],
            [
                "category" => "生活",
                "question" => "印度的国鸟是绿孔雀，美国的国鸟是白头海雕，法国的国鸟是公鸡，你知道中国的国鸟是什么吗？",
                "answer" => "丹顶鹤"
            ],
            [
                "category" => "生活",
                "question" => "我国出产那种孔雀",
                "answer" => "绿孔雀"
            ],
            [
                "category" => "生活",
                "question" => "以下哪项不是天文学主要研究对象？",
                "answer" => "气象"
            ],
            [
                "category" => "生活",
                "question" => "部分人会将虾背上黑色的“虾线”去除掉再吃，请问这条虾线实际上是什么？",
                "answer" => "虾的肠"
            ],
            [
                "category" => "生活",
                "question" => "太阳的能量来自哪里？",
                "answer" => "核聚变"
            ],
            [
                "category" => "生活",
                "question" => "天生的“捕鼠能手”和享有“森林医生”美称的鸟是",
                "answer" => "猫头鹰、啄木鸟"
            ],
            [
                "category" => "生活",
                "question" => "通常人们把哪种水果和冰糖蒸后食用，用以治疗咳嗽？",
                "answer" => "梨子"
            ],
            [
                "category" => "生活",
                "question" => "国际护士节是？",
                "answer" => "5月12日"
            ],
            [
                "category" => "生活",
                "question" => "中国三大传统节日是哪三个？",
                "answer" => "春节、端午节、中秋节"
            ],
            [
                "category" => "生活",
                "question" => "以下哪个过程属于化学变化？",
                "answer" => "啤酒变质"
            ],
            [
                "category" => "生活",
                "question" => "老虎、狮子、豹子在动物分类上属于那一科？",
                "answer" => "猫科"
            ],
            [
                "category" => "生活",
                "question" => "兔子眼睛的颜色与它们的皮毛颜色有关系，黑兔子的眼睛是黑色的，灰兔子的眼睛是灰色的，那你知道白兔子的眼睛是什么颜色的吗？",
                "answer" => "红色"
            ],
            [
                "category" => "生活",
                "question" => "蚁狮的外形像蜘蛛，形状似沙和尚的头,沙土一样的颜色的身体,头小，有一对大颚，平常是倒退着走。它常在干燥的沙滩上挖一个漏斗形的坑，然后把身体埋在坑底，头部露在沙外。请问它这样做的目标是什么？",
                "answer" => "捕食方式"
            ],
            [
                "category" => "生活",
                "question" => "“烤全羊”是用以下哪种羊烤成的？",
                "answer" => "绵羊"
            ],
            [
                "category" => "生活",
                "question" => "铁含量在0.2-1.7%的叫",
                "answer" => "钢"
            ],
            [
                "category" => "生活",
                "question" => "人体必需的营养物质中，构成细胞的基本物质是什么？",
                "answer" => "蛋白质"
            ],
            [
                "category" => "生活",
                "question" => "由于很多种蘑菇对人体有毒且难以辨认，因此野生蘑菇最好不要采食。以下哪种蘑菇有毒的可能性最大？",
                "answer" => "色泽鲜艳度高的"
            ],
            [
                "category" => "生活",
                "question" => "蘑菇繁衍依靠什么？",
                "answer" => "孢子"
            ],
            [
                "category" => "生活",
                "question" => "如果你不小心在野外吃了有毒的蘑菇，第一时间应该怎么做才是正确的呢？",
                "answer" => "大量喝水"
            ],
            [
                "category" => "生活",
                "question" => "由于河豚含有剧毒，稍有不慎食用了河豚体内的毒素，轻则出现呕吐、高烧等症状，重则毒发身亡。但因为河豚肉质鲜美，不少人不顾生命危险都要品尝。所以古人有“拼死吃河豚”一说。到底河豚的毒素主要在哪里呢？",
                "answer" => "血液和内脏"
            ],
            [
                "category" => "生活",
                "question" => "水族是中国少数民族之一，是苗族和侗族的好邻居。水族婚俗有较浓的传统色彩，你知道水族姑娘出嫁后要完成的第一件事是什么吗？",
                "answer" => "挑水"
            ],
            [
                "category" => "生活",
                "question" => "(鲸鱼的内耳)鲫鱼的内耳除了听觉以外，还有什么作用？",
                "answer" => "平衡身体"
            ],
            [
                "category" => "生活",
                "question" => "民间的“腊八粥”是那天吃的？",
                "answer" => "十二月初八"
            ],
            [
                "category" => "生活",
                "question" => "选出跟磁铁无关的器具？",
                "answer" => "日咎"
            ],
            [
                "category" => "生活",
                "question" => "下列哪种动物没有“分身术”“再生术”的本领？",
                "answer" => "毛草团、小乌龟"
            ],
            [
                "category" => "生活",
                "question" => "国内生产总值的英文简写是什么？",
                "answer" => "GDP"
            ],
            [
                "category" => "生活",
                "question" => "乌鱼蛋是什么?",
                "answer" => "雌墨鱼卵巢干制品"
            ],
            [
                "category" => "生活",
                "question" => "动物的幼体长大后，形态结构和生活习性上有显著变化，这种发育过程叫“变态发育”。我们常说的“毛毛虫”就是一种这样的动物，它长大后会变成什么呢？",
                "answer" => "蝴蝶或飞蛾"
            ],
            [
                "category" => "生活",
                "question" => "秋天到了，一群大雁往南飞，一会儿排成“人”字，一会儿排成“一”字。雁群保持严格的整齐的队形是有科学道理的，以下哪个原因与此无关呢？",
                "answer" => "让雁群保持体温"
            ],
            [
                "category" => "生活",
                "question" => "在生活中，我们不时可以看到，苍蝇飞落在某处后就匆忙搓脚，你知道苍蝇在干什么吗？",
                "answer" => "品尝味道"
            ],
            [
                "category" => "生活",
                "question" => "电度表上一度表示耗电量多少？",
                "answer" => "1千瓦*小时"
            ],
            [
                "category" => "生活",
                "question" => "仓储超市与其它超市最大的不同点是什么？",
                "answer" => "储售场地合一"
            ],
            [
                "category" => "生活",
                "question" => "刚装修好的居室由于有各种材料残留的异味而不可马上入住，除了适当的开窗通风外，还可以在室内放置以下哪种水果起到快速清除异味的效果呢？",
                "answer" => "菠萝"
            ],
            [
                "category" => "生活",
                "question" => "小明把中间有圆孔的铜垫片加热，他发现中央的圆孔变大还是变小？",
                "answer" => "变大"
            ],
            [
                "category" => "生活",
                "question" => "茫茫雪原上，到处是积雪。雪地上的摩擦力太小，车轮只能不断地空转，很难前进。但是在南极有一种动物堪称“滑雪健将”，它启发了人们制造了“极地越野车”。那么极地越野车是模仿什么动物行走而设计制造的？",
                "answer" => "企鹅"
            ],
            [
                "category" => "生活",
                "question" => "走廊、楼道等场所的照明设备通常使用触摸开关;把手指放到触摸开关上后，灯就会变亮，请问这是因为它对什么的感应而接通了电路？",
                "answer" => "对电流的感应"
            ],
            [
                "category" => "生活",
                "question" => "田间一次施化肥过多，作物会变得苦味发黄，导致根细胞不能从土壤中吸收水，使植物坏死。这种现象在民间俗称什么呢？",
                "answer" => "烧苗"
            ],
            [
                "category" => "生活",
                "question" => "日常生活中，如果将一些相冲撞的事物同食，不但不会得到美食的享受，反而会损害身体，例如，狗肉跟绿豆一起吃，会出现中毒，那你知道螃蟹跟柿子一起吃，会出现什么状况吗？",
                "answer" => "腹泻"
            ],
            [
                "category" => "生活",
                "question" => "以下几种水果中，最肯能被人们拿来和冰糖蒸配合着食用，用来治疗咳嗽的是哪样？",
                "answer" => "梨(冰糖雪梨)"
            ],
            [
                "category" => "生活",
                "question" => "古时常有民众因急需用钱而将家中物资拿到当铺典当，与不收旧衣服，你知道以下哪类事物在现代一般是无法典当的吗？",
                "answer" => "宠物"
            ],
            [
                "category" => "生活",
                "question" => "一般都认为鸡蛋买回来放冰箱就好了，但鸡蛋的放置方法还有讲究的哦，鸡蛋哪一头朝上放，可以更好的保持它的新鲜呢？",
                "answer" => "大头朝上"
            ],
            [
                "category" => "生活",
                "question" => "在身体脱水的情况下如果大口、快速喝水，会导致出现什么情况？",
                "answer" => "呕吐"
            ],
            [
                "category" => "生活",
                "question" => "人的哪类细胞死亡脱落后不可再生？",
                "answer" => "脑细胞"
            ],
            [
                "category" => "生活",
                "question" => "正规的鸡尾酒会上，鸡尾酒必须盛装在专用的鸡尾酒杯里，酒杯必须事先？",
                "answer" => "冷冻"
            ],
            [
                "category" => "生活",
                "question" => "下面干果中脂肪含量最高的是哪个？",
                "answer" => "核桃仁"
            ],
            [
                "category" => "生活",
                "question" => "下列哪种鸟类只会生蛋不会孵蛋？",
                "answer" => "杜鹃"
            ],
            [
                "category" => "生活",
                "question" => "国际标准组织(ISO)推荐的空调室的适宜温度是摄氏",
                "answer" => "夏天23至26度，冬天20至24度"
            ],
            [
                "category" => "生活",
                "question" => "在狗的眼睛里世界是什么颜色的？",
                "answer" => "只有黑白灰色"
            ],
            [
                "category" => "生活",
                "question" => "哪种动物在印度被认为是神圣的东西而禁忌食用？",
                "answer" => "牛"
            ],
            [
                "category" => "生活",
                "question" => "戛纳电影节在哪国举办？",
                "answer" => "法国"
            ],
            [
                "category" => "生活",
                "question" => "许多国家有自己的绰号：“山姆大叔”是美国的绰号，“斗牛士”是西班牙的绰号，“袋鼠”是澳大利亚的绰号，你知道“高卢鸡”是哪个国家的绰号吗？",
                "answer" => "法国"
            ],
            [
                "category" => "生活",
                "question" => "下面哪一种熨烫衣服的方法是不正确的？",
                "answer" => "尽可能长时间地熨"
            ],
            [
                "category" => "生活",
                "question" => "在烈日下使用放大镜可以将纸点然着火，那是因为放大镜的镜片与阳光的光线所产生的物理作用，请问放大镜是利用什么原理来点火的？",
                "answer" => "聚光"
            ],
            [
                "category" => "生活",
                "question" => "常常使用电脑的人经常食用以下哪种食物有利于眼部健康？",
                "answer" => "胡萝卜"
            ],
            [
                "category" => "生活",
                "question" => "从抹香鲸体内提炼出来的香料是？",
                "answer" => "龙涎香"
            ],
            [
                "category" => "生活",
                "question" => "哪位运动员是非广州籍的运动员？",
                "answer" => "篮球运动员-易健联"
            ],
            [
                "category" => "生活",
                "question" => "亚奥理事会(亚洲奥林匹克理事会)的LOGO中不包括以下哪个元素？",
                "answer" => "长城"
            ],
            [
                "category" => "生活",
                "question" => "夏日炎炎，部分汽车由于防范不当，容易造成“自燃”的意外事故，如何防范汽车自燃成为了有车一族关注话题。以下哪些行为会增加发生这种事故的可能性呢？",
                "answer" => "在车内加装高档音响、冰箱"
            ],
            [
                "category" => "生活",
                "question" => "公元是”公历纪年“的简称，是目前国际通行的纪年体系。公元纪年并没有”公元0年“，它的起点是公元1年，你知道这一年对应以下的哪一年吗？",
                "answer" => "耶稣基督的生年"
            ],
            [
                "category" => "生活",
                "question" => "捉蝴蝶时手上会留下其翅膀上彩色的“粉”，这种“粉”实际是什么？",
                "answer" => "细小的鳞片"
            ],
            [
                "category" => "生活",
                "question" => "有“世界童话之王”(世界童话大王)之称的安徒生是哪个国家的？",
                "answer" => "丹麦"
            ],
            [
                "category" => "生活",
                "question" => "一个细胞一小时可以分裂成三个，9小时可以把一个容器装满。请问它多少个小时能装满容器的1/9？",
                "answer" => "7"
            ],
            [
                "category" => "生活",
                "question" => "黄花菜属于一种蔬菜，但鲜黄花菜中含有一种叫秋水仙碱的有毒物质，成年人一次吃50至100克未经处理的鲜黄花菜便可中毒，请问应该选择哪种处理过的黄花菜食用？",
                "answer" => "晒干"
            ],
            [
                "category" => "生活",
                "question" => "闰年有366天，可为什么每4年中会有一年为闰年？",
                "answer" => "因为每年是365日5时48分，每4年就会多出一天"
            ],
            [
                "category" => "生活",
                "question" => "“那达慕大会”是我国哪个少数民族的节日？",
                "answer" => "蒙古族"
            ],
            [
                "category" => "生活",
                "question" => "山东的简称是什么？",
                "answer" => "鲁"
            ],
            [
                "category" => "生活",
                "question" => "亚运会上首次出现吉祥物阿波是哪种动物为原型设计的",
                "answer" => "亚洲象"
            ],
            [
                "category" => "生活",
                "question" => "第十一届北京亚运会的吉祥物(熊猫)是？",
                "answer" => "盼盼"
            ],
            [
                "category" => "生活",
                "question" => "中国人自古以来过年都喜欢放“爆竹”，每当新年来临，人们都要燃放烟花爆竹，以求得新年的平安。古人放“爆竹”最早是为了什么目的呢？",
                "answer" => "驱逐瘟神疫鬼"
            ],
            [
                "category" => "生活",
                "question" => "河蚌的血液什么颜色的？",
                "answer" => "淡蓝色"
            ],
            [
                "category" => "生活",
                "question" => "“春风桃李花开日，秋雨梧桐叶落时”。地球上的一年四季是由于哪种天体运动而产生的？",
                "answer" => "地球公转"
            ],
            [
                "category" => "生活",
                "question" => "“七步成诗”写出《七步诗》是哪位文人？",
                "answer" => "曹植"
            ],
            [
                "category" => "生活",
                "question" => "我国农历中有多少个节气？",
                "answer" => "二十四个节气"
            ],
            [
                "category" => "生活",
                "question" => "世界上现存最大的猫科动物，头大而圆，前额上的数条黑色横纹，中间常被串通，及似“王”字，故有“丛林之王”之美称，请问这个动物是什么？",
                "answer" => "东北虎"
            ],
            [
                "category" => "生活",
                "question" => "雪天骑自行车，车胎应该？",
                "answer" => "气打得少一些"
            ],
            [
                "category" => "生活",
                "question" => "玻璃杯是薄的容易爆破(倒开水时炸破)，还是厚的容易爆破？",
                "answer" => "厚的"
            ],
            [
                "category" => "生活",
                "question" => "纺织用的纱线粗细是用“支”来表示的，请问下面两种纱哪个细？",
                "answer" => "32支"
            ],
            [
                "category" => "生活",
                "question" => "死亡之湖--罗布泊现在情况？",
                "answer" => "已经干涸"
            ],
            [
                "category" => "生活",
                "question" => "如果有猛兽要袭击你，你逃跑时选择以下哪种路线比较安全？",
                "answer" => "“之”字路线"
            ],
            [
                "category" => "生活",
                "question" => "工业上大名鼎鼎的“耐磨轴承”是用什么制成的？",
                "answer" => "青铜"
            ],
            [
                "category" => "生活",
                "question" => "在野外行进时，防止身体脱毛至关重要。关于在沙漠、雨林、雪地中行进，以下哪种说法是正确的？",
                "answer" => "都需要定时饮水"
            ],
            [
                "category" => "生活",
                "question" => "世界上地势最低的是哪个国家？",
                "answer" => "荷兰"
            ],
            [
                "category" => "生活",
                "question" => "“一日一苹果，医生远离我。”假如人们多吃苹果，患肺癌的几率能减少46%左右，得其他癌症的几率也能减少20%左右，你知道在蔬菜中抗癌拍第一的是什么吗？",
                "answer" => "红薯"
            ],
            [
                "category" => "生活",
                "question" => "乌拉草是产于中国东北沼泽中的一种小草，它虽然看起来很寻常，但曾经被誉为东北三宝之一、世界三大宝草之一，这主要是因为他具备以下那样特点？",
                "answer" => "御寒保暖"
            ],
            [
                "category" => "生活",
                "question" => "停电时，为了防止恢复供电后发生意外，以下哪个行为时最妥当的？",
                "answer" => "切断电源"
            ],
            [
                "category" => "生活",
                "question" => "“十月”又称？",
                "answer" => "小阳春"
            ],
            [
                "category" => "生活",
                "question" => "天空上的星星为什么有的亮，有的暗？",
                "answer" => "发光能力不一样"
            ],
            [
                "category" => "生活",
                "question" => "正式的接力赛，每队有几名运动员？",
                "answer" => "4名"
            ],
            [
                "category" => "生活",
                "question" => "游泳的时候如果不小心闯到漩涡边缘时，应采取那种姿势才能尽快游出去？",
                "answer" => "平躺在水面"
            ],
            [
                "category" => "生活",
                "question" => "宜于书法及写意画的宣纸是？",
                "answer" => "生宣"
            ],
            [
                "category" => "生活",
                "question" => "新一轮以课程、教材为核心的改革中，高中教学的特点是？",
                "answer" => "分科"
            ],
            [
                "category" => "生活",
                "question" => "20公里以上的竞走,隔多少公里设置饮食供给站？",
                "answer" => "5公里"
            ],
            [
                "category" => "生活",
                "question" => "阿诗玛是我国云南哪个民族塑造的艺术形象？",
                "answer" => "彝族"
            ],
            [
                "category" => "生活",
                "question" => "在电视中，我们经常可以看到，海豚总是喜欢追随着轮船游动，那你知道海豚为什么这么做吗？",
                "answer" => "借助外力游动"
            ],
            [
                "category" => "生活",
                "question" => "哪一种菜系素有“一菜一格，百菜百味”的称誉？",
                "answer" => "川菜"
            ],
            [
                "category" => "生活",
                "question" => "蜂王浆又名蜂皇浆、蜂乳，是天然营养滋补品，是供给将要变成蜂王(母蜂)的幼虫的食物。请问蜂王浆是由蜂群中什么成员提供的呢？",
                "answer" => "工蜂"
            ],
            [
                "category" => "生活",
                "question" => "防风林要达到好的防风效果，应由至少达到什么样的规模？",
                "answer" => "10行以上树组成"
            ],
            [
                "category" => "生活",
                "question" => "小明想查询订飞机票的号码，你可以告诉他一个三位数的查询电话号码是多少吗？",
                "answer" => "114"
            ],
            [
                "category" => "生活",
                "question" => "水在摄氏多少度是密度最大？",
                "answer" => "4"
            ],
            [
                "category" => "生活",
                "question" => "声音在哪种材质中传播的速度最快？",
                "answer" => "水里"
            ],
            [
                "category" => "生活",
                "question" => "奥林匹克运动会的口号是？",
                "answer" => "更快、更高、更强"
            ],
            [
                "category" => "生活",
                "question" => "吃西餐时哪种行为是不得体的？",
                "answer" => "把水果核直接吐在碟子里"
            ],
            [
                "category" => "生活",
                "question" => "恩格尔系数与生活消费水平？",
                "answer" => "成反比"
            ],
            [
                "category" => "生活",
                "question" => "有一种星体，它到达地球上的部分被称为陨石，这种星体是？",
                "answer" => "流星"
            ],
            [
                "category" => "生活",
                "question" => "“菰”的果实叫“菰米”，其嫩茎膨大后形成？",
                "answer" => "茭白"
            ],
            [
                "category" => "生活",
                "question" => "陆地水中储量最大的水体是什么？",
                "answer" => "冰川水"
            ],
            [
                "category" => "生活",
                "question" => "在野外可以利用手表进行方向辨识，手表测向的要诀是“时数折半对太阳，12指的是北方”，假设现在是下午两点，那么手表测向时，因该把表上哪个数字对准太阳方向？",
                "answer" => "7"
            ],
            [
                "category" => "生活",
                "question" => "汽油有不同的品种(如90号、93号等)，请问;这些数字表示的汽油标号是什么意思？",
                "answer" => "辛烷值指标"
            ],
            [
                "category" => "生活",
                "question" => "以下哪个是国际通用求救信号？",
                "answer" => "SOS"
            ],
            [
                "category" => "生活",
                "question" => "甲醛是致癌的物质,它的释放是一个长期而缓慢的过程;进入新居、新办公室、新装修的店铺，都会有刺眼、刺鼻、喉咙不适的感觉，这就是甲醛引起的。我们可以在室内种植以下哪些花卉来降低它对人体的危害呢？",
                "answer" => "芦荟和吊兰"
            ],
            [
                "category" => "生活",
                "question" => "平时随手丢掉的鸡蛋壳，其实是有大有妙用的--比如将它捣碎后用纸包好，在生炉子的时候来引火，效果会很好。你知道把鸡蛋壳用火煨成微焦，在研成粉末洒在墙角上能起到什么作用吗？",
                "answer" => "灭蚁"
            ],
            [
                "category" => "生活",
                "question" => "在野外缺少食物时，对于普通人来说，捕食以下哪些类动物是最好的选择？",
                "answer" => "鱼"
            ],
            [
                "category" => "生活",
                "question" => "小红在家玩游戏的时候，突然停电了，这时乐意拨打什么电话联系供电局维修呢？",
                "answer" => "95598"
            ],
            [
                "category" => "生活",
                "question" => "我们日常的主食基本上属于什么食物？",
                "answer" => "酸性食物"
            ],
            [
                "category" => "生活",
                "question" => "经常行驶的小汽车哪积尘最多？",
                "answer" => "后窗"
            ],
            [
                "category" => "生活",
                "question" => "对于冬季墙面出现的季节性开裂，是否需要马上修补？",
                "answer" => "不需要"
            ],
            [
                "category" => "生活",
                "question" => "电池是日常生活中不可缺少的如用品，那你知道电池通用常标有R55、R5、等符号，请问这些符号代表什么？",
                "answer" => "电池的尺寸大小"
            ],
            [
                "category" => "生活",
                "question" => "若不慎掉入沼泽池，应采取怎么样的自救方法？",
                "answer" => "缓慢朝树藤方向移动"
            ],
            [
                "category" => "生活",
                "question" => "干香菇可以制作出许多美味佳肴，但应注意的是。如果使用的水温不当，会被破坏其中有的营养成分，那么干香菇适合在多少摄氏度的水中侵泡，营养成分才不会被破坏？",
                "answer" => "20摄氏度—35摄氏度的温水"
            ],
            [
                "category" => "生活",
                "question" => "CT是指什么？",
                "answer" => "计算机断层扫描"
            ],
            [
                "category" => "生活",
                "question" => "安徽的简称是什么？",
                "answer" => "皖"
            ],
            [
                "category" => "生活",
                "question" => "韭菜是一种什么生植物？",
                "answer" => "多年生草本"
            ],
            [
                "category" => "生活",
                "question" => "亚运会为什么要设非奥运比赛项目？",
                "answer" => "非奥运项目的选择，主要是考虑了亚洲不同区域的传统文化特点，目的是为亚洲各个国家或地区的青年提供展示技能的机会，同时增加亚运会的吸引力"
            ],
            [
                "category" => "生活",
                "question" => "很多人喜欢在室内养花以改善和美化室内环境，但如果品种选择不当，反而会队健康有害。以下那些花不适宜在室内种植呢？",
                "answer" => "花丁香、夹竹桃、郁金香"
            ],
            [
                "category" => "生活",
                "question" => "乘坐两排轮的客车，坐在哪里颠簸最轻？",
                "answer" => "车头处"
            ],
            [
                "category" => "生活",
                "question" => "平时我们所说的启明星，是哪一个星？",
                "answer" => "金星"
            ],
            [
                "category" => "生活",
                "question" => "中国群众性的电影奖“百花奖”主办单位是以下哪个？",
                "answer" => "《大众电影》杂志社"
            ],
            [
                "category" => "生活",
                "question" => "不毛之地的沙漠里,仙人掌却能够傲然生存,繁衍不息,原因是仙人掌在干旱的幻环境中,叶退化称针状,以减少水分的蒸发.请问它的叶子指哪部分？",
                "answer" => "刺"
            ],
            [
                "category" => "生活",
                "question" => "核果指肉质的果实、内含一枚种子。以下哪种果实属于核果？",
                "answer" => "樱桃"
            ],
            [
                "category" => "生活",
                "question" => "采取以下哪种方法可以有效的让蜜蜂安静下来，避免受到蜜蜂蛰伤？",
                "answer" => "用烟熏"
            ],
            [
                "category" => "生活",
                "question" => "当你要通过一段湿滑独木桥时，以下哪种方式是最安全有效的？",
                "answer" => "身体倒挂，手脚并用的爬过去"
            ],
            [
                "category" => "生活",
                "question" => "会飞的蝙蝠属于哪类动物？",
                "answer" => "哺乳类"
            ],
            [
                "category" => "生活",
                "question" => "“紫毫”是毛笔的一种，亦名“紫毫笔”、“紫霜毫”。它有紫和花白之分，物罕而贵，那你知道“紫毫”是用什么动物的毛做成的毛笔？",
                "answer" => "白兔"
            ],
            [
                "category" => "生活",
                "question" => "垃圾的分类有利于废弃物品的回收利于、减少污染。我国生活垃圾一般分为可回收垃圾、厨余垃圾、有害垃圾和其他垃圾。假设你手上有一颗废电池，因该投放到以下哪个垃圾桶中？",
                "answer" => "写着“有害垃圾”的垃圾桶"
            ],
            [
                "category" => "生活",
                "question" => "乌贼的血液什么颜色的？",
                "answer" => "绿色"
            ],
            [
                "category" => "生活",
                "question" => "一株竹子出笋时有18节，一年后有多少节？",
                "answer" => "18节"
            ],
            [
                "category" => "生活",
                "question" => "芋头营养丰富，含有大量的淀粉、矿物质及维生素，既是蔬菜，又是粮食，他又开胃生津、消炎镇痛、补气益肾等功效，以下关于芋头的烹制、存储方法中，哪项是不妥当的？",
                "answer" => "放入冰箱保存"
            ],
            [
                "category" => "生活",
                "question" => "饭后漱口，可把食物残渣冲洗掉，减少了口腔细菌的危害，同时刺激唾液的分泌，有易于食物消化和口腔保健，你知道用什么水来漱口更有利于口腔健康吗？",
                "answer" => "茶水"
            ],
            [
                "category" => "生活",
                "question" => "你从昏迷中醒来，发现自己身处人迹罕至的野外，以下哪种做法对于你重新回到闻名世界最有利？",
                "answer" => "寻找河流，沿河而下"
            ],
            [
                "category" => "生活",
                "question" => "用三个硬塑料模型，他们多是中空的，表皮厚度都是半厘米，外观分别是鸡蛋、砖块、易拉罐。问：其中那个模型最不容易被压坏变形呢？",
                "answer" => "鸡蛋"
            ],
            [
                "category" => "生活",
                "question" => "我国曲艺中的相声属于以下哪类？",
                "answer" => "北方曲种"
            ],
            [
                "category" => "生活",
                "question" => "从鱼的身上取下几片完整的鳞片，烘干以后，便能在鳞片上发现一层层轮纹，这些轮纹体现了以下哪个信息？",
                "answer" => "鱼的年龄"
            ],
            [
                "category" => "生活",
                "question" => "发生强烈地震时，处于地震中心的人感到？",
                "answer" => "先上下颠簸后左右摇晃"
            ],
            [
                "category" => "生活",
                "question" => "我国现行居民身份证的前六位数字代表什么意思？",
                "answer" => "地址"
            ],
            [
                "category" => "生活",
                "question" => "在生活中，经常可以看到一些蚂蚁碰到一起就会打架，你知道蚂蚁打架的原因是什么吗？",
                "answer" => "气味不同"
            ],
            [
                "category" => "生活",
                "question" => "每年的九月十日是我国什么节日？",
                "answer" => "教师节"
            ],
            [
                "category" => "生活",
                "question" => "与岱庙、曲阜孔庙一起被誉为中国三大宫殿群的是哪个宫殿群？",
                "answer" => "故宫"
            ],
            [
                "category" => "生活",
                "question" => "某少数民族以“腾格里”为最高神，其方言的意思为“长生天”，该民族是？",
                "answer" => "蒙古民族"
            ],
            [
                "category" => "生活",
                "question" => "苹果和玫瑰花都是什么科的植物？",
                "answer" => "蔷薇科"
            ],
            [
                "category" => "生活",
                "question" => "发生化学灼伤，首先应该做的是什么事？",
                "answer" => "用清洁的水进行冲洗"
            ],
            [
                "category" => "生活",
                "question" => "地球自转一圈的时间实际与24小时相比，长还是短？",
                "answer" => "短"
            ],
            [
                "category" => "生活",
                "question" => "大气中的水汽主要来源何处？",
                "answer" => "地球表面水体蒸发"
            ],
            [
                "category" => "生活",
                "question" => "青蛙除了用肺外还用什么器官呼吸？",
                "answer" => "皮肤"
            ],
            [
                "category" => "生活",
                "question" => "最简单的有机化合物是什么？",
                "answer" => "甲烷"
            ],
            [
                "category" => "生活",
                "question" => "正在运动中的物体，如果受到的所有外力突然消失，它将怎样运动？",
                "answer" => "匀速直线运动"
            ],
            [
                "category" => "生活",
                "question" => "“软饮料”是指什么样的饮料？",
                "answer" => "不含酒精的饮料"
            ],
            [
                "category" => "生活",
                "question" => "在宇宙中，两块表面光滑平整的金属只要相遇就会自动焊接在一起，这种现象被称作什么呢？",
                "answer" => "冷焊"
            ],
            [
                "category" => "生活",
                "question" => "以下哪种电器必需接地线？",
                "answer" => "洗衣机"
            ],
            [
                "category" => "生活",
                "question" => "企鹅属于哪类动物？",
                "answer" => "鸟类"
            ],
            [
                "category" => "生活",
                "question" => "我国素有“高原之舟”美称的是哪种牲畜？",
                "answer" => "牦牛"
            ],
            [
                "category" => "生活",
                "question" => "空腹跑步对人体健康是否有利？",
                "answer" => "不利"
            ],
            [
                "category" => "生活",
                "question" => "天然气的主要成分是？",
                "answer" => "甲烷"
            ],
            [
                "category" => "生活",
                "question" => "六弦琴是什么乐器的别称？",
                "answer" => "吉他"
            ],
            [
                "category" => "生活",
                "question" => "被称为“沙漠之舟”的骆驼，它的驼峰的主要作用是什么？",
                "answer" => "贮存脂肪"
            ],
            [
                "category" => "生活",
                "question" => "马戏团驯兽员在训练小熊的过程中，正确的做法是哪个？",
                "answer" => "给听话的小熊喂事物"
            ],
            [
                "category" => "生活",
                "question" => "中东哪一城市是三大宗教的圣地？",
                "answer" => "耶路撒冷"
            ],
            [
                "category" => "生活",
                "question" => "目前汽车安全气囊中主要使用的是什么气体？",
                "answer" => "氮气"
            ],
            [
                "category" => "生活",
                "question" => "乘坐两排轮子的大型客车，坐在哪里最颠簸？",
                "answer" => "车尾"
            ],
            [
                "category" => "生活",
                "question" => "月球上没有声音是因为？",
                "answer" => "没有空气"
            ],
            [
                "category" => "生活",
                "question" => "冬天很多人会选择吃火锅，有一种“石头火锅”是哪个国家的特色?",
                "answer" => "韩国"
            ],
            [
                "category" => "生活",
                "question" => "冬天很多人会选择吃火锅，有一种“芝士火锅”是哪个国家的特色?",
                "answer" => "瑞士"
            ],
            [
                "category" => "生活",
                "question" => "我国最早的文言志怪小说是那部作品?",
                "answer" => "搜神记"
            ],
            [
                "category" => "生活",
                "question" => "冬天玻璃窗上的冰花是结在玻璃的哪一面?",
                "answer" => "室内"
            ],
            [
                "category" => "生活",
                "question" => "冬奥会每几年举办一次?",
                "answer" => "4"
            ],
            [
                "category" => "生活",
                "question" => "亚硝胺是食品中致癌的因素,但是可以多吃什么来抑制人体对亚硝胺的吸收和合成？",
                "answer" => "大白菜"
            ],
            [
                "category" => "生活",
                "question" => "以下哪种动物属于珍稀动物？",
                "answer" => "藏羚羊"
            ],
            [
                "category" => "生活",
                "question" => "瑞雪兆丰年是中国广为流传的农谚，原因是雪中含有哪种元素的化合物？",
                "answer" => "氮化物"
            ],
            [
                "category" => "生活",
                "question" => "以下冬天不落叶的树是哪种树？",
                "answer" => "柏树"
            ],
            [
                "category" => "生活",
                "question" => "普利策奖是什么方面的奖项？",
                "answer" => "新闻、文化"
            ],
            [
                "category" => "生活",
                "question" => "轻于鸿毛中的鸿毛指的是哪种动物的毛?",
                "answer" => "大雁"
            ],
            [
                "category" => "生活",
                "question" => "飞机头等舱的票价可能是普通舱票价的多少比例?",
                "answer" => "150%"
            ],
            [
                "category" => "生活",
                "question" => "太阳系中目前公认的有几大行星?",
                "answer" => "8"
            ],
            [
                "category" => "生活",
                "question" => "中国第一座现代化的天文台是？",
                "answer" => "紫金山天文台"
            ],
            [
                "category" => "生活",
                "question" => "太阳系中哪个行星离太阳最远？",
                "answer" => "海王星"
            ],
            [
                "category" => "生活",
                "question" => "火星的直径大还是地球的直径大？",
                "answer" => "地球"
            ],
        ];

        $questions = collect($questions)->map(function ($item) {
            return array_merge($item, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        Question::insert($questions);
    }
}
