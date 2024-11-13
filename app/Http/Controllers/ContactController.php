<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function index()
    {
        $contact = DB::table('contact')->paginate(10);

        return view('admin.contact.index', ['index' => $contact]);
    }

    public function insert(Request $request)
    {
        DB::table('contact')->insert([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        session()->flash('success','Data berhasil ditambahkan!');
        session()->flash('success','Data berhasil ditambahkan!');
        return redirect('/contact');
    }

    public function delete($id)
    {
        DB::table('contact')->where('id', $id)->delete();

        session()->flash('success','Data berhasil dihapus!');
        return redirect('/admin/contact');
    }
}
