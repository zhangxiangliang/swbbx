<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionTeaSeeder extends Seeder
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
                "category" => "茶理",
                "question" => "功夫茶产生于哪个省？",
                "answer" => "广东省潮汕地区"
            ],
            [
                "category" => "茶理",
                "question" => "茶叶的发酵程度决定了它的颜色，按颜色一般分为绿茶、红茶、青茶(乌龙茶)、白茶、黄茶、黑茶六种。我国潮汕地区流行的泡茶技法“功夫茶”所用的一般是上述哪类茶叶呢？",
                "answer" => "青茶(乌龙茶)"
            ],
            [
                "category" => "茶理",
                "question" => "茶叶的发酵程度决定了它的颜色，按颜色一般分为绿茶、红茶、青茶(乌龙茶)、白茶、黄茶、黑茶六种。我国名茶珍品“碧螺春”属于上述的哪种茶呢？",
                "answer" => "绿茶"
            ],
            [
                "category" => "茶理",
                "question" => "绿茶、白茶、表茶、红茶是以什么为依据来划分的？",
                "answer" => "茶叶的发酵程度"
            ],
            [
                "category" => "茶理",
                "question" => "茶叶依发酵程度不同分为绿茶、乌龙茶和什么茶？",
                "answer" => "红茶"
            ],
            [
                "category" => "茶理",
                "question" => "要泡出一壶好茶，除了茶叶的色、香、味外，水质的讲究也很有关系。山水(即泉水)、江水、井水三者之中，哪种水最适合用来泡茶呢？",
                "answer" => "山水"
            ],
            [
                "category" => "茶理",
                "question" => "茶叶含水量高于8%会发生什么后果？",
                "answer" => "发生霉变"
            ],
            [
                "category" => "茶理",
                "question" => "我国第一部茶叶制作书是？",
                "answer" => "茶经"
            ],
            [
                "category" => "茶理",
                "question" => "普洱茶是产于云南的著名茶叶，请问，“普洱”两字是指什么？",
                "answer" => "地名"
            ],
            [
                "category" => "茶理",
                "question" => "什么季节的茶最好喝？",
                "answer" => "秋茶"
            ],
            [
                "category" => "茶理",
                "question" => "江西庐山盛产茶？",
                "answer" => "云雾茶"
            ],
            [
                "category" => "茶理",
                "question" => "碧螺春属于下列哪种茶？",
                "answer" => "绿茶"
            ],
            [
                "category" => "茶理",
                "question" => "龙井茶属于下列哪种茶？",
                "answer" => "绿茶"
            ],
            [
                "category" => "茶理",
                "question" => "四大名茶之一的龙井茶，至今已有一千二百余年历史。龙井茶色泽翠绿，香气浓郁，甘醇爽口，形如雀舌，即有“色绿、香郁、味甘、形美”四绝的特点。你知道龙井茶的产地是在哪吗？",
                "answer" => "浙江杭州"
            ],
            [
                "category" => "茶理",
                "question" => "十大名茶之一的“龙井茶”原产地在哪个省？",
                "answer" => "浙江"
            ],
            [
                "category" => "茶理",
                "question" => "下列中甜纯型的茶是什么？",
                "answer" => "红茶"
            ],
            [
                "category" => "茶理",
                "question" => "以下哪项是加工绿茶时不会出现的步骤？",
                "answer" => "发酵"
            ],
            [
                "category" => "茶理",
                "question" => "下面哪类不是绿茶？",
                "answer" => "铁观音"
            ],
            [
                "category" => "茶理",
                "question" => "在《茶经》中，陆羽精心设计了多少种适于烹茶、品饮的茶器？",
                "answer" => "24种"
            ],
            [
                "category" => "茶理",
                "question" => "以下不是花茶中常用原料的是？",
                "answer" => "君子兰"
            ],
            [
                "category" => "茶理",
                "question" => "古代杀青指的是一种？",
                "answer" => "制茶工艺"
            ],
            [
                "category" => "茶理",
                "question" => "福建名茶“大红袍”属于哪类茶？",
                "answer" => "乌龙茶"
            ],
            [
                "category" => "茶理",
                "question" => "我国第一部详细记述茶艺的著作是？",
                "answer" => "唐代陆羽的《茶经》"
            ],
            [
                "category" => "茶理",
                "question" => "被誉为“茶仙、茶圣”等称谓的陆羽是哪朝人？",
                "answer" => "唐朝"
            ],
            [
                "category" => "茶理",
                "question" => "“隔夜茶”对人有什么影响？",
                "answer" => "因人而异"
            ],
            [
                "category" => "茶理",
                "question" => "“普洱茶”的产地在哪里？",
                "answer" => "云南"
            ],
            [
                "category" => "茶理",
                "question" => "安徽黄山所产的名茶众多，其中最为有名的是？",
                "answer" => "毛峰"
            ],
            [
                "category" => "茶理",
                "question" => "中国十大名茶之一的“白毫银针”原产地在哪个省？",
                "answer" => "福建"
            ],
            [
                "category" => "茶理",
                "question" => "古人泡茶注重用水，以下被视为上等茶水的是？",
                "answer" => "山泉水"
            ],
            [
                "category" => "茶理",
                "question" => "中国十大名茶中“碧螺春”的产地是哪？",
                "answer" => "苏州洞庭山"
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
