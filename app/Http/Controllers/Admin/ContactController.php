<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
use SweetAlert;
use Hashids\Hashids;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $data = Contact::all();
        return view('Admin.contact.contact', compact('data'));

    }

    public function updateContact(Request $request)
    {
        foreach ($request->id as $key => $id) {
            Contact::find($id)->update([
                'content' => $request->content[$key]
            ]);
        }
        return redirect()->route('admin.contact')->with('success', 'Data Berhasil Di Ubah');

    }

}
