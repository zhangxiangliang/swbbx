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
            'open_id' => 'oFQ7x0Gkq_jAyiyt2okoP7cLGrSs',
            'avatar' => config('app.url'). "/images/avatar/张小二.jpg",
            'introduction' => '【神武百宝箱】小程序作者，让我们一起闯荡神武',

            'contribution_name' => '【公众号】10号选手',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/张小二.jpg",
            'contribution_score' => 30,
        ]);

        // 创建公众号作者
        User::create([
            'name' => '神武',
            'open_id' => '',
            'avatar' => config('app.url'). "/images/avatar/神武.jpg",
            'introduction' => '【神武4】公众号的作者',

            'contribution_name' => '【公众号】神武4',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/神武.jpg",
            'contribution_score' => 40,
        ]);

        User::create([
            'name' => '金蝉脱壳我雾隐',
            'open_id' => '',
            'avatar' => config('app.url'). "/images/avatar/金蝉脱壳我雾隐.jpg",
            'introduction' => '神武奇遇探索家',

            'contribution_name' => '【QQ群】459671603',
            'contribution_qrcode' => '',
            'contribution_score' => 30,
        ]);

        User::create([
            'name' => '永恒の海',
            'open_id' => '',
            'avatar' => config('app.url'). "/images/avatar/永恒の海.jpg",
            'introduction' => '神武奇遇探索家',

            'contribution_name' => '',
            'contribution_qrcode' => '',
            'contribution_score' => 30,
        ]);


        // 创建公众号作者
        User::create([
            'name' => '钢背兽',
            'open_id' => 'oFQ7x0GL44ItOZxT5mX08LLton6o',
            'avatar' => config('app.url'). "/images/avatar/钢背兽.jpg",
            'introduction' => '【刚背兽聊游戏】公众号的作者',

            'contribution_name' => '【公众号】刚背兽聊游戏',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/钢背兽.jpg",
            'contribution_score' => 10,
        ]);

        // 创建公众号作者
        User::create([
            'name' => 'kp',
            'open_id' => 'oFQ7x0Ehkc7u2LvfKs8Z5mgLvrCc',
            'avatar' => config('app.url'). "/images/avatar/kp.jpg",
            'introduction' => '【神武攻略】公众号的作者',

            'contribution_name' => '【公众号】神武攻略',
            'contribution_qrcode' => config('app.url'). "/images/qrcode/kp.jpg",
            'contribution_score' => 5,
        ]);
    }
}

