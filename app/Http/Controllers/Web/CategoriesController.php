<?php

namespace App\Http\Controllers\Web;

use App\Models\Topic;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $topics = Topic::where('category_id', $category->id)->paginate();

        // 传参变量话题和分类到模板中
        return view('topics.index', compact('topics', 'category'));
    }
}
