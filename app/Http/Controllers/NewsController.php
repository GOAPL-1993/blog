<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $messages = DB::select("select * from news");
        return view("news", compact('messages'));
    }
    
    public function del($id)
    {
        DB::delete("delete from news where id=?", [$id]);
        $messages = DB::select("select * from news");
        return view("news", compact('messages'));
    }
    
    public function postit(Request $req){
        $msg = $req->message;
        DB::insert("insert into news (message) values (?)", [$msg]);
        $messages = DB::select("select * from news");
        return view("news", compact('messages'));
    }
}
// 這裡不收幫php收尾，因為它自己可能會再加php語法，所以收了可能造成語法錯誤
