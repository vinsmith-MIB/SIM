<?php
  
namespace App\Http\Controllers\Admin;
  
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
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
    public function index(): View
    {
       

        return view('adminHome');
    } 
  
    public function kategori(): View
    {
       

        return view('kategoriProduk');
    }
    public function produk(): View
    {
       

        return view('produk');
    }
    public function laporan(): View
    {
       

        return view('laporan');
    }
    public function editproduk(): View
    {
       

        return view('editproduk');
    }

    public function order(): View
    {
       

        return view('adminOrder');
    } 

    public function editKategori(): View
    {
       

        return view('editKategori');
    }
    public function editlaporan(): View
    {
       

        return view('editlaporan');
    }
}