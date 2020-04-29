<?php

use App\Models\Item;
use App\Models\Produce;
use Illuminate\Database\Seeder;

class ProducesAquaticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Item::where('category', '水产品')->get()->pluck('id')->toArray();
        $produce = Produce::where('name', '水产品')->first();
        $produce->items()->attach($items);
    }
}
