<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionsMedicineSeeder extends Seeder
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
                "category" => "医药",
                "question" => "下列哪种情况下可以采用热敷的疗法？",
                "answer" => "肠胃痉挛"
            ],
            [
                "category" => "医药",
                "question" => "我国第一部药典书是？",
                "answer" => "新修本草"
            ],
            [
                "category" => "医药",
                "question" => "毒蛇的头部多为三角形，有毒腺，能分泌毒液，如果不幸被毒蛇咬伤，怎么处理比较妥当？",
                "answer" => "近心端包扎，并尽快救医"
            ],
            [
                "category" => "医药",
                "question" => "下列哪种蔬菜对缺铁性贫血有明显的改善作用？",
                "answer" => "菠菜"
            ],
            [
                "category" => "医药",
                "question" => "霉变的花生因为存在哪种毒素而不宜食用？",
                "answer" => "黄曲霉素"
            ],
            [
                "category" => "医药",
                "question" => "夜盲症是因为缺少什么维生素引起的？",
                "answer" => "维生素A"
            ],
            [
                "category" => "医药",
                "question" => "吃多了皮蛋会造成哪种重金属元素中毒？",
                "answer" => "铅"
            ],
            [
                "category" => "医药",
                "question" => "听诊器最初是由什么材质制成的？",
                "answer" => "木头"
            ],
            [
                "category" => "医药",
                "question" => "《献血法》规定，献血者两次献血间隔时间不得少于多长时间？",
                "answer" => "六个月"
            ],
            [
                "category" => "医药",
                "question" => "人体血液循环的动力泵是什么？",
                "answer" => "心脏"
            ],
            [
                "category" => "医药",
                "question" => "洁厕精和84消毒液混用会产生哪种气体导致人体中毒？",
                "answer" => "氯气"
            ],
            [
                "category" => "医药",
                "question" => "接种卡介苗是为了预防哪一类传染病？",
                "answer" => "结核病"
            ],
            [
                "category" => "医药",
                "question" => "贫血主要原因是人体缺少哪一种元素",
                "answer" => "铁"
            ],
            [
                "category" => "医药",
                "question" => "为什么不宜在强光下看书？",
                "answer" => "强光容易让眼疲劳"
            ],
            [
                "category" => "医药",
                "question" => "生活中如果不慎发生关节扭伤,应该采用的应急救治方法是？",
                "answer" => "冷敷"
            ],
            [
                "category" => "医药",
                "question" => "我国婚姻法规定禁止近亲结婚，是因为近亲结婚有什么危害？",
                "answer" => "后代患遗传病的机会增加"
            ],
            [
                "category" => "医药",
                "question" => "医生一般在病人臀部外上部进行肌肉注射，这是因为该处有什么特点？",
                "answer" => "没有大的神经和血管"
            ],
            [
                "category" => "医药",
                "question" => "小孩不适宜睡在沙发上，这是因为？",
                "answer" => "发育期，容易使骨骼变形"
            ],
            [
                "category" => "医药",
                "question" => "在世界上首创用汤药治病的是谁？",
                "answer" => "伊尹"
            ],
            [
                "category" => "医药",
                "question" => "阿司匹林最初提取于什么？",
                "answer" => "杨柳树皮"
            ],
            [
                "category" => "医药",
                "question" => "人体最大的解毒器官是以下哪个？",
                "answer" => "肝脏"
            ],
            [
                "category" => "医药",
                "question" => "古代医学著作《伤寒杂病论》奠定了中医治疗学的基础,是历代学医者的必修之书,它的作者是？",
                "answer" => "张仲景"
            ],
            [
                "category" => "医药",
                "question" => "神医扁鹊是哪个朝代人",
                "answer" => "春秋战国"
            ],
            [
                "category" => "医药",
                "question" => "后代医家奉之为“脉学之宗”的人是谁？",
                "answer" => "扁鹊"
            ],
            [
                "category" => "医药",
                "question" => "我国古代第一个采用“望闻问切”诊断疾病的名医是谁？",
                "answer" => "扁鹊"
            ],
            [
                "category" => "医药",
                "question" => "名医扁鹊总结出“望，闻，问，切”的诊断疾病的方法，其中“切”是指什么？",
                "answer" => "按脉搏"
            ],
            [
                "category" => "医药",
                "question" => "“扁鹊见蔡桓公，立有间，扁鹊曰：“君有疾在腠理”摘自《韩非子》，据此判断扁鹊当时采用的诊断方法是？",
                "answer" => "望"
            ],
            [
                "category" => "医药",
                "question" => "众所周知，糖尿病人在生活中是不能摄入太多的糖份的，但有一种“糖”可作为糖尿病人代谢时一场时注射输液实用，也适合于糖尿病人患者服用。请问这种“糖”是什么？",
                "answer" => "木糖醇"
            ],
            [
                "category" => "医药",
                "question" => "百会穴在人体的哪个部位？",
                "answer" => "头顶"
            ],
            [
                "category" => "医药",
                "question" => "下列哪种中药对眼睛有好处？",
                "answer" => "决明子"
            ],
            [
                "category" => "医药",
                "question" => "在我国古代针灸用具是？",
                "answer" => "九针"
            ],
            [
                "category" => "医药",
                "question" => "以下不属于中药薄荷的功效的是？",
                "answer" => "止血"
            ],
            [
                "category" => "医药",
                "question" => "中药里的“牛黄”指的是？",
                "answer" => "牛的胆囊结石"
            ],
            [
                "category" => "医药",
                "question" => "以下中药里，除了治病外还有驱蚊功效的是",
                "answer" => "艾蒿"
            ],
            [
                "category" => "医药",
                "question" => "中药川贝母取材于什么？",
                "answer" => "一种草本植物"
            ],
            [
                "category" => "医药",
                "question" => "中药的“狗宝”通常指的是？",
                "answer" => "犬科动物犬的胃结石"
            ],
            [
                "category" => "医药",
                "question" => "中药里的“玳瑁”具有很好的清热解毒功效，它取材于?",
                "answer" => "一种海洋植物"
            ],
            [
                "category" => "医药",
                "question" => "熬制中药一般常用的器具是？",
                "answer" => "砂锅砂壶"
            ],
            [
                "category" => "医药",
                "question" => "茶酒中药。中药所说的“饮片”是指？",
                "answer" => "加工后炮制的中药"
            ],
            [
                "category" => "医药",
                "question" => "中药里所说的“陈皮”是指？",
                "answer" => "晒干的橘皮"
            ],
            [
                "category" => "医药",
                "question" => "中药“胖大海”的主要功效是？",
                "answer" => "润喉止咳"
            ],
            [
                "category" => "医药",
                "question" => "按照一般市场行情，同样重量的以下中药(例如同为一两)最为贵重的是？",
                "answer" => "鹿茸"
            ],
            [
                "category" => "医药",
                "question" => "中药里的“雄黄”属于？",
                "answer" => "矿物"
            ],
            [
                "category" => "医药",
                "question" => "中药里的“大黄”指的是？",
                "answer" => "一种植物类中药"
            ],
            [
                "category" => "医药",
                "question" => "龙眼的主要功效？",
                "answer" => "补血安神"
            ],
            [
                "category" => "医药",
                "question" => "中药“羊蹄”按取材分类应该属于？",
                "answer" => "植物药"
            ],
            [
                "category" => "医药",
                "question" => "中药很早就有“忌口”的说法，以下不是常见的忌口食物是？",
                "answer" => "清淡食物"
            ],
            [
                "category" => "医药",
                "question" => "中药配药有“十八反十九畏”的基本禁忌，以下一般不可同时入药的是？",
                "answer" => "甘草和甘遂"
            ],
            [
                "category" => "医药",
                "question" => "健胃类的中药一般怎样服用有利于药效的发挥？",
                "answer" => "饭前服用"
            ],
            [
                "category" => "医药",
                "question" => "古代中药里俗称“当门子”指的是什么？",
                "answer" => "麝香"
            ],
            [
                "category" => "医药",
                "question" => "有一味中药名为“全虫”，这里的虫是指？",
                "answer" => "蝎子"
            ],
            [
                "category" => "医药",
                "question" => "中药人言即信是指？",
                "answer" => "砒霜"
            ],
            [
                "category" => "医药",
                "question" => "中药“阿胶”有补血止血，滋阴润燥之效，被列为药品之中的“上品”。请问它是用哪种动物的皮加工制成？",
                "answer" => "驴"
            ],
            [
                "category" => "医药",
                "question" => "有补脾益气、清热解毒、祛痰止咳、缓急止痛，调和褚药的功效，被尊为“灵草”、“国老”、“众药之王”的是以下哪种中药？",
                "answer" => "甘草"
            ],
            [
                "category" => "医药",
                "question" => "中医的“针灸”对人体穴位有很深的研究，以下位于人体手部的穴位为？",
                "answer" => "劳宫穴"
            ],
            [
                "category" => "医药",
                "question" => "中医的“针灸”对人体穴位有很深的研究，人体有一处“曲池穴”位于？",
                "answer" => "肘部"
            ],
            [
                "category" => "医药",
                "question" => "中国历史上第一部中医学典籍？",
                "answer" => "《黄帝内经》"
            ],
            [
                "category" => "医药",
                "question" => "借问酒家何处有。(打中医术语)",
                "answer" => "童便作引"
            ],
            [
                "category" => "医药",
                "question" => "中医的“针灸”对人体空位有很深的研究，人体有一处“四白穴”位于？",
                "answer" => "头部"
            ],
            [
                "category" => "医药",
                "question" => "中医所说的“白虎历节”指的是哪种症状",
                "answer" => "关节肿痛"
            ],
            [
                "category" => "医药",
                "question" => "以下“不是”古代药酒常用原料的是？",
                "answer" => "鸡尾"
            ],
            [
                "category" => "医药",
                "question" => "下列不属于治疗砒霜中毒的急救药物的是？",
                "answer" => "草木灰"
            ],
            [
                "category" => "医药",
                "question" => "涌泉穴在哪？",
                "answer" => "足底"
            ],
            [
                "category" => "医药",
                "question" => "下列具有疏散风热、清目醒脑作用的一味中草药是？",
                "answer" => "薄荷"
            ],
            [
                "category" => "医药",
                "question" => "川贝母属于？",
                "answer" => "野生药用植物"
            ],
            [
                "category" => "医药",
                "question" => "中药中的麝香是什么？",
                "answer" => "雄性鹿的腹部"
            ],
            [
                "category" => "医药",
                "question" => "药用兽皮的统称？",
                "answer" => "晒干的蝉蜕"
            ],
            [
                "category" => "医药",
                "question" => "中草药里“三七”的入药部分实际是植物的？",
                "answer" => "根"
            ],
            [
                "category" => "医药",
                "question" => "不属于中草药的是什么？",
                "answer" => "巴乌"
            ],
            [
                "category" => "医药",
                "question" => "适量合理地饮用葡萄酒，对人体有什么好处？",
                "answer" => "防治心血管病"
            ],
            [
                "category" => "医药",
                "question" => "适量合理地饮用葡萄酒，对人体有什么好处？",
                "answer" => "防治心血管病"
            ],
            [
                "category" => "医药",
                "question" => "古代将中草药按药性分为“四气”指的是什么？",
                "answer" => "寒热温凉"
            ],
            [
                "category" => "医药",
                "question" => "以下不属于中草药的是？",
                "answer" => "砌末"
            ],
            [
                "category" => "医药",
                "question" => "下列具有清热解毒作用的一味中草药是？",
                "answer" => "金银花"
            ],
            [
                "category" => "医药",
                "question" => "下列哪种草药能够治疗呕吐泻痢？",
                "answer" => "黄连"
            ],
            [
                "category" => "医药",
                "question" => "胰岛素能治疗",
                "answer" => "糖尿病"
            ],
            [
                "category" => "医药",
                "question" => "在缺医的情况下，对于中风、中暑、中毒、过敏以及手术麻醉过程中出现昏迷、呼吸停止、血压下降、休克的病人可用拇指反复按压其“人中”以使其苏醒。请问“人中”具体在人体哪个部位？",
                "answer" => "鼻子之下、嘴唇之上的凹沟中"
            ],
            [
                "category" => "医药",
                "question" => "细菌是生物的主要类群之一，它是所有生物中数量最多的一类。以下关于细菌的说法正确的是？",
                "answer" => "有很多细菌对人体有益"
            ],
            [
                "category" => "医药",
                "question" => "人体如果运动过度或热身不足，很容易造成肌肉拉伤。出现肌肉拉伤的情况后，应立即停止运动并采取以下哪个措施？",
                "answer" => "敷上冰块或冷毛巾"
            ],
            [
                "category" => "医药",
                "question" => "看病时选对就诊科室，不但能使自己及时、顺利就诊，也可节约医疗资源。请问感冒头疼的患者挂号时应选哪个科室？",
                "answer" => "内科"
            ],
            [
                "category" => "医药",
                "question" => "婴儿出生时的哭啼声意味着婴儿开始有一什么生理功能？",
                "answer" => "呼吸"
            ],
            [
                "category" => "医药",
                "question" => "哪种病人不宜饮茶？",
                "answer" => "溃疡病"
            ],
            [
                "category" => "医药",
                "question" => "具有止血功能的维生素是？",
                "answer" => "维生素K"
            ],
            [
                "category" => "医药",
                "question" => "亚硝胺是食品中致癌的因素，多吃以下哪种蔬菜可以抵制人体对亚硝胺的吸收和合成？",
                "answer" => "大白菜"
            ],
            [
                "category" => "医药",
                "question" => "用以下哪种方法预防颈椎病是错误的？",
                "answer" => "睡软床"
            ],
            [
                "category" => "医药",
                "question" => "我们大家的血型或相同或不相同，请问ABO系统血型有几种？",
                "answer" => "4"
            ],
            [
                "category" => "医药",
                "question" => "冻疮是由于皮肤哪一部分受损而引起的？",
                "answer" => "毛细血管"
            ],
            [
                "category" => "医药",
                "question" => "人体全身有多少块肌肉？",
                "answer" => "639块"
            ],
            [
                "category" => "医药",
                "question" => "缺少哪种维生素后，儿童易患佝偻病，成人易得软骨病？",
                "answer" => "维生素D"
            ],
            [
                "category" => "医药",
                "question" => "皮肤轻微划伤后血能自行止住，这主要是什么起作用?",
                "answer" => "血小板"
            ],
            [
                "category" => "医药",
                "question" => "人体分解和代谢酒精的是什么器官？",
                "answer" => "肝"
            ],
            [
                "category" => "医药",
                "question" => "不论是儿童、成年或老年缺钙都会影响健康，患各种疾病。钙的吸收与哪种维生素有关？",
                "answer" => "维生素D"
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
