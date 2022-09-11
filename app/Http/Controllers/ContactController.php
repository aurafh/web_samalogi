<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use Exception;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.contact.index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'alamat'=>'required',
            'email'=>'required|email',
            "maps" => "required",
        ]);
        
        Contact::create($validateData);
        return redirect('/dashboard/contact')->with('success', 'Data Contact Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('dashboard.contact.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('dashboard.contact.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            "alamat" => "required",
            "email" => "required|email",
            "maps" => "required",
            ])->validate();
        $contact = Contact::findOrFail($id);
        
        $contact->alamat=$request->get('alamat');
        $contact->email=$request->get('email');
        $contact->contact=$request->get('contact');
        $contact->maps=$request->get('maps');
        $contact->save();

        return redirect('/dashboard/contact')->with('success', 'Data Contact Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/dashboard/contact')->with('success', 'Data Contact Berhasil Dihapus!');
    }

    public function confirm($id)
    {
        Alert::question('Anda Yakin?','Anda akan menghapus data ini!')
        ->showConfirmButton('<a href="/dashboard/contact/'.$id.'/destroy" class="text-white" style="text-decoration:none">Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();
        return redirect('/dashboard/contact');
    }

    public function send(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);

        try {
            if($this->isOnline()){
                $mail_data = [
                    'recipient'=>'info@samalogi.com',
                    'fromEmail'=>$request->email,
                    'fromName'=>$request->name,
                    'subject'=>$request->subject,
                    'body'=>$request->message
                ];
    
            \Mail::send('email-template',$mail_data, function($message) use ($mail_data){
                $message->to(env('MAIL_USERNAME'))
                        ->from(env('MAIL_USERNAME'), $mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
        }
        return redirect()->back()->with('success', 'Pesan berhasil terkirim!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pesan tidak terkirim!');
        }
        

        // return redirect()->back();

        // } else{
        //     return redirect('/');
        // }
    }

    public function isOnline($site="https://google.com/"){
        if(@fopen($site, 'r')){
            return true;
        } else {
            return false;
        }
    }
}
