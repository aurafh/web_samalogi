<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {         
        return view('dashboard.blog.index', [
            'blogs' => Blog::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create');
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
            'judul_blog'=>'required',
            'isi_blog'=>'required',
            'gambar'=> 'required|image|file|max:2048',
        ]);

        if($request->file('gambar')){
            $validateData['gambar']=$request->file('gambar')->store('blog-images', 'public');
        }
        

        Blog::create($validateData);
        return redirect('/dashboard/blog')->with('success', 'Data Blog Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blog.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blog.edit', ['blog' => $blog]);
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
            "judul_blog" => "required",
            "isi_blog" => "required",
            ])->validate();
        
        $blog = Blog::findOrFail($id);
        
        $blog->judul_blog=$request->get('judul_blog');
        $blog->isi_blog=$request->get('isi_blog');
        if($request->file('gambar')){
        if($request->oldImage ){
            Storage::delete($request->oldImage);
            }
        
            $file = $request->file('gambar')->store('blog-images', 'public');
            $blog->gambar = $file;
            }
            $blog->save();

        return redirect('/dashboard/blog')->with('success', 'Data Blog Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->gambar){
            Storage::delete($blog->gambar);
        }
        $blog->delete();
        return redirect('/dashboard/blog')->with('success', 'Data Blog Berhasil Dihapus!');
    }

    public function confirm($id)
    {
        Alert::question('Anda Yakin?','Anda akan menghapus data ini!')
        ->showConfirmButton('<a href="/dashboard/blog/'.$id.'/destroy" class="text-white" style="text-decoration:none">Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Batal', '#aaa')->reverseButtons();
        return redirect('/dashboard/blog');
    }
}
