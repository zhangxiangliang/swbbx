<?php

use App\Models\Topic;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    public function run()
    {
        // 默认文章
        Topic::create([
            'user_id' => 1,
            'category_id' => 1,
            'reply_count' => 0,
            'title' => '神武百宝箱全新版本重磅来袭~',
            'body' => '<blockquote><p>神武百宝箱全新版本重磅来袭~<br /></p></blockquote>'
        ]);
    }
}
