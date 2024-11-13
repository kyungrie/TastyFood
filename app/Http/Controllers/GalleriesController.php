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

    public function insert(Request $request)
    {
        $newName = $request->picture->hashName();
        $pictureFolder = public_path() . '/gallery-picture';
        $request->picture->move($pictureFolder, $newName);

        DB::table('galleries')->insert([
            'title' => $request->title,
            'picture' => $newName,
        ]);

        session()->flash('success','Data berhasil ditambahkan!');
        return redirect('/admin/gallery');
    }

    public function delete($id)
    {
        DB::table('galleries')->where('id', $id)->delete();

        session()->flash('success','Data berhasil dihapus!');
        return redirect('/admin/gallery');
    }

    public function edit(Request $req)
    {
        $gallery = Galleries::find($req->id);
        return view('admin/gallery/edit', ['galleries' => $gallery]);
    }

    public function update(Request $request)
    {
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
        return redirect('admin/gallery');
    }
}
