<?php

use App\Models\Map;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class MapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            // 普通地图
            ["name" => "长安城"],
            ["name" => "临仙镇"],
            ["name" => "青河镇"],
            ["name" => "野外"],
            ["name" => "傲来国"],
            ["name" => "女儿国"],
            ["name" => "金銮殿"],

            // 门派地图
            ["name" => "天策"],
            ["name" => "幽冥地府"],
            ["name" => "佛门"],
            ["name" => "镇元五庄"],
            ["name" => "七星方寸"],
            ["name" => "盘丝岭"],
            ["name" => "佛门"],
            ["name" => "南海普陀"],
            ["name" => "魔王山"],
            ["name" => "天魔里"],
            ["name" => "凌霄天宫"],
            ["name" => "东海龙宫"],
            ["name" => "万兽岭"],
            ["name" => "无名谷"],
        ];

        Map::insert(collect($items)->map(function ($item) {
            return array_merge($item, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray());
    }
}
