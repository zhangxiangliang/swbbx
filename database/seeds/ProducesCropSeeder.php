<?php

use App\Models\Item;
use App\Models\Produce;
use Illuminate\Database\Seeder;

class ProducesCropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Item::where('category', '农产品')->get()->pluck('id')->toArray();
        $produce = Produce::where('name', '农产品')->first();
        $produce->items()->attach($items);
    }
}
