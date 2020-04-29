<?php

use App\Models\Item;
use App\Models\Produce;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ProducesLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => '零级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '一级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '二级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '三级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '四级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '五级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '六级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '七级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '八级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '九级物品', 'category' => '物品等级', 'items' => [] ],
            ['name' => '十级物品', 'category' => '物品等级', 'items' => [] ],
        ];

        Produce::insert(collect($items)->map(function ($item) {
            unset($item['items']);
            return array_merge($item, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })->toArray());

        collect($items)->map(function ($item) {
            $level = str_replace('物品', '', $item['name']);
            $items = Item::where('level', $level)->get()->pluck('id')->toArray();
            $produce = Produce::where('name', $item['name'])->first();
            $produce->items()->attach($items);
        });
    }
}
