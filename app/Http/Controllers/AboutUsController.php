<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;



class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.about.index', [
            'about' => AboutUs::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about.create');
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
            'isi'=>'required'
        ]);

        AboutUs::create($validateData);
        return redirect('/dashboard/about-us')->with('success', 'Data About Us Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('dashboard.about.show', ['aboutUs' => $aboutUs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('dashboard.about.edit', ['aboutUs' => $aboutUs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            "isi" => "required",
            ])->validate();
        $aboutUs = AboutUs::findOrFail($id);
        
        $aboutUs->isi=$request->get('isi');
        $aboutUs->save();

        return redirect('/dashboard/about-us')->with('success', 'Data About Us Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $aboutUs->delete();
        return redirect('/dashboard/about-us')->with('success', 'Data About Us Berhasil Dihapus!');
    }

    
    public function confirm($id)
    {
        Alert::question('Anda Yakin?','Anda akan menghapus data ini!')
        ->showConfirmButton('<a href="/dashboard/about-us/'.$id.'/destroy" class="text-white" style="text-decoration:none">Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();
        return redirect('/dashboard/about-us');
    }

}
