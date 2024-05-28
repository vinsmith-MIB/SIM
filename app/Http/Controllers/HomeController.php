<?php
  
namespace App\Http\Controllers;
  
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $categories = Kategori::all();
        $products = Produk::orderBy('created_at', 'desc')->get();
        $productDiscount = Produk::orderBy('diskon', 'desc')->first();

        return view('welcome', compact('categories', 'products', 'productDiscount'));
    } 
  

}