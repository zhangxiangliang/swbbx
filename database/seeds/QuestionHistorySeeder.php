<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionHistorySeeder extends Seeder
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
                "category" => "历史",
                "question" => "凯旋门是欧洲一种纪念战争胜利的建筑，它用石块砌筑，形似门楼，有一个或三个拱劵门洞。上面宣扬统治者战绩的浮雕，其中法国巴黎的凯旋门尤为出名，你知道巴黎的凯旋门是为了纪念谁而建的吗？",
                "answer" => "拿破仑"
            ],
            [
                "category" => "历史",
                "question" => "甲骨文是写在哪上面的？",
                "answer" => "龟骨"
            ],
            [
                "category" => "历史",
                "question" => "豹头环眼、铁面虬鬓,因相貌奇丑而落选状元，但却才华横溢、满腹经纶、刚正不阿，被民间尊为趋吉避凶、驱鬼逐邪之神的是谁？",
                "answer" => "钟馗"
            ],
            [
                "category" => "历史",
                "question" => "秦始皇是哪国出生？",
                "answer" => "赵"
            ],
            [
                "category" => "历史",
                "question" => "成年礼是古代男子的一个重要的日子，有的隆重且带有考验性质，有的则被冠以浓厚的神秘色彩。那你知道我国古代男子成年时要行什么礼吗？",
                "answer" => "冠礼"
            ],
            [
                "category" => "历史",
                "question" => "爵是一种典礼时用的酒器，那么爵一般有几只脚？",
                "answer" =>"3只"
            ],
            [
                "category" => "历史",
                "question" => "“京师大学堂”是我国现在哪一间大学的前身？",
                "answer" => "北京大学"
            ],
            [
                "category" => "历史",
                "question" => "被陈毅元帅称为“人民群众用小车推出来的”是什么战役？",
                "answer" => "淮海战役"
            ],
            [
                "category" => "历史",
                "question" => "成年礼是古代男子的一个重要的日子，有的隆重且带有考验性质，有的则被冠以浓厚的神秘色彩。那你知道我国古代男子成年时要行什么礼嘛？",
                "answer" => "冠礼"
            ],
            [
                "category" => "历史",
                "question" => "科举考试中，考上殿试的人称为什么？",
                "answer" => "进士"
            ],
            [
                "category" => "历史",
                "question" => "我国古代“十恶不赦”中的首恶是什么？",
                "answer" => "谋反"
            ],
            [
                "category" => "历史",
                "question" => "元朝时期最大的港口是哪里？",
                "answer" => "泉州"
            ],
            [
                "category" => "历史",
                "question" => "中国古代八九岁至十三四岁的少年称为什么？",
                "answer" => "总角"
            ],
            [
                "category" => "历史",
                "question" => "我国古代“十八般武艺”中的“白打”是指什么武艺？",
                "answer" => "徒手搏斗"
            ],
            [
                "category" => "历史",
                "question" => "辽是哪个民族建立的政权？",
                "answer" => "契丹"
            ],
            [
                "category" => "历史",
                "question" => "科举考试中，考上会试的人称为什么？",
                "answer" => "贡士"
            ],
            [
                "category" => "历史",
                "question" => "“筵席”现在被指为有美食招待的宴会，此二字最早指什么？",
                "answer" => "垫子"
            ],
            [
                "category" => "历史",
                "question" => "从宋英宗治平三年开始，科举考试多久一次？",
                "answer" => "三年一次"
            ],
            [
                "category" => "历史",
                "question" => "我国省级行政区的设立，始于哪个朝代？",
                "answer" => "元朝"
            ],
            [
                "category" => "历史",
                "question" => "下列哪个王朝统治的时间最短？",
                "answer" => "秦"
            ],
            [
                "category" => "历史",
                "question" => "公元215年的逍遥津之战，以八百步卒逆袭孙权十万大军的魏国将领是谁？",
                "answer" => "张辽"
            ],
            [
                "category" => "历史",
                "question" => "被毛泽东称为“一代天骄”的历史人物是谁？",
                "answer" => "成吉思汗"
            ],
            [
                "category" => "历史",
                "question" => "古代科举考试最后在殿试中考取第二名的人被称为什么？",
                "answer" => "榜眼"
            ],
            [
                "category" => "历史",
                "question" => "科举考试中，考上乡试的人称为什么？",
                "answer" => "考中称“举人”，其第一名称为“解元”，第二名称为“亚元”"
            ],
            [
                "category" => "历史",
                "question" => "科举考试中，乡试第一名叫什么？",
                "answer" => "考中称“举人”，其第一名称为“解元”，第二名称为“亚元”"
            ],
            [
                "category" => "历史",
                "question" => "“博士”作为官名最早出现在哪个朝代？",
                "answer" => "秦朝"
            ],
            [
                "category" => "历史",
                "question" => "天师道的创立者是？",
                "answer" => "张道陵"
            ],
            [
                "category" => "历史",
                "question" => "进士科中，主要测试解决社会实际问题能力的项目是？",
                "answer" => "策问"
            ],
            [
                "category" => "历史",
                "question" => "以下哪个历史事件中与关羽无关？",
                "answer" => "七擒七纵"
            ],
            [
                "category" => "历史",
                "question" => "我国著名的青花瓷最早出现在哪个朝代？",
                "answer" => "唐代"
            ],
            [
                "category" => "历史",
                "question" => "第一位在全国实行“修弛道，车同轨，书同文”的皇帝是谁？",
                "answer" => "秦始王"
            ],
            [
                "category" => "历史",
                "question" => "佛光寺是现存的唐代何种结构的建筑？",
                "answer" => "木结构"
            ],
            [
                "category" => "历史",
                "question" => "我国科举制度创始于哪个朝代？",
                "answer" => "隋"
            ],
            [
                "category" => "历史",
                "question" => "刘秀“光武中兴”之后，定都在哪座城市？",
                "answer" => "洛阳"
            ],
            [
                "category" => "历史",
                "question" => "假如一个古人向你介绍“拙荆”的时候，那这个古人世纪上是在向你介绍他的？",
                "answer" => "妻子"
            ],
            [
                "category" => "历史",
                "question" => "“知天命”是指什么年纪？",
                "answer" => "五十岁"
            ],
            [
                "category" => "历史",
                "question" => "因其所写之诗反映当时社会动乱和人民疾苦而被后人称为“诗史”的诗人是？",
                "answer" => "杜甫"
            ],
            [
                "category" => "历史",
                "question" => "儒家是先秦诸子百家的主要思想派别之一，儒家的主要代表人物是？",
                "answer" => "孔子"
            ],
            [
                "category" => "历史",
                "question" => "道家是先秦诸子百家的只要思想派别之一，道家的主要代表人物是？",
                "answer" => "老子"
            ],
            [
                "category" => "历史",
                "question" => "被称为“诗圣”的唐代诗人是哪位？",
                "answer" => "杜甫"
            ],
            [
                "category" => "历史",
                "question" => "古代六艺，“礼，乐，射，御，书，数”中的“御”是指？",
                "answer" => "驾车"
            ],
            [
                "category" => "历史",
                "question" => "中国历代文学艺术多姿多彩，其中唐，宋，元等朝代更是拥有特色鲜明的文学艺术形式。请问元代的代表性文学艺术形式是什么？",
                "answer" => "散曲和杂剧"
            ],
            [
                "category" => "历史",
                "question" => "“成也萧何，败也萧何”说的是谁的经历？",
                "answer" => "韩信"
            ],
            [
                "category" => "历史",
                "question" => "战国时期的兵器大多用哪种材料制成？",
                "answer" => "青铜"
            ],
            [
                "category" => "历史",
                "question" => "以下艺术对应的起源国家有误的是？",
                "answer" => "芭蕾舞---印度"
            ],
            [
                "category" => "历史",
                "question" => "宋朝的蹴鞠游戏类似与当今的什么运动？",
                "answer" => "足球"
            ],
            [
                "category" => "历史",
                "question" => "“仲夏”在古代时令中是指什么时候？",
                "answer" => "农历五月"
            ],
            [
                "category" => "历史",
                "question" => "“十面埋伏”出自哪次战役？",
                "answer" => "侅下决战"
            ],
            [
                "category" => "历史",
                "question" => "佛祖释迦牟尼来自哪个国家？",
                "answer" => "印度"
            ],
            [
                "category" => "历史",
                "question" => "三国时期，群雄割据，民不聊生。请问结束三国乱世，成为西晋的第一个皇帝是谁？",
                "answer" => "司马炎"
            ],
            [
                "category" => "历史",
                "question" => "洛阳白马寺创建于什么时候？",
                "answer" => "东汉"
            ],
            [
                "category" => "历史",
                "question" => "中国第一座佛教寺院是哪一座？",
                "answer" => "洛阳白马寺"
            ],
            [
                "category" => "历史",
                "question" => "白马寺在哪个地区？",
                "answer" => "河南"
            ],
            [
                "category" => "历史",
                "question" => "在唐代以下哪个是真正的寺庙：白马寺、鸿胪寺、大理寺？",
                "answer" => "白马寺"
            ],
            [
                "category" => "历史",
                "question" => "河南洛阳有一座历史悠久的古寺被称为“中国第一古刹”，这座寺庙是？",
                "answer" => "白马寺"
            ],
            [
                "category" => "历史",
                "question" => "下列人物皆是精通兵法的军事人才，按年代顺序，所处年代最晚的是谁？",
                "answer" => "郭嘉"
            ],
            [
                "category" => "历史",
                "question" => "根据几个词语选出相关联的历史人物：赤兔马、貂蝉、辕门射戟？",
                "answer" => "吕布"
            ],
            [
                "category" => "历史",
                "question" => "清朝入关后的第一位皇帝是",
                "answer" => "顺治"
            ],
            [
                "category" => "历史",
                "question" => "皇太极是清朝第一位皇帝，其称号为？",
                "answer" => "清太宗"
            ],
            [
                "category" => "历史",
                "question" => "古代的死刑除了需要当即问斩的以外，其他的死刑一般在什么季节执行？",
                "answer" => "秋"
            ],
            [
                "category" => "历史",
                "question" => "假如你是清朝初期的一位刑部侍郎，在你上班的时候可能会接触到下面哪项工作任务？",
                "answer" => "修订法律条文"
            ],
            [
                "category" => "历史",
                "question" => "杜甫曾任工部侍郎，所以后人称他为？",
                "answer" => "杜工部"
            ],
            [
                "category" => "历史",
                "question" => "唐朝曾出现了中国历史上唯一一位女皇帝，请问她是？",
                "answer" => "武则天"
            ],
            [
                "category" => "历史",
                "question" => "被武则天赞叹很有才气,说“宰相安得失此人”的诗人是谁？",
                "answer" => "骆宾王"
            ],
            [
                "category" => "历史",
                "question" => "中国有个女皇帝武则天 但还有个女丞相是谁？",
                "answer" => "上官婉儿"
            ],
            [
                "category" => "历史",
                "question" => "经历了唐高宗和武则天两代，被后人称为“唐室砥柱”的是谁？",
                "answer" => "狄仁杰"
            ],
            [
                "category" => "历史",
                "question" => "谁乘武则天年老病危，拥立中宗复位，重新建立唐朝？",
                "answer" => "张柬之"
            ],
            [
                "category" => "历史",
                "question" => "武则天在位期间创立了殿试和什么制度？",
                "answer" => "武举"
            ],
            [
                "category" => "历史",
                "question" => "武则天一生一共谋杀了多少人？",
                "answer" =>"93"
            ],
            [
                "category" => "历史",
                "question" => "武则天的尊号是什么？",
                "answer" => "则天大圣皇帝"
            ],
            [
                "category" => "历史",
                "question" => "武则天建立的朝代，国号是什么？",
                "answer" => "周"
            ],
            [
                "category" => "历史",
                "question" => "在封建的男权社会中，武则天作为我国历史上惟一的女皇帝，引发了时人和后人更多的关注和争议。下列这些评论中，最准确的是什么？",
                "answer" => "颇有作为，推动了社会经济文化继续发展"
            ],
            [
                "category" => "历史",
                "question" => "我国一代女皇武则天的墓碑上写着什么内容",
                "answer" => "什么都没写"
            ],
            [
                "category" => "历史",
                "question" => "隋唐时期，青年李进是当地远近闻名的骑射好手。一天，他告别父母，满怀信心地赶赴洛阳参加武举考试。这可能发生在下列哪位皇帝统治时",
                "answer" => "武则天"
            ],
            [
                "category" => "历史",
                "question" => "武则天的第一个老公是谁？",
                "answer" => "唐太宗"
            ],
            [
                "category" => "历史",
                "question" => "据考证，大写数字“壹、贰、叁、肆、伍、陆、柒、捌、玖、拾”最早由武则天发明，后经朱元璋改进完善。这些大写数字主要用于财会账目方面，它们的最主要作用是什么？",
                "answer" => "防止涂改"
            ],
            [
                "category" => "历史",
                "question" => "以下哪位皇帝为了给自己取名而新造了一个字出来？",
                "answer" => "武则天"
            ],
            [
                "category" => "历史",
                "question" => "李世民的改革措施是什么？",
                "answer" => "恤民"
            ],
            [
                "category" => "历史",
                "question" => "康熙决定收复台湾之初，郑氏提出了什么要求，但康熙依然决定武力收复台湾",
                "answer" => "照朝鲜事例，不削发，称臣纳贡"
            ],
            [
                "category" => "历史",
                "question" => "我国泉水资源极为丰富，一般所说的“中国五大名泉”是指镇江中冷泉、无锡惠山泉、苏州观音泉、杭州虎跑泉和济南趵突泉。传说被清代康熙皇帝封为“天下第一泉”的是上述哪一名泉？",
                "answer" => "济南趵突泉"
            ],
            [
                "category" => "历史",
                "question" => "承德避暑山庄是哪个皇帝开始建造",
                "answer" => "康熙"
            ],
            [
                "category" => "历史",
                "question" => "康熙和乾隆所题名的“七十二景”位于哪里",
                "answer" => "避暑山庄"
            ],
            [
                "category" => "历史",
                "question" => "清朝初期，康熙帝两次组织雅克萨之战，战胜了侵入我国黑龙江流域的？",
                "answer" => "沙俄侵略者"
            ],
            [
                "category" => "历史",
                "question" => "以下三个皇帝按时间先后顺序排列正确的是",
                "answer" => "康熙、雍正、乾隆"
            ],
            [
                "category" => "历史",
                "question" => "根据几个词语选出相关联的历史人物：清圣祖、平定三藩、抵抗沙俄？",
                "answer" => "康熙"
            ],
            [
                "category" => "历史",
                "question" => "古代历史上在位时间最长的皇帝是哪一位？",
                "answer" => "康熙"
            ],
            [
                "category" => "历史",
                "question" => "古时指南针不叫“指北针”是因为什么？",
                "answer" => "面南为尊，面北为卑"
            ],
            [
                "category" => "历史",
                "question" => "孔子诗经里为什么没赵国？",
                "answer" => "那时还没有赵国，赵国是战国出现的"
            ],
            [
                "category" => "历史",
                "question" => "假如你经朋友牵线介绍,去相亲,寒暄的时候对方说自己的家乡在“六朝古都”,你可以怎么回应？",
                "answer" => "南京是个好地方啊!"
            ],
            [
                "category" => "历史",
                "question" => "假设你获得了一块稀世罕见的宝玉,打算穿越时空前往明朝,把它进京献给明太祖朱元璋,那你应该往哪个方向走？",
                "answer" => "南京方向"
            ],
            [
                "category" => "历史",
                "question" => "古人讲究谦辞礼让，令媛是指对方的什么人？",
                "answer" => "女儿"
            ],
            [
                "category" => "历史",
                "question" => "泰姬陵的建造是纪念谁？",
                "answer" => "一位王妃"
            ],
            [
                "category" => "历史",
                "question" => "相传我国古代能作“掌上舞”的人是谁？",
                "answer" => "赵飞燕"
            ],
            [
                "category" => "历史",
                "question" => "下列事件《史记》中肯定没有记载的是？",
                "answer" => "蔡伦改进造纸术"
            ],
            [
                "category" => "历史",
                "question" => "造纸术大约是在什么朝代发明的",
                "answer" => "东汉"
            ],
            [
                "category" => "历史",
                "question" => "古城长安是中国历史上建都朝代最多的城市,下列哪个朝代曾在此地建都？",
                "answer" => "唐朝"
            ],
            [
                "category" => "历史",
                "question" => "故宫是中国最大、最完整的古建筑群，被誉为世界五大宫之一，故宫始建于哪个朝代？",
                "answer" => "明朝"
            ],
            [
                "category" => "历史",
                "question" => "“百家争鸣”是描述中国古代不同学派的涌现及各流派争芳斗艳的局面，这一现象发生在哪个历史时期？",
                "answer" => "春秋战国"
            ],
            [
                "category" => "历史",
                "question" => "假如你是清朝的一位巡抚，见到一位官职为“尚书”的官员，谈话间你应该称自己为？",
                "answer" => "下官"
            ],
            [
                "category" => "历史",
                "question" => "提出“师夷长技以制夷”的历史人物是？",
                "answer" => "魏源"
            ],
            [
                "category" => "历史",
                "question" => "大禹之子启废除了传统的部落“禅让制”，建立了中国历史上第一个国家，也是第一个奴隶制王朝，这个王朝叫做？",
                "answer" => "夏朝"
            ],
            [
                "category" => "历史",
                "question" => "在王安石变法的措施中，兼有打击官僚贵族特权，增加财政收入和保障农民生产时间的是？",
                "answer" => "募役法"
            ],
            [
                "category" => "历史",
                "question" => "根据几个词语选出相关联的历史人物：楚汉战争、开国皇帝、市井无赖？",
                "answer" => "刘邦"
            ],
            [
                "category" => "历史",
                "question" => "假如你奉了明成祖朱棣的圣旨,负责监察“迁都”工程的进度,在此任务期间,你基本在哪上班？",
                "answer" => "北京"
            ],
            [
                "category" => "历史",
                "question" => "北魏末年贾思勰编写的《齐民要术》所总结的是",
                "answer" => "农业生产技术"
            ],
            [
                "category" => "历史",
                "question" => "中国历史上现存的第一部完整的农业百科全书是？",
                "answer" => "齐民要术"
            ],
            [
                "category" => "历史",
                "question" => "中国古代四大才女是哪四位？",
                "answer" => "蔡文姬、卓文君、李清照、班昭"
            ],
            [
                "category" => "历史",
                "question" => "“不战而屈人之兵”的思想是谁提出的？",
                "answer" => "孙武"
            ],
            [
                "category" => "历史",
                "question" => "南京在历史上的别称不包含以下哪个？",
                "answer" => "汴京"
            ],
            [
                "category" => "历史",
                "question" => "假如你是唐朝的一位礼部尚书,在你上班的时候可能会接触到下面哪项工作任务？",
                "answer" => "举办科举考试"
            ],
            [
                "category" => "历史",
                "question" => "假如你是唐朝一位在职官员,有一天接到朝廷一纸命令,你被左迁为太守,这时你的心情应该是？",
                "answer" => "失意，失落"
            ],
            [
                "category" => "历史",
                "question" => "战国时期，各国都有自己独特的货币，其中使用“铲形币”的是",
                "answer" => "赵国"
            ],
            [
                "category" => "历史",
                "question" => "假如你来到“战国七雄“时代,到邯郸的菜市场去买二斤猪头肉,你的身上应该携带下面哪种钱币？",
                "answer" => "铲形币"
            ],
            [
                "category" => "历史",
                "question" => "假设你是清朝初期一位智商正常的候补官员,现在有三个职位缺人,任你挑选,巡抚,知府,知州,一般来说你会选择哪一个？",
                "answer" => "巡抚"
            ],
            [
                "category" => "历史",
                "question" => "古代人们所说的巡抚相当于现代的什么官职？",
                "answer" => "省长"
            ],
            [
                "category" => "历史",
                "question" => "战国时期，晋国分裂为哪几个国家？",
                "answer" => "韩，赵，魏"
            ],
            [
                "category" => "历史",
                "question" => "“开元盛世”是哪个皇帝所创？",
                "answer" => "李隆基"
            ],
            [
                "category" => "历史",
                "question" => "历史上把唐朝的全盛时期称为",
                "answer" =>"“开元盛世”"
            ],
            [
                "category" => "历史",
                "question" => "“开元盛世”是我国历史上哪个朝代的盛世？",
                "answer" => "唐"
            ],
            [
                "category" => "历史",
                "question" => "清明两代“乡试”的考试地点一般是设在哪里？",
                "answer" => "在各省省城"
            ],
            [
                "category" => "历史",
                "question" => "秦国太守李冰为消除水患、灌溉农田、改善民生而修建的水利工程是",
                "answer" => "都江堰"
            ],
            [
                "category" => "历史",
                "question" => "古代著名的水利工程都江堰是谁设计的？",
                "answer" => "李冰父子"
            ],
            [
                "category" => "历史",
                "question" => "下列各项生产技术在新石器时代以前出现的是？",
                "answer" => "用骨针缝制兽皮衣服"
            ],
            [
                "category" => "历史",
                "question" => "新石器时代属于石器时代的哪个时期？",
                "answer" => "晚期"
            ],
            [
                "category" => "历史",
                "question" => "辽宁曾被称为什么？",
                "answer" => "奉天"
            ],
            [
                "category" => "历史",
                "question" => "我国第一部农业生产技术论著是？",
                "answer" => "《天工开物》"
            ],
            [
                "category" => "历史",
                "question" => "《天工开物》是明代记载农业手工业技术的著作，其作者是",
                "answer" => "宋应星"
            ],
            [
                "category" => "历史",
                "question" => "李龟年是唐朝的",
                "answer" => "乐师"
            ],
            [
                "category" => "历史",
                "question" => "古人所称的“顿首”之礼是指",
                "answer" => "跪而头叩地"
            ],
            [
                "category" => "历史",
                "question" => "编制《大衍历》的唐代著名佛教天文学家是谁？",
                "answer" => "一行(僧一行)"
            ],
            [
                "category" => "历史",
                "question" => "假如乾隆任命你为“御史”，那么你接下来的主要工作内容是什么？",
                "answer" => "纠察官吏"
            ],
            [
                "category" => "历史",
                "question" => "假如你想来想去想写一本书,书名是《历代开国皇帝的故事》,那么这本书里基本上不会提到下面哪个人？",
                "answer" => "唐高宗李治"
            ],
            [
                "category" => "历史",
                "question" => "以下几点是哪个朝代发生的事：发明活字印刷、指南针及火药、庆历新政、王安石变法？",
                "answer" => "宋朝"
            ],
            [
                "category" => "历史",
                "question" => "我国古代的“四大发明”是指印刷术,火药,指南针和什么？",
                "answer" => "造纸术"
            ],
            [
                "category" => "历史",
                "question" => "我国古代的“四大发明”，是指造纸，火药，指南针和什么？",
                "answer" => "印刷术"
            ],
            [
                "category" => "历史",
                "question" => "我国古代的“四大发明”，是指造纸，印刷术，指南针和什么？",
                "answer" => "火药"
            ],
            [
                "category" => "历史",
                "question" => "我国古代的“四大发明”，是指造纸，印刷术，火药和什么？",
                "answer" => "指南针"
            ],
            [
                "category" => "历史",
                "question" => "以下不是中国四大发明的是",
                "answer" => "中药"
            ],
            [
                "category" => "历史",
                "question" => "古人用“廿”字所表示的数值是？",
                "answer" => "二十"
            ],
            [
                "category" => "历史",
                "question" => "唐三彩主要是指哪三种色彩？",
                "answer" => "黄、绿、白"
            ],
            [
                "category" => "历史",
                "question" => "假如你是岳飞手下的一员战将，正在参加“郾城之战”，这时你可以在阵前高喊下面哪个口号？",
                "answer" => "一鼓作气，剿灭金贼!"
            ],
            [
                "category" => "历史",
                "question" => "以下哪位是明朝著名的抗倭将领？",
                "answer" => "戚继光"
            ],
            [
                "category" => "历史",
                "question" => "下列古代建筑与国家相连不正确的是？",
                "answer" => "帕台农神庙—罗马"
            ],
            [
                "category" => "历史",
                "question" => "古代朝政中的“六部”是指哪六个部门？",
                "answer" => "吏、户、礼、兵、刑、工"
            ],
            [
                "category" => "历史",
                "question" => "古代用“沉鱼落雁，闭月羞花”形容女性之美，其中“闭月”是指的哪一位？",
                "answer" => "貂蝉"
            ],
            [
                "category" => "历史",
                "question" => "古代用“沉鱼落雁，闭月羞花”形容女性之美，其中“沉鱼”是指的哪一位？",
                "answer" => "西施"
            ],
            [
                "category" => "历史",
                "question" => "传说中的江南四大才子唐伯虎、祝枝山、文征明、徐祯卿，出生于什么朝代？",
                "answer" => "明朝"
            ],
            [
                "category" => "历史",
                "question" => "与“精忠报国”，“莫须有”等事件有关的历史人物是？",
                "answer" => "岳飞"
            ],
            [
                "category" => "历史",
                "question" => "根据几个词语选出相关联的历史人物：江东，小乔，英年早逝？",
                "answer" => "周瑜"
            ],
            [
                "category" => "历史",
                "question" => "中国古代名医华佗为谁治病却被杀害？",
                "answer" => "曹操"
            ],
            [
                "category" => "历史",
                "question" => "“为中华之崛起而读书”是哪位名人的立志名言？",
                "answer" => "周恩来"
            ],
            [
                "category" => "历史",
                "question" => "我国七大古都之一，驰名中外的历史文化名城，居“天下之中”，素有“九州腹地”之称的是哪个城市？",
                "answer" => "洛阳"
            ],
            [
                "category" => "历史",
                "question" => "假如你一觉醒来,发现自己回到了古代,并且成为朝廷官员,奉命参加《永乐大典》的编辑工作,这时你基本上可以判定这是哪个朝代？",
                "answer" => "明朝"
            ],
            [
                "category" => "历史",
                "question" => "开始把字体由隶书转化为楷书的书法家是？",
                "answer" => "三国时期的钟繇"
            ],
            [
                "category" => "历史",
                "question" => "三国后期，魏国的哪位将领率先攻入蜀国的都城？",
                "answer" => "邓艾"
            ],
            [
                "category" => "历史",
                "question" => "我国有一位世界著名的伟大航海家，他就是七次下西洋的？",
                "answer" => "郑和"
            ],
            [
                "category" => "历史",
                "question" => "“苍天已死，黄天当立，岁在甲子，天下大吉”是哪次起义的口号？",
                "answer" => "黄巾军起义"
            ],
            [
                "category" => "历史",
                "question" => "1851年1月11日，有人在广西桂平县金田村率众起义，后来建国，号“太平天国”。该起义的发起人是谁？",
                "answer" => "洪秀全"
            ],
            [
                "category" => "历史",
                "question" => "根据几个词语猜相关联的历史人物：医药世家，中草药，本草纲目？",
                "answer" => "李时珍"
            ],
            [
                "category" => "历史",
                "question" => "假如你来到了宋朝,发现老百姓们正在张灯结彩,在灯笼上贴满各式各样的谜语,那么你可以判断现在是农历的几月份？",
                "answer" => "正月"
            ],
            [
                "category" => "历史",
                "question" => "郑成功收复台湾后，将台湾改名为？",
                "answer" => "东都"
            ],
            [
                "category" => "历史",
                "question" => "灯谜是我国传统的谜语形式,在南宋,人们又把猜谜叫什么呢？",
                "answer" => "射虎"
            ],
            [
                "category" => "历史",
                "question" => "我国古代称什么为“弄瓦”？",
                "answer" => "女孩"
            ],
            [
                "category" => "历史",
                "question" => "东吴立国、定都南京，开创南京都城历史的是？",
                "answer" => "孙权"
            ],
            [
                "category" => "历史",
                "question" => "古代六艺“礼、乐、射、御、书、数”中的御是指",
                "answer" => "驾御车马"
            ],
            [
                "category" => "历史",
                "question" => "“二十四史”的最后一部是？",
                "answer" => "明史"
            ],
            [
                "category" => "历史",
                "question" => "古代小说常用“沉鱼落雁，闭月羞花”形容女性之美，其中“闭月”和以下哪位人物有关？",
                "answer" => "貂蝉"
            ],
            [
                "category" => "历史",
                "question" => "黄巢起义发生在公元多少年？",
                "answer" => "公元875年"
            ],
            [
                "category" => "历史",
                "question" => "九九乘法口诀是什么时期出现的？",
                "answer" => "春秋战国"
            ],
            [
                "category" => "历史",
                "question" => "注意细节建朝，北宋建朝时所定的京都是哪里？",
                "answer" => "南京"
            ],
            [
                "category" => "历史",
                "question" => "注意细节建国，北宋建国时所定的京都是哪里？",
                "answer" => "开封"
            ],
            [
                "category" => "历史",
                "question" => "世界上最早由国家颁布的药典是",
                "answer" => "《唐本草》"
            ],
            [
                "category" => "历史",
                "question" => "称为两榜出身的是",
                "answer" => "进士"
            ],
            [
                "category" => "历史",
                "question" => "古人所称的“拙荆”是指什么？",
                "answer" => "自己的妻子"
            ],
            [
                "category" => "历史",
                "question" => "唐朝灭亡后，中原一带先后出现了五个朝代，史称“五代”，除后梁、后唐、后晋外还有什么？",
                "answer" => "后汉 后周"
            ],
            [
                "category" => "历史",
                "question" => "古时对厨师职业的人称为什么？",
                "answer" => "庖"
            ],
            [
                "category" => "历史",
                "question" => "西周时期出现的“十五国风”是指什么？",
                "answer" => "十五种地方民歌"
            ],
            [
                "category" => "历史",
                "question" => "五谷原是中国古代所称的五种谷物，后泛指粮食类作物。包括：稻、黍、稷、麦、菽。那你知道其中的菽是指什么作物吗？",
                "answer" => "大豆"
            ],
            [
                "category" => "历史",
                "question" => "世界最大的青铜器是什么？",
                "answer" => "司母戊鼎"
            ],
            [
                "category" => "历史",
                "question" => "下面各项中，最能反映我国古代青铜工艺水平和成就的是什么？",
                "answer" => "司母戊鼎"
            ],
            [
                "category" => "历史",
                "question" => "司母戊鼎是为了什么而建造的",
                "answer" => "儿子祭祀母亲"
            ],
            [
                "category" => "历史",
                "question" => "人们用珠算口诀帮助记忆，以下口诀正确的是",
                "answer" => "五去五进一"
            ],
            [
                "category" => "历史",
                "question" => "算盘发明后，人们用珠算口诀帮助记忆，以下口诀错误的是",
                "answer" => "四上二去五"
            ],
            [
                "category" => "历史",
                "question" => "宫城的正门被称为什么？",
                "answer" => "午门"
            ],
            [
                "category" => "历史",
                "question" => "中国古代人们所说的“元旦”是指哪一天？",
                "answer" => "春节"
            ],
            [
                "category" => "历史",
                "question" => "袈裟为什么叫百纳衣？",
                "answer" => "因为袈裟是用百家的布缝制成"
            ],
            [
                "category" => "历史",
                "question" => "“六一居士”是谁的别号？",
                "answer" => "欧阳修"
            ],
            [
                "category" => "历史",
                "question" => "拍卖起源于西方国家，影视中常见的“底价起拍、价高者得”是属于哪种拍卖方式？",
                "answer" => "英格兰式拍卖"
            ],
            [
                "category" => "历史",
                "question" => "“中华开国五千年,神州轩辕白古传，创造指南车，平定蚩尤乱，世界文明，唯有我先。”这里赞扬的是哪位历史人物？",
                "answer" => "黄帝"
            ],
            [
                "category" => "历史",
                "question" => "美国第一任总统",
                "answer" => "华盛顿"
            ],
            [
                "category" => "历史",
                "question" => "古人称知命，是指多大的年龄的人？",
                "answer" =>"50"
            ],
            [
                "category" => "历史",
                "question" => "提出“信息高速公路”的美国总统",
                "answer" => "克林顿"
            ],
            [
                "category" => "历史",
                "question" => "我国古代文化灿烂辉煌，各个时代都有独特的文学艺术成就，古典小说创作高峰出现在",
                "answer" => "明清时期"
            ],
            [
                "category" => "历史",
                "question" => "吴承恩是哪人？",
                "answer" => "江苏"
            ],
            [
                "category" => "历史",
                "question" => "从什么时候起最高领导者被称为“皇帝”？",
                "answer" => "秦朝"
            ],
            [
                "category" => "历史",
                "question" => "明朝“脸涂胡椒粉被仆役抬着四处走”的是谁？",
                "answer" => "杨慎"
            ],
            [
                "category" => "历史",
                "question" => "“铜权”是古代常见的金属器物，后来被俗称什么？",
                "answer" => "秤砣"
            ],
            [
                "category" => "历史",
                "question" => "古人讲究尊称礼节，谈到对方父亲时一般称为",
                "answer" => "令尊"
            ],
            [
                "category" => "历史",
                "question" => "二十四史是中国古代各朝撰写的二十四部史书的总称，是被历来的朝代纳为正统的史书，故又称正史”。请问二十四史，最后一部写的是那个朝代的历史？",
                "answer" => "明朝"
            ],
            [
                "category" => "历史",
                "question" => "三国时建造“铜雀台”的是谁？",
                "answer" => "曹操"
            ],
            [
                "category" => "历史",
                "question" => "古代许多诗句中都有“折柳”二字，这是什么情况下的习俗？",
                "answer" => "送别"
            ],
            [
                "category" => "历史",
                "question" => "古代人参有多种雅称，以下不属于人参雅称的是哪个？",
                "answer" => "赤箭"
            ],
            [
                "category" => "历史",
                "question" => "宋太祖赵匡胤通过哪个事件夺取政权建立宋朝",
                "answer" => "陈桥兵变"
            ],
            [
                "category" => "历史",
                "question" => "我国最早的表演艺术是",
                "answer" => "杂技"
            ],
            [
                "category" => "历史",
                "question" => "以下不是古代“订婚”习俗的是什么？",
                "answer" => "送戒指"
            ],
            [
                "category" => "历史",
                "question" => "古代军队调兵遣将的信物是？",
                "answer" => "虎符"
            ],
            [
                "category" => "历史",
                "question" => "嫘祖为我们所熟知，是因为以下哪件事情？",
                "answer" => "养蚕制衣"
            ],
            [
                "category" => "历史",
                "question" => "古代发明的“云梯”按用途来讲属于什么？",
                "answer" => "攻城器械"
            ],
            [
                "category" => "历史",
                "question" => "名不正则言不顺”是哪家的思想？",
                "answer" => "儒家"
            ],
            [
                "category" => "历史",
                "question" => "秦始皇大兴土木，修建了世界闻名的工程，请问这个工程是什么？",
                "answer" => "长城"
            ],
            [
                "category" => "历史",
                "question" => "在古代，下列哪个词语中用来称呼对方妻子？",
                "answer" => "令阃"
            ],
            [
                "category" => "历史",
                "question" => "以下不是古代“祭祀”准备活动的是什么？",
                "answer" => "赏灯"
            ],
            [
                "category" => "历史",
                "question" => "唐太宗经常以什么书法写碑？",
                "answer" => "行书"
            ],
            [
                "category" => "历史",
                "question" => "孝文帝拓拔宏属于以下哪个民族？",
                "answer" => "鲜卑族"
            ],
            [
                "category" => "历史",
                "question" => "历史上著名的“胡蓝之狱”发生在哪个朝代？",
                "answer" => "明"
            ],
            [
                "category" => "历史",
                "question" => "俞伯牙摔琴谢知音摔的是什么乐器",
                "answer" => "瑶琴"
            ],
            [
                "category" => "历史",
                "question" => "笄礼是古代女子几岁成年的插笄仪式？",
                "answer" => "15岁"
            ],
            [
                "category" => "历史",
                "question" => "古代女子成年行什么礼？",
                "answer" => "笄礼"
            ],
            [
                "category" => "历史",
                "question" => "唐代长安城大街上种植的树是什么？",
                "answer" => "槐树"
            ],
            [
                "category" => "历史",
                "question" => "我国什么时候开始用砖瓦？",
                "answer" => "西周"
            ],
            [
                "category" => "历史",
                "question" => "中国神话传说中人类的始祖是谁？",
                "answer" => "女娲"
            ],
            [
                "category" => "历史",
                "question" => "中国古代建筑中有顶的通道称为？",
                "answer" => "廊"
            ],
            [
                "category" => "历史",
                "question" => "以下工具中，哪个不是鲁班发明的？",
                "answer" => "纵云梯"
            ],
            [
                "category" => "历史",
                "question" => "以下工具中，哪个不是鲁班发明的？",
                "answer" => "圆规"
            ],
            [
                "category" => "历史",
                "question" => "被奉为建筑工匠之祖(建筑业鼻祖)的战国建筑师是？",
                "answer" => "鲁班"
            ],
            [
                "category" => "历史",
                "question" => "清朝的前一个朝代是哪个？",
                "answer" => "明朝"
            ],
            [
                "category" => "历史",
                "question" => "唐蕃古道的由来？",
                "answer" => "馒头岭古驿道"
            ],
            [
                "category" => "历史",
                "question" => "唐僧法号什么？",
                "answer" => "玄奘"
            ],
            [
                "category" => "历史",
                "question" => "药王孙思邈所著医术叫什么？",
                "answer" => "《千金方》"
            ],
            [
                "category" => "历史",
                "question" => "著有《千金方》，被后世称为“药王”的是？",
                "answer" => "孙思邈"
            ],
            [
                "category" => "历史",
                "question" => "唐朝时六渡日本(东渡日本)宣扬佛教为当时两国邦交做出重大贡献的是谁？",
                "answer" => "鉴真"
            ],
            [
                "category" => "历史",
                "question" => "鉴真和尚东渡日本几次才成功？",
                "answer" => "6次"
            ],
            [
                "category" => "历史",
                "question" => "“不为五斗米折腰”的古代人物是谁？",
                "answer" => "陶渊明"
            ],
            [
                "category" => "历史",
                "question" => "陶渊明号什么？",
                "answer" => "五柳先生"
            ],
            [
                "category" => "历史",
                "question" => "竹林七贤之一阮籍官至？",
                "answer" => "步兵校尉"
            ],
            [
                "category" => "历史",
                "question" => "孟浩然字什么？",
                "answer" => "名浩，字浩然，号孟山人"
            ],
            [
                "category" => "历史",
                "question" => "哪位君主采纳“罢黜百家，独尊儒术”的建议？",
                "answer" => "汉武帝"
            ],
            [
                "category" => "历史",
                "question" => "向汉武帝建议“罢黜百家，独尊儒术”的是谁？",
                "answer" => "董仲舒"
            ],
            [
                "category" => "历史",
                "question" => "三国马超是哪个民族？",
                "answer" => "羌族"
            ],
            [
                "category" => "历史",
                "question" => "“将相和”讲的是廉颇和蔺相如的故事，他们是战国时期的哪国人？",
                "answer" => "赵国"
            ],
            [
                "category" => "历史",
                "question" => "《资治通鉴》是我国第一部编年体通史，它的作者是谁？",
                "answer" => "司马光"
            ],
            [
                "category" => "历史",
                "question" => "清朝推行“摊丁入亩”制度的皇帝是谁？",
                "answer" => "雍正"
            ],
            [
                "category" => "历史",
                "question" => "太平天国起义的核心领导人中，封为“西王”的是谁？",
                "answer" => "萧朝贵"
            ],
            [
                "category" => "历史",
                "question" => "古时用“十二生肖”对应十二地支，其中与“辰”对应的是哪个？",
                "answer" => "龙"
            ],
            [
                "category" => "历史",
                "question" => "棉纺织革新家黄道婆是哪个朝代的人？",
                "answer" => "元朝"
            ],
            [
                "category" => "历史",
                "question" => "我国第一部诗歌总集是什么？",
                "answer" => "诗经"
            ],
            [
                "category" => "历史",
                "question" => "我国第一部词典是什么？",
                "answer" => "《尔雅》"
            ],
            [
                "category" => "历史",
                "question" => "科举考试中，考上院试的人称为什么？",
                "answer" => "秀才"
            ],
            [
                "category" => "历史",
                "question" => "进行京剧表演的戏院，在清朝最早叫什么？",
                "answer" => "茶园"
            ],
            [
                "category" => "历史",
                "question" => "太平天国起义核心人物之一，被称为“北王”的是谁？",
                "answer" => "韦昌辉"
            ],
            [
                "category" => "历史",
                "question" => "在肥水之战中,大败的君主错误的是？",
                "answer" => "曹操"
            ],
            [
                "category" => "历史",
                "question" => "明代的小说有很高的艺术成就《三国演义》的作者是？",
                "answer" => "罗贯中"
            ],
            [
                "category" => "历史",
                "question" => "中国第一个奴隶制度的王朝是哪个(第一个朝代)？",
                "answer" => "夏朝"
            ],
            [
                "category" => "历史",
                "question" => "传说中文字是谁发明的？",
                "answer" => "仓颉"
            ],
            [
                "category" => "历史",
                "question" => "清代官服上绣有方形图案，称为“补子”，其中一品文官的图案是什么？",
                "answer" => "仙鹤"
            ],
            [
                "category" => "历史",
                "question" => "清代官服上绣有大块的“补丁”即“补子”，那么“补丁”上的图案是什么？",
                "answer" => "飞禽走兽"
            ],
            [
                "category" => "历史",
                "question" => "清代官服上绣有方形图案，称为“补子”，其中一品武官的图案是什么？",
                "answer" => "麒麟"
            ],
            [
                "category" => "历史",
                "question" => "园林史上光彩夺目标瑰宝，被称为是世界上最大最宏伟的园林，而且被誉为“一切造园林艺术的典范”的是？",
                "answer" => "圆明园"
            ],
            [
                "category" => "历史",
                "question" => "被称为“万园之园”，后被焚毁的建筑是什么？",
                "answer" => "圆明园"
            ],
            [
                "category" => "历史",
                "question" => "不属于属于四大名园的是哪个？",
                "answer" => "圆明园"
            ],
            [
                "category" => "历史",
                "question" => "汉末，著名医学家华佗，发明了一种健身的体操，请问是什么？",
                "answer" => "五禽戏"
            ],
            [
                "category" => "历史",
                "question" => "“五禽戏”起源于汉代，它属于什么？",
                "answer" => "强身健体的功法"
            ],
            [
                "category" => "历史",
                "question" => "按古代兄弟排行的顺序(次序)，次子应该称为什么?",
                "answer" => "仲"
            ],
            [
                "category" => "历史",
                "question" => "“苦心人，天不负，卧薪尝胆，三千越甲可吞吴”说的是谁？",
                "answer" => "勾践"
            ],
            [
                "category" => "历史",
                "question" => "商朝末年，商纣王暴虐，是谁推翻了商，建立了周？",
                "answer" => "周武王"
            ],
            [
                "category" => "历史",
                "question" => "战国时期，与“合纵连横”这一外交军事政策关联的人物是？",
                "answer" => "苏秦与张仪"
            ],
            [
                "category" => "历史",
                "question" => "战国时期，苏秦主张的“合纵”是指以下哪种外交方针？",
                "answer" => "弱国联盟，对抗强大的秦国"
            ],
            [
                "category" => "历史",
                "question" => "三国时期，马谡曾在街亭一战败给哪位魏国大将？",
                "answer" => "张郃"
            ],
            [
                "category" => "历史",
                "question" => "“洛阳纸贵”指的作品是下面哪一部？",
                "answer" => "左思的《三都赋》"
            ],
            [
                "category" => "历史",
                "question" => "晋代文学巨著《三都赋》写成后大受欢迎，因为抄写的人太多，京城洛阳的纸张供不应求，一时间全城纸价大幅度上升。《三都赋》的作者是哪一位文学家？",
                "answer" => "左思"
            ],
            [
                "category" => "历史",
                "question" => "北宋的两个著名词人晏殊和晏几道是什么关系？",
                "answer" => "父子"
            ],
            [
                "category" => "历史",
                "question" => "宋代大型酒店、食店在门前用木枋扎彩楼，加种种装饰，施朱绿彩画，称为什么？",
                "answer" => "欢门"
            ],
            [
                "category" => "历史",
                "question" => "柳公权是哪个朝代人？",
                "answer" => "唐朝人"
            ],
            [
                "category" => "历史",
                "question" => "明朝时，科举考试的命题范围是什么？",
                "answer" => "四书五经"
            ],
            [
                "category" => "历史",
                "question" => "四书五经中的“五经”是指？",
                "answer" => "诗、书、礼、易、春秋"
            ],
            [
                "category" => "历史",
                "question" => "“算盘”是古代的计算用具，正规的算盘中间用档木把算珠分为两栏，上栏每列两珠，下栏每列的珠数是？",
                "answer" => "五珠"
            ],
            [
                "category" => "历史",
                "question" => "古代所称“先考”是一种尊敬的称法，指的是？",
                "answer" => "已逝世的父亲"
            ],
            [
                "category" => "历史",
                "question" => "东汉时期的“黄巾起义”领导者是",
                "answer" => "张角"
            ],
            [
                "category" => "历史",
                "question" => "最古老的医院是设在？",
                "answer" => "教堂里"
            ],
            [
                "category" => "历史",
                "question" => "孔泰发明的现在通用的铅笔是由石墨和什么混合制成的?",
                "answer" => "粘土"
            ],
            [
                "category" => "历史",
                "question" => "古代有一种名为“珮”的首饰，一般是佩带在哪里？",
                "answer" => "腰"
            ],
            [
                "category" => "历史",
                "question" => "“胄”是古代士兵使用的防护用具，用来保护哪个部位？",
                "answer" => "头部"
            ],
            [
                "category" => "历史",
                "question" => "清朝乾隆时期编写了古代最大的一部丛书，分为经，史，子，集四部，这部丛书是？",
                "answer" => "四库全书"
            ],
            [
                "category" => "历史",
                "question" => "古人讲究谦辞礼让，谈到自己儿子时一般称为？",
                "answer" => "犬子"
            ],
            [
                "category" => "历史",
                "question" => "四羊方尊是哪个朝代的文物？",
                "answer" => "商"
            ],
            [
                "category" => "历史",
                "question" => "李世民在什么地方诛李建成？",
                "answer" => "玄武门"
            ],
            [
                "category" => "历史",
                "question" => "玄武门之变发生于唐高祖武德？",
                "answer" => "9年"
            ],
            [
                "category" => "历史",
                "question" => "玄武门之变历史事件中，魏征是谁的部下？",
                "answer" => "李建成"
            ],
            [
                "category" => "历史",
                "question" => "以下谁不是玄武门之变的参与者？",
                "answer" => "李元霸"
            ],
            [
                "category" => "历史",
                "question" => "以下不是古代祭祀常用牲畜的是",
                "answer" => "兔"
            ],
            [
                "category" => "历史",
                "question" => "在淝水之战中战败的君主是？",
                "answer" => "苻坚"
            ],
            [
                "category" => "历史",
                "question" => "春秋战国时期诸子百家不包括？",
                "answer" => "佛家"
            ],
            [
                "category" => "历史",
                "question" => "通往帝王陵区的神道上，石头动物后面的石人又叫做？",
                "answer" => "石翁仲"
            ],
            [
                "category" => "历史",
                "question" => "古代的“走马灯”是一种什么类型的灯？",
                "answer" => "能够旋转的装饰灯"
            ],
            [
                "category" => "历史",
                "question" => "唐朝高等学府是？",
                "answer" => "国子监"
            ],
            [
                "category" => "历史",
                "question" => "“农田水利法”是历史上哪次变法中提出的兴农措施？",
                "answer" => "王安石变法"
            ],
            [
                "category" => "历史",
                "question" => "屈原是春秋时代哪国人？",
                "answer" => "楚国"
            ],
            [
                "category" => "历史",
                "question" => "最早提出“地理”名称的书是？",
                "answer" => "周易"
            ],
            [
                "category" => "历史",
                "question" => "我国第一部地理书是？",
                "answer" => "禹贡"
            ],
            [
                "category" => "历史",
                "question" => "我国什么时候开始用砖瓦",
                "answer" => "西周"
            ],
            [
                "category" => "历史",
                "question" => "驿站在元朝时称为？",
                "answer" => "站赤"
            ],
            [
                "category" => "历史",
                "question" => "世界上最早记载“哈雷彗星”的书是？",
                "answer" => "春秋"
            ],
            [
                "category" => "历史",
                "question" => "太平天国起义的核心领导人中，冯云山被封为？",
                "answer" => "南王"
            ],
            [
                "category" => "历史",
                "question" => "著有《徐霞客游记》的徐霞客是哪个朝代的人？",
                "answer" => "明朝"
            ],
            [
                "category" => "历史",
                "question" => "手绢是由古代的什么演变而来？",
                "answer" => "头巾"
            ],
            [
                "category" => "历史",
                "question" => "隋唐时的三省六部制中的三省，不包括下列哪个省？",
                "answer" => "甘肃省"
            ],
            [
                "category" => "历史",
                "question" => "古有三省六部制，下列哪个不是三省之一？",
                "answer" => "政事省"
            ],
            [
                "category" => "历史",
                "question" => "唐武宗崇信道教，深恶佛教，在位期间发动了打击佛教的运动被佛教徒称为什么？",
                "answer" => "会昌法难"
            ],
            [
                "category" => "历史",
                "question" => "佛教是什么朝代传入我国？",
                "answer" => "东汉"
            ],
            [
                "category" => "历史",
                "question" => "清末商人胡雪岩创办的著名中药堂名叫？",
                "answer" => "胡庆余堂"
            ],
            [
                "category" => "历史",
                "question" => "凌烟阁二十四功臣排名第一位的是谁？",
                "answer" => "长孙无忌"
            ],
            [
                "category" => "历史",
                "question" => "唐太宗时期中国北方少数民族专称李世民为？",
                "answer" => "天可汗"
            ],
            [
                "category" => "历史",
                "question" => "唐朝“三箭定江山”等事迹有关的有物是谁？",
                "answer" => "薛仁贵"
            ],
            [
                "category" => "历史",
                "question" => "配制世界上最早的麻醉药剂“麻沸散”的是？",
                "answer" => "华佗"
            ],
            [
                "category" => "历史",
                "question" => "北宋庆历年间，印刷技术逐渐成熟，中国四大发明中的活字印刷术是谁发明的？",
                "answer" => "毕升(毕昇)"
            ],
            [
                "category" => "历史",
                "question" => "唐朝的画圣是？",
                "answer" => "吴道子"
            ],
            [
                "category" => "历史",
                "question" => "有“画圣”美誉的吴道子是哪朝人？",
                "answer" => "唐朝"
            ],
            [
                "category" => "历史",
                "question" => "中国第一部完整的药物学著作(药典)是什么？",
                "answer" => "《神农本草经》"
            ],
            [
                "category" => "历史",
                "question" => "世称“颜筋柳骨”的书法大家柳公权，他是哪个朝代人士？",
                "answer" => "唐朝"
            ],
            [
                "category" => "历史",
                "question" => "古代四大美女在唐朝的是？",
                "answer" => "杨玉环"
            ],
            [
                "category" => "历史",
                "question" => "李世民随父灭隋后被封为？",
                "answer" => "秦王"
            ],
            [
                "category" => "历史",
                "question" => "古人发明的一种工艺“耒耜”(leisi)是在哪个行业？",
                "answer" => "农业"
            ],
            [
                "category" => "历史",
                "question" => "赵州桥被美国土木工程师学会认定为世界第几处“国际土木工程历史古迹”？",
                "answer" => "第十二处"
            ],
            [
                "category" => "历史",
                "question" => "古代工艺中的“云雕”是指？",
                "answer" => "一种漆雕工艺"
            ],
            [
                "category" => "历史",
                "question" => "平定安史之乱、采取结盟回纥，打击吐蕃的策略，保卫了国家安宁的唐朝名将是谁？",
                "answer" => "郭子仪"
            ],
            [
                "category" => "历史",
                "question" => "唐代著名的古文运动的倡导者是韩愈和谁？",
                "answer" => "柳宗元"
            ],
            [
                "category" => "历史",
                "question" => "北宋欧阳修等人编著的历史书叫什么？",
                "answer" => "《新唐书》"
            ],
            [
                "category" => "历史",
                "question" => "“煮酒论英雄”的典故发生在哪个时期？",
                "answer" => "三国时期"
            ],
            [
                "category" => "历史",
                "question" => "“宋瓷”闻名世界，宋代五大名窑除定窑、哥窑、钧窑、官窑外，还有哪个？",
                "answer" => "汝窑"
            ],
            [
                "category" => "历史",
                "question" => "东汉时期我国出现了世界上第一台监测报告地震的仪？",
                "answer" => "张衡"
            ],
            [
                "category" => "历史",
                "question" => "世界上公认的最早的地震预测仪器是由我国古代科学家张衡制造的，该仪器名称叫什么？",
                "answer" => "地动仪"
            ],
            [
                "category" => "历史",
                "question" => "最古老的绘画形式是？",
                "answer" => "壁画"
            ],
            [
                "category" => "历史",
                "question" => "推翻唐朝统治建立的后梁的是谁？",
                "answer" => "朱温"
            ],
            [
                "category" => "历史",
                "question" => "唐太宗临终前被招为顾命大臣，又是初唐四家之一的是？",
                "answer" => "褚遂良"
            ],
            [
                "category" => "历史",
                "question" => "“百岁神医”孙思邈是世界上第一个发明导尿术的人，您知道他是用什么导尿的吗？",
                "answer" => "葱管"
            ],
            [
                "category" => "历史",
                "question" => "被称为“小李杜”的唐代诗人是李商隐和谁？",
                "answer" => "杜牧"
            ],
            [
                "category" => "历史",
                "question" => "被称为“小李杜”的唐代诗人是杜牧和谁？",
                "answer" => "李商隐"
            ],
            [
                "category" => "历史",
                "question" => "东汉时期，纸张逐渐代替竹简和丝帛来书写文字，在总结前人经验的基础上改进了造纸术的是？",
                "answer" => "蔡伦"
            ],
            [
                "category" => "历史",
                "question" => "古代民间所用的“顶针”属于？",
                "answer" => "缝纫用具"
            ],
            [
                "category" => "历史",
                "question" => "尊是古代的一种容器，它一般用来装什么？",
                "answer" => "装酒"
            ],
            [
                "category" => "历史",
                "question" => "北宋的赵括所著的《梦溪笔谈》主要记载的是？",
                "answer" => "古代科技"
            ],
            [
                "category" => "历史",
                "question" => "秦代的“兵马俑”体现了古代工匠的哪项高超技艺？",
                "answer" => "制陶工艺"
            ],
            [
                "category" => "历史",
                "question" => "以下哪个名胜古迹的历史最悠久？",
                "answer" => "兵马俑"
            ],
            [
                "category" => "历史",
                "question" => "中国第一部系统分析字形和考求字的本义的字典是",
                "answer" => "《说文解字》"
            ],
            [
                "category" => "历史",
                "question" => "中国的第一部按部首编排的字典(中文字典)叫什么？",
                "answer" => "《说文解字》"
            ],
            [
                "category" => "历史",
                "question" => "送文成公主合亲的使者是？",
                "answer" => "禄东赞"
            ],
            [
                "category" => "历史",
                "question" => "初唐凌云阁二十四功臣之中被唐高祖李渊赐姓李的名将是谁？",
                "answer" => "李绩"
            ],
            [
                "category" => "历史",
                "question" => "玄奘口述，弟子记的西方见闻书是什么？",
                "answer" => "《大唐西域记》"
            ],
            [
                "category" => "历史",
                "question" => "太师椅最早出现在哪个朝代？",
                "answer" => "宋朝"
            ],
            [
                "category" => "历史",
                "question" => "挂红灯的习俗和唐末的谁有关？",
                "answer" => "黄巢"
            ],
            [
                "category" => "历史",
                "question" => "唐朝的开国皇帝是？",
                "answer" => "李渊"
            ],
            [
                "category" => "历史",
                "question" => "第一位给风力定级的唐代天文学家、数学家是谁？",
                "answer" => "李淳风"
            ],
            [
                "category" => "历史",
                "question" => "唐代文宗曾向天下发布一个罕见的诏书，称张旭的草书、斐旻的剑舞和谁的诗歌可成为天下三绝？",
                "answer" => "李白"
            ],
            [
                "category" => "历史",
                "question" => "据考证指南车(司南车)为三国何人所造？",
                "answer" => "马钧"
            ],
            [
                "category" => "历史",
                "question" => "世界上最早产茶饮茶的国家是？",
                "answer" => "中国"
            ],
            [
                "category" => "历史",
                "question" => "大昭寺和小昭寺是哪位藏王在位期间建立的？",
                "answer" => "松赞干布"
            ],
            [
                "category" => "历史",
                "question" => "下列遗址遗迹中最能体现民族团结友好的是？",
                "answer" => "大昭寺会盟碑"
            ],
            [
                "category" => "历史",
                "question" => "程咬金在加入李世民之前是什么地方的起义军？",
                "answer" => "瓦岗寨"
            ],
            [
                "category" => "历史",
                "question" => "程咬金的原名是？",
                "answer" => "程知节"
            ],
            [
                "category" => "历史",
                "question" => "左衽是指什么？",
                "answer" => "少数民族"
            ],
            [
                "category" => "历史",
                "question" => "唐朝历史上诛杀宦官的时间是下列哪个？",
                "answer" => "甘露之变"
            ],
            [
                "category" => "历史",
                "question" => "“甘露之变”想要诛杀的宦官首领是谁？",
                "answer" => "仇士良"
            ],
            [
                "category" => "历史",
                "question" => "唐朝中央官制中的“三省”分别是中书省、尚书省和什么？",
                "answer" => "门下省"
            ],
            [
                "category" => "历史",
                "question" => "唐僧的名字叫什么？",
                "answer" => "陈祎"
            ],
            [
                "category" => "历史",
                "question" => "西晋时期，皇族为了争夺政权发动的动乱被称作？",
                "answer" => "八王之乱"
            ],
            [
                "category" => "历史",
                "question" => "八王之乱中的“八王”指的是？",
                "answer" => "赵王司马伦、齐王司马冏、成都王司马颖、河间王司马顒、长沙王司马乂、东海王司马越、汝南王司马亮、楚王司马玮"
            ],
            [
                "category" => "历史",
                "question" => "八王之乱中的汝南王是谁？",
                "answer" => "司马亮"
            ],
            [
                "category" => "历史",
                "question" => "八王之乱中的司马颙是什么王？",
                "answer" => "河间王"
            ],
            [
                "category" => "历史",
                "question" => "人们常用“新郎官”来称呼新婚的男士，你知道这个称呼最初在古代史指什么？",
                "answer" => "新科进士"
            ],
            [
                "category" => "历史",
                "question" => "由唐玄宗天宝十四年开始的，安禄山等人领导的起兵反对唐王朝的叛乱，历史上称为什么？",
                "answer" => "安史之乱"
            ],
            [
                "category" => "历史",
                "question" => "唐朝由强盛走向衰落的转折点是什么事件？",
                "answer" => "安史之乱"
            ],
            [
                "category" => "历史",
                "question" => "李世民的同母兄弟共几人？",
                "answer" => "4人"
            ],
            [
                "category" => "历史",
                "question" => "唐朝的“古文运动”提倡散文，反对什么文？",
                "answer" => "骈文"
            ],
            [
                "category" => "历史",
                "question" => "唐代倡导“古文运动”运动的两个代表人物是谁？",
                "answer" => "韩愈和柳宗元"
            ],
            [
                "category" => "历史",
                "question" => "我国第一部文选是什么？",
                "answer" => "《昭明文选》"
            ],
            [
                "category" => "历史",
                "question" => "唐僧取的经书存放在什么地方？",
                "answer" => "大雁塔"
            ],
            [
                "category" => "历史",
                "question" => "唐朝除都城长安外的东都在哪儿？",
                "answer" => "洛阳"
            ],
            [
                "category" => "历史",
                "question" => "唐朝实行什么货币制度？",
                "answer" => "钱帛兼行"
            ],
            [
                "category" => "历史",
                "question" => "紫薇之术的“紫薇”是指？",
                "answer" => "中书省"
            ],
            [
                "category" => "历史",
                "question" => "中国历来封建王朝的经济特征？",
                "answer" => "重农抑商"
            ],
            [
                "category" => "历史",
                "question" => "唐朝哪位天文学家在世界上首先测量了子午线的长度？",
                "answer" => "僧一行"
            ],
            [
                "category" => "历史",
                "question" => "玄奘历经4年到达哪座寺庙取得真经？？",
                "answer" => "那烂陀寺"
            ],
            [
                "category" => "历史",
                "question" => "文成公主前往和亲的国家？",
                "answer" => "吐蕃"
            ],
            [
                "category" => "历史",
                "question" => "下列反映唐与吐蕃交往的史实是？",
                "answer" => "文成公主入藏"
            ],
            [
                "category" => "历史",
                "question" => "唐三藏西天取的什么经？",
                "answer" => "《大乘佛法》"
            ],
            [
                "category" => "历史",
                "question" => "皇帝穿的龙袍又称什么？",
                "answer" => "龙衮"
            ],
            [
                "category" => "历史",
                "question" => "唐代供奉开国二十四位功臣画像的地点是？",
                "answer" => "凌烟阁"
            ],
            [
                "category" => "历史",
                "question" => "三师指太师、太傅跟什么？",
                "answer" => "太保"
            ],
            [
                "category" => "历史",
                "question" => "“中秋”一词最早见于我国哪部古籍？",
                "answer" => "周礼"
            ],
            [
                "category" => "历史",
                "question" => "古有“清明节”前一天为寒食节一说，相传起源于春秋战国时期晋文公悼念介子推的什么事迹？",
                "answer" => "割股充饥"
            ],
            [
                "category" => "历史",
                "question" => "诰作为王命文书开始于？",
                "answer" => "西周"
            ],
            [
                "category" => "历史",
                "question" => "诰命发放的对象不同，叫法也不同。请问封给生者的叫什么？",
                "answer" => "诰封"
            ],
            [
                "category" => "历史",
                "question" => "著名喜剧电影艺术家卓别林出生于哪个国家？",
                "answer" => "英国"
            ],
            [
                "category" => "历史",
                "question" => "李德裕长期与李宗闵及牛僧儒为首的朋党斗争,后人称这个事为？",
                "answer" => "牛李党争"
            ],
            [
                "category" => "历史",
                "question" => "牛李党争是以牛僧儒和谁为首的争斗？",
                "answer" => "李德裕"
            ],
            [
                "category" => "历史",
                "question" => "西安事变促成国共的第几次合作？",
                "answer" => "第二次"
            ],
            [
                "category" => "历史",
                "question" => "唐太宗李世民统治时期的年号是什么？",
                "answer" => "贞观"
            ],
            [
                "category" => "历史",
                "question" => "由于推行“开明务实”政策，唐初出现了什么样的社会局面？",
                "answer" => "贞观之治"
            ],
            [
                "category" => "历史",
                "question" => "从电视剧《贞观长歌》中可以看出：统治者重视发展生产、减轻农民负担，从而开创了“贞观之治”的局面。这位统治者是谁？",
                "answer" => "唐太宗"
            ],
            [
                "category" => "历史",
                "question" => "京剧戏衣基本上沿用的是哪个朝代的服装？",
                "answer" => "明"
            ],
            [
                "category" => "历史",
                "question" => "从哪个朝代开始有了民办报纸？",
                "answer" => "宋朝"
            ],
            [
                "category" => "历史",
                "question" => "唐朝初年，玄奘一共取回了多少经书？",
                "answer" => "657部"
            ],
            [
                "category" => "历史",
                "question" => "唐朝末年朱温发动的一次诛杀朝官的事件被称为什么？",
                "answer" => "白马之祸"
            ],
            [
                "category" => "历史",
                "question" => "月饼一词最早见于南宋吴自牧的什么饼？",
                "answer" => "红菱饼"
            ],
            [
                "category" => "历史",
                "question" => "唐朝以前的月饼叫什么？",
                "answer" => "胡饼"
            ],
            [
                "category" => "历史",
                "question" => "春秋时期的五霸分别为谁？",
                "answer" => "齐桓公、晋文公、秦穆公、宋襄公、楚庄王"
            ],
            [
                "category" => "历史",
                "question" => "晋文公推崇介之推什么？",
                "answer" => "隐不违亲"
            ],
            [
                "category" => "历史",
                "question" => "春秋五霸中哪位霸主最先称霸？",
                "answer" => "齐桓公"
            ],
            [
                "category" => "历史",
                "question" => "上官婉儿被唐中宗封为什么？",
                "answer" => "昭容"
            ],
            [
                "category" => "历史",
                "question" => "唐代有64种大曲，其节奏复杂、曲调丰富，结构严密，具有大型歌舞的高级形式。大区中有一部分名为法曲”，富于《清商乐》的优雅情调。法曲中有一舞蹈被称为唐代舞蹈之冠，请问是那个舞蹈？",
                "answer" => "《霓裳雨衣》"
            ],
            [
                "category" => "历史",
                "question" => "宦官仇士良一生弑杀多少个皇帝？",
                "answer" => "2个"
            ],
            [
                "category" => "历史",
                "question" => "历史中玄奘西行五万里，到达印度求取真经花费了多少年？",
                "answer" => "17年"
            ],
            [
                "category" => "历史",
                "question" => "玄奘的梵文名字叫什么？",
                "answer" => "摩诃耶那提婆奴"
            ],
            [
                "category" => "历史",
                "question" => "西湖白堤的得名与哪位诗人有关？",
                "answer" => "白居易"
            ],
            [
                "category" => "历史",
                "question" => "在杭州西湖与白居易有关的建筑是？",
                "answer" => "白堤"
            ],
            [
                "category" => "历史",
                "question" => "北京目前公认的燕京八景是那个皇帝钦定的？",
                "answer" => "乾隆"
            ],
            [
                "category" => "历史",
                "question" => "李世民第一次吃败仗输给隋将的谁？",
                "answer" => "薛举"
            ],
            [
                "category" => "历史",
                "question" => "清明起源于何时？",
                "answer" => "春秋战国"
            ],
            [
                "category" => "历史",
                "question" => "唐朝中央官制中的“三公”分别是什么？",
                "answer" => "司徒、司空、太尉"
            ],
            [
                "category" => "历史",
                "question" => "唐末农民战争(农民起义)从公元多少年开始？",
                "answer" => "公元859年"
            ],
            [
                "category" => "历史",
                "question" => "第一届亚运会火炬的火种源自？",
                "answer" => "印度新德里"
            ],
            [
                "category" => "历史",
                "question" => "中国共产党是什么时候成立的？",
                "answer" => "1921年7月23日在上海法租界成立"
            ],
            [
                "category" => "历史",
                "question" => "邮票是邮政机关发行，供寄递邮件贴用的邮资凭证，中国最早的邮票是什么邮票？",
                "answer" => "大龙邮票"
            ],
            [
                "category" => "历史",
                "question" => "在清光绪年间出现了中国第一枚邮票“海关大龙邮票”，当时曾对邮票有一种非常特殊的称谓是什么？",
                "answer" => "老人头"
            ],
            [
                "category" => "历史",
                "question" => "第一次鸦片战争发生于哪一年？",
                "answer" => "1840年"
            ],
            [
                "category" => "历史",
                "question" => "第一届奥运会举办于哪一年？",
                "answer" => "1896年"
            ],
            [
                "category" => "历史",
                "question" => "广东大部分地区在秦朝时属于哪一郡管辖？",
                "answer" => "南海郡"
            ],
            [
                "category" => "历史",
                "question" => "中国民族工业短暂发展时涌现的民族资本家不包括？",
                "answer" => "张之洞"
            ],
            [
                "category" => "历史",
                "question" => "中国第一枚邮票是在哪一年发行的？",
                "answer" => "1878年"
            ],
            [
                "category" => "历史",
                "question" => "邮票的发明者？",
                "answer" => "罗兰希尔"
            ],
            [
                "category" => "历史",
                "question" => "中国体育史上的第一个世界纪录？",
                "answer" => "陈镜开"
            ],
            [
                "category" => "历史",
                "question" => "关于科举制的表述不正确的是？",
                "answer" => "明经科是做高官的主要途径"
            ],
            [
                "category" => "历史",
                "question" => "到2007年高考已经恢复30年了，它是我国高校选拔人才的主要形式。你知道唐朝主要采用什么制度选拔人才吗？",
                "answer" => "科举制"
            ],
            [
                "category" => "历史",
                "question" => "下列哪座长江大桥是我国第一座长江大桥？",
                "answer" => "武汉长江大桥"
            ],
            [
                "category" => "历史",
                "question" => "皇帝作为国家元首的正式称号起源于哪个朝代？",
                "answer" => "秦朝"
            ],
            [
                "category" => "历史",
                "question" => "第一套奥林匹克邮票由哪个国家发行？",
                "answer" => "希腊"
            ],
            [
                "category" => "历史",
                "question" => "中国人民银行成立于哪一年？",
                "answer" => "1948年"
            ],
            [
                "category" => "历史",
                "question" => "一位法国学者说，(宋代中国)“现代化”的程度令人吃惊在经济和人民日常生活方面，中国是当时世界上首屈一指的国家。下列名词能够反映宋代社会经济与人民生活“现代化”水平的有①会子②蕃坊③瓦舍④岁币⑤互市",
                "answer" => "①②③⑤"
            ],
            [
                "category" => "历史",
                "question" => "以下哪位三国人物并非刘备麾下“五虎将”之一？",
                "answer" => "魏延"
            ],
            [
                "category" => "历史",
                "question" => "三国时期吴国的首都建业是现在哪一个城市？",
                "answer" => "南京"
            ],
            [
                "category" => "历史",
                "question" => "中国军衔授勋开始于哪一年？",
                "answer" => "1955年"
            ],
            [
                "category" => "历史",
                "question" => "中国正式进入社会主义社会是哪一年？",
                "answer" => "1956年"
            ],
            [
                "category" => "历史",
                "question" => "商鞅变法的内容中，能反映中央集权思想的措施是？",
                "answer" => "推行县制"
            ],
            [
                "category" => "历史",
                "question" => "商鞅变法是在哪一国进行的？",
                "answer" => "秦国"
            ],
            [
                "category" => "历史",
                "question" => "哪一位不是“十大元帅”",
                "answer" => "毛泽东"
            ],
            [
                "category" => "历史",
                "question" => "五四运动的导火线是巴黎和会讨论中国青岛的什么问题？",
                "answer" => "归属问题"
            ],
            [
                "category" => "历史",
                "question" => "世界上最早的公用电话亭设置在什么地方？",
                "answer" => "电话公司内"
            ],
            [
                "category" => "历史",
                "question" => "中国第一个田径世界冠军是谁？",
                "answer" => "徐永久"
            ],
            [
                "category" => "历史",
                "question" => "有人为曹操翻案时说：“如果说曹操篡汉是为汉贼，岂不是儿子产生老子？”这里“儿子产生老子”的含义是？",
                "answer" => "曹丕废汉自立使曹操背受骂名"
            ],
            [
                "category" => "历史",
                "question" => "辽宋夏金时期是我国历史上民族政权并立的时代，其中位于北方与北宋并立的民族政权是？",
                "answer" => "辽"
            ],
            [
                "category" => "历史",
                "question" => "特洛伊木马一词经常用于比喻在敌方埋下伏兵里应外合的活动;而在计算机领域中，它是一种基于远程控制的黑客工具。请问“木马”的典故源于特洛伊人与哪个国家间的战争故事？",
                "answer" => "古希腊"
            ],
            [
                "category" => "历史",
                "question" => "赠给日本委奴国王金印的皇帝是？",
                "answer" => "汉光武帝"
            ],
            [
                "category" => "历史",
                "question" => "在唐朝之前，黄河流域一直是中国古代的经济文化中心，出现这一格局的原因主要在于黄河流域？",
                "answer" => "开发较早，农耕发达"
            ],
            [
                "category" => "历史",
                "question" => "中国第一个世界冠军谁？",
                "answer" => "容国团"
            ],
            [
                "category" => "历史",
                "question" => "诸葛亮与周瑜联手指挥的一场著名的以少胜多的战役是什么战役？",
                "answer" => "赤壁之战"
            ],
            [
                "category" => "历史",
                "question" => "历史上奠定了三国鼎立局面的战争是哪场？",
                "answer" => "赤壁之战"
            ],
            [
                "category" => "历史",
                "question" => "4世纪后期，统一黄河流域的少数民族政权是？",
                "answer" => "前秦"
            ],
            [
                "category" => "历史",
                "question" => "“申”是上海的简称，它的来源可能是什么？",
                "answer" => "古代诸侯的封号"
            ],
            [
                "category" => "历史",
                "question" => "下列哪个是对古代太子的尊称？",
                "answer" => "殿下"
            ],
            [
                "category" => "历史",
                "question" => "被称为亚运之父是以下哪位？",
                "answer" => "桑迪博士"
            ],
            [
                "category" => "历史",
                "question" => "古代科举中，会出现一人在乡试，会试，殿试中连过三关，俗称“连中三元”，那你知道状元是在什么考试中取得的吗？",
                "answer" => "殿试"
            ],
            [
                "category" => "历史",
                "question" => "科举中，会出现一人兼解元、会元、状元的“连中三元”，其分别是在什么考试中取得的？",
                "answer" => "乡试，会试，殿试"
            ],
            [
                "category" => "历史",
                "question" => "最早发现X射线的科学家是?",
                "answer" => "伦琴"
            ],
            [
                "category" => "历史",
                "question" => "某同学利用暑假准备实地考察我国境内已知的最早人类遗址应该去？",
                "answer" => "云南省"
            ],
            [
                "category" => "历史",
                "question" => "我国第一个打破田径世界纪录的选手？",
                "answer" => "郑凤荣"
            ],
            [
                "category" => "历史",
                "question" => "江南经济开发是中国古代经济的一个重要增长点。下列各项与江南经济持续开发不相关的是？",
                "answer" => "北魏孝文帝改革促进了江南经济的发展"
            ],
            [
                "category" => "历史",
                "question" => "台湾自古以来就是中国的领土。民族英雄郑成功在给殖民者的信中说：“台湾者，中国之地也，久为贵国所踞”信中所说的“贵国”是",
                "answer" => "荷兰"
            ],
            [
                "category" => "历史",
                "question" => "馒头很可能是以下哪位历史名人发明的？",
                "answer" => "诸葛亮"
            ],
            [
                "category" => "历史",
                "question" => "欧洲著名的百年战争发生在哪两个国家？",
                "answer" => "英国和法国"
            ],
            [
                "category" => "历史",
                "question" => "驸马是中国古代帝王女婿的称谓，又称帝婿、主婿、国婿等。你知道它最初是什么意思吗？",
                "answer" => "官职名"
            ],
            [
                "category" => "历史",
                "question" => "飞利浦电器最早属于那个国家产品？",
                "answer" => "荷兰"
            ],
            [
                "category" => "历史",
                "question" => "我国最早的纸币发行在",
                "answer" => "宋朝"
            ],
            [
                "category" => "历史",
                "question" => "西汉建立于公元前202年，公元9年灭亡，它实际存在",
                "answer" => "210年"
            ],
            [
                "category" => "历史",
                "question" => "某历史兴趣小组同学搜集了一组中国古代封建王朝建立者的图像，请你按时间顺序为其排列",
                "answer" => "②③①④"
            ],
            [
                "category" => "历史",
                "question" => "第一届世界杯足球赛的冠军是哪个国家？",
                "answer" => "乌拉圭"
            ],
            [
                "category" => "历史",
                "question" => "中国最晚成立的银行？",
                "answer" => "工商银行"
            ],
            [
                "category" => "历史",
                "question" => "传统彩瓷“素三彩”之所以称“素”是因为它不是哪种颜色？",
                "answer" => "红色"
            ],
            [
                "category" => "历史",
                "question" => "中国北宋时期出现的一种纸币，被认为是世界上最早使用的纸币，这种纸币是以下几种货币中的哪一种",
                "answer" => "交子"
            ],
            [
                "category" => "历史",
                "question" => "红军长征经过多少个省份？",
                "answer" => "12个"
            ],
            [
                "category" => "历史",
                "question" => "清朝前期实行“闭关锁国”政策其含义是?",
                "answer" => "严格限制对外贸易"
            ],
            [
                "category" => "历史",
                "question" => "世界上第一家麻将博物馆坐落在哪个国？",
                "answer" => "日本"
            ],
            [
                "category" => "历史",
                "question" => "罗马共和国执政官恺撒身穿丝绸长袍出现在罗马大剧院的时候，全场为之欢呼，丝绸服饰一时成为欧洲上屋社会的时尚。欧洲人能穿上中国丝绸制成的衣服最早应在",
                "answer" => "汉朝"
            ],
            [
                "category" => "历史",
                "question" => "在美国的拉什莫尔山(拉士摩尔山上)，有一群世界上最大的人面雕刻，因其山上雕刻着美国四位总统的头像，而被人称做“总统山”。他们是乔治·华盛顿，杰斐逊，林肯，和谁的头像？",
                "answer" => "罗斯福"
            ],
            [
                "category" => "历史",
                "question" => "下列人物中没有写过《长恨歌》的是？",
                "answer" => "池莉"
            ],
            [
                "category" => "历史",
                "question" => "“开眼看世界第一人”是谁？",
                "answer" => "林则徐"
            ],
            [
                "category" => "历史",
                "question" => "不属于印度支那三国的国家？",
                "answer" => "泰国"
            ],
            [
                "category" => "历史",
                "question" => "孙中山的妻子？",
                "answer" => "宋庆龄"
            ],
            [
                "category" => "历史",
                "question" => "许海峰为中国获得第一枚奥运金牌是什么项目？",
                "answer" => "自选手枪"
            ],
            [
                "category" => "历史",
                "question" => "秦始皇、汉武帝都是杰出的帝王，为中华民族发展做出过巨人的贡献。但他们在处理以下某一方面问题时态度截然相反，这个问题是？",
                "answer" => "儒家思想问题"
            ],
            [
                "category" => "历史",
                "question" => "传说中的黄帝被后人尊称为“人文初祖”，是因为他对中华民族作出了杰出的贡献。下列图片反映黄帝贡献的是？",
                "answer" => "①②③④"
            ],
            [
                "category" => "历史",
                "question" => "尼姑出现在哪个朝代？",
                "answer" => "南北朝"
            ],
            [
                "category" => "历史",
                "question" => "唐朝前是什么朝代？",
                "answer" => "隋朝"
            ],
            [
                "category" => "历史",
                "question" => "下列国家中，粮食产量在一亿吨以上，又是世界主要粮食出口国的是？",
                "answer" => "美国"
            ],
            [
                "category" => "历史",
                "question" => "唐代的北方草原上，契丹酋长辗转臣服于唐朝和谁之间？",
                "answer" => "突厥"
            ],
            [
                "category" => "历史",
                "question" => "古代官员上朝时，手上会拿着笏板，你知道它是用作什么吗？",
                "answer" => "记录重要的事情"
            ],
            [
                "category" => "历史",
                "question" => "在重阳节或者清明节的时候，人们都有放风筝的习俗，其实风筝早在春秋战国时期就已经存在，那你知道当时风筝的用途是什么吗？",
                "answer" => "军事目的"
            ],
            [
                "category" => "历史",
                "question" => "长安城有“斗城”之称，这是因何而得名？",
                "answer" => "城市布局"
            ],
            [
                "category" => "历史",
                "question" => "中国第一个举办亚运会的城市是？",
                "answer" => "北京"
            ],
            [
                "category" => "历史",
                "question" => "第几届亚运会开始对运动员进行药检？",
                "answer" => "第七届"
            ],
            [
                "category" => "历史",
                "question" => "唐朝时世界最大的城市是？",
                "answer" => "长安"
            ],
            [
                "category" => "历史",
                "question" => "商朝第一个皇帝是谁？",
                "answer" => "商汤"
            ],
            [
                "category" => "历史",
                "question" => "中国历史上第一部编年体史书？",
                "answer" => "《春秋》"
            ],
            [
                "category" => "历史",
                "question" => "我国历史上公布第一批成文法的历史时期是？",
                "answer" => "春秋战国"
            ],
            [
                "category" => "历史",
                "question" => "我国第一部字书是什么？",
                "answer" => "字通"
            ],
            [
                "category" => "历史",
                "question" => "中国历史上第一部断代史史书是什么？",
                "answer" => "《汉书》"
            ],
            [
                "category" => "历史",
                "question" => "历届亚运会参赛年龄最小的参赛选手年仅几岁？",
                "answer" => "7岁"
            ],
            [
                "category" => "历史",
                "question" => "第一届亚运会(首届亚运会)于1950年在印度的哪个城市举行？",
                "answer" => "新德里"
            ],
            [
                "category" => "历史",
                "question" => "从第几届亚运会开始中国的金牌数名列榜首(奖牌榜登顶)？",
                "answer" => "第九届新德里亚运"
            ],
            [
                "category" => "历史",
                "question" => "我国著名的赵州桥建于那个朝代？",
                "answer" => "隋朝"
            ],
            [
                "category" => "历史",
                "question" => "现存世界上最古老的一座石拱桥“赵州桥”的设计者是？",
                "answer" => "李春"
            ],
            [
                "category" => "历史",
                "question" => "亚运会历史上只有中国和哪个国家曾在一届亚运会夺取半数以上的金牌",
                "answer" => "日本"
            ],
            [
                "category" => "历史",
                "question" => "破世界纪录最多的亚运会是第几届亚运会？",
                "answer" => "第十二届"
            ],
            [
                "category" => "历史",
                "question" => "韩国、朝鲜运动员在开幕式持朝鲜半岛旗入场的是在第几届亚运会？",
                "answer" => "第十四届"
            ],
            [
                "category" => "历史",
                "question" => "亚运会与奥运会的区别不包括？",
                "answer" => "举办国不同"
            ],
            [
                "category" => "历史",
                "question" => "中国首次参加亚运时在奖牌榜排名第几？",
                "answer" => "第二"
            ],
            [
                "category" => "历史",
                "question" => "首届亚运会奖牌榜排名第一的国家是？",
                "answer" => "日本"
            ],
            [
                "category" => "历史",
                "question" => "第一届亚运会被列入比赛项目,但在第二届又被取消的项目是？",
                "answer" => "自行车"
            ],
            [
                "category" => "历史",
                "question" => "中国首次举办亚运会是的年份是？",
                "answer" => "1990年"
            ],
            [
                "category" => "历史",
                "question" => "什么是亚运会？",
                "answer" => "亚洲运动会简称“亚运会”，是国际奥委会所承认的地区性大型综合运动会，由亚洲奥林匹克理事会(亚奥理事会)主办。它是亚洲地区规模最大、水平最高的综合性运动会，代表整个亚洲的体育运动水平。亚运会每四年一届，与奥运会相间举行，会期不超过16天。亚运会比赛项目"
            ],
            [
                "category" => "历史",
                "question" => "哪一项不是2010亚运新增的具有中国传统特色的比赛项目？",
                "answer" => "武术"
            ],
            [
                "category" => "历史",
                "question" => "仰韵文化是我国历史上哪个时代中期的文化？",
                "answer" => "新石器"
            ],
            [
                "category" => "历史",
                "question" => "我国古代男子满20岁，女子满15岁要举行加冠及加笄之礼，示其已及婚嫁之年，那你知道加冠之礼跟加笄之礼其时是一种什么仪式吗？",
                "answer" => "成人仪式"
            ],
            [
                "category" => "历史",
                "question" => "古代女子15岁的别称是？",
                "answer" => "及笄"
            ],
            [
                "category" => "历史",
                "question" => "中国古代有五礼之说，其中祭祀活动被称为什么？",
                "answer" => "吉礼"
            ],
            [
                "category" => "历史",
                "question" => "中国古代有五礼之说，其中吊慰家国忧患方面的礼仪活动被称为什么？",
                "answer" => "凶礼"
            ],
            [
                "category" => "历史",
                "question" => "中国古代有五礼之说指哪五礼？",
                "answer" => "以祭祀之事为吉礼，丧葬之事为凶礼，军旅之事为军礼，宾客之事为宾礼，冠婚之事为嘉礼"
            ],
            [
                "category" => "历史",
                "question" => "魏国的信陵君、齐国的孟尝君、赵国的平原君、楚国的春申君并称为什么？",
                "answer" => "战国四公子"
            ],
            [
                "category" => "历史",
                "question" => "战国四公子指的是哪四个？",
                "answer" => "魏国的信陵君、齐国的孟尝君、赵国的平原君、楚国的春申君"
            ],
            [
                "category" => "历史",
                "question" => "下面哪一个不是战国四公子？",
                "answer" => "贾君鹏"
            ],
            [
                "category" => "历史",
                "question" => "巴比伦和古埃及是何种社会制度？",
                "answer" => "奴隶制度"
            ],
            [
                "category" => "历史",
                "question" => "降半旗是一个国家级的行为，一般在某重要人士逝世或重大不幸事件、严重自然灾害发生时来表达哀思和悼念。你知道此方式源于对什么人物的哀悼吗？",
                "answer" => "船长"
            ],
            [
                "category" => "历史",
                "question" => "“壮丽的金字塔、富有的宫殿和用古怪的象形文字刻在石板上的高度精确的历法。”--这些是古玛雅人留给我们的遗迹，同时也给世人留下了玛雅文明。那你知道玛雅文明是古代什么文明的代表吗？",
                "answer" => "印第安"
            ],
            [
                "category" => "历史",
                "question" => "清朝官员的官帽顶部称为顶戴，它用来区别官员品级，以红宝石为最高，依次为珊瑚、蓝宝石、青宝石、水晶、阵碟、素金、缕花阴文金顶、缕花阳文金顶。请问顶戴为红色的是几品官？",
                "answer" => "一品"
            ],
            [
                "category" => "历史",
                "question" => "《资政新篇》是哪一时期的纲领性文件？",
                "answer" => "太平天国后期"
            ],
            [
                "category" => "历史",
                "question" => "在世界史上两河文明中的两河是指幼发拉底河与？",
                "answer" => "底格里斯河"
            ],
            [
                "category" => "历史",
                "question" => "下列人种的分布中纯属人口迁移造成的是？",
                "answer" => "美洲黑色人种"
            ],
            [
                "category" => "历史",
                "question" => "我国女排曾经夺得“五连冠”。她们第一次夺冠是在哪次赛事上？",
                "answer" => "第3届排球世界杯赛"
            ],
            [
                "category" => "历史",
                "question" => "我国最早制造飞机的人是？",
                "answer" => "冯如"
            ],
            [
                "category" => "历史",
                "question" => "中国第一部写在纸上的书是？",
                "answer" => "《三国志》"
            ],
            [
                "category" => "历史",
                "question" => "“少先队”的全称是？",
                "answer" => "中国少年先锋队"
            ],
            [
                "category" => "历史",
                "question" => "第几届亚运会上，首次出现中国运动员的身影？",
                "answer" => "第二届"
            ],
            [
                "category" => "历史",
                "question" => "我国人口何时突破10亿？",
                "answer" => "1982年7月"
            ],
            [
                "category" => "历史",
                "question" => "第一个亚运村是第几届亚运会兴建的",
                "answer" => "第四届"
            ],
            [
                "category" => "历史",
                "question" => "我国最早的一部医学理论著作是？",
                "answer" => "《黄帝内经》"
            ],
            [
                "category" => "历史",
                "question" => "古时候在晚上人们喜欢用几更天来表达时间。那么现在的3点-5点对应当时的几更天？",
                "answer" => "五更天"
            ],
            [
                "category" => "历史",
                "question" => "古人称“而立”是指多大的年龄的人？",
                "answer" => "30"
            ],
            [
                "category" => "历史",
                "question" => "法国资产阶级革命爆发的时间是？",
                "answer" => "1789年7月14日"
            ],
            [
                "category" => "历史",
                "question" => "沙爹牛肉是由哪国传入我国的？",
                "answer" => "印尼"
            ],
            [
                "category" => "历史",
                "question" => "被称为我国“瓷都”的是指哪一个城市？",
                "answer" => "景德镇"
            ],
            [
                "category" => "历史",
                "question" => "第几届亚运会火炬传递传遍了所有参赛国家和地区？",
                "answer" => "第十五届"
            ],
            [
                "category" => "历史",
                "question" => "哪个城市是第一个两年内连续举办亚运、奥运的城市？",
                "answer" => "韩国汉城"
            ],
            [
                "category" => "历史",
                "question" => "广州亚运会的五祥的名称分别为？",
                "answer" => "阿祥、阿和、阿如、阿意、乐羊羊"
            ],
            [
                "category" => "历史",
                "question" => "哪位名人成为了2010广州亚运“亚运宣传大使”？",
                "answer" => "曾志伟"
            ],
            [
                "category" => "历史",
                "question" => "2010年广州亚运会总共有几个国家参加？",
                "answer" => "45个"
            ],
            [
                "category" => "历史",
                "question" => "2010年广州亚运会何时开幕时间是？",
                "answer" => "2010年11月12日"
            ],
            [
                "category" => "历史",
                "question" => "产生亚运会首枚金牌的比赛项目是？",
                "answer" => "游泳"
            ],
            [
                "category" => "历史",
                "question" => "我国古代的四大美女分别是？",
                "answer" => "貂蝉、西施、王昭君、杨玉环"
            ],
            [
                "category" => "历史",
                "question" => "在中国历史上，被称为铁面无私的宋朝著名清官是？",
                "answer" => "包公"
            ],
            [
                "category" => "历史",
                "question" => "下列那个国家内，“猫”是受到严格保护的？",
                "answer" => "古埃及"
            ],
            [
                "category" => "历史",
                "question" => "古埃及的法老自称？",
                "answer" => "太阳神的儿子"
            ],
            [
                "category" => "历史",
                "question" => "亚运会历史上火炬传递距离最长的一届亚运会是？",
                "answer" => "第十五届"
            ],
            [
                "category" => "历史",
                "question" => "香港第一次参加的是第几届亚运会？",
                "answer" => "第二届"
            ],
            [
                "category" => "历史",
                "question" => "古印度采用什么社会制度？",
                "answer" => "种姓制度"
            ],
            [
                "category" => "历史",
                "question" => "2001年11月6日在珠海开幕的中国航空航天博览会是第几届？",
                "answer" => "第三届"
            ],
            [
                "category" => "历史",
                "question" => "新中国第一部临时宪法的简称是？",
                "answer" => "《共同纲领》"
            ],
            [
                "category" => "历史",
                "question" => "世界上第一部成文宪法是？",
                "answer" => "《美国宪法》"
            ],
            [
                "category" => "历史",
                "question" => "在电视剧中，我们经常可以看到，古代帝王有时会将“丹书铁劵”颁发给功臣，重臣作为褒奖。你知道古代中的“丹书铁劵”有什么作用呢？",
                "answer" => "免罪的凭证"
            ],
            [
                "category" => "历史",
                "question" => "诺贝尔奖的设立，是为了纪念瑞典著名的科学家阿尔弗列德。伯里哈德。诺贝尔，同时也是为了表彰对社会与人类做出杰出贡献的科学家。请问诺贝尔基金设立的五大奖项，除了物理、化学、医学、文学之外，还有哪一项呢？",
                "answer" => "和平"
            ],
            [
                "category" => "历史",
                "question" => "中国古代三四岁至八九岁的儿童称为什么？",
                "answer" => "垂髫"
            ],
            [
                "category" => "历史",
                "question" => "一甲子是多少年？",
                "answer" => "六十年"
            ],
            [
                "category" => "历史",
                "question" => "传说明末清初，某乞丐偶尔得一鸡，苦无饮具调料，便将之去除内脏，带毛涂上泥巴，放入火中煨烤;待烤熟后敲去泥壳，发现鸡毛鸡毛随壳而脱，鸡肉香气四溢;这道菜是我国江苏常熟的传统名菜之一，你知道这道菜的名字叫什么吗？",
                "answer" => "叫花鸡"
            ],
            [
                "category" => "历史",
                "question" => "我国第一部古代制度史是？",
                "answer" => "《通典》"
            ],
            [
                "category" => "历史",
                "question" => "亚运历史上规模最大的亚运会是？",
                "answer" => "第十五届"
            ],
            [
                "category" => "历史",
                "question" => "首届亚运会的参赛国家和地区共有？",
                "answer" => "11个"
            ],
            [
                "category" => "历史",
                "question" => "广州亚运上，哪个不属于“申奥先入亚”的项目？",
                "answer" => "藤球"
            ],
            [
                "category" => "历史",
                "question" => "中华人民共和国从哪一届开始参加亚运会？首次参赛取得了怎样的成绩？",
                "answer" => "中华人民共和国于1973年加入亚洲运动会联合会;1974年第7届亚运会上，首次参赛的中华人民共和国代表团成绩一鸣惊人，夺得32金、44银、26铜，共102枚奖牌。奖牌总数位居第二名，仅次于日本。"
            ],
            [
                "category" => "历史",
                "question" => "与蓬莱，瀛洲并称三神山的是哪一座名山？",
                "answer" => "方丈"
            ],
            [
                "category" => "历史",
                "question" => "藤球运动发源于哪个国个地区？",
                "answer" => "东南亚"
            ],
            [
                "category" => "历史",
                "question" => "哥特式建筑的代表作是？",
                "answer" => "巴黎圣母大教堂"
            ],
            [
                "category" => "历史",
                "question" => "被誉为“忧郁王子”，唯一一个在三次世界杯上都有进球的意大利足球名将是谁？",
                "answer" => "罗伯特·巴乔"
            ],
            [
                "category" => "历史",
                "question" => "最早的手工艺品是？",
                "answer" => "瓷器"
            ],
            [
                "category" => "历史",
                "question" => "中国历史上第一部国别体史书是？",
                "answer" => "国语"
            ],
            [
                "category" => "历史",
                "question" => "美国篮球运动员乔丹几次被评为NBA最有价值球员？",
                "answer" => "5次"
            ],
            [
                "category" => "历史",
                "question" => "古希腊哪个国家的儿童一出世就要受到严格挑选，体质弱的会被抛之荒野？",
                "answer" => "斯巴达"
            ],
            [
                "category" => "历史",
                "question" => "邮票是邮政机关发行，供寄递邮件贴用的邮资凭证。世界上最早的邮票“黑便士”是哪个国家发行的？",
                "answer" => "英国"
            ],
            [
                "category" => "历史",
                "question" => "新中国第一套纪念邮票的主题是？",
                "answer" => "庆祝中国人民政治协商会议第一届全体会议"
            ],
            [
                "category" => "历史",
                "question" => "下面哪一个是联合国安理会常任理事国之一？",
                "answer" => "英国"
            ],
            [
                "category" => "历史",
                "question" => "联合国安理会常任理事国包括哪几个国家？",
                "answer" => "中华人民共和国（中国）、俄罗斯联邦（俄罗斯）、大不列颠及北爱尔兰联合王国（英国）和法兰西第五共和国（法国）、美利坚合众国（美国）"
            ],
            [
                "category" => "历史",
                "question" => "下列著名宫殿哪个位于英国？",
                "answer" => "白金汉宫"
            ],
            [
                "category" => "历史",
                "question" => "大汶口文化遗址在我国的什么地方？",
                "answer" => "山东"
            ],
            [
                "category" => "历史",
                "question" => "第一个举办亚运会的非首都城市是？",
                "answer" => "日本广岛"
            ],
            [
                "category" => "历史",
                "question" => "最早设计的轮椅有几个轮子？",
                "answer" => "三个"
            ],
            [
                "category" => "历史",
                "question" => "新中国首次参加的是哪一届亚运会？",
                "answer" => "第七届"
            ],
            [
                "category" => "历史",
                "question" => "亚运历史上规模最小的亚运会是？",
                "answer" => "第一届"
            ],
            [
                "category" => "历史",
                "question" => "2010年广州亚运会会徽的创意来源于哪里？",
                "answer" => "五羊传说"
            ],
            [
                "category" => "历史",
                "question" => "香港在第几届亚运会首次以中国香港的名义参加亚运会？",
                "answer" => "第十三届"
            ],
            [
                "category" => "历史",
                "question" => "截至第十五届亚运会，中国代表团已连续几次问鼎亚运会金牌榜第一",
                "answer" => "七次"
            ],
            [
                "category" => "历史",
                "question" => "隋朝哪位工匠建造了世界上最古老的石拱桥？",
                "answer" => "李春"
            ],
            [
                "category" => "历史",
                "question" => "筷子是起源于我国的餐具，它在古代叫什么？",
                "answer" => "箸"
            ],
            [
                "category" => "历史",
                "question" => "在古代，采取“明修栈道，暗度陈仓”的计策，平定三秦历史人物是？",
                "answer" => "韩信"
            ],
            [
                "category" => "历史",
                "question" => "历史上举办亚运会次数最多(四次)的城市是？",
                "answer" => "曼谷"
            ],
            [
                "category" => "历史",
                "question" => "正月初一吃饺子这一习俗是从哪个朝代开始的？",
                "answer" => "明朝"
            ],
            [
                "category" => "历史",
                "question" => "中华台北第一次参加的是第几届亚运会？",
                "answer" => "第二届"
            ],
            [
                "category" => "历史",
                "question" => "被称为“三苏”的北宋文学家父子三人中，哪一位是父亲？",
                "answer" => "苏洵"
            ],
            [
                "category" => "历史",
                "question" => "第一个环绕世界旅行的冒险家是谁？",
                "answer" => "麦哲伦"
            ],
            [
                "category" => "历史",
                "question" => "中华历史上第一个皇帝是谁？",
                "answer" => "秦始皇"
            ],
            [
                "category" => "历史",
                "question" => "秦始皇的名字是谁？",
                "answer" => "嬴政"
            ],
            [
                "category" => "历史",
                "question" => "2010年广州亚运会主场馆设在？",
                "answer" => "广东奥林匹克体育中心"
            ],
            [
                "category" => "历史",
                "question" => "下列哪一届亚运会会徽的旗帜曾在南极升起？",
                "answer" => "广州亚运会"
            ],
            [
                "category" => "历史",
                "question" => "亚运会的第一首会歌诞生于第几届亚运会",
                "answer" => "第二届"
            ],
            [
                "category" => "历史",
                "question" => "古代哪位帝王因国力鼎盛，而被外族尊称为“天可汗”",
                "answer" => "唐太宗(李世民)"
            ],
            [
                "category" => "历史",
                "question" => "我国7世纪初的一项伟大工程，经历过历代修造，至今仍发挥着运输作用的是一下哪项？",
                "answer" => "京杭大运河"
            ],
            [
                "category" => "历史",
                "question" => "中国古代“双手抱拳举过头顶，鞠躬”，这是什么拜礼？",
                "answer" => "长揖"
            ],
            [
                "category" => "历史",
                "question" => "七个不同的自然数排成一排，从第三个数开始，每个数都是它前面两个数之和，已知第四个数是4，求第七个数？",
                "answer" => "18"
            ],
            [
                "category" => "历史",
                "question" => "我国第一艘载人航天飞船叫什么名字？",
                "answer" => "神舟五号"
            ],
            [
                "category" => "历史",
                "question" => "古人说的三尺青锋是用来形容哪种武器？",
                "answer" => "剑"
            ],
            [
                "category" => "历史",
                "question" => "第一个横渡大西洋到达美洲的欧洲航海家是谁？",
                "answer" => "哥伦布"
            ],
            [
                "category" => "历史",
                "question" => "“以出世的精神做入世的事情”的思想源自哪个学派？",
                "answer" => "老庄学派"
            ],
            [
                "category" => "历史",
                "question" => "中国古代哪部作品最早提到了“小孔成像”原理？",
                "answer" => "《墨经》"
            ],
            [
                "category" => "历史",
                "question" => "我国“留学生”一词来源于何时？",
                "answer" => "唐朝"
            ],
            [
                "category" => "历史",
                "question" => "首先实现人类环绕地球一周的航行，证实了地球是一个球体的是谁？",
                "answer" => "麦哲伦"
            ],
            [
                "category" => "历史",
                "question" => "秦朝用哪一学派的思想作为统治思想？",
                "answer" => "法家"
            ],
            [
                "category" => "历史",
                "question" => "战国时期，“合纵连横”的苏秦是诸子百家中的哪一家？",
                "answer" => "纵横家"
            ],
            [
                "category" => "历史",
                "question" => "以下哪位皇帝为了给自己取名而新造了一个字？",
                "answer" => "武则天"
            ],
            [
                "category" => "历史",
                "question" => "著名古迹“秦始皇兵马俑”位于我国哪个省份？",
                "answer" => "陕西"
            ],
            [
                "category" => "历史",
                "question" => "“兼听则明，偏信则暗”这句古代格言是谁回答唐太宗的问题时说的？",
                "answer" => "魏征"
            ],
            [
                "category" => "历史",
                "question" => "我国的第一颗人造卫星是在哪一年发射成功的？",
                "answer" => "1970年"
            ],
            [
                "category" => "历史",
                "question" => "康熙是清朝的第几任皇帝？",
                "answer" => "康熙"
            ],
            [
                "category" => "历史",
                "question" => "唐朝是谁建立的？",
                "answer" => "李渊"
            ],
            [
                "category" => "历史",
                "question" => "传说中大禹治水，三过家门而不入。大禹当时治理的是哪条江河？",
                "answer" => "黄河"
            ],
            [
                "category" => "历史",
                "question" => "火星在中国古代被称为什么？",
                "answer" => "荧惑"
            ],
            [
                "category" => "历史",
                "question" => "诺贝尔是哪国人？",
                "answer" => "瑞典"
            ],
            [
                "category" => "历史",
                "question" => "在电视剧中，我们经常可以看到，古代帝王有时候会将“丹书铁券”颁发给功臣，重臣作为褒奖。你知道古代中的“丹书铁券”有什么作用吗？",
                "answer" => "免罪的凭证"
            ],
            [
                "category" => "历史",
                "question" => "清顺治元年，同时也是明崇祯多少年？",
                "answer" => "17年"
            ],
            [
                "category" => "历史",
                "question" => "古代四大美女中，哪位生活在西汉时期？",
                "answer" => "王昭君"
            ],
            [
                "category" => "历史",
                "question" => "康熙是清朝的第几位皇帝？",
                "answer" => "第四位"
            ],
            [
                "category" => "历史",
                "question" => "三书六礼是中国传统婚姻习俗礼仪，其中“六礼”可追溯至哪个朝代？",
                "answer" => "西周"
            ],
            [
                "category" => "历史",
                "question" => "在陕西法门寺地宫发掘的四枚佛指骨舍利中，有几枚是白玉雕成的“隐骨”？",
                "answer" => "三枚"
            ],
            [
                "category" => "历史",
                "question" => "人类历史上最早、最原始的“火药箭”出现在哪个朝代？",
                "answer" => "北宋"
            ],
            [
                "category" => "历史",
                "question" => "“前四史”是指“二十四史”中的前四部史书，其中不包括？",
                "answer" => "晋书"
            ],
            [
                "category" => "历史",
                "question" => "长庚是中国古代对哪一颗行星的称呼？",
                "answer" => "金星"
            ],
            [
                "category" => "历史",
                "question" => "北宋时期的“东京”是今天的哪里？",
                "answer" => "开封"
            ],
            [
                "category" => "历史",
                "question" => "《四库全书》创作于哪个那年代?",
                "answer" => "清朝"
            ],
            [
                "category" => "历史",
                "question" => "长平之战中，坑杀秦国40万秦将的人是谁?",
                "answer" => "白起"
            ],
            [
                "category" => "历史",
                "question" => "我国最早的文言志怪小说是哪部作品？",
                "answer" => "搜神记"
            ],
            [
                "category" => "历史",
                "question" => "阳关大道指通往哪里的道路？",
                "answer" => "西域"
            ],
            [
                "category" => "历史",
                "question" => "《项羽本纪》记述项羽“破釜沉舟”是发生在什么时候？",
                "answer" => "巨鹿之战后"
            ],
            [
                "category" => "历史",
                "question" => "江东小霸王是谁的称号？",
                "answer" => "孙策"
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
