<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name'        => '公告',
                'description' => '追踪神武百宝箱最新开发进度',
            ],
        ];

        Category::insert($items);
    }
}
