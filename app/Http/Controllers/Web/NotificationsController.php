<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 获取登录用户的所有通知
        $notifications = Auth::user()->notifications()->paginate();

        // 标记为已读，未读数量清零
        Auth::user()->markAsRead();

        return view('notifications.index', compact('notifications'));
    }
}
