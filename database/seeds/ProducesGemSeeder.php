<?php

use App\Models\Item;
use App\Models\Produce;
use Illuminate\Database\Seeder;

class ProducesGemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Item::where('keywords', 'like', '%宝石%')->get()->pluck('id')->toArray();
        $produce = Produce::where('name', '宝石')->first();
        $produce->items()->attach($items);
    }
}
