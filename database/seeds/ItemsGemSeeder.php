<?php

use App\Models\Item;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ItemsGemSeeder extends Seeder
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
                "name" => "太阳石",
                "cover" => "太阳石.png",
                "keywords" => ["宝石", "武器", "帽子"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "烈焰之精，内藏纯阳之气，以刚克万物",
                "use" => "增加攻击力8",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "月亮石",
                "cover" => "月亮石.png",
                "keywords" => ["宝石", "衣服", "帽子"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "皓月之魄，内蕴至阴之气，以柔御万物",
                "use" => "增加防御力12",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "舍利子",
                "cover" => "舍利子.png",
                "keywords" => ["宝石", "衣服", "项链"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "天竺高僧的舍利子，蕴藏了无边的法力",
                "use" => "增加灵力6",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "黑宝石",
                "cover" => "黑宝石.png",
                "keywords" => ["宝石", "腰带", "鞋子"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "七彩神石之一，以石为心、以风为媒，可席卷乾坤",
                "use" => "增加速度8",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "红玛瑙",
                "cover" => "红玛瑙.png",
                "keywords" => ["宝石", "衣服", "腰带"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "民间传说珍贵的红玛瑙有定神补气之效，因此大户人家的公子、小姐大多配有此物",
                "use" => "增加气血40",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "神秘石",
                "cover" => "神秘石.png",
                "keywords" => ["宝石", "腰带", "帽子", "武器"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "内藏乾坤的神秘石却无人知道它的来历，说书先生根据神秘石神奇的力量推测此物为女娲补天的遗石",
                "use" => "增加魔法值=装备等级*1",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "红宝石",
                "cover" => "红宝石.png",
                "keywords" => ["宝石", "项链", "鞋子"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "七彩神石之一，以火为心、焚灭万物",
                "use" => "增加对火系法术吸收几率2%",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "黄宝石",
                "cover" => "黄宝石.png",
                "keywords" => ["宝石", "项链", "鞋子"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "七彩神石之一，惶惶天雷、以石引之，破天劈海",
                "use" => "增加对雷系法术吸收几率2%",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "蓝宝石",
                "cover" => "蓝宝石.png",
                "keywords" => ["宝石", "项链", "鞋子"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "七彩神石之一，传说能避水、驱雨，滋泽万物",
                "use" => "增加对水系法术吸收几率2%",
                "maps" => ["任务活动奖励", "神武币交易中心"],
            ],
            [
                "name" => "绿宝石",
                "cover" => "绿宝石.png",
                "keywords" => ["宝石", "项链", "鞋子"],
                "category" => "宝石",
                "level" => "一级",
                "description" => "七彩神石之一，捧在手中可移动山川，一旦落地则会深入土中再也无法找寻",
                "use" => "增加对土系法术吸收几率2%",
                "maps" => ["任务活动奖励", "神武币交易中心"],
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
