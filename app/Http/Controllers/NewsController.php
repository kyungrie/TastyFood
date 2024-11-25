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
        $news = DB::table('news')->paginate(8);

        return view('admin.news.index',['index'=>$news]);
    }

    public function view(){
        $news = DB::table('news')->paginate(8);

        return view('news',['index'=>$news]);
    }

    public function insert(Request $request){

        $validated = $request->validate([
            'title' => 'required|string|max:255', // Validasi judul
            'newscontent' => 'required|string', // Validasi konten berita
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validasi gambar
        ]);

        $newName = $request->picture->hashName();
        $pictureFolder = public_path() . '/news-picture';
        $request->picture->move($pictureFolder, $newName);

        DB::table('news')->insert([
            'title'=> $request->title,
            'picture'=> $newName,
            'newscontent'=> $request->newscontent,
        ]);

        session()->flash('success','Data berhasil ditambahkan!');
        return redirect('/admin/news');
    }

    public function delete($id)  {
        DB::table('news')->where('id',$id)->delete();

        session()->flash('success','Data berhasil dihapus!');
        return redirect('/admin/news');
    }

    public function edit(Request $req){
        $news= News::find($req->id);
        return view('admin/news/edit',['news' => $news]);
    }

    public function update(Request $request){

        $validated = $request->validate([
            'title' => 'required|string|max:255', // Validasi judul
            'newscontent' => 'required|string', // Validasi konten berita
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

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

        session()->flash('success','Data berhasil diperbarui!');
	    return redirect('admin/news');
    }
}
