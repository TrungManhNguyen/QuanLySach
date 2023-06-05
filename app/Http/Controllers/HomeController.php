<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryCategory;

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
     * @return\Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $category = Category::where('status',1)->orderBy('name','ASC')->get();
        return view('home');
    }
    public function viewCategory()
    {
        return view('pages.viewCategory');
    }
    public function login()
    {
        return view('login');
    }

    public function category(){
        dd(Category::all());
    }
}
