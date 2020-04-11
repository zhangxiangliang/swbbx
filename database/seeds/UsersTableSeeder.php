<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        // 生成数据集合
        $users = factory(User::class)->times(10)->make()->each(function ($user) {
            // 从头像数组中随机取出一个并赋值
            $user->avatar = 'https://cdn.learnku.com/uploads/avatars/45055_1563272304.jpeg';
        });

        // 让隐藏字段可见，并将数据集合转换为数组
        $users = $users->makeVisible(['password', 'remember_token'])->toArray();

        // 插入到数据库中
        User::insert($users);

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = '张小二';
        $user->email = 'admin@pushme.top';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->save();
    }
}

