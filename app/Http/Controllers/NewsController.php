<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $news = DB::table('news')->get();

        return view('admin.news.index',['index'=>$news]);
    }

    public function insert(Request $request){
        $newName = $request->picture->hashName();
        $pictureFolder = public_path() . '/news-picture';
        $request->picture->move($pictureFolder, $newName);

        DB::table('news')->insert([
            'title'=> $request->title,
            'picture'=> $newName,
            'newscontent'=> $request->newscontent,
        ]);
        return redirect('/admin/news');
    }

    public function delete($id)  {
        DB::table('news')->where('id',$id)->delete();
        return redirect('/admin/news');
    }

    public function edit(Request $req){
        $news= News::find($req->id);
        return view('admin/news/edit',['news' => $news]);
    }

    public function update(Request $request){
        $news = News::find($request->id);
        $news->title= $request->title;
        $news->newscontent= $request->newscontent;
        if ($request-> has('picture')) {
            $newName = $request->picture->hashName();
            $pictureFolder = public_path() . '/news-picture';
            $request->picture->move($pictureFolder, $newName);

            $news->picture=$newName;
        }
        $news->save();
	    return redirect('admin/news');
    }
}
