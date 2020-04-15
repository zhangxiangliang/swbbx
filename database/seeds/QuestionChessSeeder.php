<?php

use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class QuestionChessSeeder extends Seeder
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
                "category" => "棋艺",
                "question" => "象棋招式中依靠一枚棋子就可以将死对方的是？",
                "answer" => "卧槽马"
            ],
            [
                "category" => "棋艺",
                "question" => "象棋中的“卧槽马”是指？",
                "answer" => "在对方将前一格形成将军的马"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋中有一种布局叫“炮打双怪”指的是？",
                "answer" => "炮打双车"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋中老兵是指？",
                "answer" => "走到底线的兵"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋中士象全是指？",
                "answer" => "两士两象"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋中有一种布局叫“反宫马”，它的别称是什么？",
                "answer" => "夹炮屏风"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋中有一种布局叫“二鬼拍门”是指什么？",
                "answer" => "两个兵"
            ],
            [
                "category" => "棋艺",
                "question" => "以下不属于象棋术语的是什么？",
                "answer" => "边前象"
            ],
            [
                "category" => "棋艺",
                "question" => "在象棋走法里，一方走当头炮，另一方也将同一线上的炮放在当头，这在象棋术语里称为什么？",
                "answer" => "顺手炮"
            ],
            [
                "category" => "棋艺",
                "question" => "象棋第一步走“炮”至中线，俗称“当头炮”，这步棋的走法叫作什么？",
                "answer" => "炮二平五"
            ],
            [
                "category" => "棋艺",
                "question" => "以下哪一个是象棋中不会出现的走法",
                "answer" => "象四进五"
            ],
            [
                "category" => "棋艺",
                "question" => "古人所称的“楸枰”指的是哪种物品？",
                "answer" => "棋盘"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋棋盘上的“米”字形方框叫做什么？",
                "answer" => "九宫"
            ],
            [
                "category" => "棋艺",
                "question" => "围棋棋盘上一共有多少个交叉点？",
                "answer" => "361个"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋的棋局中不可能出现的情况是哪个？",
                "answer" => "黑方士吃掉红方象"
            ],
            [
                "category" => "棋艺",
                "question" => "关于围棋的说法，下面哪个是错误的？",
                "answer" => "围棋的棋子分数量相同的黑白两色"
            ],
            [
                "category" => "棋艺",
                "question" => "在围棋的棋盘上标有九个小圆点，其中最中间的一个称为什么？",
                "answer" => "天元"
            ],
            [
                "category" => "棋艺",
                "question" => "在围棋的棋盘上标有九个小圆点，这几个小圆点称作什么？",
                "answer" => "星"
            ],
            [
                "category" => "棋艺",
                "question" => "以下关于象棋的说法，哪个是正确的？",
                "answer" => "象棋起源较早，战国时期就已有记载"
            ],
            [
                "category" => "棋艺",
                "question" => "象棋术语的“炮打二挂”中二怪指的是？",
                "answer" => "两个车"
            ],
            [
                "category" => "棋艺",
                "question" => "国际象棋的棋盘共有多少个方格？",
                "answer" => "64个"
            ],
            [
                "category" => "棋艺",
                "question" => "国际象棋共有多少颗棋子？",
                "answer" => "32颗"
            ],
            [
                "category" => "棋艺",
                "question" => "中国象棋双方各有几种棋子？",
                "answer" => "7种"
            ],
            [
                "category" => "棋艺",
                "question" => "以下象棋的棋子中不能走直线的是？",
                "answer" => "象"
            ],
            [
                "category" => "棋艺",
                "question" => "围棋术语中，提子指的是？",
                "answer" => "把无气之子取出盘外"
            ],
            [
                "category" => "棋艺",
                "question" => "围棋术语中，棋子紧邻的直线交叉点称为棋子的？",
                "answer" => "气"
            ],
            [
                "category" => "棋艺",
                "question" => "围棋棋盘的图案是？",
                "answer" => "横竖各十九条线"
            ],
            [
                "category" => "棋艺",
                "question" => "正规围棋棋盘(围棋比赛)由纵横(棋盘规格)多少条线构成？",
                "answer" => "纵横19条(19乘19)"
            ],
            [
                "category" => "棋艺",
                "question" => "以下属于围棋术语的是什么？",
                "answer" => "三连星"
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
