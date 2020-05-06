<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 创建管理员
        User::create([
            'name' => '张小二',
            'email' => 'admin@pushme.top',
            'open_id' => 'oFQ7x0Gkq_jAyiyt2okoP7cLGrSs',
            'password' => Hash::make(env('USER_PASSWORD', 'swbbxxiaoer')),
            'avatar' => config('app.url'). "/images/avatar/xiaoer.jpg",
            'introduction' => '【神武百宝箱】小程序作者，让我们一起闯荡神武',

            'contribution_name' => '【公众号】10号选手',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/xiaoer.jpg",
            'contribution_score' => 30,
        ]);

        // 创建公众号作者
        User::create([
            'name' => '神武',
            'email' => '神武',
            'open_id' => '',
            'password' => Hash::make('oFQ7x0GL44ItOZxT5mX08LLton6o'),
            'avatar' => config('app.url'). "/images/avatar/sw.jpg",
            'introduction' => '【神武4】公众号的作者',

            'contribution_name' => '【公众号】神武4',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/sw.jpg",
            'contribution_score' => 20,
        ]);

        // 创建公众号作者
        User::create([
            'name' => '钢背兽',
            'email' => '钢背兽',
            'open_id' => 'oFQ7x0GL44ItOZxT5mX08LLton6o',
            'password' => Hash::make('oFQ7x0GL44ItOZxT5mX08LLton6o'),
            'avatar' => config('app.url'). "/images/avatar/gbs.jpg",
            'introduction' => '【刚背兽聊游戏】公众号的作者',

            'contribution_name' => '【公众号】刚背兽聊游戏',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/gbs.jpg",
            'contribution_score' => 10,
        ]);

        // 创建公众号作者
        User::create([
            'name' => 'kp',
            'email' => 'kp',
            'open_id' => 'oFQ7x0Ehkc7u2LvfKs8Z5mgLvrCc',
            'password' => Hash::make('oFQ7x0Ehkc7u2LvfKs8Z5mgLvrCc'),
            'avatar' => config('app.url'). "/images/avatar/kp.jpg",
            'introduction' => '【神武攻略】公众号的作者',

            'contribution_name' => '【公众号】神武攻略',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/kp.jpg",
            'contribution_score' => 5,
        ]);
    }
}

