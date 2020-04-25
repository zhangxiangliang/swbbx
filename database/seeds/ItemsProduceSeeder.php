<?php

use App\Models\Item;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ItemsProduceSeeder extends Seeder
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
                "name" => "番茄",
                "cover" => "番茄高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "夏秋季出产较多，火红诱人，时营养丰富的食品",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "甘薯",
                "cover" => "甘薯高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "又称红薯、番茄、山芋等。甘薯中含有多种人体需要的营养物质",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "花生",
                "cover" => "花生高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "不仅是许多美味佳肴的主料之一，食用时还能促进脾胃的消化功能",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "茄子",
                "cover" => "茄子高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "果实紫黑亮泽，古称酪酥、昆仑瓜，吃法荤素皆宜，美味可口",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "辣椒",
                "cover" => "辣椒高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "一级",
                "description" => "味道辛辣，能增进食欲",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "李",
                "cover" => "李高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "果肉味甘、酸，性寒。具有清热、利水、消积食等功效",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "枸杞",
                "cover" => "枸杞高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "一级",
                "description" => "在传统医学中具有重要的地位，是传统名贵中药材和营养滋补品",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "甜瓜",
                "cover" => "甜瓜高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "四级",
                "description" => "果实香甜、营养丰富，以鲜食为主，也可以制作果干、果脯、果汁等美味",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "土豆",
                "cover" => "土豆高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "不仅是许多美味佳肴的主料之一，食用时还能促进脾胃的消化功能",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "香梨",
                "cover" => "香梨高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "三级",
                "description" => "香味浓郁、皮薄、肉细、汁多甜酥、清爽可口，系梨之上品",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "梅",
                "cover" => "梅高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "其果实主要作为加工或药用，一般加工制成各种蜜饯和果酱",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
            [
                "name" => "萝卜",
                "cover" => "萝卜高清.png",
                "keywords" => ["烧烤调料", "农产品"],
                "category" => "农产品",
                "level" => "二级",
                "description" => "既可以用域制作菜肴，炒、煮、凉拌等俱佳；又可以当作水果生吃，味道鲜美；还可用作泡菜，酱菜腌制，有很好的食用、医疗价值",
                "use" => "在庭院的“佣人”处出售到农贸市场或加工成食品；烧烤中，美味调料合成配方之一",
                "maps" => ["庭院"],
            ],
        ];

        $items = collect($items)->map(function ($item) {
            return array_merge($item, [
                "maps" => json_encode($item["maps"], JSON_UNESCAPED_UNICODE),
                "keywords" => json_encode($item["keywords"], JSON_UNESCAPED_UNICODE),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        Item::insert($items);
    }
}
