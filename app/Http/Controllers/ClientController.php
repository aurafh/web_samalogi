<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.client.index', [
            'clients' => Client::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.client.create');
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
            'client'=>'required',
            'logo'=> 'required|image|file|max:2048',
        ]);

        if($request->file('logo')){
            $validateData['logo']=$request->file('logo')->store('client-images');
        }

        Client::create($validateData);
        return redirect('/dashboard/our-client')->with('success', 'Data Client Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.client.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.client.edit', ['client' => $client]);
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
            "client" => "required",
            ])->validate();
        $client = Client::findOrFail($id);
        
        $client->client=$request->get('client');
        if($request->file('logo')){
        if($request->oldImage ){
            Storage::delete($request->oldImage);
            }
        
            $file = $request->file('logo')->store('client-images');
            $client->logo = $file;
            }
            $client->save();

        return redirect('/dashboard/our-client')->with('success', 'Data Client Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        if($client->logo){
            Storage::delete($client->logo);
        }
        $client->delete();
        return redirect('/dashboard/our-client')->with('success', 'Data Client Berhasil Dihapus!');
    }

    public function confirm($id)
    {
        Alert::question('Anda Yakin?','Anda akan menghapus data ini!')
        ->showConfirmButton('<a href="/dashboard/our-client/'.$id.'/destroy" class="text-white" style="text-decoration:none">Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();
        return redirect('/dashboard/our-client');
    }
}
