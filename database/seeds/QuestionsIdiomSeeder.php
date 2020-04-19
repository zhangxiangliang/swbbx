<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionsIdiomSeeder extends Seeder
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
                "category" => "成语",
                "question" => "爱屋及乌的意思是指：比喻因为爱一个人而连带喜欢和他有关系的人或事物。那么你知道最早的时候，爱屋及乌中的“乌”是指什么？",
                "answer" => "乌鸦"
            ],
            [
                "category" => "成语",
                "question" => "俗话有说三教九流，其中的“三教”指什么？",
                "answer" => "儒佛道"
            ],
            [
                "category" => "成语",
                "question" => "现在有人形容女婿很优秀会叫做“东床快婿”，那你知道“东床快婿”的典故和以下哪位古人有关？",
                "answer" => "王羲之"
            ],
            [
                "category" => "成语",
                "question" => "“初出茅庐”中的“茅庐”本意是指谁的住处？",
                "answer" => "诸葛亮"
            ],
            [
                "category" => "成语",
                "question" => "“琴棋书画”中的“棋”指？",
                "answer" => "围棋"
            ],
            [
                "category" => "成语",
                "question" => "补牢中的“牢”指的是？",
                "answer" => "牲口圈"
            ],
            [
                "category" => "成语",
                "question" => "“名花解语”典故出自唐玄宗李隆基对杨氏后裔杨玉环的称誉，请问“名花解语”是用来形容什么的？",
                "answer" => "美女善解人意"
            ],
            [
                "category" => "成语",
                "question" => "我们常说五谷丰登，“五谷”指什么？",
                "answer" => "稻 黍 稷 麦 豆"
            ],
            [
                "category" => "成语",
                "question" => "“吴带当风”是形容我国唐代哪个画家的笔法？",
                "answer" => "吴道子"
            ],
            [
                "category" => "成语",
                "question" => "“天字第一号”的来源是什么？",
                "answer" => "天地玄黄"
            ],
            [
                "category" => "成语",
                "question" => "“无冕之王”的由来与下列哪一个有关？",
                "answer" => "英国《泰晤士报》"
            ],
            [
                "category" => "成语",
                "question" => "看故事猜成语：孙阳的儿子看了他写的《相马经》，以为相马很容易，就按照书上所绘的图形去找，一无所获;又按书中所写的特征去找，最后竟然把一只癞蛤蟆当成千里马带回家，让孙阳哭笑不得。",
                "answer" => "按图索骥"
            ],
            [
                "category" => "成语",
                "question" => "越王勾践被吴国打败后向吴国俯首称臣。构建从此晚上睡觉只睡柴草(古时叫薪)，又在屋里挂了一只苦胆，他不时会常常苦胆的味道，为的就是不忘过去的耻辱。大力发展国家，最后找到时机战胜吴国——这个故事说的是什么成语？",
                "answer" => "卧薪尝胆"
            ],
            [
                "category" => "成语",
                "question" => "“士别三日，刮目相看”源自孙权劝吕蒙学习的典故，这句话里的“刮目相看”意思是什么？",
                "answer" => "擦亮眼睛，用新眼光看待"
            ],
            [
                "category" => "成语",
                "question" => "“夜郎自大”中的“夜郎”指的是现在哪个地方？",
                "answer" => "贵州"
            ],
            [
                "category" => "成语",
                "question" => "“长绳系日”的寓意是？",
                "answer" => "想留住时光"
            ],
            [
                "category" => "成语",
                "question" => "“吉光片羽”中的“吉光”意思是什么？",
                "answer" => "吉祥之光"
            ],
            [
                "category" => "成语",
                "question" => "“凿壁偷光”是出自哪位古代人物的苦学故事？",
                "answer" => "匡衡"
            ],
            [
                "category" => "成语",
                "question" => "“碧落黄泉”中的“碧落”意思是什么？",
                "answer" => "天界"
            ],
            [
                "category" => "成语",
                "question" => "“户枢不蠹”的“不蠹”意思是什么？",
                "answer" => "不生虫"
            ],
            [
                "category" => "成语",
                "question" => "“望其项背”的近义词是什么？",
                "answer" => "望其肩项"
            ],
            [
                "category" => "成语",
                "question" => "“并日而食”的寓意是什么？",
                "answer" => "吃不饱，生活很穷困"
            ],
            [
                "category" => "成语",
                "question" => "“一曝十寒”的意思是什么？",
                "answer" => "形容没有恒心"
            ],
            [
                "category" => "成语",
                "question" => "“不舞之鹤”的寓意是什么？",
                "answer" => "指名不副实的无能的人"
            ],
            [
                "category" => "成语",
                "question" => "“一衣带水”的意思是什么？",
                "answer" => "形容一水之隔"
            ],
            [
                "category" => "成语",
                "question" => "“一曝十寒”的意思是什么？",
                "answer" => "形容没有恒心"
            ],
            [
                "category" => "成语",
                "question" => "“白首穷经”的寓意是什么？",
                "answer" => "活到老学到老"
            ],
            [
                "category" => "成语",
                "question" => "“一日三秋”的意思是什么？",
                "answer" => "形容思慕心切"
            ],
            [
                "category" => "成语",
                "question" => "“月怀一鸡”的寓意是什么？",
                "answer" => "知错却不改正"
            ],
            [
                "category" => "成语",
                "question" => "“投桃报李”的意思是什么？",
                "answer" => "礼尚往来"
            ],
            [
                "category" => "成语",
                "question" => "“噤若寒蝉”的意思是什么？",
                "answer" => "形容沉默不语"
            ],
            [
                "category" => "成语",
                "question" => "“蜀犬吠日”的意思是什么？",
                "answer" => "少见多怪"
            ],
            [
                "category" => "成语",
                "question" => "“墨守成规”的寓意是什么？",
                "answer" => "形容思想因循守旧，只知道按照老规矩办事，而不求改进"
            ],
            [
                "category" => "成语",
                "question" => "“汗牛充栋”的意思是什么？",
                "answer" => "形容藏书繁多"
            ],
            [
                "category" => "成语",
                "question" => "“瓜田李下”的意思是什么？",
                "answer" => "容易引起误会"
            ],
            [
                "category" => "成语",
                "question" => "“美轮美奂”的意思是什么？",
                "answer" => "形容房屋高大华丽"
            ],
            [
                "category" => "成语",
                "question" => "“黄钟大吕”的意思是什么？",
                "answer" => "音乐或言辞庄严高妙"
            ],
            [
                "category" => "成语",
                "question" => "“黄钟大吕”中的“黄钟”、“大吕”的意思是是什么？",
                "answer" => "音律"
            ],
            [
                "category" => "成语",
                "question" => "“爱鹤失众”的寓意是什么？",
                "answer" => "因小失大"
            ],
            [
                "category" => "成语",
                "question" => "“沐猴而冠”的意思是什么？",
                "answer" => "形容虚有其表"
            ],
            [
                "category" => "成语",
                "question" => "中“不分皂白”中的皂什么颜色？",
                "answer" => "黑色"
            ],
            [
                "category" => "成语",
                "question" => "“白龙鱼服”的意思是什么？",
                "answer" => "微服出巡的危险"
            ],
            [
                "category" => "成语",
                "question" => "“兵不血刃”的意思是什么？",
                "answer" => "形容不战而胜"
            ],
            [
                "category" => "成语",
                "question" => "“一衣带水”的寓意是什么？",
                "answer" => "距离不远，不足以成为交往的阻碍"
            ],
            [
                "category" => "成语",
                "question" => "“万人空巷”的寓意是什么？",
                "answer" => "家家户户的人都从家里出来"
            ],
            [
                "category" => "成语",
                "question" => "“蜀犬吠日”的意思是什么？",
                "answer" => "少见多怪"
            ],
            [
                "category" => "成语",
                "question" => "“含沙射影”的意思是什么？",
                "answer" => "造谣陷害"
            ],
            [
                "category" => "成语",
                "question" => "“开门揖盗”的意思是什么？",
                "answer" => "比喻引狼入室"
            ],
            [
                "category" => "成语",
                "question" => "“门可罗雀”的意思是什么？",
                "answer" => "形容门庭冷落"
            ],
            [
                "category" => "成语",
                "question" => "“百巧千穷”的寓意是什么？",
                "answer" => "比喻有才能者境遇反而不好"
            ],
            [
                "category" => "成语",
                "question" => "“首当其冲”的意思是什么？",
                "answer" => "比喻最先受到攻击或遭到灾难"
            ],
            [
                "category" => "成语",
                "question" => "“白山黑水”的意思是什么？",
                "answer" => "指长白山和黑龙江"
            ],
            [
                "category" => "成语",
                "question" => "“百巧千穷”的意思是什么？",
                "answer" => "指有才能者境遇反而不好"
            ],
            [
                "category" => "成语",
                "question" => "“鸡鸣狗盗”与战国四君子哪位有所关联？",
                "answer" => "孟尝君"
            ],
            [
                "category" => "成语",
                "question" => "“请君入瓮”有关人物一个是周兴，另一个是谁？",
                "answer" => "来俊臣"
            ],
            [
                "category" => "成语",
                "question" => "“口蜜腹剑”出自唐朝哪一位奸臣？",
                "answer" => "李林甫"
            ],
            [
                "category" => "成语",
                "question" => "成语“望洋兴叹”中的“望洋”指的是什么？",
                "answer" => "仰望的样子"
            ],
            [
                "category" => "成语",
                "question" => "“来龙去脉”的成语来源于什么领域？",
                "answer" => "风水勘探"
            ],
            [
                "category" => "成语",
                "question" => "“笑容可掬”中“掬”字是什么意思？",
                "answer" => "捧起"
            ],
            [
                "category" => "成语",
                "question" => "“琳琅满目”中的“琳琅”原指什么？",
                "answer" => "美玉"
            ],
            [
                "category" => "成语",
                "question" => "“碧落黄泉”中“黄泉”是指",
                "answer" => "地府"
            ],
            [
                "category" => "成语",
                "question" => "一言九鼎 这个典故中涉及的历史人物是",
                "answer" => "毛遂"
            ],
            [
                "category" => "成语",
                "question" => "“漏皆苦中”的“漏”意思为",
                "answer" => "烦恼"
            ],
            [
                "category" => "成语",
                "question" => "古时人称“情谊契合、亲如兄弟”的朋友为什么？",
                "answer" => "金兰之交"
            ],
            [
                "category" => "成语",
                "question" => "有些鸟类不孵蛋，却把蛋下到比自己体形小的另一种鸟的巢里，让自己的孩子霸占整个鸟巢、冒充其它小鸟顺利成长。描述这种现象的成语是哪个？",
                "answer" => "鸠占鹊巢"
            ],
            [
                "category" => "成语",
                "question" => "“不鸣则已，一鸣惊人”是形容谁？",
                "answer" => "楚庄王"
            ],
            [
                "category" => "成语",
                "question" => "“司空见惯”中的“司空”指的是什么？",
                "answer" => "官职"
            ],
            [
                "category" => "成语",
                "question" => "看故事猜成语：晋代文学家左思耗时十年写出巨著《三都赋》，广受好评。喜爱此书的人只能争相抄阅，一时间京城洛阳的纸张供应不求，价格大幅上升。",
                "answer" => "洛阳纸贵"
            ],
            [
                "category" => "成语",
                "question" => "“房谋杜断”中的房是指？",
                "answer" => "房玄龄"
            ],
            [
                "category" => "成语",
                "question" => "“房谋杜断”中的杜是指？",
                "answer" => "杜如晦"
            ],
            [
                "category" => "成语",
                "question" => "不同时期，人们的审美标准也有所不同，比如成语“环肥燕瘦”说的是女子体态不同而各有其风韵。这个成语中“环”是指杨玉环，“燕”是指哪位女子呢？",
                "answer" => "赵飞燕"
            ],
            [
                "category" => "成语",
                "question" => "“百二关河”是指什么？",
                "answer" => "山河险峻"
            ],
            [
                "category" => "成语",
                "question" => "“牛李党争”是由什么考试而起？",
                "answer" => "进士"
            ],
            [
                "category" => "成语",
                "question" => "“退避三舍”中的“三舍”代表多少里的距离？",
                "answer" => "90里"
            ],
            [
                "category" => "成语",
                "question" => "条件反射是指：两样本来没有任何联系的东西，因为长期一起出现，以后当其中一样东西出现的时候，便无可避免地联想到另外一样东西，是有机体因信号的刺激而发生的反应。以下哪个故事是条件反射的经典实例？",
                "answer" => "望梅止渴"
            ],
            [
                "category" => "成语",
                "question" => "人们在祝寿时，通常都会对寿星说“寿比南山”，那其中“寿比南山”一词中的“南山”指的是？",
                "answer" => "终南山"
            ],
            [
                "category" => "成语",
                "question" => "“白马非马”出自谁口？",
                "answer" => "公孙龙"
            ],
            [
                "category" => "成语",
                "question" => "“问鼎中原”的典故出自？",
                "answer" => "楚庄王"
            ],
            [
                "category" => "成语",
                "question" => "“泾渭不分”的意思是什么？",
                "answer" => "好坏善恶不分"
            ],
            [
                "category" => "成语",
                "question" => "买了珠宝，只留下装珠宝的盒子，却把珠宝退还给珠宝商，这个故事比喻有些人;只注事物外表，不重实质，这个故事说的是是哪个成语？",
                "answer" => "买椟还珠"
            ],
            [
                "category" => "成语",
                "question" => "“东山再起”是指退隐后再度出任要职，也比喻失势后重新得势，请问你知道“东山再起”的典故与谁有关系？",
                "answer" => "谢安"
            ],
            [
                "category" => "成语",
                "question" => "在“东山再起”这个典故中,“东山”是指主人公谢安的？",
                "answer" => "隐居之地"
            ],
            [
                "category" => "成语",
                "question" => "“一衣带水”指的是那条江(河流)？",
                "answer" => "长江"
            ],
            [
                "category" => "成语",
                "question" => "“精卫填海”的故事里“精卫”是",
                "answer" => "鸟"
            ],
            [
                "category" => "成语",
                "question" => "南朝文学家谢灵运得到宋文帝的赏识后非常开心，他说：“天下才有一石，曹子建独占八斗，我得一斗，天下共分一斗。”这是哪个成语的由来？",
                "answer" => "才高八斗"
            ],
            [
                "category" => "成语",
                "question" => "“滥竽充数”典故中“充数”者是？",
                "answer" => "南郭先生"
            ],
            [
                "category" => "成语",
                "question" => "“井底之蛙”典故中，哪种动物告诉了井底之蛙海的广阔无垠？",
                "answer" => "鳖"
            ],
            [
                "category" => "成语",
                "question" => "“毛遂自荐”这个典故中,毛遂之所以“自荐”是去？",
                "answer" => "谈判"
            ],
            [
                "category" => "成语",
                "question" => "根据描述猜成语:如果有一个人骗你说“有只老虎跑到大街上”，你肯定不相信;如果有两个人骗你说“有只老虎跑到大街上”，你肯能半信半疑;如果有三个人都骗你说“有只老虎跑到大街上”，你就很可能信以为真了。",
                "answer" => "三人成虎"
            ],
            [
                "category" => "成语",
                "question" => "战国时著名的“完璧归赵”，这里的壁是指什么壁？",
                "answer" => "和氏璧"
            ],
            [
                "category" => "成语",
                "question" => "有一个俗语原本指的是古代中国民间女性的几种职业。现代汉语中的常指社会上各式市井女性。职业有尼姑、道站、卦姑;还有牙婆、师婆、虔婆、药婆、稳婆、媒婆。你知道这是什么俗语吗？",
                "answer" => "三姑六婆"
            ],
            [
                "category" => "成语",
                "question" => "周幽王“烽火戏诸侯”为博谁一笑？",
                "answer" => "褒姒"
            ],
            [
                "category" => "成语",
                "question" => "2008年奥运会，北京作为“东道主”迎接了各国选手参加奥运比赛。其中“东道主”是什么意思？",
                "answer" => "东方道路上的主人"
            ],
            [
                "category" => "成语",
                "question" => "“运斤成风”比喻技艺神异，手法熟练，这个“斤”字是指？",
                "answer" => "斧子"
            ],
            [
                "category" => "成语",
                "question" => "“总角之交”是指什么？",
                "answer" => "顽童之交"
            ],
            [
                "category" => "成语",
                "question" => "“一狐之腋”比喻什么东西？",
                "answer" => "珍贵的事物"
            ],
            [
                "category" => "成语",
                "question" => "昙花清香四溢，光彩夺目，但开花持续时间极短，仅有三四个小时，因此有“昙花一现”之说，又被誉为“月下美人”。昙花一般在那个季节的夜晚盛开呢？",
                "answer" => "夏季"
            ],
            [
                "category" => "成语",
                "question" => "“祸起萧墙”的“萧蔷”是家中的那一堵墙？",
                "answer" => "门墙"
            ],
            [
                "category" => "成语",
                "question" => "“亡羊补牢”中的“牢”指的是？",
                "answer" => "牲口圈"
            ],
            [
                "category" => "成语",
                "question" => "“闻鸡起舞”讲的是晋代一位有志青年每天听到鸡鸣后就起床练剑、长期刻苦学习和训练，终成文武双全的栋梁之材，这位古人是谁？",
                "answer" => "祖逖"
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
