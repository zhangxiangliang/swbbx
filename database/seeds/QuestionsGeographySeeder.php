<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionsGeographySeeder extends Seeder
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
                "category" => "地理",
                "question" => "世界上蕴藏石油最丰富是半岛、世界最大的半岛是哪个？",
                "answer" => "阿拉伯半岛"
            ],
            [
                "category" => "地理",
                "question" => "太阳的主要化学成份？",
                "answer" => "氢"
            ],
            [
                "category" => "地理",
                "question" => "月食的现象只会出现在以下哪个时间段？",
                "answer" => "月满"
            ],
            [
                "category" => "地理",
                "question" => "织女星位于哪个星座",
                "answer" => "天琴座"
            ],
            [
                "category" => "地理",
                "question" => "南京的地理形势，号称“龙蟠虎踞”，“龙蟠”是指？",
                "answer" => "紫金山"
            ],
            [
                "category" => "地理",
                "question" => "太阳系八大行星中，被称为“红色星球”的是哪颗行星？",
                "answer" => "火星"
            ],
            [
                "category" => "地理",
                "question" => "赤道周长约为多少千米呢？",
                "answer" => "40000千米"
            ],
            [
                "category" => "地理",
                "question" => "我国地势的主要特征是？",
                "answer" => "西高东低"
            ],
            [
                "category" => "地理",
                "question" => "太阳系中，哪个行星的大气环境和地球最接近？",
                "answer" => "火星"
            ],
            [
                "category" => "地理",
                "question" => "海底主要是由哪种岩石组成？",
                "answer" => "玄武岩"
            ],
            [
                "category" => "地理",
                "question" => "组成太阳的物质大多是些普通的气体，其中占比最多的是哪种元素的气体？",
                "answer" => "氢"
            ],
            [
                "category" => "地理",
                "question" => "星空不是静止不动的，整片星空无声息地自东向西旋转着，西边的星星渐渐没入地平线下，东边的地平线上不断升起新的星座，这其实是什么造成的呢？",
                "answer" => "地球自转"
            ],
            [
                "category" => "地理",
                "question" => "以“黑洞理论”闻名于世的是哪位科学家？",
                "answer" => "霍金"
            ],
            [
                "category" => "地理",
                "question" => "嫦娥三号月球探测器的巡视器被命名为？",
                "answer" => "玉兔号"
            ],
            [
                "category" => "地理",
                "question" => "太阳系中，地球位于火星与哪颗行星之间？",
                "answer" => "金星"
            ],
            [
                "category" => "地理",
                "question" => "地球表面海陆面积的比例是多少？",
                "answer" => "7:3"
            ],
            [
                "category" => "地理",
                "question" => "万里长城东起山海关，西至哪里？",
                "answer" => "嘉峪关"
            ],
            [
                "category" => "地理",
                "question" => "我国最大的半岛是什么半岛？",
                "answer" => "山东半岛"
            ],
            [
                "category" => "地理",
                "question" => "沟通太平洋和印度洋的水道是哪里？",
                "answer" => "马六甲海峡"
            ],
            [
                "category" => "地理",
                "question" => "地球属于下列哪种星球？",
                "answer" => "行星"
            ],
            [
                "category" => "地理",
                "question" => "我国有四大直辖市是以下的哪些？",
                "answer" => "北京，天津，上海，重庆"
            ],
            [
                "category" => "地理",
                "question" => "在九大行星中，被称为最冷的行星是哪一颗？",
                "answer" => "冥王星"
            ],
            [
                "category" => "地理",
                "question" => "山西山东中的“山”是指的什么山？",
                "answer" => "太行山"
            ],
            [
                "category" => "地理",
                "question" => "“五岳”是历史悠久的五大名山之总称，其中享有“奇险天下第一山”之誉的中国名山是？",
                "answer" => "西岳华山"
            ],
            [
                "category" => "地理",
                "question" => "地球从地面到地心可以分为三个圈层，它们是什么？",
                "answer" => "地壳，地幔，地核"
            ],
            [
                "category" => "地理",
                "question" => "地球的内部分为三个部分--地壳、地幔、地核，其中最里面的是什么？",
                "answer" => "地核"
            ],
            [
                "category" => "地理",
                "question" => "双喜临门可以用来形容哪一个城市？",
                "answer" => "重庆"
            ],
            [
                "category" => "地理",
                "question" => "地球自转时，地轴的北极始终对着下面哪颗星？",
                "answer" => "北极星"
            ],
            [
                "category" => "地理",
                "question" => "如果聊天时有人告诉你他上个月去过以郁金香为国花的国家，那么你应该怎么接茬？",
                "answer" => "荷兰的风车也挺有名的"
            ],
            [
                "category" => "地理",
                "question" => "泰姬陵是哪一个国家的建筑？",
                "answer" => "印度"
            ],
            [
                "category" => "地理",
                "question" => "著名的九寨沟风景名胜区位于哪个省份？",
                "answer" => "四川"
            ],
            [
                "category" => "地理",
                "question" => "我国的热带雨林主要在以下哪个城市？",
                "answer" => "西双版纳"
            ],
            [
                "category" => "地理",
                "question" => "我国目前一共有多少个省级行政区域？",
                "answer" => "34个"
            ],
            [
                "category" => "地理",
                "question" => "下列哪一个不是我国的领海？",
                "answer" => "北海"
            ],
            [
                "category" => "地理",
                "question" => "下列行星中，卫星最多的是哪个？",
                "answer" => "土星"
            ],
            [
                "category" => "地理",
                "question" => "在以下3个不同省份的人里面，最有可能喜欢“黄梅戏”的是？",
                "answer" => "黄梅戏出自安徽，最有可能喜欢的是安徽人"
            ],
            [
                "category" => "地理",
                "question" => "地球公转的方向是怎样的？",
                "answer" => "自西向东"
            ],
            [
                "category" => "地理",
                "question" => "地球每时每刻都在自转，自转的方向是？",
                "answer" => "自西向东"
            ],
            [
                "category" => "地理",
                "question" => "月亮围绕着地球转动的方向是怎样的？",
                "answer" => "自西向东"
            ],
            [
                "category" => "地理",
                "question" => "素有“瓷都”之称的景德镇位于哪个省份？",
                "answer" => "江西"
            ],
            [
                "category" => "地理",
                "question" => "“桂林山水甲天下”一句中，桂林是我国哪个省份的城市？",
                "answer" => "广西省"
            ],
            [
                "category" => "地理",
                "question" => "贵州省境内有被誉为“中华第一瀑”的大型瀑布群，它的名字是？",
                "answer" => "黄果树瀑布"
            ],
            [
                "category" => "地理",
                "question" => "传说有野人出没的神农架自然保护区在我国哪一省份？",
                "answer" => "湖北"
            ],
            [
                "category" => "地理",
                "question" => "当有人问你是否去过风车之国的时候，对方指的可能是以下哪个国家？",
                "answer" => "荷兰"
            ],
            [
                "category" => "地理",
                "question" => "一般的地图上，向左的方向对应的地理方向是？",
                "answer" => "西"
            ],
            [
                "category" => "地理",
                "question" => "有一种叫做“暗射地图”的地图是指？",
                "answer" => "有符号标记，无文字的地图"
            ],
            [
                "category" => "地理",
                "question" => "中国的很多省市都有独特的别称，被称为“山城”的是哪个城市？",
                "answer" => "重庆"
            ],
            [
                "category" => "地理",
                "question" => "如果在某地区的地层中发现大量的大象化石，可以推测这个地区古代曾是？",
                "answer" => "森林"
            ],
            [
                "category" => "地理",
                "question" => "你朋友说想见识下欧洲最古老的文明遗迹，那么你应该建议他去的国家是哪个？",
                "answer" => "希腊"
            ],
            [
                "category" => "地理",
                "question" => "广西简称为“桂”与下列哪一项有关？",
                "answer" => "特产"
            ],
            [
                "category" => "地理",
                "question" => "当红旗向东南飘动时，这时刮的是什么风？",
                "answer" => "西北风"
            ],
            [
                "category" => "地理",
                "question" => "它位于南新疆塔里木盆地，维吾尔语意“进去出不了的地方”，当地人通常称它为“死亡之海”，请问这个地方叫什么？",
                "answer" => "塔克拉玛干沙漠"
            ],
            [
                "category" => "地理",
                "question" => "世界上许多国家都有一个别称，比如南非就被称为“黄金之国”，那请问：被称为“音乐之邦”的国家是？",
                "answer" => "奥地利"
            ],
            [
                "category" => "地理",
                "question" => "发源于我国唯一注入北冰洋的河流是哪条河流？",
                "answer" => "额尔齐斯河"
            ],
            [
                "category" => "地理",
                "question" => "世界上最长的运河，世界上最长的人工河流，也是最古老的运河之一。它和万里长城并称为我国古代的两项伟大工程，闻名于全世界。请问这个人工河流的名称是？",
                "answer" => "京杭大运河"
            ],
            [
                "category" => "地理",
                "question" => "太阳是银河系的一部分，它属于什么星？",
                "answer" => "恒星"
            ],
            [
                "category" => "地理",
                "question" => "太阳是一颗自己能发热发光的星，它属于？",
                "answer" => "恒星"
            ],
            [
                "category" => "地理",
                "question" => "下列天体中，距离地球最近的恒星是哪个？",
                "answer" => "太阳"
            ],
            [
                "category" => "地理",
                "question" => "除了太阳之外，距离地球最近的恒星是哪颗？",
                "answer" => "比邻星"
            ],
            [
                "category" => "地理",
                "question" => "太阳系中所有天体都围绕太阳这颗恒星运转，而第一个证明这点的人是谁？",
                "answer" => "伽利略"
            ],
            [
                "category" => "地理",
                "question" => "苏伊士运河属于那个国家",
                "answer" => "埃及"
            ],
            [
                "category" => "地理",
                "question" => "世界四大洋中面积最小的是？",
                "answer" => "北冰洋"
            ],
            [
                "category" => "地理",
                "question" => "太阳系八大行星中，最大的星球(最大的行星)是哪颗？",
                "answer" => "木星"
            ],
            [
                "category" => "地理",
                "question" => "五台山是中国佛教四大名山之一，它位于哪个省？",
                "answer" => "山西"
            ],
            [
                "category" => "地理",
                "question" => "我国佛教有四大名山，他们分别是山西五台山，安徽九华山，四川峨眉山和浙江？",
                "answer" => "普陀山"
            ],
            [
                "category" => "地理",
                "question" => "我国佛教有四大名山，他们分别是浙江普陀山，安徽九华山，山西五台山和四川？",
                "answer" => "峨眉山"
            ],
            [
                "category" => "地理",
                "question" => "日食的一个食季是多少天？",
                "answer" => "36"
            ],
            [
                "category" => "地理",
                "question" => "一周天是多少年？",
                "answer" => "12"
            ],
            [
                "category" => "地理",
                "question" => "太阳系各大行星中，除了金星外，还有哪一个行星没有卫星？",
                "answer" => "水星"
            ],
            [
                "category" => "地理",
                "question" => "目前已确认的土星有多少颗卫星？",
                "answer" => "62"
            ],
            [
                "category" => "地理",
                "question" => "水星和金星有卫星嘛？",
                "answer" => "都没有"
            ],
            [
                "category" => "地理",
                "question" => "地球有几颗卫星",
                "answer" => "1"
            ],
            [
                "category" => "地理",
                "question" => "火星有多少颗卫星？",
                "answer" => "2"
            ],
            [
                "category" => "地理",
                "question" => "世界第一高峰珠穆朗玛峰属于哪个山脉？",
                "answer" => "喜马拉雅山"
            ],
            [
                "category" => "地理",
                "question" => "泥娃娃“大阿福”是老家是",
                "answer" => "江苏无锡"
            ],
            [
                "category" => "地理",
                "question" => "夜郎自大中的夜郎在哪？",
                "answer" => "贵州"
            ],
            [
                "category" => "地理",
                "question" => "下面哪个是世界最深的洼地？",
                "answer" => "死海"
            ],
            [
                "category" => "地理",
                "question" => "以下哪个国家设立了鸟蛋博物馆？",
                "answer" => "德国"
            ],
            [
                "category" => "地理",
                "question" => "黄山四绝之一的“奇松”是指什么？",
                "answer" => "迎客松"
            ],
            [
                "category" => "地理",
                "question" => "“茶马古道”是古代著名的贸易通道，它主要促进了哪些地域的贸易往来？",
                "answer" => "西藏云南四川"
            ],
            [
                "category" => "地理",
                "question" => "秦汉时代，人们说的“关中”指哪一带？",
                "answer" => "函谷关以西"
            ],
            [
                "category" => "地理",
                "question" => "“石头城”指我国的那个城市？",
                "answer" => "南京"
            ],
            [
                "category" => "地理",
                "question" => "我国梁式桥型的最著名代表作(精品杰作)洛阳桥位于？",
                "answer" => "福建泉州"
            ],
            [
                "category" => "地理",
                "question" => "在我国自古就有“天府之国”美誉的地区是哪里？",
                "answer" => "四川盆地"
            ],
            [
                "category" => "地理",
                "question" => "华夏民族在哪里诞生？",
                "answer" => "黄河流域"
            ],
            [
                "category" => "地理",
                "question" => "南宋都城临安是现今何处？",
                "answer" => "杭州"
            ],
            [
                "category" => "地理",
                "question" => "平遥古城位于哪里？",
                "answer" => "山西省中部"
            ],
            [
                "category" => "地理",
                "question" => "世界五大“水上城市”中，我国唯一列入的是哪一座城市？",
                "answer" => "苏州"
            ],
            [
                "category" => "地理",
                "question" => "金字塔建在尼罗河的？",
                "answer" => "西岸"
            ],
            [
                "category" => "地理",
                "question" => "月全食时，地球，太阳，月亮形成一条直线，居于中间的是？",
                "answer" => "地球"
            ],
            [
                "category" => "地理",
                "question" => "五岳中的北岳指的是？",
                "answer" => "恒山"
            ],
            [
                "category" => "地理",
                "question" => "五岳中的东岳指的是？",
                "answer" => "泰山"
            ],
            [
                "category" => "地理",
                "question" => "五岳中的南岳指的是？",
                "answer" => "衡山"
            ],
            [
                "category" => "地理",
                "question" => "五岳中的中岳指的是？",
                "answer" => "嵩山"
            ],
            [
                "category" => "地理",
                "question" => "中岳嵩山位于中国哪个省份？",
                "answer" => "河南"
            ],
            [
                "category" => "地理",
                "question" => "哪里被称为“千佛洞”？",
                "answer" => "甘肃敦煌莫高窟"
            ],
            [
                "category" => "地理",
                "question" => "被称为我国最最大的古典艺术宝库的石窟是哪一个？",
                "answer" => "甘肃敦煌莫高窟"
            ],
            [
                "category" => "地理",
                "question" => "中国三大航天中心之一的酒泉位于我国哪个省？",
                "answer" => "甘肃"
            ],
            [
                "category" => "地理",
                "question" => "中国三大航天中心之一的西昌位于我国哪个省？",
                "answer" => "四川"
            ],
            [
                "category" => "地理",
                "question" => "中国三大航天中心之一的太原位于我国哪个省？",
                "answer" => "山西"
            ],
            [
                "category" => "地理",
                "question" => "宋代制瓷业非常繁荣，著名的汝窑位于哪个省？",
                "answer" => "河南"
            ],
            [
                "category" => "地理",
                "question" => "皮影戏最早诞生在两千年前的西汉，发祥于中国哪个地区？",
                "answer" => "陕西"
            ],
            [
                "category" => "地理",
                "question" => "“烙花”工艺是中国发间传统工艺，历史上以那个地方的烙花工艺最为有名？",
                "answer" => "河南南阳"
            ],
            [
                "category" => "地理",
                "question" => "“莫高窟”是我国重要的艺术与文化遗产坐落在哪里？",
                "answer" => "甘肃敦煌"
            ],
            [
                "category" => "地理",
                "question" => "黄酒名品“加饭酒”产地在哪？",
                "answer" => "浙江"
            ],
            [
                "category" => "地理",
                "question" => "现实中普陀山在哪个省？",
                "answer" => "浙江"
            ],
            [
                "category" => "地理",
                "question" => "赣是哪个省的简称？",
                "answer" => "江西"
            ],
            [
                "category" => "地理",
                "question" => "我国唯一的大象产地是？",
                "answer" => "云南"
            ],
            [
                "category" => "地理",
                "question" => "太阳系中离地球最近的行星是那颗行星？",
                "answer" => "金星"
            ],
            [
                "category" => "地理",
                "question" => "火星上主要的气体成分是什么？",
                "answer" => "二氧化碳"
            ],
            [
                "category" => "地理",
                "question" => "世界上海拔最高的是哪座山峰？",
                "answer" => "珠穆朗玛峰"
            ],
            [
                "category" => "地理",
                "question" => "普通情况下，水的沸点是100摄氏度，如果你在珠穆朗玛峰顶煮水，水的沸点可能是以下哪个温度？",
                "answer" => "72摄氏度"
            ],
            [
                "category" => "地理",
                "question" => "珠穆朗玛峰有多高？",
                "answer" => "8848米"
            ],
            [
                "category" => "地理",
                "question" => "我国素有“煤铁之乡”之称的省份是哪一省？",
                "answer" => "山西"
            ],
            [
                "category" => "地理",
                "question" => "初唐的都城长安是现在的？",
                "answer" => "西安"
            ],
            [
                "category" => "地理",
                "question" => "著名的“大雁塔”在我国哪个地方？",
                "answer" => "西安"
            ],
            [
                "category" => "地理",
                "question" => "世界上最大的洋是？",
                "answer" => "太平洋"
            ],
            [
                "category" => "地理",
                "question" => "哈雷彗星绕太阳运行的周期约为多少年？",
                "answer" => "76年"
            ],
            [
                "category" => "地理",
                "question" => "有“绿城”之称的城市是哪个？",
                "answer" => "郑州"
            ],
            [
                "category" => "地理",
                "question" => "古代叫“西海”，蒙古语称“库库诺尔”，意识是“青色的湖”，这是哪个省份？",
                "answer" => "青海省"
            ],
            [
                "category" => "地理",
                "question" => "我国海拔最高的盆地在哪个省份？",
                "answer" => "青海省"
            ],
            [
                "category" => "地理",
                "question" => "我国测量海拔是以什么海的平均海平面作为零点？",
                "answer" => "黄海"
            ],
            [
                "category" => "地理",
                "question" => "以下三个地区，哪个地区一天中的温度变化最小？",
                "answer" => "海滩"
            ],
            [
                "category" => "地理",
                "question" => "世界上许多国家都有一个别称，比如南非就被称为“黄金之国”，那请问：被称为“花园城市国家”的国家是？",
                "answer" => "新加坡"
            ],
            [
                "category" => "地理",
                "question" => "世界上许多国家都有一个别称，比如南非就被称为“黄金之国”，那请问：被称为“骑在羊背上的国家”的国家是？",
                "answer" => "澳大利亚"
            ],
            [
                "category" => "地理",
                "question" => "世界上许多国家都有一个别称，比如南非就被称为“黄金之国”，那请问：被称为“印度洋上的明珠”的国家是？",
                "answer" => "马尔代夫"
            ],
            [
                "category" => "地理",
                "question" => "世界上许多国家都有一个别称，比如南非就被称为“黄金之国”，那请问：被称为“千湖之国”的国家是？",
                "answer" => "芬兰"
            ],
            [
                "category" => "地理",
                "question" => "世界上许多国家都有一个别称，比如南非就被称为“黄金之国”，那请问：被称为“美洲花园”的国家是？",
                "answer" => "哥斯达黎加"
            ],
            [
                "category" => "地理",
                "question" => "太阳黑子出现在太阳的哪个层？",
                "answer" => "光球层"
            ],
            [
                "category" => "地理",
                "question" => "太阳的表面常常会出现黑色的斑点--黑子，它实际上是太阳表面上的风暴，是巨大的旋涡状气流;在风沙蔽日或阳光微弱的时候，我们甚至用肉眼也能看见它。黑子之所以看起来是黑的，是因为以下哪个原因？",
                "answer" => "它比周围的温度低很多"
            ],
            [
                "category" => "地理",
                "question" => "太阳黑子的多少和大小可以称作为太阳活动强弱的标志，其活动周期大月为多少年？",
                "answer" => "11年"
            ],
            [
                "category" => "地理",
                "question" => "成都又被称为？",
                "answer" => "蓉城"
            ],
            [
                "category" => "地理",
                "question" => "我国最大的淡水湖(江西境内最大湖泊)是？",
                "answer" => "鄱阳湖"
            ],
            [
                "category" => "地理",
                "question" => "由于夏季天亮较早，部分地区为了充分利用光照资源，节约照明用电，在一段时期内将时间提前一个小时，这种时间标准称为“夏令时”。我国目前之所以不实施夏令时，主要原因是什么？",
                "answer" => "东部和西部时差大不便统一"
            ],
            [
                "category" => "地理",
                "question" => "中国最大的平原是哪个？",
                "answer" => "东北平原"
            ],
            [
                "category" => "地理",
                "question" => "黄山风景区是中国著名风景区之一，世界游览胜地，位于安徽省南部黄山市。黄山分为前海，天海，北海，东海，西海等五大景区，所谓的“海”指的是什么？",
                "answer" => "云海"
            ],
            [
                "category" => "地理",
                "question" => "青藏高原平均海拔多少米？",
                "answer" => "4500米"
            ],
            [
                "category" => "地理",
                "question" => "《西游记》里的火焰山在哪里？",
                "answer" => "吐鲁番盆地"
            ],
            [
                "category" => "地理",
                "question" => "著名的瘦西湖在那个城市？",
                "answer" => "扬州"
            ],
            [
                "category" => "地理",
                "question" => "我国的“花城”是指哪一城市？",
                "answer" => "广州"
            ],
            [
                "category" => "地理",
                "question" => "湖南湖北的“湖”是指？",
                "answer" => "洞庭湖"
            ],
            [
                "category" => "地理",
                "question" => "我国第一座国家森林公园坐落在那个地方？",
                "answer" => "张家界"
            ],
            [
                "category" => "地理",
                "question" => "半月湾在什么县境内？",
                "answer" => "长岛县"
            ],
            [
                "category" => "地理",
                "question" => "“喀斯特地貌”是指可溶性岩石受水的溶蚀作用和伴随的机械作用所形成的各种地貌。以下哪个不是“喀斯特地貌”？",
                "answer" => "亚马逊雨林"
            ],
            [
                "category" => "地理",
                "question" => "世界上最深的海沟是哪个？",
                "answer" => "马里亚纳海沟"
            ],
            [
                "category" => "地理",
                "question" => "宏伟的长城是我国古代劳动人民智慧和独创性的象征。下列关于秦长城起止点的叙述正确的是？",
                "answer" => "西起临洮，东到辽东"
            ],
            [
                "category" => "地理",
                "question" => "“洞庭天下水，岳阳天下楼”。岳阳楼在哪座湖上？",
                "answer" => "洞庭湖"
            ],
            [
                "category" => "地理",
                "question" => "我国最大的咸水湖是？",
                "answer" => "青海湖"
            ],
            [
                "category" => "地理",
                "question" => "亚洲耕地面积最大的国家是？",
                "answer" => "印度"
            ],
            [
                "category" => "地理",
                "question" => "我国海岸线长多少公里？",
                "answer" => "18000公里"
            ],
            [
                "category" => "地理",
                "question" => "地层中的古生物遗体或遗迹，经过长期的演变，形成类似石头的物质，称为什么？",
                "answer" => "化石"
            ],
            [
                "category" => "地理",
                "question" => "大桥两端桥头处的建筑物叫桥头堡。最初建立桥头堡的目标是？",
                "answer" => "军事防御"
            ],
            [
                "category" => "地理",
                "question" => "我国第一大岛是？",
                "answer" => "台湾岛"
            ],
            [
                "category" => "地理",
                "question" => "土耳其的首都在哪？",
                "answer" => "安卡拉"
            ],
            [
                "category" => "地理",
                "question" => "中国最热的地方在哪里？",
                "answer" => "吐鲁番盆地"
            ],
            [
                "category" => "地理",
                "question" => "大陆架是什么？",
                "answer" => "大陆在海底的延伸"
            ],
            [
                "category" => "地理",
                "question" => "我国最著名的热水湖是哪个湖泊？",
                "answer" => "西藏羊八井"
            ],
            [
                "category" => "地理",
                "question" => "敦煌月牙泉位于敦煌市西南5公里处，是一处神奇的漫漫沙漠中的湖水奇观。鸣沙山下，泉水形成一湖，在沙丘环抱之中，酷似一弯新月而得名月牙泉。你知道它的俗名是什么吗",
                "answer" => "药泉"
            ],
            [
                "category" => "地理",
                "question" => "太阳系中靠最外部的行星",
                "answer" => "冥王星"
            ],
            [
                "category" => "地理",
                "question" => "杜康酒的产地在我国的？",
                "answer" => "河南"
            ],
            [
                "category" => "地理",
                "question" => "古代人由于缺乏科学的了解，称月食现象为“天狗食月”。他实际是太阳、地球、月亮成一直线的时候出现的特殊天文现象。此时处于连线中间的，是太阳、地球、月亮之中的那个？",
                "answer" => "地球"
            ],
            [
                "category" => "地理",
                "question" => "世界上哪个国家拥有“黄金海岸”之称？",
                "answer" => "加纳"
            ],
            [
                "category" => "地理",
                "question" => "中国的首都北京位于哪个时区？",
                "answer" => "东八区"
            ],
            [
                "category" => "地理",
                "question" => "兴凯湖是哪两个国家共有？",
                "answer" => "中俄"
            ],
            [
                "category" => "地理",
                "question" => "《福尔摩斯探索集》里德“苏格兰场”在那个地方？",
                "answer" => "英国"
            ],
            [
                "category" => "地理",
                "question" => "钻石最大的产出国是哪个国家？",
                "answer" => "扎伊尔"
            ],
            [
                "category" => "地理",
                "question" => "一个国家的领土不包括以下哪项？",
                "answer" => "外层空间"
            ],
            [
                "category" => "地理",
                "question" => "我国最大的海是哪个海？",
                "answer" => "南海"
            ],
            [
                "category" => "地理",
                "question" => "南岳衡山的最高的是哪个山峰？",
                "answer" => "祝融峰"
            ],
            [
                "category" => "地理",
                "question" => "我国的“冰城”是哪？",
                "answer" => "哈尔滨"
            ],
            [
                "category" => "地理",
                "question" => "世界上最大的坐佛位于？",
                "answer" => "中国四川"
            ],
            [
                "category" => "地理",
                "question" => "在江浙一带最流行的地方戏曲是什么？",
                "answer" => "越剧"
            ],
            [
                "category" => "地理",
                "question" => "世界上最长的山脉是什么山？",
                "answer" => "安第斯山"
            ],
            [
                "category" => "地理",
                "question" => "七大洲中面积最小的是哪个？",
                "answer" => "大洋洲"
            ],
            [
                "category" => "地理",
                "question" => "当我们用眼睛来直接观察星星时，会发现星星明暗不一。天文学家用星等来区分它们的明亮程度，星等越小，表示星星越亮还是越暗？",
                "answer" => "越亮"
            ],
            [
                "category" => "地理",
                "question" => "北极星位于天空中的哪个位置？",
                "answer" => "小熊星座"
            ],
            [
                "category" => "地理",
                "question" => "当你面朝南时，左面是哪个方向？",
                "answer" => "东"
            ],
            [
                "category" => "地理",
                "question" => "因地处洞庭湖以北而得名，简称“鄂”的是我国哪个省份？",
                "answer" => "湖北"
            ],
            [
                "category" => "地理",
                "question" => "一年四季晴空万里，日照时间长，人们把它叫做“日光城”的是哪个城市？",
                "answer" => "拉萨"
            ],
            [
                "category" => "地理",
                "question" => "黄鹤楼在我国的哪个省份？",
                "answer" => "湖北省"
            ],
            [
                "category" => "地理",
                "question" => "北极星指的是最靠近北天极的一颗星，它实际属于哪种天体？",
                "answer" => "恒星"
            ],
            [
                "category" => "地理",
                "question" => "火星公转一周的时间约为地球公转的几倍？",
                "answer" => "两倍"
            ],
            [
                "category" => "地理",
                "question" => "为区分大气层和天空的界限，国际航空联合会将100公里的高度定义为什么？",
                "answer" => "卡门线"
            ],
            [
                "category" => "地理",
                "question" => "被誉为“地球的保护伞”的是大气层中的哪一层？",
                "answer" => "臭氧层"
            ],
            [
                "category" => "地理",
                "question" => "我国第一大江长江全长6300千米，最后注入了哪个海？",
                "answer" => "东海"
            ],
            [
                "category" => "地理",
                "question" => "太阳系八大行星中，体积最小的行星是？",
                "answer" => "水星"
            ],
            [
                "category" => "地理",
                "question" => "世界上面积最大的平原是哪个平原？",
                "answer" => "亚马逊平原"
            ],
            [
                "category" => "地理",
                "question" => "太阳系八大行星中，自转最慢的行星是？",
                "answer" => "金星"
            ],
            [
                "category" => "地理",
                "question" => "0度经线也被称为什么？",
                "answer" => "本初子午线"
            ],
            [
                "category" => "地理",
                "question" => "下列哪个描述不符合温带沙漠环境特征？",
                "answer" => "年温差小"
            ],
            [
                "category" => "地理",
                "question" => "太阳表面有时候会出现一些突然增亮的斑块，它叫什么呢？",
                "answer" => "太阳耀斑"
            ],
            [
                "category" => "地理",
                "question" => "开平碉楼位于我国哪个省？",
                "answer" => "广东省"
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
