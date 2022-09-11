<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $clients = Client::orderBy('created_at', 'desc')->limit(1)->get();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->limit(1)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->limit(1)->get();
        return view('dashboard.index', compact([
            'clients',
            'portfolios',
            'blogs'
        ]));
    }    
}
