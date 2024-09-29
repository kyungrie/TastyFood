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
        $contact = DB::table('contact')->get();

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
        return redirect('/contact');
    }

    public function delete($id)
    {
        DB::table('contact')->where('id', $id)->delete();
        return redirect('/admin/contact');
    }
}
