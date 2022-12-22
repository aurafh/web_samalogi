<?php

namespace App\Http\Controllers;

use App\Models\BudayaKerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BudayaKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.budayakerja.index', [
            'budaya' => BudayaKerja::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.budayakerja.create');
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
            'judul_budaya'=>'required',
            'penjelasan'=>'required',
            'icon'=> 'required|image|file|max:2048',
        ]);

        if($request->file('icon')){
            $validateData['icon']=$request->file('icon')->store('budaya-images', 'public');
        }

        BudayaKerja::create($validateData);
        return redirect('/dashboard/budayakerja')->with('success', 'Data Budaya Kerja Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budayakerja = BudayaKerja::findOrFail($id);
        return view('dashboard.budayakerja.show', ['budayakerja' => $budayakerja]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budayakerja = BudayaKerja::findOrFail($id);
        return view('dashboard.budayakerja.edit', ['budayakerja' => $budayakerja]);
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
            "judul_budaya" => "required",
            "penjelasan" => "required",
            ])->validate();
        $budayakerja = BudayaKerja::findOrFail($id);
        
        $budayakerja->judul_budaya=$request->get('judul_budaya');
        $budayakerja->penjelasan=$request->get('penjelasan');
        if($request->file('icon')){
        if($request->oldImage ){
            Storage::delete($request->oldImage);
            }
        
            $file = $request->file('icon')->store('budaya-images', 'public');
            $budayakerja->icon = $file;
            }
            $budayakerja->save();

        return redirect('/dashboard/budayakerja')->with('success', 'Data Budaya Kerja Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budayakerja = BudayaKerja::findOrFail($id);
        if($budayakerja->icon){
            Storage::delete($budayakerja->icon);
        }
        $budayakerja->delete();
        return redirect('/dashboard/budayakerja')->with('success', 'Data Budaya Kerja Berhasil Dihapus!');
    }

    public function confirm($id)
    {
        Alert::question('Anda Yakin?','Anda akan menghapus data ini!')
        ->showConfirmButton('<a href="/dashboard/budayakerja/'.$id.'/destroy" class="text-white" style="text-decoration:none">Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();
        return redirect('/dashboard/budayakerja');
    }
}
