<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionLawSeeder extends Seeder
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
                "category" => "法律",
                "question" => "几个人以上共同故意犯罪被称为共同犯罪？",
                "answer" => "2个"
            ],
            [
                "category" => "法律",
                "question" => "《强制戒毒办法》规定，强制戒毒期限为多长时间?",
                "answer" => "3-6个月"
            ],
            [
                "category" => "法律",
                "question" => "客运公司将运送旅客的大客车换成了小轿车，并要求已购车票乘客每人再交20元，这种做法是否合法？",
                "answer" => "不合法"
            ],
            [
                "category" => "法律",
                "question" => "除法律另有规定或合同另有规定外，保险合同成立后，谁有权解除合同？",
                "answer" => "投保人"
            ],
            [
                "category" => "法律",
                "question" => "依据中国法律规定，机动车靠边停车时应？",
                "answer" => "应开右转向灯"
            ],
            [
                "category" => "法律",
                "question" => "我国高速公路对车辆最低时速有限制，一般不得低于每小时几千米？",
                "answer" => "每小时60千米"
            ],
            [
                "category" => "法律",
                "question" => "按有关法律规定，经营者发起的抽奖式有奖销售，最高奖金金额的限度是多少？",
                "answer" => "5千元"
            ],
            [
                "category" => "法律",
                "question" => "属人民法院直接受理的案件有？",
                "answer" => "虐待案"
            ],
            [
                "category" => "法律",
                "question" => "所购商品房每套住房建筑面积不超过(含)多少平方米可享受缴纳房屋成交价2%的契税？",
                "answer" => "120平方米"
            ],
            [
                "category" => "法律",
                "question" => "个人如果向银行出售金银物品必须卖给那个银行呢？",
                "answer" => "中国人民银行"
            ],
            [
                "category" => "法律",
                "question" => "发起人持有本公司的股份，自公司成立之日起，不得转让的期限为？",
                "answer" => "3年内"
            ],
            [
                "category" => "法律",
                "question" => "新中国第一部律师法于哪一年开始施行？",
                "answer" => "1997年"
            ],
            [
                "category" => "法律",
                "question" => "标准工作日即每日工作8小时，这适用于个体工商户吗？",
                "answer" => "适用"
            ],
            [
                "category" => "法律",
                "question" => "从事有害工种时实行定期轮换制度，合同期限最多不超过多少年？",
                "answer" => "8年"
            ],
            [
                "category" => "法律",
                "question" => "目前我国商业、旅游、娱乐用地的土地使用权出让的最高年限是？",
                "answer" => "40年"
            ],
            [
                "category" => "法律",
                "question" => "小王昨天买了去上海的车票，今天到车站才知道火车停运，他要求退票。车站应该怎么办？",
                "answer" => "退票，不收退票费"
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
