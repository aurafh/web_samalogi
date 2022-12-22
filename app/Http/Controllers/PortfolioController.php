<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BlogController;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BudayaKerjaController;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.portfolio.index', [
            'portfolios' => Portfolio::latest()->search(request(['search']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.portfolio.create');
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
            'nama_portfolio'=>'required',
            'deskripsi'=>'required',
            'features'=>'required',
            'training'=>'required',
            'image1'=> 'required|image|file|max:2048',
            'image2'=> 'image|file|max:2048',
            'image3'=> 'image|file|max:2048',
            'image4'=> 'image|file|max:2048',
        ]);
        
        if($request->file('image1')){
            $validateData['image1']=$request->file('image1')->store('portfolio-images', 'public');
        }
        if($request->file('image2')){
            $validateData['image2']=$request->file('image2')->store('portfolio-images', 'public');
        }
        if($request->file('image3')){
            $validateData['image3']=$request->file('image3')->store('portfolio-images', 'public');
        }
        if($request->file('image4')){
            $validateData['image4']=$request->file('image4')->store('portfolio-images', 'public');
        }
        Portfolio::create($validateData);
        return redirect('/dashboard/portfolio')->with('success', 'Data Portfolio Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('dashboard.portfolio.show', ['portfolio' => $portfolio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('dashboard.portfolio.edit', ['portfolio' => $portfolio]);
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
            "nama_portfolio" => "required",
            "deskripsi" => "required|min:10",
            "features" => "required",
            "training" => "required",
            ])->validate();
        $portfolio = Portfolio::findOrFail($id);
        
        $portfolio->nama_portfolio=$request->get('nama_portfolio');
        $portfolio->deskripsi=$request->get('deskripsi');
        $portfolio->features=$request->get('features');
        $portfolio->training=$request->get('training');
        if($request->file('image1')){
        if($request->oldImage ){
            Storage::delete($request->oldImage);
            }
        
            $file = $request->file('image1')->store('portfolio-images', 'public');
            $portfolio->image1 = $file;
            }

        if($request->file('image2')){
        if($request->oldImage ){
            Storage::delete($request->oldImage);
            }
                
            $file = $request->file('image2')->store('portfolio-images', 'public');
            $portfolio->image2 = $file;
            }
        
        if($request->file('image3')){
        if($request->oldImage ){
            Storage::delete($request->oldImage);
            }
                        
            $file = $request->file('image3')->store('portfolio-images', 'public');
            $portfolio->image3 = $file;
            }
                            
        if($request->file('image4')){
        if($request->oldImage){
            Storage::delete($request->oldImage);
            }
                                
            $file = $request->file('image4')->store('portfolio-images', 'public');
            $portfolio->image4 = $file;
            }
            $portfolio->save();

        return redirect('/dashboard/portfolio')->with('success', 'Data Portfolio Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        if($portfolio->image1){
            Storage::delete($portfolio->image1);
        }
        if($portfolio->image2){
            Storage::delete($portfolio->image2);
        }
        if($portfolio->image3){
            Storage::delete($portfolio->image3);
        }
        if($portfolio->image4){
            Storage::delete($portfolio->image4);
        }
        $portfolio->delete();
        return redirect('/dashboard/portfolio')->with('success', 'Data Portfolio Berhasil Dihapus!');
    }

    public function confirm($id)
    {
        Alert::question('Anda Yakin?','Anda akan menghapus data ini!')
        ->showConfirmButton('<a href="/dashboard/portfolio/'.$id.'/destroy" class="text-white" style="text-decoration:none">Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();
        return redirect('/dashboard/portfolio');
    }
}
