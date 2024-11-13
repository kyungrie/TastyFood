<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactInfoController extends Controller
{
    public function index()
    {
        $contactinfo = DB::table('contact_infos')->get();

        return view('admin.contactinfo.index', ['index' => $contactinfo]);
    }

    public function insert(Request $request)
    {
        DB::table('contact_infos')->insert([
            'email' => $request->email,
            'telephone' => $request->telephone,
            'location' => $request->location,
        ]);

        session()->flash('success','Data berhasil ditambahkan!');
        return redirect('/contactinfo');
    }

    public function edit(Request $req){
        $contactinfo= ContactInfo::find($req->id);
        return view('admin/contactinfo/edit',['contactinfo' => $contactinfo]);
    }

    public function update(Request $request){
        $contactinfo = ContactInfo::find($request->id);
        $contactinfo->email= $request->email;
        $contactinfo->telephone= $request->telephone;
        $contactinfo->location= $request->location;
        $contactinfo->save();

        session()->flash('success','Data berhasil diperbarui!');
	    return redirect('admin/contactinfo');
    }
}
