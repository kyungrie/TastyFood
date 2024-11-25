<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GalleriesController extends Controller
{
    public function index()
    {

        $gallery = DB::table('galleries')->paginate(8);

        return view('admin.gallery.index', ['index' => $gallery]);
    }

    public function view()
    {
        $gallery = DB::table('galleries')->paginate(9);

        return view('gallery', ['index' => $gallery]);
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',  // Validasi judul
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validasi gambar
        ]);

       try {
           $newName = $request->picture->hashName();
           $pictureFolder = public_path() . '/gallery-picture';
           $request->picture->move($pictureFolder, $newName);

           DB::table('galleries')->insert([
               'title' => $request->title,
               'picture' => $newName,
           ]);

           session()->flash('success','Data berhasil ditambahkan!');
       } catch(\Exception $e) {
         session()->flash('error','Data gagal ditambahkan');
       }
        return redirect('/admin/gallery');
    }

    public function delete($id)
    {
        try {
            DB::table('galleries')->where('id', $id)->delete();

            session()->flash('success','Data berhasil dihapus!');
        } catch(\Exception $e){
            session()->flash('error','Data gagal dihapus');
        }
        return redirect('/admin/gallery');
    }

    public function edit(Request $req)
    {
        $gallery = Galleries::find($req->id);
        return view('admin/gallery/edit', ['galleries' => $gallery]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',  // Validasi judul
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        try {
            $gallery = Galleries::find($request->id);
            $gallery->title = $request->title;
            $gallery->picture = $request->picture;
            if ($request->has('picture')) {
                $newName = $request->picture->hashName();
                $pictureFolder = public_path() . '/gallery-picture';
                $request->picture->move($pictureFolder, $newName);

                $gallery->picture = $newName;
            }
            $gallery->save();

            session()->flash('success','Data berhasil diperbarui!');
        } catch(\Exception $e) {
            session()->flash('error','Data gagal diperbarui!');
        }
        return redirect('admin/gallery');
    }
}
