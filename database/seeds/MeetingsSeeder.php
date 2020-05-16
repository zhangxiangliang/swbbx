<?php

use App\Models\Map;
use App\Models\Meeting;
use App\Models\Official;
use Illuminate\Support\Carbon;
use App\Models\LevelExperience;
use Illuminate\Database\Seeder;

class MeetingsSeeder extends Seeder
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
                "official" => "", "level" => 0, "name" => "商贾奇遇",
                "maps" => [["map" => "大唐国境", "x" => 0, "y" => 0]],
                "description" => "跑商状态下大唐国境野猪王附近有几率触发", "times" => 0, "group" => "绝版奇遇"
            ],
            [
                "official" => "", "level" => 0, "name" => "余香盈袖",
                "maps" => [],
                "description" => "野外摘玫瑰后有概率触发", "times" => 0, "group" => "绝版奇遇"
            ],
            [
                "official" => "", "level" => 0, "name" => "阴谋",
                "maps" => [],
                "description" => "", "times" => 0, "group" => "绝版奇遇"
            ],
            [
                "official" => "", "level" => 0, "name" => "阴谋",
                "maps" => [],
                "description" => "", "times" => 0, "group" => "绝版奇遇"
            ],
            [
                "official" => "", "level" => 0, "name" => "以旧换新",
                "maps" => [],
                "description" => "一天合成三次护符必定触发", "times" => 0, "group" => "绝版奇遇"
            ],
            [
                "official" => "", "level" => 0, "name" => "连中三元",
                "maps" => [],
                "description" => "需乡试和会试题目全对，在最后一个主考官处触发", "times" => 0, "group" => "绝版奇遇"
            ],
            [
                "official" => "", "level" => 0, "name" => "猴儿国",
                "maps" => [["map" => "傲来国", "x" => 114, "y" => 22]],
                "description" => "", "times" => 0, "group" => ""
            ],
            [
                "official" => "", "level" => 20, "name" => "福星高照",
                "maps" => [],
                "description" => "祈福出现五个相同属性且半小时内做过奇遇任务", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 20, "name" => "上元旧事",
                "maps" => [["map" => "长安城", "x" => 505, "y" => 151]],
                "description" => "花灯奇缘与上元旧事为同一奇遇", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 20, "name" => "花灯奇缘",
                "maps" => [["map" => "长安城", "x" => 505, "y" => 151]],
                "description" => "花灯奇缘与上元旧事为同一奇遇", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 20, "name" => "欢喜冤家",
                "maps" => [],
                "description" => "随机地点组队触发，情人节触发几率增加", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 30, "name" => "物恋",
                "maps" => [["map" => "庭院", "x" => 0, "y" => 0]],
                "description" => "收获草莓时触发几率增加，自动种植或手动种植均可", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 30, "name" => "古灵精怪",
                "maps" => [],
                "description" => "喂养孩子触发几率增加，在庭院中触发几率增加，成年与否均可触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 40, "name" => "佛骨舍利",
                "maps" => [["map" => "大雁塔一层", "x" => 23, "y" => 24]],
                "description" => "", "times" => 0, "group" => ""
            ],
            [
                "official" => "", "level" => 40, "name" => "箱灵",
                "maps" => [],
                "description" => "完成 50环 修炼任务后开启 21个 修炼宝箱必定触发，无满修限制", "times" => 0, "group" => ""
            ],
            [
                "official" => "", "level" => 40, "name" => "有缘无分",
                "maps" => [],
                "description" => "触发奇遇时点击第二选项，不影响以后再次遇到奇遇", "times" => 0, "group" => ""
            ],
            [
                "official" => "", "level" => 40, "name" => "沉寂剑灵",
                "maps" => [],
                "description" => "镶嵌或合成宝石、开启卦象、转移等有概率触发，铁匠铺触发几率增加", "times" => 0, "group" => ""
            ],
            [
                "official" => "", "level" => 50, "name" => "微弱的嘉许",
                "maps" => [["map" => "庭院", "x" => 0, "y" => 0]],
                "description" => "要求子女带身上回家时触发，父亲节触发几率增加", "times" => 0, "group" => ""
            ],
            [
                "official" => "", "level" => 0, "name" => "善人",
                "maps" => [["map" => "佛门", "x" => 69, "y" => 79]],
                "description" => "需要完成【行善积德】成就", "times" => 0, "group" => ""
            ],

            // 笑看春风系列
            [
                "official" => "正六品都尉", "level" => 70, "name" => "忆春风",
                "maps" => [["map" => "长安城", "x" => 29, "y" => 21]],
                "description" => "", "times" => 0, "group" => "笑看春风系列",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "续春风",
                "maps" => [["map" => "青河镇", "x" => 48, "y" => 14]],
                "description" => "", "times" => 0, "group" => "笑看春风系列",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "笑春风",
                "maps" => [["map" => "长安城乐艺坊", "x" => 0, "y" => 0]],
                "description" => "单数整点播放舞台剧时，乐艺坊剧院老板触发，当前窗口说话无弹窗。播放时间列表: 11:00-11:10, 13:00-13:10, 15:00-15:10, 17:00-17:10, 19:00-19:10, 21:00-21:10", "times" => 0, "group" => "笑看春风系列",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "念春风",
                "maps" => [["map" => "大唐境外", "x" => 220, "y" => 80]],
                "description" => "", "times" => 0, "group" => "笑看春风系列",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "笑看春风",
                "maps" => [["map" => "大唐境外", "x" => 220, "y" => 80]],
                "description" => "需要完成【笑看春风】系列奇遇", "times" => 0, "group" => "笑看春风系列",
            ],

            // 蒿鼠奇遇系列
            [
                "official" => "", "level" => 0, "name" => "瑶音琴魔",
                "maps" => [["map" => "魔王山", "x" => 107, "y" => 27], ["map" => "盘丝岭", "x" => 46, "y" => 62], ["map" => "幽冥地府", "x" => 126, "y" => 21], ["map" => "万兽岭", "x" => 112, "y" => 63]],
                "description" => "", "times" => 0, "group" => "蒿鼠奇遇系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "长安靡音",
                "maps" => [["map" => "南海普陀", "x" => 30, "y" => 14], ["map" => "凌霄天宫", "x" => 50, "y" => 37], ["map" => "镇元五庄", "x" => 135, "y" => 50], ["map" => "东海龙宫", "x" => 107, "y" => 27]],
                "description" => "", "times" => 0, "group" => "蒿鼠奇遇系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "临仙琴痴",
                "maps" => [["map" => "天策", "x" => 123, "y" => 55], ["map" => "佛门", "x" => 46, "y" => 23], ["map" => "天魔里", "x" => 73, "y" => 13], ["map" => "七星方寸", "x" => 106, "y" => 53]],
                "description" => "", "times" => 0, "group" => "蒿鼠奇遇系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "我为歌狂",
                "maps" => [],
                "description" => "需要完成【蒿鼠奇遇】系列奇遇", "times" => 0, "group" => "蒿鼠奇遇系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "青河歌会",
                "maps" => [["map" => "傲来国", "x" => 35, "y" => 76], ["map" => "临仙镇", "x" => 160, "y" => 73], ["map" => "青河镇", "x" => 117, "y" => 90], ["map" => "长安城", "x" => 101, "y" => 105]],
                "description" => "需要完成【我为歌狂】奇遇", "times" => 0, "group" => "蒿鼠奇遇系列",
            ],

            // 缘起混沌系列
            [
                "official" => "", "level" => 0, "name" => "混沌伊始",
                "maps" => [["map" => "长安城驿站", "x" => 0, "y" => 0]],
                "description" => "携带混沌妖核（混沌妖核来源：封妖、抓鬼、师门）", "times" => 0, "group" => "缘起混沌系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "长安疑踪",
                "maps" => [["map" => "青河镇", "x" => 0, "y" => 0]],
                "description" => "出现年轻男子在当前频道叫玩家，当前窗口说话无弹窗。", "times" => 0, "group" => "缘起混沌系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "缘起混沌",
                "maps" => [],
                "description" => "需要完成【缘起混沌】系列奇遇", "times" => 0, "group" => "缘起混沌系列",
            ],

            // 天下奇珍
            [
                "official" => "", "level" => 0, "name" => "云坊阁",
                "maps" => [["map" => "万兽岭", "x" => 67, "y" => 24], ["map" => "七星方寸", "x" => 31, "y" => 131]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "同心坊",
                "maps" => [["map" => "东海龙宫", "x" => 43, "y" => 76]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "流云阁",
                "maps" => [["map" => "魔王山", "x" => 23, "y" => 31], ["map" => "南海普陀", "x" => 19, "y" => 75]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "五味羹",
                "maps" => [["map" => "镇元五庄", "x" => 148, "y" => 96]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "青囊坊",
                "maps" => [["map" => "南海普陀", "x" => 23, "y" => 41]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "御香亭",
                "maps" => [["map" => "天策", "x" => 62, "y" => 63]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "玲珑阁",
                "maps" => [["map" => "七星方寸", "x" => 100, "y" => 129], ["map" => "佛门", "x" => 120, "y" => 45]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "七巧阁",
                "maps" => [["map" => "南海普陀", "x" => 92, "y" => 41]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "湛卢坊",
                "maps" => [["map" => "魔王山", "x" => 70, "y" => 61]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "五味斋",
                "maps" => [["map" => "镇元五庄", "x" => 148, "y" => 96]],
                "description" => "此奇遇会重复触发，信差：少侠请留步，这里有你的一封书信", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "天下奇珍",
                "maps" => [],
                "description" => "需要完成【天下奇珍】系列奇遇", "times" => 0, "group" => "天下奇珍系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "书信恐慌症",
                "maps" => [],
                "description" => "一天内完成3次书信任务，推荐前一天先卡一个书信过12点再做", "times" => 0, "group" => "天下奇珍系列",
            ],

            // 门派专属
            [
                "official" => "", "level" => 0, "name" => "花语",
                "maps" => [["map" => "盘丝岭", "x" => 109, "y" => 81]],
                "description" => "盘丝岭专属奇遇不需要门贡有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "暗杀行动",
                "maps" => [["map" => "天魔里", "x" => 0, "y" => 0]],
                "description" => "天魔里专属奇遇不需要门贡，天魔里泽野有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "碧月青莲",
                "maps" => [["map" => "南海普陀", "x" => 82, "y" => 65]],
                "description" => "南海普陀专属奇遇需要门贡，满足怪物入侵时有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "医者仁心",
                "maps" => [["map" => "大唐国境", "x" => 82, "y" => 154]],
                "description" => "佛门专属奇遇需要门贡，丑时有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 2, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "百兽之王",
                "maps" => [["map" => "万兽岭", "x" => 0, "y" => 0]],
                "description" => "万兽岭专属奇遇需要门贡，当前窗口说话无弹窗，万兽岭有来有去有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "雷霆天兵",
                "maps" => [["map" => "凌霄天宫", "x" => 0, "y" => 0]],
                "description" => "凌霄天宫专属奇遇需要门贡，凌霄天宫杨戬有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "修葺寨门",
                "maps" => [["map" => "魔王山", "x" => 0, "y" => 0]],
                "description" => "魔王山专属奇遇需要门贡，当前窗口说话无弹窗，魔王山平天大圣有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "人参果",
                "maps" => [["map" => "镇元五庄", "x" => 30, "y" => 55]],
                "description" => "镇元五庄专属奇遇需要门贡，当前窗口说话无弹窗，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "门派试炼",
                "maps" => [["map" => "七星方寸", "x" => 0, "y" => 0]],
                "description" => "七星方寸专属奇遇需要门贡，当前窗口说话无弹窗，七星方寸大觉金仙有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "将府往谈",
                "maps" => [["map" => "天策", "x" => 0, "y" => 0]],
                "description" => "天策专属奇遇需要门贡，天策程府管家有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "东海疑踪",
                "maps" => [["map" => "东海龙宫", "x" => 0, "y" => 0]],
                "description" => "东海龙宫专属奇遇需要门贡，东海龙宫龟千岁有几率触发，当前窗口说话无弹窗，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "见习鬼差",
                "maps" => [["map" => "幽冥地府", "x" => 0, "y" => 0]],
                "description" => "幽冥地府专属奇遇需要门贡，幽冥地府地藏菩萨触发，当前窗口说话无弹窗，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],
            [
                "official" => "", "level" => 0, "name" => "身先士卒",
                "maps" => [["map" => "无名谷", "x" => 0, "y" => 0]],
                "description" => "无名谷专属奇遇需要门贡，御虚真人附近有几率触发，75级从五品大夫转门派后，可以再次获得专属奇遇，否则只能获取其中一个", "times" => 0, "group" => "门派专属",
            ],

            // 封缄五灵系列
            [
                "official" => "", "level" => 0, "name" => "离奇命案",
                "maps" => [["map" => "青河镇", "x" => 0, "y" => 0]],
                "description" => "青河镇何道长，当前窗口说话无弹窗", "times" => 0, "group" => "封缄五灵系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "灵宝脱灵",
                "maps" => [["map" => "青河镇外", "x" => 76, "y" => 56]],
                "description" => "出现青年男子当前窗口说话无弹窗", "times" => 0, "group" => "封缄五灵系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "谜之青河",
                "maps" => [["map" => "青河镇", "x" => 0, "y" => 0]],
                "description" => "青河镇农夫，当前窗口说话无弹窗", "times" => 0, "group" => "封缄五灵系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "五行之钥",
                "maps" => [["map" => "青河镇", "x" => 32, "y" => 46]],
                "description" => "出现花仙当前窗口说话无弹窗，需要宝宝：龙须豹、瑞兽、凤凰、花魂、蚌女，每人提交顺序不同", "times" => 0, "group" => "封缄五灵系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "重塑青河",
                "maps" => [["map" => "青河镇", "x" => 38, "y" => 54], ["map" => "临仙镇", "x" => 33, "y" => 40]],
                "description" => "出现花仙当前窗口说话无弹窗，五行封印顺序为水、火、木、金、土", "times" => 0, "group" => "封缄五灵系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "封缄五灵",
                "maps" => [],
                "description" => "需要完成【封缄五灵】系列奇遇", "times" => 0, "group" => "封缄五灵系列",
            ],

            // 神武逍遥游系列
            [
                "official" => "从三品刺史", "level" => 100, "name" => "金戈情",
                "maps" => [["map" => "长安城", "x" => 281, "y" => 193]],
                "description" => "需要拥有至少三十个奇遇成就", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "瑶宫泪",
                "maps" => [["map" => "凌霄天宫", "x" => 97, "y" => 63]],
                "description" => "需要拥有至少三十个奇遇成就", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "樱花落",
                "maps" => [["map" => "天魔里", "x" => 0, "y" => 0]],
                "description" => "需要拥有至少三十个奇遇成就，天魔里秋水附近有几率触发，当前窗口说话无弹窗", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "星无痕",
                "maps" => [["map" => "七星方寸", "x" => 45, "y" => 14]],
                "description" => "需要拥有至少三十个奇遇成就，七星方寸玄明附近有几率触发，当前窗口说话无弹窗", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "青莲心",
                "maps" => [["map" => "镇元五庄", "x" => 30, "y" => 55]],
                "description" => "需要拥有至少三十个奇遇成就，任务需要门贡兑换的人参果", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "彼岸花",
                "maps" => [["map" => "南海普陀", "x" => 20, "y" => 40]],
                "description" => "需要拥有至少三十个奇遇成就，地图刷新一枚大型花朵捡起来触发", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "孤月寒",
                "maps" => [["map" => "乌斯藏", "x" => 76, "y" => 33]],
                "description" => "需要拥有至少三十个奇遇成就", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "黄泉冷",
                "maps" => [["map" => "幽冥地府", "x" => 0, "y" => 0]],
                "description" => "需要拥有至少三十个奇遇成就，幽冥地府孟婆附近有几率触发，当前窗口说话无弹窗", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "慕云遮",
                "maps" => [["map" => "乌斯藏", "x" => 39, "y" => 87]],
                "description" => "需要拥有至少三十个奇遇成就", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "镜花缘",
                "maps" => [["map" => "傲来国", "x" => 125, "y" => 60], ["map" => "傲来国", "x" => 39, "y" => 71]],
                "description" => "需要拥有至少三十个奇遇成就", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "双生兰",
                "maps" => [["map" => "长安城", "x" => 150, "y" => 197]],
                "description" => "需要拥有至少三十个奇遇成就", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "梵音寂",
                "maps" => [["map" => "大唐国境", "x" => 97, "y" => 45]],
                "description" => "需要拥有至少三十个奇遇成就", "times" => 0, "group" => "神武逍遥游系列",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "神武逍遥游",
                "maps" => [],
                "description" => "需要完成【神武逍遥游】相关奇遇，奖励称谓【三界奇侠】", "times" => 0, "group" => "神武逍遥游系列",
            ],

            // 走四方系列
            [
                "official" => "", "level" => 0, "name" => "观沧海",
                "maps" => [["map" => "花果山", "x" => 99, "y" => 101]],
                "description" => "寅时触发几率增加，当前窗口说话无弹窗", "times" => 0, "group" => "走四方系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "访名山",
                "maps" => [["map" => "临仙镇", "x" => 122, "y" => 81]],
                "description" => "需要完成【观沧海】奇遇，白天触发几率增加", "times" => 0, "group" => "走四方系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "游华都",
                "maps" => [["map" => "长安城", "x" => 186, "y" => 195]],
                "description" => "需要完成【访名山】奇遇，白天触发几率增加", "times" => 0, "group" => "走四方系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "登云阁",
                "maps" => [["map" => "昆仑山", "x" => 109, "y" => 108]],
                "description" => "需要完成【游华都】奇遇，白天触发几率增加", "times" => 0, "group" => "走四方系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "走四方",
                "maps" => [],
                "description" => "需要完成【登云阁】奇遇，白天触发几率增加", "times" => 0, "group" => "走四方系列",
            ],

            // 江山如画系列
            [
                "official" => "", "level" => 0, "name" => "江山如画·傲来篇",
                "maps" => [["map" => "昆仑山", "x" => 26, "y" => 109]],
                "description" => "此奇遇会重复触发，书童：前面的侠士稍微等一下，我家先生邀您到府上一叙", "times" => 0, "group" => "江山如画系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "江山如画·青河篇",
                "maps" => [["map" => "昆仑山", "x" => 115, "y" => 103]],
                "description" => "此奇遇会重复触发，书童：前面的侠士稍微等一下，我家先生邀您到府上一叙", "times" => 0, "group" => "江山如画系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "江山如画·临仙篇",
                "maps" => [["map" => "花果山", "x" => 148, "y" => 83]],
                "description" => "此奇遇会重复触发，书童：前面的侠士稍微等一下，我家先生邀您到府上一叙", "times" => 0, "group" => "江山如画系列",
            ],
            [
                "official" => "", "level" => 0, "name" => "江山如画",
                "maps" => [],
                "description" => "需要完成【江山如画】相关奇遇各五次", "times" => 0, "group" => "江山如画系列",
            ],

            // 70级
            [
                "official" => "正六品都尉", "level" => 70, "name" => "行侠仗义",
                "maps" => [["map" => "长安城", "x" => 289, "y" => 91]],
                "description" => "需要完成【好一副热心肠】成就，长安江湖密探附近触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "天魔惊魂",
                "maps" => [["map" => "天魔里", "x" => 20, "y" => 73]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "望子成龙",
                "maps" => [["map" => "青河镇", "x" => 7, "y" => 76]],
                "description" => "需要完成【望子成龙】成就(孩子神功)，青河镇周夫人附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "蚌姬",
                "maps" => [["map" => "傲来国", "x" => 134, "y" => 101]],
                "description" => "完成蚌女图鉴，傲来国蒙面人附近触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "寒蕊暖心",
                "maps" => [["map" => "临仙镇", "x" => 115, "y" => 45]],
                "description" => "花朵生长时间为寅时", "times" => 3, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "虹桥",
                "maps" => [["map" => "七星方寸", "x" => 104, "y" => 133]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "神秘客人",
                "maps" => [["map" => "长安城乐艺坊", "x" => 0, "y" => 0]],
                "description" => "长安城乐艺坊剧院老板附近有几率触发，当前窗口说话无弹窗", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "兔子成长史",
                "maps" => [["map" => "青河镇", "x" => 14, "y" => 106]],
                "description" => "完成大耳兔图鉴，青河镇小石头附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "姊妹情深",
                "maps" => [["map" => "青河镇", "x" => 14, "y" => 106]],
                "description" => "青河镇周夫人附近有几率触发，当前窗口说话无弹窗", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "天上人间",
                "maps" => [["map" => "凌霄天宫", "x" => 142, "y" => 35]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "琼浆玉液",
                "maps" => [["map" => "长安城", "x" => 481, "y" => 203]],
                "description" => "长安城客栈门口附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "鮔表",
                "maps" => [["map" => "青河镇外", "x" => 66, "y" => 7]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "高老庄的困惑",
                "maps" => [["map" => "乌斯藏", "x" => 204, "y" => 26]],
                "description" => "需要完成【高老庄常客】成就", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "琴声寂寂",
                "maps" => [["map" => "长安城金悦院", "x" => 60, "y" => 37]],
                "description" => "长安城金怡院如花附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "消肠酒",
                "maps" => [["map" => "昆仑山", "x" => 102, "y" => 70]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "夜半惊声",
                "maps" => [["map" => "青河镇", "x" => 147, "y" => 26]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "冥王",
                "maps" => [["map" => "幽冥地府", "x" => 35, "y" => 16]],
                "description" => "幽冥地府牛头附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "孝子",
                "maps" => [["map" => "傲来国", "x" => 97, "y" => 43]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "浣手做羹汤",
                "maps" => [["map" => "大唐国境", "x" => 130, "y" => 23], ["map" => "大唐国境", "x" => 70, "y" => 45]],
                "description" => "申时触发", "times" => 9, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "琴音再续",
                "maps" => [["map" => "长安城", "x" => 41, "y" => 70]],
                "description" => "长安城包夫人附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正六品都尉", "level" => 70, "name" => "森罗之怒",
                "maps" => [["map" => "幽冥地府", "x" => 50, "y" => 98]],
                "description" => "", "times" => 0, "group" => "",
            ],

            // 80级
            [
                "official" => "正五品中丞", "level" => 80, "name" => "同心锁",
                "maps" => [["map" => "临仙镇", "x" => 81, "y" => 81]],
                "description" => "需要完成【十个密友】成就", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "仙丹",
                "maps" => [["map" => "临仙镇药店", "x" => 0, "y" => 0]],
                "description" => "临仙镇药店老板有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "一念之差",
                "maps" => [["map" => "大唐国境", "x" => 0, "y" => 0]],
                "description" => "需要完成【兔子成长史】成就，并在当天抓捕三名通缉犯触发。如果当天不触发，则下一天需要重新抓捕三名通缉犯。", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "药店疑案",
                "maps" => [["map" => "傲来国", "x" => 0, "y" => 0]],
                "description" => "傲来国药店老板有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "口技",
                "maps" => [["map" => "长安城", "x" => 199, "y" => 39]],
                "description" => "卯时触发几率增加", "times" => 4, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "侠客行",
                "maps" => [["map" => "长安城擂台", "x" => 0, "y" => 0]],
                "description" => "在擂台玩法被PK，使用擂台专用药，获得胜利时有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "断线风筝",
                "maps" => [["map" => "长安城外", "x" => 123, "y" => 52]],
                "description" => "卯时触发几率增加", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "梦笔生花",
                "maps" => [["map" => "傲来国", "x" => 103, "y" => 47]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "太宗戏鹞",
                "maps" => [["map" => "长安城", "x" => 83, "y" => 229]],
                "description" => "长安城李将军附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "偷梁换柱",
                "maps" => [["map" => "大唐国境", "x" => 168, "y" => 138]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "花仙契约",
                "maps" => [["map" => "大唐国境", "x" => 26, "y" => 161]],
                "description" => "当天与好友鲜花加友好大于99，不强制要求玫瑰或雪莲", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "鲲鹏之地·一",
                "maps" => [["map" => "北冥", "x" => 146, "y" => 75]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "鲲鹏之地·二",
                "maps" => [["map" => "青河镇", "x" => 33, "y" => 18]],
                "description" => "需要完成【鲲鹏之地·一】成就", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "猪王崛起",
                "maps" => [["map" => "长安城外", "x" => 23, "y" => 67]],
                "description" => "需要完成【野猪图鉴】", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "京城密探",
                "maps" => [["map" => "长安城外", "x" => 26, "y" => 67]],
                "description" => "需要完成【猪王崛起】成就", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "怪诞琴事",
                "maps" => [["map" => "长安城", "x" => 478, "y" => 131]],
                "description" => "申时有几率触发", "times" => 9, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "义结金兰",
                "maps" => [["map" => "仙临镇", "x" => 129, "y" => 33]],
                "description" => "需要完成【结义金兰】成就", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "能言",
                "maps" => [["map" => "魔王山", "x" => 32, "y" => 26]],
                "description" => "魔王山野蛇精触发，当前窗口说话无弹窗", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "大闹学堂",
                "maps" => [["map" => "长安城", "x" => 253, "y" => 64]],
                "description" => "长安城小虎附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "奇判",
                "maps" => [["map" => "长安城", "x" => 264, "y" => 146]],
                "description" => "需要完成【豪商5000万】成就，成就触发没有对话框而是捡起地上类似生肖祝福的东西触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "括苍山僧",
                "maps" => [["map" => "佛门", "x" => 43, "y" => 17]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "劫后余生",
                "maps" => [["map" => "大唐境外", "x" => 41, "y" => 84]],
                "description" => "需要完成【猛鬼传说】成就，黑夜有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "观光团之国子监",
                "maps" => [["map" => "长安城", "x" => 323, "y" => 236]],
                "description" => "白天触发几率增加", "times" => 0, "group" => "",
            ],
            [
                "official" => "正五品中丞", "level" => 80, "name" => "琴随事迁",
                "maps" => [["map" => "长安城乐艺坊", "x" => 0, "y" => 0]],
                "description" => "需要完成【怪诞琴事】成就，长安城乐艺坊剧院老板附近有几率触发，当前窗口说话无弹窗", "times" => 0, "group" => "",
            ],

            // 90级
            [
                "official" => "从四品少监", "level" => 90, "name" => "观光团之寒冰宫",
                "maps" => [["map" => "寒冰宫一层", "x" => 102, "y" => 10]],
                "description" => "需要完成【观光团之国子监】成就，白天触发几率增加", "times" => 0,  "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "稀世奇珍",
                "maps" => [["map" => "傲来国", "x" => 71, "y" => 22]],
                "description" => "押镖十次后傲来国商人卖10个旗包换50万信誉后选择不卖", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "雏燕之死",
                "maps" => [["map" => "傲来国", "x" => 64, "y" => 95]],
                "description" => "傲来国易利附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "闻鸡起舞",
                "maps" => [["map" => "长安城", "x" => 519, "y" => 189]],
                "description" => "辰时触发几率增加", "times" => 5, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "军备之荒",
                "maps" => [["map" => "长安城", "x" => 508, "y" => 216]],
                "description" => "此奇遇会重复触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "冷花开",
                "maps" => [["map" => "长安城", "x" => 508, "y" => 216]],
                "description" => "需要完成【百花下凡】成就", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "临仙铸剑师",
                "maps" => [["map" => "临仙镇", "x" => 119, "y" => 14]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "东海大鱼",
                "maps" => [["map" => "东海迷宫", "x" => 36, "y" => 73]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "迷途的遣唐使",
                "maps" => [["map" => "北冥", "x" => 121, "y" => 44]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "灵兽学院",
                "maps" => [["map" => "大唐境外", "x" => 170, "y" => 105]],
                "description" => "需要完成【灵兽学院】奇遇15次", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "学院护婴员",
                "maps" => [],
                "description" => "需要完成【灵兽学院】奇遇15次", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "抢修索桥",
                "maps" => [["map" => "大唐境外", "x" => 145, "y" => 69]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "画虎",
                "maps" => [["map" => "大唐国境", "x" => 94, "y" => 128]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "及时雨",
                "maps" => [["map" => "长安城", "x" => 515, "y" => 217]],
                "description" => "需要完成【军备之荒】成就15次", "times" => 0,  "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "复仇之鹤",
                "maps" => [["map" => "大唐国境", "x" => 177, "y" => 98]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "秦王铁骑",
                "maps" => [["map" => "长安城药店", "x" => 0, "y" => 0]],
                "description" => "玄武门之变副本声望达到崇拜，在长安城药店有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "鹤缘",
                "maps" => [["map" => "大唐国境", "x" => 82, "y" => 90]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "快马加鞭",
                "maps" => [["map" => "长安城", "x" => 251, "y" => 66]],
                "description" => "骑坐骑触发几率增加、辰时触发几率增加", "times" => 5, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "城外亭站",
                "maps" => [["map" => "青河镇", "x" => 15, "y" => 13]],
                "description" => "酉时触发几率增加", "times" => 10, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "柑子布",
                "maps" => [["map" => "大唐国境", "x" => 127, "y" => 148]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "垦荒记",
                "maps" => [["map" => "大唐国境", "x" => 34, "y" => 114]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "夜行游女",
                "maps" => [["map" => "傲来国", "x" => 33, "y" => 91]],
                "description" => "傲来国李大嫂附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "东宫禁卫",
                "maps" => [["map" => "长安城药店", "x" => 0, "y" => 0]],
                "description" => "玄武门之变副本声望达到崇拜，在长安城药店有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "海客盗宝",
                "maps" => [["map" => "傲来国", "x" => 118, "y" => 21]],
                "description" => "傲来国船夫附近有几率触发", "times" => 0, "group" => "",
            ],
            [
                "official" => "从四品少监", "level" => 90, "name" => "家书万金",
                "maps" => [["map" => "乌斯藏", "x" => 130, "y" => 76]],
                "description" => "", "times" => 0, "group" => "",
            ],

            // 100级
            [
                "official" => "从三品刺史", "level" => 100, "name" => "九天瑶宫",
                "maps" => [["map" => "凌霄天宫", "x" => 66, "y" => 46]],
                "description" => "白天触发几率增加", "times" => 0, "group" => "",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "战争之王",
                "maps" => [["map" => "长安城药店", "x" => 0, "y" => 0]],
                "description" => "需要完成【血吼部落】副本声望达到崇拜", "times" => 0, "group" => "",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "远古战场",
                "maps" => [["map" => "神弃平原", "x" => 42, "y" => 33]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "海底深渊",
                "maps" => [["map" => "傲来国", "x" => 101, "y" => 44]],
                "description" => "", "times" => 0, "group" => "",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "贡品蟠桃",
                "maps" => [["map" => "花果山", "x" => 121, "y" => 79]],
                "description" => "白天触发几率增加", "times" => 0, "group" => "",
            ],
            [
                "official" => "从三品刺史", "level" => 100, "name" => "胜利使者",
                "maps" => [["map" => "长安城药店", "x" => 0, "y" => 0]],
                "description" => "需要完成【圣火要塞】副本声望达到崇拜", "times" => 0, "group" => "",
            ],

            // 105级
            [
                "official" => "", "level" => 105, "name" => "驯鸟记",
                "maps" => [["map" => "水帘洞", "x" => 21, "y" => 8]],
                "description" => "需要完成【圣火要塞】副本声望达到崇拜", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 105, "name" => "突如其来的惊喜",
                "maps" => [["map" => "傲来国", "x" => 0, "y" => 0],["map" => "临仙镇", "x" => 0, "y" => 0],["map" => "女儿国", "x" => 0, "y" => 0],["map" => "青河镇", "x" => 0, "y" => 0],["map" => "青河镇外", "x" => 0, "y" => 0]],
                "description" => "地图中随机坐标触发", "times" => 0, "group" => "",
            ],

            // 115级
            [
                "official" => "", "level" => 115, "name" => "月海传说",
                "maps" => [["map" => "傲来国", "x" => 126, "y" => 63],],
                "description" => "完成吉祥、桂花精灵、月影兔、瑶池天女、深渊海马、龙虾骑士、巡海章鱼图鉴并有变异月影兔或者变异龙虾骑士", "times" => 0, "group" => "",
            ],

            // 非梦系列
            [
                "official" => "", "level" => 0, "name" => "非梦·昔",
                "maps" => [["map" => "临仙镇", "x" => 0, "y" => 0],],
                "description" => "曾浩迟附近有几率触发，需要与孟非梦的好感度大于400", "times" => 0, "group" => "非梦",
            ],
            [
                "official" => "", "level" => 0, "name" => "非梦·今",
                "maps" => [["map" => "无名谷", "x" => 145, "y" => 23],],
                "description" => "需要与孟非梦的好感度大于400", "times" => 0, "group" => "非梦",
            ],
            [
                "official" => "", "level" => 0, "name" => "非梦·镜",
                "maps" => [["map" => "无名谷", "x" => 56, "y" => 84], ["map" => "无名谷", "x" => 145, "y" => 19]],
                "description" => "需要与孟非梦的好感度大于400", "times" => 0, "group" => "非梦",
            ],
            [
                "official" => "", "level" => 0, "name" => "非梦·醒",
                "maps" => [["map" => "长安城驿站", "x" => 0, "y" => 0], ["map" => "傲来国", "x" => 0, "y" => 0]],
                "description" => "需要与孟非梦的好感度大于400", "times" => 0, "group" => "非梦",
            ],

            // 拓跋玉瑾
            [
                "official" => "", "level" => 0, "name" => "无名之困",
                "maps" => [["map" => "无名谷", "x" => 116, "y" => 63]],
                "description" => "需要与拓跋玉瑾的好感度大于400", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 0, "name" => "贵胄逆女",
                "maps" => [["map" => "无名谷", "x" => 145, "y" => 23], ["map" => "无名谷", "x" => 50, "y" => 88]],
                "description" => "需要与拓跋玉瑾的好感度大于400", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 0, "name" => "血亲难渝",
                "maps" => [["map" => "傲来国", "x" => 72, "y" => 42]],
                "description" => "需要与拓跋玉瑾的好感度大于400", "times" => 0, "group" => "",
            ],

            // 御虚真人
            [
                "official" => "", "level" => 0, "name" => "寻仙问道",
                "maps" => [["map" => "无名谷", "x" => 53, "y" => 45]],
                "description" => "需要与御虚真人的好感度大于400", "times" => 0, "group" => "",
            ],
            [
                "official" => "", "level" => 0, "name" => "无名有为",
                "maps" => [["map" => "无名谷", "x" => 53, "y" => 45]],
                "description" => "需要与御虚真人的好感度大于400", "times" => 0, "group" => "",
            ],
        ];


        $maps = Map::all()->keyBy("name");
        $officials = Official::all()->keyBy("name");
        $levels = LevelExperience::all()->keyBy("level");

        Meeting::insert(collect($items)->map(function ($item) use ($maps, $officials, $levels) {
            $officialId = isset($officials[$item['official']]) ? $officials[$item['official']]['id'] : 0;
            $levelExperienceId = isset($levels[$item['level']]) ? $levels[$item['level']]['id'] : 0;

            unset($item['official']);
            unset($item['level']);
            unset($item['maps']);
            unset($item['times']);
            return array_merge($item, [
                'official_id' => $officialId,
                'level_experience_id' => $levelExperienceId,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray());

        $items = collect($items)->keyBy('name');
        Meeting::all()->map(function ($meeting) use ($items, $maps) {
            $item = $items[$meeting['name']];

            foreach($item['maps'] as $map) {
                $meeting->maps()->attach(
                    $maps[$map['map']],
                    ['x' => $map['x'], 'y' => $map['y']]
                );
            }
        });
    }
}
