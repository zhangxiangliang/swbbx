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
            ['name' => '零级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '一级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '二级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '三级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '四级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '五级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '六级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '七级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '八级集合', 'category' => '等级', 'items' => [] ],
            ['name' => '九级集合', 'category' => '等级', 'items' => [] ],
        ];

        Produce::insert(collect($items)->map(function ($item) {
            unset($item['items']);
            return array_merge($item, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })->toArray());

        collect($items)->map(function ($item) {
            $level = str_replace('集合', '', $item['name']);
            $items = Item::where('level', $level)->get()->pluck('id')->toArray();
            $produce = Produce::where('name', $item['name'])->first();
            $produce->items()->attach($items);
        });
    }
}
