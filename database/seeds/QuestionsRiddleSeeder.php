<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionsRiddleSeeder extends Seeder
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
                "category" => "猜谜",
                "question"=> "“大漠孤烟直，长河落日圆。”(打一成语)",
                "answer" => "风平浪静"
            ],
            [
                "category" => "猜谜",
                "question" => "猜一植物:身穿着蓑衣，肉儿香又甜，要脱去蓑衣，便会手儿痒。",
                "answer" => "芋头"
            ],
            [
                "category" => "猜谜",
                "question" => "山中无老虎。(打一歇后语)",
                "answer" => "猴子称大王"
            ],
            [
                "category" => "猜谜",
                "question" => "颜色白如雪，身子硬如铁，一日洗三遍，夜晚柜中歇。(日用品)",
                "answer" => "饭碗"
            ],
            [
                "category" => "猜谜",
                "question" => "出一半有何不可。(打一字)",
                "answer" => "仙"
            ],
            [
                "category" => "猜谜",
                "question" => "因小失大。(打一字)",
                "answer" => "口"
            ],
            [
                "category" => "猜谜",
                "question" => "长生不老。(打一植物)",
                "answer" => "万年青"
            ],
            [
                "category" => "猜谜",
                "question" => "麻壳子，红里子，裹着白胖子。(打一植物)",
                "answer" => "花生"
            ],
            [
                "category" => "猜谜",
                "question" => "高高绿骨儿，圆圆金黄脸，最爱向太阳，盈盈笑不停。(打一植物)",
                "answer" => "向日葵"
            ],
            [
                "category" => "猜谜",
                "question" => "说他是棵草，为何有知觉，轻轻一碰他，害羞低下头。(打一植物)",
                "answer" => "含羞草"
            ],
            [
                "category" => "猜谜",
                "question" => "一日进一尺。(打一字)",
                "answer" => "昼"
            ],
            [
                "category" => "猜谜",
                "question" => "果断有力。(打一字)",
                "answer" => "男"
            ],
            [
                "category" => "猜谜",
                "question" => "林字多一半，不当森字猜。(打一字)",
                "answer" => "梦"
            ],
            [
                "category" => "猜谜",
                "question" => "烟缸。(打一字)",
                "answer" => "盔"
            ],
            [
                "category" => "猜谜",
                "question" => "2+6。(打一字)",
                "answer" => "积"
            ],
            [
                "category" => "猜谜",
                "question" => "王婆卖瓜。(打一歇后语)",
                "answer" => "自卖自夸"
            ],
            [
                "category" => "猜谜",
                "question" => "姜太公钓鱼。(打一歇后语)",
                "answer" => "愿者上钩"
            ],
            [
                "category" => "猜谜",
                "question" => "高高个子身穿青，脸儿金黄笑盈盈。结果好像中秋月，圆月里面藏星星。(打一水果)",
                "answer" => "枇杷"
            ],
            [
                "category" => "猜谜",
                "question" => "夫人何处去。(打一字)",
                "answer" => "二"
            ],
            [
                "category" => "猜谜",
                "question" => "人脱衣服，它穿衣服，人脱帽子，它戴帽子。(日用品)",
                "answer" => "衣帽架"
            ],
            [
                "category" => "猜谜",
                "question" => "出自幽谷，迁於乔木。(打一字)",
                "answer" => "呆"
            ],
            [
                "category" => "猜谜",
                "question" => "动物作标本。(打一成语)",
                "answer" => "装模作样"
            ],
            [
                "category" => "猜谜",
                "question" => "乌龟下楼梯。(打一成语)",
                "answer" => "连滚带爬"
            ],
            [
                "category" => "猜谜",
                "question" => "一箭穿心。(打一字)",
                "answer" => "必"
            ],
            [
                "category" => "猜谜",
                "question" => "闺中少女。(打一字)",
                "answer" => "娃"
            ],
            [
                "category" => "猜谜",
                "question" => "周末晚会。(打一字)",
                "answer" => "名"
            ],
            [
                "category" => "猜谜",
                "question" => "中秋望月。(打一《红楼梦》诗名)",
                "answer" => "贾语村的《对月寓怀》“时逢三五便团圆,满把晴光护玉栏。天上一轮才捧出,人间万姓仰头看。”"
            ],
            [
                "category" => "猜谜",
                "question" => "清风拂面中秋夜。(打一四字常用语)",
                "answer" => "明月清风"
            ],
            [
                "category" => "猜谜",
                "question" => "中秋归来。(打一词牌名)",
                "answer" => "八归"
            ],
            [
                "category" => "猜谜",
                "question" => "八面透风。(打一六字俗语)",
                "answer" => "气不打一处来"
            ],
            [
                "category" => "猜谜",
                "question" => "善飞者必飞珠峰。(打一句唐诗)",
                "answer" => "会当凌绝顶"
            ],
            [
                "category" => "猜谜",
                "question" => "屋子方方，有门没窗，屋外热烘，屋里冰霜。(打一日用品)",
                "answer" => "电冰箱"
            ],
            [
                "category" => "猜谜",
                "question" => "身穿大皮袄，野草吃个饱，过了严冬天，献出一身毛。(打一动物)",
                "answer" => "绵羊"
            ],
            [
                "category" => "猜谜",
                "question" => "欲话无言听流水。(打一字)",
                "answer" => "活"
            ],
            [
                "category" => "猜谜",
                "question" => "添丁进口。(打一字)",
                "answer" => "可"
            ],
            [
                "category" => "猜谜",
                "question" => "乘人不备。(打一字)",
                "answer" => "乖"
            ],
            [
                "category" => "猜谜",
                "question" => "一个孩子生的好，衣服穿了七八套，头上戴着红缨帽，身上装着珍珠宝。(打一植物)",
                "answer" => "玉米"
            ],
            [
                "category" => "猜谜",
                "question" => "小时能吃味道鲜，老是能用有人砍，虽说不是刚和铁，浑身骨节压不湾。(打一植物)",
                "answer" => "竹子"
            ],
            [
                "category" => "猜谜",
                "question" => "一身毛，尾巴翘，不会走，只会跳。(打一动物)",
                "answer" => "麻雀"
            ],
            [
                "category" => "猜谜",
                "question" => "上任之前，落榜之后。(打一字)",
                "answer" => "傍"
            ],
            [
                "category" => "猜谜",
                "question" => "黄昏时候。(打一字)",
                "answer" => "晒"
            ],
            [
                "category" => "猜谜",
                "question" => "课桌椅样样齐备。(打一字)",
                "answer" => "木"
            ],
            [
                "category" => "猜谜",
                "question" => "后来者居上。(打一字)",
                "answer" => "屠"
            ],
            [
                "category" => "猜谜",
                "question" => "二山在一起，猜出便错了。(打一字)",
                "answer" => "击"
            ],
            [
                "category" => "猜谜",
                "question" => "田里跑到田外，不能当作古字猜。(打一字)",
                "answer" => "叶"
            ],
            [
                "category" => "猜谜",
                "question" => "三个星期。(打一字)",
                "answer" => "昔"
            ],
            [
                "category" => "猜谜",
                "question" => "服装展览。(打一字)",
                "answer" => "裂"
            ],
            [
                "category" => "猜谜",
                "question" => "中国的君主自称。(打一字)",
                "answer" => "天子"
            ],
            [
                "category" => "猜谜",
                "question" => "小小伞兵随风飞，飞到东来飞到西，降落路边田野里，安家落户扎根基。(打一植物)",
                "answer" => "蒲公英"
            ],
            [
                "category" => "猜谜",
                "question" => "打断念头。(打一字)",
                "answer" => "心"
            ],
            [
                "category" => "猜谜",
                "question" => "点点营火照江边。(打一字)",
                "answer" => "淡"
            ],
            [
                "category" => "猜谜",
                "question" => "日日有馀，月月不足。(打一字)",
                "answer" => "门"
            ],
            [
                "category" => "猜谜",
                "question" => "矮冬瓜。(打一字)",
                "answer" => "射"
            ],
            [
                "category" => "猜谜",
                "question" => "上林垂钓。(打一成语)",
                "answer" => "缘木求鱼"
            ],
            [
                "category" => "猜谜",
                "question" => "红灯龙，绿宝盖，十人见了九人爱。(打一水果)",
                "answer" => "柿子"
            ],
            [
                "category" => "猜谜",
                "question" => "小小飞贼，武器是针，抽别人血，养自己身。(打一昆虫)",
                "answer" => "蚊子"
            ],
            [
                "category" => "猜谜",
                "question" => "工厂联合面貌新。(打一字)",
                "answer" => "左"
            ],
            [
                "category" => "猜谜",
                "question" => "一见钟情。(猜五唐句)",
                "answer" => "相看两不厌"
            ],
            [
                "category" => "猜谜",
                "question" => "翻身得自由。(打一字)",
                "answer" => "甲"
            ],
            [
                "category" => "猜谜",
                "question" => "明月松间照，清泉石上流。(打一词语)",
                "answer" => "影响"
            ],
            [
                "category" => "猜谜",
                "question" => "春穿绿衣秋黄袍，头儿弯弯垂珠宝，从幼到老难离水，不洗澡来只泡脚。(打一植物)",
                "answer" => "水稻"
            ],
            [
                "category" => "猜谜",
                "question" => "小白+小白=？(猜一动物)",
                "answer" => "小白兔(TWO)"
            ],
            [
                "category" => "猜谜",
                "question" => "狐狸为什么容易滑倒。(打一词)",
                "answer" => "狡猾"
            ],
            [
                "category" => "猜谜",
                "question" => "不管翻地或打洞，天生爱动到处钻，松松土来施点肥，人人称我为地龙。(打一上动物)",
                "answer" => "蚯蚓"
            ],
            [
                "category" => "猜谜",
                "question" => "鱼缸里有10条鱼，死了一条还有几条？",
                "answer" => "10条"
            ],
            [
                "category" => "猜谜",
                "question" => "一座弯大桥，造在青天里，七色呈异彩，都夸好手艺。(打一自然现象)",
                "answer" => "彩虹"
            ],
            [
                "category" => "猜谜",
                "question" => "名字叫做牛，不会拉犁头，说它力气小，背着房子走。(打一动物)",
                "answer" => "蜗牛"
            ],
            [
                "category" => "猜谜",
                "question" => "说他是条牛，无法拉车走，说他力气小，却能背屋跑。(打一动物)",
                "answer" => "蜗牛"
            ],
            [
                "category" => "猜谜",
                "question" => "此字八横又八开，十问孔子也不知。(打一字)",
                "answer" => "哑"
            ],
            [
                "category" => "猜谜",
                "question" => "竹篮打水。(打一歇后语)",
                "answer" => "一场空"
            ],
            [
                "category" => "猜谜",
                "question" => "肉包子打狗。(打一歇后语)",
                "answer" => "有去无回"
            ],
            [
                "category" => "猜谜",
                "question" => "坐也是立，立也是立，行也是立，卧也是立。(打一动物)",
                "answer" => "马"
            ],
            [
                "category" => "猜谜",
                "question" => "骑驴看唱本。(打一歇后语)",
                "answer" => "走着瞧"
            ],
            [
                "category" => "猜谜",
                "question" => "黄昏。(打一城市)",
                "answer" => "洛阳"
            ],
            [
                "category" => "猜谜",
                "question" => "留得青山在。(打一歇后语)",
                "answer" => "不怕没柴烧"
            ],
            [
                "category" => "猜谜",
                "question" => "生在山中，颜色相同，来到人间，有绿有红。(打一植物)",
                "answer" => "茶叶"
            ],
            [
                "category" => "猜谜",
                "question" => "皮黑肉儿白，肚里墨样黑，从不偷东西，硬说它是贼。(打一动物)",
                "answer" => "乌贼"
            ],
            [
                "category" => "猜谜",
                "question" => "狗咬吕洞宾。(打一歇后语)",
                "answer" => "不识好人心"
            ],
            [
                "category" => "猜谜",
                "question" => "老虎屁股。(打一歇后语)",
                "answer" => "摸不得"
            ],
            [
                "category" => "猜谜",
                "question" => "猫哭耗子。(打一歇后语)",
                "answer" => "假慈悲"
            ],
            [
                "category" => "猜谜",
                "question" => "周瑜打黄盖。(打一歇后语)",
                "answer" => "一个愿打一个愿挨"
            ],
            [
                "category" => "猜谜",
                "question" => "妇女节前夕。(打一中药名)",
                "answer" => "三七"
            ],
            [
                "category" => "猜谜",
                "question" => "元旦元宵捷报频传。(打一成语)",
                "answer" => "节节胜利"
            ],
            [
                "category" => "猜谜",
                "question" => "建国方略。(打一字)",
                "answer" => "玉"
            ],
            [
                "category" => "猜谜",
                "question" => "吕奉先雄心十足。(猜时人)",
                "answer" => "布什"
            ],
            [
                "category" => "猜谜",
                "question" => "进口连衣裙。(打一字)",
                "answer" => "尹"
            ],
            [
                "category" => "猜谜",
                "question" => "出水芙蓉。(猜花名)",
                "answer" => "水仙"
            ],
            [
                "category" => "猜谜",
                "question" => "心已决断不宜迟。(打一字)",
                "answer" => "快"
            ],
            [
                "category" => "猜谜",
                "question" => "写点东西留人间。(打一字)",
                "answer" => "火"
            ],
            [
                "category" => "猜谜",
                "question" => "板门店和谈。(打一成语)",
                "answer" => "美不胜收"
            ],
            [
                "category" => "猜谜",
                "question" => "仲尼日月。(猜古人名)",
                "answer" => "孔明"
            ],
            [
                "category" => "猜谜",
                "question" => "山水芙蓉。(猜花名)",
                "answer" => "荷花"
            ],
            [
                "category" => "猜谜",
                "question" => "小小诸葛亮，独坐军中帐，摆成八卦阵，专抓飞来将。(打一动物)",
                "answer" => "蜘蛛"
            ],
            [
                "category" => "猜谜",
                "question" => "项庄舞剑。(打象棋术语)",
                "answer" => "暗伏杀机"
            ],
            [
                "category" => "猜谜",
                "question" => "包龙图一言不发。(猜五唐句)",
                "answer" => "青天无片云"
            ],
            [
                "category" => "猜谜",
                "question" => "一弯月照枝头亮，两颗星悬天下明。(打一字)",
                "answer" => "秋"
            ],
            [
                "category" => "猜谜",
                "question" => "螃蟹过街。(打一歇后语)",
                "answer" => "横行霸道"
            ],
            [
                "category" => "猜谜",
                "question" => "日出满山去，黃昏归满堂，年年出新主，日日採花郎。(打一动物)",
                "answer" => "蜜蜂"
            ],
            [
                "category" => "猜谜",
                "question" => "举头望明月(打一中药名)？",
                "answer" => "当归"
            ],
            [
                "category" => "猜谜",
                "question" => "什么布减不断？(打一自然景物)",
                "answer" => "瀑布"
            ],
            [
                "category" => "猜谜",
                "question" => "什么卡通人物最黑暗？",
                "answer" => "哆啦A梦"
            ],
            [
                "category" => "猜谜",
                "question" => "促膝长谈。(打一物理理论)",
                "answer" => "相对论"
            ],
            [
                "category" => "猜谜",
                "question" => "万兽之王是谁？(打一职业)",
                "answer" => "动物园园长"
            ],
            [
                "category" => "猜谜",
                "question" => "三横三坚是什么字？",
                "answer" => "田"
            ],
            [
                "category" => "猜谜",
                "question" => "什么动物天天熬夜？",
                "answer" => "熊猫"
            ],
            [
                "category" => "猜谜",
                "question" => "世界上最大的影子是什么？",
                "answer" => "黑夜"
            ],
            [
                "category" => "猜谜",
                "question" => "决斗开始了，土豆捅了包子致命一刀。(打一食物)",
                "answer" => "豆沙包"
            ],
            [
                "category" => "猜谜",
                "question" => "“皮皴似龟手，叶小如鼠耳。”(打一植物)",
                "answer" => "枣树"
            ],
            [
                "category" => "猜谜",
                "question" => "一堆沙加一堆沙等于什么？",
                "answer" => "一堆沙"
            ],
            [
                "category" => "猜谜",
                "question" => "新华字典有几个字？",
                "answer" => "4个字"
            ],
            [
                "category" => "猜谜",
                "question" => "人一生说的最多的三个字是什么？",
                "answer" => "不知道"
            ],
            [
                "category" => "猜谜",
                "question" => "绿衣汉，街上站，光吃纸，不吃饭。(打一物)",
                "answer" => "邮筒"
            ],
            [
                "category" => "猜谜",
                "question" => "什么字世界通用？",
                "answer" => "阿拉伯数字"
            ],
            [
                "category" => "猜谜",
                "question" => "一只鸡蛋煮熟需要5分钟，同时煮熟4只鸡蛋需几分钟？",
                "answer" => "5分钟"
            ],
            [
                "category" => "猜谜",
                "question" => "八只脚，抬面鼓，两把剪刀鼓前舞，生来横行又霸道，嘴里常把泡沫吐。(打一动物)",
                "answer" => "蟹将"
            ],
            [
                "category" => "猜谜",
                "question" => "用什么拖地最干净？",
                "answer" => "力"
            ],
            [
                "category" => "猜谜",
                "question" => "有朵花，人喜爱，有时闭来有时开，雨天开在大街上，花根就在手中栽。(打一生活用品)",
                "answer" => "雨伞"
            ],
            [
                "category" => "猜谜",
                "question" => "身背硬壳袍，摇头又晃脑、手执圣旨到，浪随口中来。(打一游戏人物)",
                "answer" => "龟千岁"
            ],
            [
                "category" => "猜谜",
                "question" => "一群兔子排队，从左数小兔子是第100位，从右数小兔子是第99位，这群兔子一共有几只?",
                "answer" => "198只"
            ],
            [
                "category" => "猜谜",
                "question" => "8个人同时吃8份快餐需要10分钟，16个人同时吃16份快餐需要几分钟？",
                "answer" => "10分钟"
            ],
            [
                "category" => "猜谜",
                "question" => "个子虽不大，浑身是武器，见敌缩成团，看你奈我何。(打一动物)",
                "answer" => "刺猬"
            ],
            [
                "category" => "猜谜",
                "question" => "身体虽不大，钢针满身插，？遇敌蜷一团，老虎也无法。(打一动物)",
                "answer" => "刺猬"
            ],
            [
                "category" => "猜谜",
                "question" => "一片青草地。(打一花)",
                "answer" => "梅花"
            ],
            [
                "category" => "猜谜",
                "question" => "哪个月有28天？",
                "answer" => "每个月"
            ],
            [
                "category" => "猜谜",
                "question" => "又圆又亮，左右一样。脚蹬双耳，腰跨鼻梁。(打一日用品)",
                "answer" => "眼镜"
            ],
            [
                "category" => "猜谜",
                "question" => "天平两边各4个同样重的乒乓，拿走一个后还有多少个？",
                "answer" => "0个"
            ],
            [
                "category" => "猜谜",
                "question" => "王大婶有三个儿子,这三个儿子又分别有一个姐姐和一个妹妹,问王大婶一共有几个孩子？",
                "answer" => "5个"
            ],
            [
                "category" => "猜谜",
                "question" => "小丽走进教室，看见教室里只有7名同学，那么现在教室里有几名同学？",
                "answer" => "8个"
            ],
            [
                "category" => "猜谜",
                "question" => "一个南瓜两头而空，肚里开花放灯明，有瓜没叶高高挂，照得面前一片红。(打一物)",
                "answer" => "灯笼"
            ],
            [
                "category" => "猜谜",
                "question" => "一条小小虫，自己做灯笼，躲在灯笼里，变个飞仙女。(猜昆虫)",
                "answer" => "蚕"
            ],
            [
                "category" => "猜谜",
                "question" => "鸟儿鸟儿嘴巴长，嘿嘿的尾巴花衣裳，一天到晚勤工作，好像医生治病忙，敲树干，当当当，要把害虫吃个光。(才一动物)",
                "answer" => "啄木鸟"
            ],
            [
                "category" => "猜谜",
                "question" => "桌子4个角，每个角上有1只猫，每只猫附近有3只猫？请问桌子上有几只猫？",
                "answer" => "4只"
            ],
            [
                "category" => "猜谜",
                "question" => "一对小小船,载客各五员,无水走天下,有水不开船。（打一服饰）",
                "answer" => "布鞋"
            ],
            [
                "category" => "猜谜",
                "question" => "什么东西天气越热，它爬的越高？",
                "answer" => "温度计"
            ],
            [
                "category" => "猜谜",
                "question" => "挥动钳子一双，玩弄尖刀八把，一生霸道横行，总爱乱抓乱爬。",
                "answer" => "蟹将"
            ],
            [
                "category" => "猜谜",
                "question" => "一物生来真稀奇，身穿三百多件衣，每天给他脱一件，年底剩下一层皮？",
                "answer" => "黄历(日历)"
            ],
            [
                "category" => "猜谜",
                "question" => "巧克力和花生米打架，巧克力赢了。(打一食物)",
                "answer" => "巧克力棒"
            ],
            [
                "category" => "猜谜",
                "question" => "50CM黑螃蟹跟80CM红螃蟹比赛爬得快哪只先到终点？",
                "answer" => "黑螃蟹"
            ],
            [
                "category" => "猜谜",
                "question" => "韩信点兵。(打一歇后语)",
                "answer" => "多多益善"
            ],
            [
                "category" => "猜谜",
                "question" => "有一个很著名的“斯芬克斯之谜”：有一种动物，早上用四条腿走路，中午用两条腿走路，傍晚用三条腿走路。你知道这种动物是什么吗？",
                "answer" => "人类"
            ],
            [
                "category" => "猜谜",
                "question" => "在天平上的两个盘子里各放一个大小相同盛满水的桶，其中有一只桶里浮着一块木头，请问两只桶哪个重一些？",
                "answer" => "一样重"
            ],
            [
                "category" => "猜谜",
                "question" => "不难分解。(打一动物)",
                "answer" => "蜥蜴"
            ],
            [
                "category" => "猜谜",
                "question" => "两个兄弟一般高,一日三餐不长膘。(打一生活用品)",
                "answer" => "筷子"
            ],
            [
                "category" => "猜谜",
                "question" => "二十四小时。(打一成语)",
                "answer" => "一朝一夕"
            ],
            [
                "category" => "猜谜",
                "question" => "终岁不绝丝竹声。(打一足球队员)",
                "answer" => "曲乐恒"
            ],
            [
                "category" => "猜谜",
                "question" => "恭贺新禧。(打一画家名)",
                "answer" => "祝大年"
            ],
            [
                "category" => "猜谜",
                "question" => "仲尼日月也。(打一成语)",
                "answer" => "一孔之见"
            ],
            [
                "category" => "猜谜",
                "question" => "春去也，花落无言。(打一字)",
                "answer" => "榭"
            ],
            [
                "category" => "猜谜",
                "question" => "九死一生。(打金融名词)",
                "answer" => "存单"
            ],
            [
                "category" => "猜谜",
                "question" => "九点。(打一字)",
                "answer" => "丸"
            ],
            [
                "category" => "猜谜",
                "question" => "上了年纪话题多。(打成语)",
                "answer" => "老生常谈"
            ],
            [
                "category" => "猜谜",
                "question" => "残阳如血。(打一花卉名)",
                "answer" => "晚来红"
            ],
            [
                "category" => "猜谜",
                "question" => "就怕我手中的两个兄弟不答应。(打一成语)",
                "answer" => "斤斤计较"
            ],
            [
                "category" => "猜谜",
                "question" => "中秋过后又重阳。(打郑板桥诗句)",
                "answer" => "一节复一节"
            ],
            [
                "category" => "猜谜",
                "question" => "同心改革为祖国。(打一字)",
                "answer" => "中"
            ],
            [
                "category" => "猜谜",
                "question" => "柳拂翠首携幼主。(打两字)",
                "answer" => "羽樱"
            ],
            [
                "category" => "猜谜",
                "question" => "书签。(打一字)",
                "answer" => "颊"
            ],
            [
                "category" => "猜谜",
                "question" => "眉来眼去惹是非 (打一字)",
                "answer" => "声"
            ],
            [
                "category" => "猜谜",
                "question" => "看看没有，摸摸倒有，像冰不融化，像水部会流。(打一常用物)",
                "answer" => "玻璃"
            ],
            [
                "category" => "猜谜",
                "question" => "泥菩萨过江。(打一歇后语)",
                "answer" => "自身难保"
            ],
            [
                "category" => "猜谜",
                "question" => "请坐下说话。(打法律词)",
                "answer" => "免予起诉"
            ],
            [
                "category" => "猜谜",
                "question" => "十五的月亮十六圆。(财经词语)",
                "answer" => "调资"
            ],
            [
                "category" => "猜谜",
                "question" => "司马昭之心。(打一歇后语)",
                "answer" => "路人皆知"
            ],
            [
                "category" => "猜谜",
                "question" => "五个兄弟，住在一起，名字不同，高矮不齐。(打一器官)",
                "answer" => "手指"
            ],
            [
                "category" => "猜谜",
                "question" => "我们常说“隔着门缝看人”，当我们隔着门缝看人时，看到的人会？",
                "answer" => "和原来一样"
            ],
            [
                "category" => "猜谜",
                "question" => "锄禾日当午。(打地名一)",
                "answer" => "田阳"
            ],
            [
                "category" => "猜谜",
                "question" => "一轮明月挂中天。(打一股票术语)",
                "answer" => "高位盘整"
            ],
            [
                "category" => "猜谜",
                "question" => "心无二用。(打一成语)",
                "answer" => "一心一意"
            ],
            [
                "category" => "猜谜",
                "question" => "节日晚会露一手。(打一字)",
                "answer" => "挽"
            ],
            [
                "category" => "猜谜",
                "question" => "小葱拌豆腐。(打一歇后语)",
                "answer" => "一清二白"
            ],
            [
                "category" => "猜谜",
                "question" => "弄璋之喜。(打一字)",
                "answer" => "甥"
            ],
            [
                "category" => "猜谜",
                "question" => "月落日出雁阵业。(打一字)",
                "answer" => "胭"
            ],
            [
                "category" => "猜谜",
                "question" => "一点不假。(旅游胜地名)",
                "answer" => "滇池"
            ],
            [
                "category" => "猜谜",
                "question" => "同心改革朝前走。(打一字)",
                "answer" => "明"
            ],
            [
                "category" => "猜谜",
                "question" => "再掀昔日红学热。(打一成语)",
                "answer" => "重温旧梦"
            ],
            [
                "category" => "猜谜",
                "question" => "此路不通。(打一字)",
                "answer" => "绕"
            ],
            [
                "category" => "猜谜",
                "question" => "此路不通。(打一成语)",
                "answer" => "令行禁止(道尽途穷)"
            ],
            [
                "category" => "猜谜",
                "question" => "落花满地不惊心。(打一晋人名)",
                "answer" => "谢安"
            ],
            [
                "category" => "猜谜",
                "question" => "两人十四个心。(打一字)",
                "answer" => "德"
            ],
            [
                "category" => "猜谜",
                "question" => "人人让座。(打一字)",
                "answer" => "庄"
            ],
            [
                "category" => "猜谜",
                "question" => "墙上挂灯谜。(打一动物)",
                "answer" => "壁虎"
            ],
            [
                "category" => "猜谜",
                "question" => "喊声长定是烟烟。(打一复姓)",
                "answer" => "呼延"
            ],
            [
                "category" => "猜谜",
                "question" => "勇一半，谋一半。(打一字)",
                "answer" => "诵"
            ],
            [
                "category" => "猜谜",
                "question" => "石头旁边有块皮。(打一字)",
                "answer" => "破"
            ],
            [
                "category" => "猜谜",
                "question" => "蟑螂因具备超强的生存和适应能力而被现代人戏称为“小强”。据说一只无头的螳螂可以存活9天之久，你知道它9之天后死掉的原因是什么吗？",
                "answer" => "过度饥饿"
            ],
            [
                "category" => "猜谜",
                "question" => "头带两根雄鸡毛，身穿一件绿衣袍，手握两把锯尺刀，小虫见了拼命逃。(猜昆虫)",
                "answer" => "螳螂"
            ],
            [
                "category" => "猜谜",
                "question" => "人对人。(打一字)",
                "answer" => "从"
            ],
            [
                "category" => "猜谜",
                "question" => "江郎才尽 (打一离合字)",
                "answer" => "惫"
            ],
            [
                "category" => "猜谜",
                "question" => "行行重行行。(打一河南地名)",
                "answer" => "漯河"
            ],
            [
                "category" => "猜谜",
                "question" => "双泪落君前。(打一字)",
                "answer" => "只"
            ],
            [
                "category" => "猜谜",
                "question" => "岳父大人。(打一字)",
                "answer" => "仗"
            ],
            [
                "category" => "猜谜",
                "question" => "人人同心改革。(打一字)",
                "answer" => "徊"
            ],
            [
                "category" => "猜谜",
                "question" => "昨日之日不可留。(打一国家名)",
                "answer" => "乍得"
            ],
            [
                "category" => "猜谜",
                "question" => "我们知道地球表面71%是海洋，而陆地买年纪仅占29%,你知道世界最大的海是什么？",
                "answer" => "珊瑚海"
            ],
            [
                "category" => "猜谜",
                "question" => "四川第一峰(打一草药名)",
                "answer" => "川山甲"
            ],
            [
                "category" => "猜谜",
                "question" => "寄书长不达。(打一成语)",
                "answer" => "难以置信"
            ],
            [
                "category" => "猜谜",
                "question" => "芳龄几何。(打一人名)",
                "answer" => "盘庚"
            ],
            [
                "category" => "猜谜",
                "question" => "相依相伴对残月 (打一字)",
                "answer" => "羽"
            ],
            [
                "category" => "猜谜",
                "question" => "草上飞。(打一字)",
                "answer" => "早"
            ],
            [
                "category" => "猜谜",
                "question" => "家家迎元宵。(打一学校用语)",
                "answer" => "第二节"
            ],
            [
                "category" => "猜谜",
                "question" => "日落星出月当头。(打一名词)",
                "answer" => "生肖"
            ],
            [
                "category" => "猜谜",
                "question" => "上上下下，不上不下。(打一字)",
                "answer" => "卡"
            ],
            [
                "category" => "猜谜",
                "question" => "一家十一口。(打一朝代)",
                "answer" => "周"
            ],
            [
                "category" => "猜谜",
                "question" => "(两个兄弟拉着手)两兄弟，手拉手，一个转，一个走。(打一文具用品)",
                "answer" => "圆规"
            ],
            [
                "category" => "猜谜",
                "question" => "晚上房子里点有10支蜡烛，一阵风吹来，灭了6支，把门窗关好，如果晚上蜡烛没有熄灭，请问第二天早上房子里还有几支蜡烛？",
                "answer" => "6支"
            ],
            [
                "category" => "猜谜",
                "question" => "坐也是坐，立也是坐，行也是坐，卧也是坐。(打一动物)",
                "answer" => "青蛙"
            ],
            [
                "category" => "猜谜",
                "question" => "聚餐。(猜金融名词)",
                "answer" => "进口合同"
            ],
            [
                "category" => "猜谜",
                "question" => "十五的月亮。(猜成语)",
                "answer" => "正大光明"
            ],
            [
                "category" => "猜谜",
                "question" => "产房在哪。(打五字常言)",
                "answer" => "人生地不熟"
            ],
            [
                "category" => "猜谜",
                "question" => "说话和气。(打一体育名词)",
                "answer" => "柔道"
            ],
            [
                "category" => "猜谜",
                "question" => "绝妙好言。(打一动物)",
                "answer" => "狼狗"
            ],
            [
                "category" => "猜谜",
                "question" => "一声呼出喜怒哀乐，十指摇动古今事由。(打一传统戏)",
                "answer" => "布袋戏"
            ],
            [
                "category" => "猜谜",
                "question" => "天黑之前闲不着 (打三字常用语)",
                "answer" => "白忙活"
            ],
            [
                "category" => "猜谜",
                "question" => "十五天 (打一字)",
                "answer" => "胖"
            ],
            [
                "category" => "猜谜",
                "question" => "无水湖影接秋色。(打一草药名)",
                "answer" => "胡黄连"
            ],
            [
                "category" => "猜谜",
                "question" => "二话不说。(打猜无线电名词)",
                "answer" => "单声道"
            ],
            [
                "category" => "猜谜",
                "question" => "大陆亲人盼团聚。(打几何名词)",
                "answer" => "内切圆"
            ],
            [
                "category" => "猜谜",
                "question" => "八面透风。(打一六字俗语)",
                "answer" => "气不打一处来"
            ],
            [
                "category" => "猜谜",
                "question" => "毛遂自荐。(打一字)",
                "answer" => "衙"
            ],
            [
                "category" => "猜谜",
                "question" => "哥哥一半大，莫作可字猜。(打一字)",
                "answer" => "奇"
            ],
            [
                "category" => "猜谜",
                "question" => "一只狗，两个口，谁遇它，谁发愁。(打一字)",
                "answer" => "哭"
            ],
            [
                "category" => "猜谜",
                "question" => "连夜造林。(打一字)",
                "answer" => "梦"
            ],
            [
                "category" => "猜谜",
                "question" => "自我批评。(打一字)",
                "answer" => "记"
            ],
            [
                "category" => "猜谜",
                "question" => "推开又来。(打一字)",
                "answer" => "摊"
            ],
            [
                "category" => "猜谜",
                "question" => "独眼龙。(打一字)",
                "answer" => "省"
            ],
            [
                "category" => "猜谜",
                "question" => "宝岛姑娘。(打一字)",
                "answer" => "始"
            ],
            [
                "category" => "猜谜",
                "question" => "休要丢人现眼。(打一字)",
                "answer" => "相"
            ],
            [
                "category" => "猜谜",
                "question" => "我没有他有，天没有地有。(打一字)",
                "answer" => "也"
            ],
            [
                "category" => "猜谜",
                "question" => "独留花下人，有情却无心。(打一字)",
                "answer" => "倩"
            ],
            [
                "category" => "猜谜",
                "question" => "黄金布，包银条，中间弯弯两头翘。(打一水果)",
                "answer" => "香蕉"
            ],
            [
                "category" => "猜谜",
                "question" => "千姊妹，万姊妹，同床睡，各盖被。(打一水果)",
                "answer" => "石榴"
            ],
            [
                "category" => "猜谜",
                "question" => "小小玲珑一条船，来来往往在江边，风吹雨打都不怕，只见划桨不挂帆。(打一动物)",
                "answer" => "鸭子"
            ],
            [
                "category" => "猜谜",
                "question" => "坐也是行，立也是行，行也是行，卧也是行。(打一动物)",
                "answer" => "鱼"
            ],
            [
                "category" => "猜谜",
                "question" => "游泳比赛。(打一成语)",
                "answer" => "力争上游"
            ],
            [
                "category" => "猜谜",
                "question" => "导游。(打一成语)",
                "answer" => "引人入胜"
            ],
            [
                "category" => "猜谜",
                "question" => "螃蟹过河。(打一成语)",
                "answer" => "七手八脚"
            ],
            [
                "category" => "猜谜",
                "question" => "黑背白肚皮，一副绅士样，两翅当划桨，双脚似鸭蹼。(打一动物)",
                "answer" => "企鹅"
            ],
            [
                "category" => "猜谜",
                "question" => "寂寞嫦娥舒广袖。(打一舞蹈术语)",
                "answer" => "水袖"
            ],
            [
                "category" => "猜谜",
                "question" => "农夫有17只羊，除了9只以外都卖出去了，请问农夫还剩几只羊？",
                "answer" => "9"
            ],
            [
                "category" => "猜谜",
                "question" => "人不在其位。(打一字)",
                "answer" => "立"
            ],
            [
                "category" => "猜谜",
                "question" => "半真半假。(打一字)",
                "answer" => "值"
            ],
            [
                "category" => "猜谜",
                "question" => "寸步不离。(打一成语)",
                "answer" => "如影随形"
            ],
            [
                "category" => "猜谜",
                "question" => "青藤挂满棚，结果像青龙，嫩时当菜吃，老了也有用。(打一瓜类)",
                "answer" => "丝瓜"
            ],
            [
                "category" => "猜谜",
                "question" => "一身金钱袍，猫脸性残暴，爬树且游水，嗜肉不食草。(打一动物)",
                "answer" => "豹"
            ],
            [
                "category" => "猜谜",
                "question" => "迁来一口。(打一字)",
                "answer" => "适"
            ],
            [
                "category" => "猜谜",
                "question" => "黄昏前后。(打一字)",
                "answer" => "昔"
            ],
            [
                "category" => "猜谜",
                "question" => "除去半边，还存半边。(打一字)",
                "answer" => "途"
            ],
            [
                "category" => "猜谜",
                "question" => "你我他。(打一字)",
                "answer" => "仨"
            ],
            [
                "category" => "猜谜",
                "question" => "少了一点良心。(打一字)",
                "answer" => "恳"
            ],
            [
                "category" => "猜谜",
                "question" => "中秋月饼。(打一电脑名词)",
                "answer" => "软盘"
            ],
            [
                "category" => "猜谜",
                "question" => "东张西望缘何事？(打六字常用语)",
                "answer" => "两方面看问题"
            ],
            [
                "category" => "猜谜",
                "question" => "小时头青青，老来发白白，远看似棉花，风起来白浪。(打一植物)",
                "answer" => "芦苇"
            ],
            [
                "category" => "猜谜",
                "question" => "一个黑孩，从不开口，要是开口，掉出舌头。(打一食物)",
                "answer" => "瓜子"
            ],
            [
                "category" => "猜谜",
                "question" => "白嫩小宝宝，洗澡吹泡泡，洗洗身体小，再洗不见了。(打一日用品)",
                "answer" => "香皂"
            ],
            [
                "category" => "猜谜",
                "question" => "存心不善，有口难言。(打一字)",
                "answer" => "亚"
            ],
            [
                "category" => "猜谜",
                "question" => "小小年纪，却有胡子一把，不论谁见，总是大喊妈妈。(打一动物)",
                "answer" => "羊"
            ],
            [
                "category" => "猜谜",
                "question" => "细细身体长又长，身后背着四面旗，斗大眼睛照前方，专除害虫有助益。(打一昆虫)",
                "answer" => "蜻蜓"
            ],
            [
                "category" => "猜谜",
                "question" => "拉她也不来。(打一字)",
                "answer" => "接"
            ],
            [
                "category" => "猜谜",
                "question" => "至尊无上。(打一字)",
                "answer" => "寺"
            ],
            [
                "category" => "猜谜",
                "question" => "独生子。(打一字)",
                "answer" => "兀"
            ],
            [
                "category" => "猜谜",
                "question" => "新婚度蜜月，中秋游异邦。(打成语一)",
                "answer" => "喜出望外"
            ],
            [
                "category" => "猜谜",
                "question" => "独木造高楼，没瓦没砖头，人在水下走，水在人上流。(打一日用品)",
                "answer" => "雨伞"
            ],
            [
                "category" => "猜谜",
                "question" => "一个小姑娘，生在水中央，身穿粉红衫，坐在绿船上。(打一动物)",
                "answer" => "荷花"
            ],
            [
                "category" => "猜谜",
                "question" => "挥手告别。(打一字)",
                "answer" => "军"
            ],
            [
                "category" => "猜谜",
                "question" => "口吐白云白沫，手拿两把利刀，走路大摇大摆，真是横行霸道。(打一动物)",
                "answer" => "螃蟹"
            ],
            [
                "category" => "猜谜",
                "question" => "任劳又任怨，田里活猛干，生产万顿粮，只把草当饭。(打一动物)",
                "answer" => "牛"
            ],
            [
                "category" => "猜谜",
                "question" => "日落香残，洗却凡心一点。(打一字)",
                "answer" => "秃"
            ],
            [
                "category" => "猜谜",
                "question" => "大厂用电多一点。(打一字)",
                "answer" => "庵"
            ],
            [
                "category" => "猜谜",
                "question" => "凶横。(打一字)",
                "answer" => "区"
            ],
            [
                "category" => "猜谜",
                "question" => "一到两点便起飞。(打一字)",
                "answer" => "乙"
            ],
            [
                "category" => "猜谜",
                "question" => "劳逸结合。(打一字)",
                "answer" => "边"
            ],
            [
                "category" => "猜谜",
                "question" => "镜中人影。(打一字)",
                "answer" => "入"
            ],
            [
                "category" => "猜谜",
                "question" => "242÷22。(打一字)",
                "answer" => "墒"
            ],
            [
                "category" => "猜谜",
                "question" => "中秋别后重团圆。(打一影片名)",
                "answer" => "第二次握手"
            ],
            [
                "category" => "猜谜",
                "question" => "与我同行。(打一字",
                "answer" => "衙"
            ],
            [
                "category" => "猜谜",
                "question" => "边打边谈。(打一字",
                "answer" => "订"
            ],
            [
                "category" => "猜谜",
                "question" => "九千九百九十九。(打一成语)",
                "answer" => "万无一失"
            ],
            [
                "category" => "猜谜",
                "question" => "中秋菊开。(打一成语)",
                "answer" => "花好月圆"
            ],
            [
                "category" => "猜谜",
                "question" => "象只大蝎子，抱起似孩子，抓挠肚肠子，唱出好曲子。(打一乐器)",
                "answer" => "琵琶"
            ],
            [
                "category" => "猜谜",
                "question" => "两点一直，一直两点。(打一字)",
                "answer" => "慎"
            ],
            [
                "category" => "猜谜",
                "question" => "千言万语。(打一字)",
                "answer" => "够"
            ],
            [
                "category" => "猜谜",
                "question" => "泥里一条龙，头顶一个蓬，身体一节节，满肚小窟窿。(打一植物)",
                "answer" => "莲藕"
            ],
            [
                "category" => "猜谜",
                "question" => "红漆桶，地下埋，绿的叶子顶上栽，切开红漆桶，清甜可口好小菜。(打一蔬菜)",
                "answer" => "红萝卜"
            ],
            [
                "category" => "猜谜",
                "question" => "不长汁来不生杈，叶子顶上开白花，脑袋睡在地底下，胡子长了一大把。(打一蔬菜)",
                "answer" => "葱"
            ],
            [
                "category" => "猜谜",
                "question" => "像球样的圆，像血样的红，向珠样的亮，样蜜样的甜。(打一水果)",
                "answer" => "樱桃"
            ],
            [
                "category" => "猜谜",
                "question" => "脸上长勾子，头边绑扇子，四根粗柱子，一条小辩子。(打一动物)",
                "answer" => "大象"
            ],
            [
                "category" => "猜谜",
                "question" => "纵横沙漠中，展翅飞不起，快走犹如飞，是鸟中第一。(打一动物)",
                "answer" => "鸵鸟"
            ],
            [
                "category" => "猜谜",
                "question" => "一口咬定。(打一字)",
                "answer" => "交"
            ],
            [
                "category" => "猜谜",
                "question" => "推开又来。(打一字)",
                "answer" => "摊"
            ],
            [
                "category" => "猜谜",
                "question" => "干涉。(打一字)",
                "answer" => "步"
            ],
            [
                "category" => "猜谜",
                "question" => "林海无边。(打一字)",
                "answer" => "梅"
            ],
            [
                "category" => "猜谜",
                "question" => "留取丹心照汗青。(打一四字称谓)",
                "answer" => "名誉会长"
            ],
            [
                "category" => "猜谜",
                "question" => "中秋度蜜月。(打一成语)",
                "answer" => "花好月圆"
            ],
            [
                "category" => "猜谜",
                "question" => "华夏共赏中秋月。(打一旅游用语)",
                "answer" => "观光"
            ],
            [
                "category" => "猜谜",
                "question" => "猪八戒照镜子。(打一歇后语)",
                "answer" => "里外不是人"
            ],
            [
                "category" => "猜谜",
                "question" => "身穿绿衣裳，肚里水汪汪，生的子儿多，个个黑脸膛。(打一水果)",
                "answer" => "西瓜"
            ],
            [
                "category" => "猜谜",
                "question" => "依山傍水。(打一字)",
                "answer" => "汕"
            ],
            [
                "category" => "猜谜",
                "question" => "正字少一横，莫作止字猜。(打一字)",
                "answer" => "步"
            ],
            [
                "category" => "猜谜",
                "question" => "我的心。(打一字)",
                "answer" => "悟"
            ],
            [
                "category" => "猜谜",
                "question" => "既有头，又有尾，中间生了四张嘴。(打一字)",
                "answer" => "申"
            ],
            [
                "category" => "猜谜",
                "question" => "一字生得巧，四面八只脚。(打一字)",
                "answer" => "井"
            ],
            [
                "category" => "猜谜",
                "question" => "黄昏时候。(打一字)",
                "answer" => "晒"
            ],
            [
                "category" => "猜谜",
                "question" => "静候送礼人。(打一成语)",
                "answer" => "待人接物"
            ],
            [
                "category" => "猜谜",
                "question" => "两撇小胡子，油嘴小牙齿，贼头又贼脑，喜欢偷油吃。(打一动物)",
                "answer" => "老鼠"
            ],
            [
                "category" => "猜谜",
                "question" => "做了皇帝想成仙。(打一成语)",
                "answer" => "贪心不足"
            ],
            [
                "category" => "猜谜",
                "question" => "一字生的巧，四面八只脚。(打一字)",
                "answer" => "井"
            ],
            [
                "category" => "猜谜",
                "question" => "既有头又有尾，中间生了四张嘴。(打一字)",
                "answer" => "申"
            ],
            [
                "category" => "猜谜",
                "question" => "人人都走横道线。(打一字)",
                "answer" => "丛"
            ],
            [
                "category" => "猜谜",
                "question" => "佳人难再得。(打一字)",
                "answer" => "圭"
            ],
            [
                "category" => "猜谜",
                "question" => "总不留心，要栽跟头。(打一字)",
                "answer" => "口"
            ],
            [
                "category" => "猜谜",
                "question" => "为数虽少，却在百万之上。(打一字)",
                "answer" => "一"
            ],
            [
                "category" => "猜谜",
                "question" => "手揠禾不秀。(打一字)",
                "answer" => "扔"
            ],
            [
                "category" => "猜谜",
                "question" => "你我各一半。(打一字)",
                "answer" => "伐"
            ],
            [
                "category" => "猜谜",
                "question" => "川。(打一字)",
                "answer" => "矗"
            ],
            [
                "category" => "猜谜",
                "question" => "今世孔夫子。(打一古文篇名)",
                "answer" => "后出师表"
            ],
            [
                "category" => "猜谜",
                "question" => "性情躁烈爆，常批黄皮袄，山中称大王，长得好像猫。(打一动物)",
                "answer" => "老虎"
            ],
            [
                "category" => "猜谜",
                "question" => "举杯邀明月。(打一礼貌用语)",
                "answer" => "赏光"
            ],
            [
                "category" => "猜谜",
                "question" => "麻雀虽小。(打一歇后语)",
                "answer" => "五脏俱全"
            ],
            [
                "category" => "猜谜",
                "question" => "百米赛跑。(打一成语)",
                "answer" => "争先恐后"
            ],
            [
                "category" => "猜谜",
                "question" => "太阳西边下，月亮东边挂。(打一字)",
                "answer" => "明"
            ],
            [
                "category" => "猜谜",
                "question" => "欲罢不能。(打一字)",
                "answer" => "四"
            ],
            [
                "category" => "猜谜",
                "question" => "独眼龙。(打一字)",
                "answer" => "省"
            ],
            [
                "category" => "猜谜",
                "question" => "百花齐放。(打一成语)",
                "answer" => "万紫千红"
            ],
            [
                "category" => "猜谜",
                "question" => "紫色衣，肉白细，煮过后，衣儿肉儿都变色。(打一蔬菜)",
                "answer" => "茄子"
            ],
            [
                "category" => "猜谜",
                "question" => "水上码头。(打一字)",
                "answer" => "泵"
            ],
            [
                "category" => "猜谜",
                "question" => "重逢。(打一字)",
                "answer" => "观"
            ],
            [
                "category" => "猜谜",
                "question" => "自小便虚心。(打一字)",
                "answer" => "东"
            ],
            [
                "category" => "猜谜",
                "question" => "龋齿。(打一字)",
                "answer" => "穿"
            ],
            [
                "category" => "猜谜",
                "question" => "言出必行。(打一字)",
                "answer" => "若"
            ],
            [
                "category" => "猜谜",
                "question" => "嫦娥下凡。(打一花名)",
                "answer" => "月季"
            ],
            [
                "category" => "猜谜",
                "question" => "明月照我还。(打一明代人名)",
                "answer" => "归有光"
            ],
            [
                "category" => "猜谜",
                "question" => "有面没有口，有脚没有手，虽有四只脚，自己不会走(打一日用品)",
                "answer" => "桌子"
            ],
            [
                "category" => "猜谜",
                "question" => "飞蛾扑火虫已逝，学友无子留撇须，偶尔留得一人在，三言并没有两语，牛仔过河搭木筏，仕别三日在这里，原来这字在界前。(打一爱情表白句)",
                "answer" => "我爱你一生一世"
            ],
            [
                "category" => "猜谜",
                "question" => "古树遮天枝难见，怀内无心甚可怜，赵国有妃不是女，鹅毛轻飘鸟不见，受尽苦难又挽有，自称有人伴君旁。接受又离又做友，情人无心土月勾，竹已孤竹单思苦，从也不从独自愁，如须闭口一了伴，谁人无语又同游。(打一爱情表白句)",
                "answer" => "对不起我爱你，爱一个人好难"
            ],
            [
                "category" => "猜谜",
                "question" => "大禹称王。(打一天气)",
                "answer" => "立夏"
            ],
            [
                "category" => "猜谜",
                "question" => "坐也是卧，立也是卧，行也是卧，卧也是卧。(打一动物)",
                "answer" => "蛇"
            ],
            [
                "category" => "猜谜",
                "question" => "值钱不值钱，全在这两点。(打一字)",
                "answer" => "金"
            ],
            [
                "category" => "猜谜",
                "question" => "一曲高歌夕阳下。(打一字)",
                "answer" => "曹"
            ],
            [
                "category" => "猜谜",
                "question" => "一口吃掉牛尾巴。(打一字)",
                "answer" => "告"
            ],
            [
                "category" => "猜谜",
                "question" => "土上有竹林，土下一寸金。(打一字)",
                "answer" => "等"
            ],
            [
                "category" => "猜谜",
                "question" => "四季青，巴长大，用手摸，毛虫扎。(打一植物)",
                "answer" => "仙人掌"
            ],
            [
                "category" => "猜谜",
                "question" => "尖嘴尖耳尖下巴，细腿细角细小腰，生性狡猾多猜疑，尾后拖着一丛毛。(打一动物)",
                "answer" => "狐狸"
            ],
            [
                "category" => "猜谜",
                "question" => "坐收渔翁之利。(打一成语)",
                "answer" => "不劳而获"
            ],
            [
                "category" => "猜谜",
                "question" => "和尚打伞。(打一成语)",
                "answer" => "无法无天"
            ],
            [
                "category" => "猜谜",
                "question" => "君入罗网安可脱。(打一字)",
                "answer" => "再"
            ],
            [
                "category" => "猜谜",
                "question" => "心头十八添一目，单身贵族尔相连，春来人去无日月，一人相随到白头，高头只有一对脚，东南西北路遥遥，有人为伊吾口多，两人共枕非夫妻。(打一爱情表白句)",
                "answer" => "想你三百六十五天"
            ],
            [
                "category" => "猜谜",
                "question" => "白色花儿无人栽，北风一夜遍野开，无根无叶又无枝，此花原从天上来。(打一自然物)",
                "answer" => "雪花"
            ],
            [
                "category" => "猜谜",
                "question" => "两只小口袋，天天随身带，要是少一只，就把人笑坏。(日用品)",
                "answer" => "袜子"
            ],
            [
                "category" => "猜谜",
                "question" => "样子像元宝，外壳黑又硬，生长在水里，秋来大采收。(打一植物)",
                "answer" => "菱角"
            ],
            [
                "category" => "猜谜",
                "question" => "白天草里住，晚上空中游，金光闪闪动，见尾不见头。(打一昆虫)",
                "answer" => "萤火虫"
            ],
            [
                "category" => "猜谜",
                "question" => "喜获双胞胎。(打一成语)",
                "answer" => "一举两得"
            ],
            [
                "category" => "猜谜",
                "question" => "人初面，礼先行。(打一自然物)",
                "answer" => "儿"
            ],
            [
                "category" => "猜谜",
                "question" => "一官半职。(打一字)",
                "answer" => "耳"
            ],
            [
                "category" => "猜谜",
                "question" => "小时能吃味道鲜，老是能用有人砍，虽说不是刚和铁，浑身骨节压不湾。(打一物)",
                "answer" => "竹子"
            ],
            [
                "category" => "猜谜",
                "question" => "在仰卧起坐、游泳、俯卧撑几项目当中，对小乌龟最具挑战性的运动是？",
                "answer" => "仰卧起坐"
            ],
            [
                "category" => "猜谜",
                "question" => "此物生的怪，肚下长口袋，宝宝带中养，跳起来真快。(打一动物)",
                "answer" => "袋鼠"
            ],
            [
                "category" => "猜谜",
                "question" => "两山相对又相连，中有危峰插碧天。(打一字)",
                "answer" => "由"
            ],
            [
                "category" => "猜谜",
                "question" => "日落香残，洗却凡心一点。(打一字)",
                "answer" => "秃"
            ],
            [
                "category" => "猜谜",
                "question" => "牵藤藤，上篱笆，藤藤开花像喇叭，红喇叭，白喇叭，太阳出来美如画。(打一植物)",
                "answer" => "牵牛花"
            ],
            [
                "category" => "猜谜",
                "question" => "二小姐。(打一字)",
                "answer" => "姿"
            ],
            [
                "category" => "猜谜",
                "question" => "发生大火划禁区。(打一字)",
                "answer" => "烟"
            ],
            [
                "category" => "猜谜",
                "question" => "大框框不能破。(打一字)",
                "answer" => "因"
            ],
            [
                "category" => "猜谜",
                "question" => "上下挂钩。(打一字)",
                "answer" => "了"
            ],
            [
                "category" => "猜谜",
                "question" => "星星不见太阳光，永眠长逝莫悲伤，虚空极尽莫能计，每在心旁总情长，人随水去泪汪汪，心力点点酒苍茫，还记十月相倚伴，谁人犹在我他旁。（打一爱情表白句）",
                "answer" => "生死无悔全为有你"
            ],
            [
                "category" => "猜谜",
                "question" => "本末倒置。(打一字)",
                "answer" => "半"
            ],
            [
                "category" => "猜谜",
                "question" => "不知其二。(打一字)",
                "answer" => "共"
            ],
            [
                "category" => "猜谜",
                "question" => "旭日不出。(打一字)",
                "answer" => "九"
            ],
            [
                "category" => "猜谜",
                "question" => "春和秋都不热。(打一字)",
                "answer" => "秦"
            ],
            [
                "category" => "猜谜",
                "question" => "不是桃树却结桃，桃子里面长白毛，到了秋天桃熟了，只见白毛不见桃。 猜一植物 不是桃树却结桃，桃子里面长白毛，到了秋天桃熟了，只见白毛不见桃。(打一植物)",
                "answer" => "棉花"
            ],
            [
                "category" => "猜谜",
                "question" => "白如玉，穿黄袍，只有一点大，都是宝中宝。(打一植物)",
                "answer" => "稻子"
            ],
            [
                "category" => "猜谜",
                "question" => "有跟不着地，绿叶开白花，到处去流浪，四海处处家。(打一植物)",
                "answer" => "浮萍"
            ],
            [
                "category" => "猜谜",
                "question" => "生根不落地，有夜不开花，市场有得卖，园里不种他。(打一蔬菜)",
                "answer" => "豆芽"
            ],
            [
                "category" => "猜谜",
                "question" => "一肚子没学问，开口闭口知道，瞧瞧这小家伙，实在真是骄傲。(打一动物)",
                "answer" => "蝉"
            ],
            [
                "category" => "猜谜",
                "question" => "似鸟又非鸟，有翅身无毛，一脸丑模样，专爱夜遨游。(打一动物)",
                "answer" => "蝙蝠"
            ],
            [
                "category" => "猜谜",
                "question" => "活动地盘在墙壁，专门收拾飞蚊虫，尾断无碍会再生，医学名称是守宫。 猜陆上动物 活动地盘在墙壁，专门收拾飞蚊虫，尾断无碍会再生，医学名称是守宫。(打一动物)",
                "answer" => "壁虎"
            ],
            [
                "category" => "猜谜",
                "question" => "矮子爬楼梯。(打一成语)",
                "answer" => "步步高升"
            ],
            [
                "category" => "猜谜",
                "question" => "细菌开会。(打一成语)",
                "answer" => "无微不至"
            ],
            [
                "category" => "猜谜",
                "question" => "阎王爷写日记。(打一成语)",
                "answer" => "鬼话连篇"
            ],
            [
                "category" => "猜谜",
                "question" => "因小失大。(打一字)",
                "answer" => "口"
            ],
            [
                "category" => "猜谜",
                "question" => "四边残缺。(打一字)",
                "answer" => "匹"
            ],
            [
                "category" => "猜谜",
                "question" => "表里如一。(打一字)",
                "answer" => "回"
            ],
            [
                "category" => "猜谜",
                "question" => "高高的个子身穿青，脸儿黄喜盈盈。结果好像中秋月，圆月里面藏星星。(打一植物)",
                "answer" => "向日葵"
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
