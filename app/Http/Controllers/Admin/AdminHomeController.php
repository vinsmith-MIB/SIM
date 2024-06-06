<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\User;

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
        $invoices = Invoice::all();
        $produkTerlarisId = Invoice::select('id_produk')
            ->selectRaw('SUM(jumlah) as total_terjual')
            ->groupBy('id_produk')
            ->orderByDesc('total_terjual')
            ->limit(1)
            ->pluck('id_produk')
            ->first();

        // Mendapatkan informasi produk terlaris
        $produkTerlaris = null;
        if ($produkTerlarisId) {
            $produkTerlaris = Produk::with('kategori')->find($produkTerlarisId);
            $totalOrderan = Invoice::where('id_produk', $produkTerlarisId)->sum('jumlah');
        }

        $totalUsers = User::all()->count();
        $totalPendapatan = Invoice::sum('total_amount');
        $totalPendapatan = "Rp " . number_format($totalPendapatan, 0, ',', '.');


        return view('admin.pages.adminHome', compact('invoices', 'produkTerlaris', 'totalUsers', 'totalPendapatan', 'totalOrderan'));
    }

    public function kategori(): View
    {


        return view('admin.pages.kategoriProduk.index');
    }
    public function produk(): View
    {


        return view('admin.pages.produk.index');
    }
    public function laporan(): View
    {


        return view('admin.pages.laporan.index');
    }
    public function editproduk(): View
    {
        return view('admin.pages.produk.edit');
    }

    public function order(): View
    {


        return view('admin.pages.order.index');
    }

    public function editKategori(): View
    {


        return view('admin.pages.kategoriProduk.edit');
    }
    public function editlaporan(): View
    {


        return view('admin.pages.editlaporan.edit');
    }

    public function getChartData()
    {
        $invoices = Invoice::selectRaw('MONTH(created_at) as month, SUM(total_amount) as total')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        return response()->json($invoices);
    }
}
