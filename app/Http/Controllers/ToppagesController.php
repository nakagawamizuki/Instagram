<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ToppagesController extends Controller
{
    // Toppage表示
    public function index()
    {
        // Postモデル使って全投稿データ取得
        $posts = Post::all();
        // viewの呼び出し
        return view('welcome', compact('posts'));
    }
}