<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //首页
    public function root()
    {
        return view('pages.root');
    }

    //邮箱验证提醒页面
    public function emailVerifyNotice(Request $request)
    {
        return view('pages.email_verify_notice');
    }
}
