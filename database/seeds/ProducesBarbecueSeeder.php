<?php

use App\Models\Item;
use App\Models\Produce;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProducesBarbecueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 烧烤配方
        $items = [
            ["name" => "酸甜甘薯泥", "category" => "甘薯泥", "items" => ["梅", "番茄", "甘薯", "甘薯"]],
            ["name" => "甜辣甘薯泥", "category" => "甘薯泥", "items" => ["枸杞", "萝卜", "甘薯", "甘薯"]],
            ["name" => "香辣甘薯泥", "category" => "甘薯泥", "items" => ["甜瓜", "辣椒", "茄子", "甘薯"]],
            ["name" => "香甜甘薯泥", "category" => "甘薯泥", "items" => ["土豆", "香梨", "甘薯", "甘薯"]],
            ["name" => "酸辣萝卜干", "category" => "萝卜干", "items" => ["李", "梅", "辣椒", "萝卜"]],
            ["name" => "秘制萝卜干", "category" => "萝卜干", "items" => ["李", "梅", "萝卜", "萝卜"]],
            ["name" => "养生萝卜干", "category" => "萝卜干", "items" => ["枸杞", "甜瓜", "萝卜", "萝卜"]],
            ["name" => "酸甜番茄酱", "category" => "番茄酱", "items" => ["梅", "甜瓜", "番茄", "番茄"]],
            ["name" => "酸辣番茄酱", "category" => "番茄酱", "items" => ["李", "萝卜", "番茄", "番茄"]],
            ["name" => "香辣番茄酱", "category" => "番茄酱", "items" => ["花生", "辣椒", "香梨", "番茄"]],
            ["name" => "酸甜枸杞酱", "category" => "枸杞酱", "items" => ["李", "番茄", "枸杞", "枸杞"]],
            ["name" => "香甜枸杞酱", "category" => "枸杞酱", "items" => ["香梨", "土豆", "枸杞", "枸杞"]],
            ["name" => "酸辣茄子泥", "category" => "茄子泥", "items" => ["李", "梅", "茄子", "茄子"]],
            ["name" => "香辣茄子泥", "category" => "茄子泥", "items" => ["辣椒", "花生", "茄子", "茄子"]],
            ["name" => "香辣花生酱", "category" => "花生酱", "items" => ["辣椒", "香梨", "花生", "花生"]],
            ["name" => "香甜花生酱", "category" => "花生酱", "items" => ["香梨", "甜瓜", "枸杞", "花生"]],
            ["name" => "酸味花生酱", "category" => "花生酱", "items" => ["梅", "李", "番茄", "花生"]],
            ["name" => "香辣土豆泥", "category" => "土豆泥", "items" => ["辣椒", "花生", "土豆", "土豆"]],
            ["name" => "香甜土豆泥", "category" => "土豆泥", "items" => ["香梨", "甜瓜", "土豆", "土豆"]],
            ["name" => "缤纷蔬菜泥", "category" => "蔬菜泥", "items" => ["土豆", "甘薯", "萝卜", "茄子"]],
            ["name" => "养生甜瓜泥", "category" => "甜瓜泥", "items" => ["梅", "李", "枸杞", "甜瓜"]],
        ];

        // 创建数据
        Produce::insert(collect($items)->map(function ($item) {
            unset($item['items']);
            return array_merge($item, [
                "category" => "篝火派对",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })->toArray());

        // 创建关联
        $items = collect($items)->keyBy('name');
        $categories = Item::where('category', '农产品')->get()->keyBy('name');
        Produce::where('category', '篝火派对')->get()->map(function ($produce) use ($categories, $items) {
            $relations = [];
            $data = $items[$produce['name']]['items'];

            foreach($data as $key => $value) {
                $relations[$key] = $categories[$value]['id'];
            }

            $produce->items()->attach($relations);
        });
    }
}
