<?php

use App\Models\Server;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ServersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servers = [
            ["name" => "浪淘沙", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-05-01"],
            ["name" => "海纳百川", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-11-08"],
            ["name" => "一见如故", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-10-25"],
            ["name" => "声名鹊起", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-10-11"],
            ["name" => "剑起无名", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-09-27"],
            ["name" => "皓月千里", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-09-06"],
            ["name" => "祥云瑞彩", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-08-23"],
            ["name" => "情深似海", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-08-09"],
            ["name" => "气贯长虹", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-07-12"],
            ["name" => "夏日奇谭", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-06-28"],
            ["name" => "风雨同舟", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-06-07"],
            ["name" => "烟波浩渺", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-05-10"],
            ["name" => "义结金兰", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-04-26"],
            ["name" => "高山流水", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-04-12"],
            ["name" => "春花秋月", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-03-01"],
            ["name" => "白虹贯日", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-03-15"],
            ["name" => "鱼跃龙门", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-02-01"],
            ["name" => "比翼齐飞", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-02-15"],
            ["name" => "鹰击长空", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-05-24"],
            ["name" => "九霄雷动", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-03-29"],
            ["name" => "浮生若梦", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-01-18"],
            ["name" => "百战不殆", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-01-04"],
            ["name" => "飞鸿踏雪", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-12-21"],
            ["name" => "锦瑟年华", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-12-07"],
            ["name" => "流金岁月", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-11-23"],
            ["name" => "剑气纵横", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-11-09"],
            ["name" => "桃园结义", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-10-26"],
            ["name" => "片羽惊鸿", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-10-26"],
            ["name" => "星罗万象", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-09-28"],
            ["name" => "天星破月", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-09-14"],
            ["name" => "平步青云", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-08-31"],
            ["name" => "珠联璧合", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-08-17"],
            ["name" => "银鞍照马", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-08-03"],
            ["name" => "风驰电掣", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-06-22"],
            ["name" => "月华星彩", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-05-11"],
            ["name" => "名动三界", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-03-30"],
            ["name" => "招财进宝", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-02-23"],
            ["name" => "雄才大略", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2018-01-05"],
            ["name" => "惊韬海浪", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2017-12-08"],
            ["name" => "梦回长安", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2017-11-24"],
            ["name" => "风卷残云", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2017-10-13"],
            ["name" => "华山之巅", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2017-07-28"],
            ["name" => "珠水夜韵", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2017-03-24"],
            ["name" => "今年勇", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2016-12-30"],
            ["name" => "出骑制胜", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2016-09-23"],
            ["name" => "心心相印", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2016-05-20"],
            ["name" => "龙战于野", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2015-06-19"],
            ["name" => "龙腾九州", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2015-04-17"],
            ["name" => "剑指苍穹", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2015-01-09"],
            ["name" => "九天揽月", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2014-10-17"],
            ["name" => "战无不胜", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2014-05-16"],
            ["name" => "纵横四海", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2014-01-24"],
            ["name" => "天下无双", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-06-25"],
            ["name" => "风云再起", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-07-30"],
            ["name" => "普天同庆", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-09-17"],
            ["name" => "四海升平", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-09-17"],
            ["name" => "江山如画", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-09-22"],
            ["name" => "笑傲江湖", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-10-01"],
            ["name" => "龙啸九天", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-10-15"],
            ["name" => "阳春白雪", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-10-29"],
            ["name" => "碧雪情天", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-12-24"],
            ["name" => "锦绣河山", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2011-02-11"],
            ["name" => "彩云追月", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2011-04-15"],
            ["name" => "缘定三生", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2011-06-10"],
            ["name" => "天长地久", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2011-07-29"],
            ["name" => "壮志凌云", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2011-11-18"],
            ["name" => "风华绝代", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2012-03-02"],
            ["name" => "花好月圆", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2012-09-28"],
            ["name" => "醉生梦死", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2012-11-02"],
            ["name" => "清风明月", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2013-02-22"],
            ["name" => "任剑逍遥", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2013-09-27"],
            ["name" => "英雄本色", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2013-04-26"],
            ["name" => "紫气东来", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-09-17"],
            ["name" => "浩气冲霄", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2010-10-29"],
            ["name" => "蓬莱仙境", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2011-02-25"],
            ["name" => "沉鱼落雁", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2012-03-16"],
            ["name" => "二〇一二", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2012-12-21"],
            ["name" => "画龙点睛", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2014-08-01"],
            ["name" => "世外桃源", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2011-07-08"],
            ["name" => "扬名立万", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2013-06-14"],
            ["name" => "古灵精怪", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-07-26"],
            ["name" => "七窍玲珑", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2015-12-04"],
            ["name" => "无名谷", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-11-22"],
            ["name" => "威震四海", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-12-06"],
            ["name" => "卧虎藏龙", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-12-20"],
            ["name" => "二〇二〇", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-01-03"],
            ["name" => "欢聚四海", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2019-12-27"],
            ["name" => "福星高照", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-01-17"],
            ["name" => "大吉大利", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-02-07"],
            ["name" => "春暖花开", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-02-21"],
            ["name" => "天工造物", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-04-03"],
            ["name" => "鸿运当头", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-03-20"],
            ["name" => "旗开得胜", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-03-06"],
            ["name" => "勇往直前", "level" => 0, "pid" => 0, "role_count" => 0, "birthday" => "2020-04-17"],
        ];

        $servers = collect($servers)->sortBy('birthday')->map(function ($item) {
            return array_merge($item, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        Server::insert($servers);
    }
}
