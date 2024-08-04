<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $news = DB::table('news')->get();

        return view('admin.news.index',['index'=>$news]);
    }

    public function insert(Request $request){
        DB::table('news')->insert([
            'title'=> $request->title,
            'picture'=> $request->picture,
            'newscontent'=> $request->newscontent,
        ]);
        return redirect('/admin/news');
    }

}
