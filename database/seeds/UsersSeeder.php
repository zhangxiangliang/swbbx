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
        $user = User::create([
            'name' => '张小二',
            'email' => 'admin@pushme.top',
            'password' => Hash::make(env('USER_PASSWORD', 'swbbxxiaoer')),
            'avatar' => config('app.url'). "/images/avatar/xiaoer.jpg",
            'introduction' => '让我们一起闯荡神武'
        ]);
    }
}

