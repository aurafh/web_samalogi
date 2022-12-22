<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Client;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\BudayaKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index(){
        $user = User::first();
        $abouts = AboutUs::orderBy('created_at', 'desc')->limit(1)->first();
        $clients = Client::orderBy('created_at', 'desc')-> get();
        $portfolios = Portfolio::where('is_active', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        $blogs = Blog::where('is_active', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $budaya = BudayaKerja::orderBy('created_at', 'desc')->get();
        return view('home.index', compact([
            'abouts',
            'clients',
            'portfolios',
            'contacts',
            'blogs',
            'budaya',
            'user'
        ]));    
    }    
    
    public function portfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('home.portfolio-detail', ['portfolio' => $portfolio]);
    }

    public function portfolios(){
        $portfolio_all= Portfolio::latest()->search(request(['search']))->paginate(8)->withQueryString();
        return view('home.portfolios', ['portfolio_all' => $portfolio_all]);
    }


    public function blog($id){
        $user=User::first();
        $blog = Blog::where('is_active', 1)->findOrFail($id);
        return view('home.blog-detail', ['blog' => $blog, 'user'=>$user]);
    }

    public function blogs()
    {
        $user=User::first();
        $blogs=Blog::where('is_active', 1)->latest()->search(request(['search']))->paginate(6)->withQueryString();
        return view('home.blogs', ['blogs'=>$blogs, 'user'=>$user]);
    }
    
}
