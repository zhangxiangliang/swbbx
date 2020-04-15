<?php

use Illuminate\Database\Seeder;
use App\Models\Reply;

class RepliesSeeder extends Seeder
{
    public function run()
    {
        // 创建默认回复
        Reply::create([
            'user_id' => 1,
            'topic_id' => 1,
            'content' => '招待不周~'
        ]);

        Reply::create([
            'user_id' => 2,
            'topic_id' => 1,
            'content' => '大家好~我是神武百宝箱新进【酱油队队长】'
        ]);
    }

}

