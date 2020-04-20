

<?php

use App\Models\Produce;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProducesFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ["name" => "防具", "category" => "角色喜好", "items" => []],
            ["name" => "武器", "category" => "角色喜好", "items" => []],
            ["name" => "三级药", "category" => "角色喜好", "items" => []],
            ["name" => "美食", "category" => "角色喜好", "items" => []],
            ["name" => "鲜花", "category" => "角色喜好", "items" => []],
            ["name" => "百花露", "category" => "角色喜好", "items" => []],
            ["name" => "宝石", "category" => "角色喜好", "items" => []],
            ["name" => "一级庭院装饰", "category" => "角色喜好", "items" => []],
            ["name" => "二级庭院装饰", "category" => "角色喜好", "items" => []],
            ["name" => "鱼类", "category" => "角色喜好", "items" => []],
            ["name" => "二级药", "category" => "角色喜好", "items" => []],
            ["name" => "二级家具", "category" => "角色喜好", "items" => []],
            ["name" => "素斋", "category" => "角色喜好", "items" => []],
            ["name" => "农产品", "category" => "角色喜好", "items" => []],
            ["name" => "变身卡", "category" => "角色喜好", "items" => []],
            ["name" => "暗器", "category" => "角色喜好", "items" => []],
            ["name" => "酒类", "category" => "角色喜好", "items" => []],
            ["name" => "烹饪", "category" => "角色喜好", "items" => []],
            ["name" => "古玩", "category" => "角色喜好", "items" => []],
            ["name" => "一级家具", "category" => "角色喜好", "items" => []],
            ["name" => "农作物", "category" => "角色喜好", "items" => []],
            ["name" => "宠物装备", "category" => "角色喜好", "items" => []],
            ["name" => "美酒", "category" => "角色喜好", "items" => []],
        ];

        // 创建数据
        Produce::insert(collect($items)->map(function ($item) {
            unset($item["items"]);
            return array_merge($item, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })->toArray());
    }
}
