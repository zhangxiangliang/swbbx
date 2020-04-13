<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;;

class QuestionReligionSeeder extends Seeder
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
                "category" => "宗教知识",
                "question" => "基督教徒在祷告时常说“阿门”,阿门的意思是？",
                "answer" => "诚如所愿"
            ],
            [
                "category" => "宗教知识",
                "question" => "世界三大宗教不包括？",
                "answer" => "道教"
            ],
            [
                "category" => "宗教知识",
                "question" => "灵宝天尊是道教“三清”中的哪一位",
                "answer" => "上清"
            ],
            [
                "category" => "宗教知识",
                "question" => "下列不属于佛教“六道轮回”的是什么？",
                "answer" => "非常道"
            ],
            [
                "category" => "宗教知识",
                "question" => "佛经是释加牟尼亲自写的吗？",
                "answer" => "不是，是弟子记录的"
            ],
            [
                "category" => "宗教知识",
                "question" => "古代“敦煌艺术”源于中国哪个教派？",
                "answer" => "佛教"
            ],
            [
                "category" => "宗教知识",
                "question" => "“心无挂碍。无挂碍故，无有恐怖，远离颠倒梦想，究竟涅磐。”这段话出自佛教哪本著作？",
                "answer" => "《波若波罗蜜心经》"
            ],
            [
                "category" => "宗教知识",
                "question" => "佛教所称“圆寂”是指什么？",
                "answer" => "佛门中人去世"
            ],
            [
                "category" => "宗教知识",
                "question" => "佛教起源于何地？",
                "answer" => "天竺"
            ],
            [
                "category" => "宗教知识",
                "question" => "济公在哪座寺庙出家？",
                "answer" => "灵隐寺"
            ],
            [
                "category" => "宗教知识",
                "question" => "《金刚经》是哪个教派的著作？",
                "answer" => "佛教"
            ],
            [
                "category" => "宗教知识",
                "question" => "道教创始与哪个时代？",
                "answer" => "东汉"
            ],
            [
                "category" => "宗教知识",
                "question" => "佛门戒律中“三聚净戒”是指？",
                "answer" => "菩萨戒"
            ],
            [
                "category" => "宗教知识",
                "question" => "佛教中人所用的“钵”是一种？",
                "answer" => "餐具"
            ],
            [
                "category" => "宗教知识",
                "question" => "以下不属于佛教“横三世佛”的是？",
                "answer" => "弥勒佛"
            ],
            [
                "category" => "宗教知识",
                "question" => "在寺庙里总管各项事务的一位僧人称为？",
                "answer" => "主持方丈"
            ],
            [
                "category" => "宗教知识",
                "question" => "佛教“八识”中的第八识是？",
                "answer" => "阿赖耶识"
            ],
            [
                "category" => "宗教知识",
                "question" => "拜佛时香客送上的“香火钱、香油钱”是用来？",
                "answer" => "捐赠给寺庙"
            ],
            [
                "category" => "宗教知识",
                "question" => "“皈依三宝”是成为正信佛教徒的第一课，其中三宝是指",
                "answer" => "佛、法、僧"
            ],
            [
                "category" => "宗教知识",
                "question" => "“佛家三宝”是指什么？",
                "answer" => "佛、法、僧"
            ],
            [
                "category" => "宗教知识",
                "question" => "以下不属于道教“四大天师”的是？",
                "answer" => "萨镇冰"
            ],
            [
                "category" => "宗教知识",
                "question" => "以下不属于佛教“四谛”教义的是？",
                "answer" => "空"
            ],
            [
                "category" => "宗教知识",
                "question" => "三藏是佛教典籍的三种形态，分别是经藏，律藏和什么？",
                "answer" => "论藏"
            ],
            [
                "category" => "宗教知识",
                "question" => "下面哪个不是五行中的属性？",
                "answer" => "气"
            ],
            [
                "category" => "宗教知识",
                "question" => "地藏王的坐骑似龙非龙，似虎非虎、 似狮非狮、似麒麟非麒麟、似犬非犬，它的名字是什么？",
                "answer" => "谛听"
            ],
            [
                "category" => "宗教知识",
                "question" => "法术有佛、道、儒、巫、阴阳五个流派，下列法术属于同一流派的是？",
                "answer" => "青出于蓝和君子喻义"
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
