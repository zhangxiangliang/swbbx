<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $tools = [
            // 图鉴
            (object)['title' => '物品图鉴', 'description' => '网罗神武物品', 'category' => '图鉴', 'route' => route('items.index')],
            (object)['title' => '地图图鉴', 'description' => '十三门派在其中', 'category' => '图鉴', 'route' => route('maps.index')],
            (object)['title' => '集合图鉴', 'description' => '配方集合全都有', 'category' => '图鉴', 'route' => route('produces.index')],
            (object)['title' => '宠物图鉴', 'description' => '汇聚成品宠物', 'category' => '图鉴', 'route' => ''],
            (object)['title' => '宠物技能', 'description' => '自古清河出高必', 'category' => '图鉴', 'route' => ''],
            (object)['title' => '坐骑图鉴', 'description' => '坐骑技能与展示', 'category' => '图鉴', 'route' => ''],
            (object)['title' => '变身卡图鉴', 'description' => '坐骑技能与展示', 'category' => '图鉴', 'route' => ''],
            (object)['title' => '装备图鉴', 'description' => '属性特效特技', 'category' => '图鉴', 'route' => ''],

            // 计算器
            (object)['title' => '元宵计算器', 'description' => '元宵颗颗不浪费', 'category' => '计算器', 'route' => ''],
            (object)['title' => '属性计算器', 'description' => '宠物属性轻松算', 'category' => '计算器', 'route' => ''],
            (object)['title' => '修炼计算器', 'description' => '羽化登仙有你我', 'category' => '计算器', 'route' => ''],
            (object)['title' => '经验计算器', 'description' => '卡级突破不落下', 'category' => '计算器', 'route' => ''],
            (object)['title' => '宝石计算器', 'description' => '宝石计算与图鉴', 'category' => '计算器', 'route' => ''],

            // 攻略
            (object)['title' => '篝火派对', 'description' => '烧烤培训速成班', 'category' => '攻略', 'route' => route('barbecues.index')],
            (object)['title' => '江湖恩仇录', 'description' => '神武社交宝典', 'category' => '攻略', 'route' => route('npcs.index')],
            (object)['title' => '休闲钓鱼', 'description' => '欲与太公试比高', 'category' => '攻略', 'route' => route('fishes.index')],
            (object)['title' => '奇遇秘籍', 'description' => '碧波仙子在招手', 'category' => '攻略', 'route' => ''],

            // 小工具
            (object)['title' => '打书模拟', 'description' => '我命由我不由天', 'category' => '小工具', 'route' => ''],
            (object)['title' => '护符模拟', 'description' => '星月阳光与银河', 'category' => '小工具', 'route' => ''],
            (object)['title' => '武器模拟', 'description' => '欧皇非酋集中营', 'category' => '小工具', 'route' => ''],
            (object)['title' => '山水玄机图', 'description' => '山水是条不归路', 'category' => '小工具', 'route' => ''],
        ];

        $categories = collect($tools)->groupBy('category');
        return view('tools.index', compact('categories'));
    }
}
