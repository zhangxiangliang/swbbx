<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            'name' => '張小二',
            'email' => 'admin@pushme.top',
            'password' => Hash::make(env('USER_PASSWORD', '123456')),
            'avatar' => config('app.url'). "/images/avatar/base.jpg",
            'introduction' => '神武百宝箱站长'
        ]);
    }
}

