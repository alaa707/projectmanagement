<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neww;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
      public function dashboard()
    {
        return view('dashboard')      
        ->with('cat_count' , Category::all()->count())->with('new_count', Neww::all()->count()); 
     
    }
 

}
