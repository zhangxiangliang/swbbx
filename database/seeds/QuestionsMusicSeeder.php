<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionsMusicSeeder extends Seeder
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
                "category" => "乐理",
                "question" => "京剧中的旦行中穿短裳的是",
                "answer" => "花旦"
            ],
            [
                "category" => "乐理",
                "question" => "京剧中，饰演性格活泼，开朗的青年女性的应是？",
                "answer" => "花旦"
            ],
            [
                "category" => "乐理",
                "question" => "中国戏曲中的人物角色可分为生、旦、净、末、丑，以下哪一个是女角色的女统称",
                "answer" => "旦"
            ],
            [
                "category" => "乐理",
                "question" => "俗称的“黑管”是哪种木管乐器？",
                "answer" => "单簧管"
            ],
            [
                "category" => "乐理",
                "question" => "我国国歌的作词者是？",
                "answer" => "田汉"
            ],
            [
                "category" => "乐理",
                "question" => "《十面埋伏》是？",
                "answer" => "琵琶曲"
            ],
            [
                "category" => "乐理",
                "question" => "下列哪个是苗族的传统乐器？",
                "answer" => "芦笙"
            ],
            [
                "category" => "乐理",
                "question" => "南北朝时，北方民歌艺术的最高成就是？",
                "answer" => "敕勒歌"
            ],
            [
                "category" => "乐理",
                "question" => "苏州评弹是哪两种表演形式的统称",
                "answer" => "评话和弹词"
            ],
            [
                "category" => "乐理",
                "question" => "被誉为“钢琴之王”的作曲家是？",
                "answer" => "李斯特"
            ],
            [
                "category" => "乐理",
                "question" => "古琴的音色有泛音，散音和什么音？",
                "answer" => "按音"
            ],
            [
                "category" => "乐理",
                "question" => "大多数古琴有多少根弦？",
                "answer" => "七弦"
            ],
            [
                "category" => "乐理",
                "question" => "以下属于中国是古乐基本音阶的是？",
                "answer" => "宫、商、角、徵、羽"
            ],
            [
                "category" => "乐理",
                "question" => "一般古琴的琴面为什么材料？",
                "answer" => "桐木"
            ],
            [
                "category" => "乐理",
                "question" => "唐朝古琴有几根弦？",
                "answer" => "7根"
            ],
            [
                "category" => "乐理",
                "question" => "我国古代最早出现的乐器是哪一类？",
                "answer" => "吹奏乐器"
            ],
            [
                "category" => "乐理",
                "question" => "以下哪种乐器是龟兹乐器？",
                "answer" => "羯鼓"
            ],
            [
                "category" => "乐理",
                "question" => "下面哪种不是古代的乐器？",
                "answer" => "镗"
            ],
            [
                "category" => "乐理",
                "question" => "以下乐器与“琵琶”在演奏上属于同一类的是哪个？",
                "answer" => "筝"
            ],
            [
                "category" => "乐理",
                "question" => "民族乐器“葫芦丝”按演奏方式划分属于什么？",
                "answer" => "吹奏类乐器"
            ],
            [
                "category" => "乐理",
                "question" => "“二胡”是民间常见的拉弦乐器，它的琴弦数目是什么？",
                "answer" => "两根"
            ],
            [
                "category" => "乐理",
                "question" => "下列古代乐器中，属于少数民族乐器的是什么？",
                "answer" => "马头琴"
            ],
            [
                "category" => "乐理",
                "question" => "“葫芦丝”是我国古代哪地区常见的民族乐器？",
                "answer" => "西北"
            ],
            [
                "category" => "乐理",
                "question" => "以下乐器与“笛子”在演奏方式上属于同一类的是哪个？",
                "answer" => "唢呐"
            ],
            [
                "category" => "乐理",
                "question" => "“马头琴”是哪个民族的常用乐器？",
                "answer" => "蒙古族"
            ],
            [
                "category" => "乐理",
                "question" => "按音律的风格情趣划分，与阳春白雪截然相反的是",
                "answer" => "下里巴人"
            ],
            [
                "category" => "乐理",
                "question" => "中国古代乐器“磬”的材料主要是？",
                "answer" => "石灰石"
            ],
            [
                "category" => "乐理",
                "question" => "古琴琴面镶嵌的十三个螺钿圆点叫什么？",
                "answer" => "徽"
            ],
            [
                "category" => "乐理",
                "question" => "以下属于有嵇康创作，被称为“嵇氏四弄”的琴曲是？",
                "answer" => "长清"
            ],
            [
                "category" => "乐理",
                "question" => "“有板有眼”的“板”是我国传统音乐节奏中的？",
                "answer" => "强拍"
            ],
            [
                "category" => "乐理",
                "question" => "以下中国古代乐器，按常见大小计算，最小的是？",
                "answer" => "木鱼"
            ],
            [
                "category" => "乐理",
                "question" => "琵琶顶部的“弦轴”作用是？",
                "answer" => "调节音高"
            ],
            [
                "category" => "乐理",
                "question" => "被誉为“乐圣”的音乐家是谁？",
                "answer" => "贝多芬"
            ],
            [
                "category" => "乐理",
                "question" => "何种乐器被称为“能说话的乐器”？",
                "answer" => "二胡"
            ],
            [
                "category" => "乐理",
                "question" => "二胡是民间常见的拉弦乐器，它的琴弦数目是多少根？",
                "answer" => "二根"
            ],
            [
                "category" => "乐理",
                "question" => "口琴这一乐器诞生于哪个国家？",
                "answer" => "德国"
            ],
            [
                "category" => "乐理",
                "question" => "小提琴广泛流传于世界各国，是现代管弦乐组中最主要的乐器，它在器乐中占有极重要的位置。你知道它有几根弦么？",
                "answer" => "4根"
            ],
            [
                "category" => "乐理",
                "question" => "“琵琶”中的“琵”和“琶”最初指的是？",
                "answer" => "两种弹奏方法"
            ],
            [
                "category" => "乐理",
                "question" => "被誉为钢琴诗人的作曲家？",
                "answer" => "肖邦"
            ],
            [
                "category" => "乐理",
                "question" => "伟大的音乐家肖邦是哪国人？",
                "answer" => "波兰"
            ],
            [
                "category" => "乐理",
                "question" => "有“小提琴之王”之称的作曲家是？",
                "answer" => "帕格尼尼"
            ],
            [
                "category" => "乐理",
                "question" => "我国国歌的曲作者是谁？",
                "answer" => "聂耳"
            ],
            [
                "category" => "乐理",
                "question" => "古代的五音“宫商角徵羽”相当于现在的七个音调中的哪五个？",
                "answer" => "哆唻咪索啦"
            ],
            [
                "category" => "乐理",
                "question" => "请问钢琴有多少个键？",
                "answer" => "88"
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
