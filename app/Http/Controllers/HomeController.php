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

    public function search(Request $request): View
{
    // Validasi input
    $request->validate([
        'query' => 'nullable|string|max:255',
        'category' => 'nullable|string|max:255',
    ]);
    $categories = Kategori::all();

    // Ambil input pencarian
    $query = $request->input('query');
    $category = $request->input('category');

    // Query untuk mencari produk berdasarkan nama produk dan/atau kategori
    $products = Produk::where(function ($queryBuilder) use ($query, $category, $categories) {
        // Filter berdasarkan nama produk
        if (!empty($query)) {
            $queryBuilder->where('nama_produk', 'LIKE', '%' . $query . '%');
        }

        // Filter berdasarkan kategori jika kategori telah dipilih
        if (!empty($category)) {
            $queryBuilder->orWhereHas('kategori', function ($q) use ($category, $categories) {
                $q->where('nama_kategori', 'LIKE', '%' . $category . '%');
            });
        }
    })
    ->orderBy('created_at', 'desc')
    ->paginate(5);

    // Mengembalikan view dengan data produk yang ditemukan
    return view('pages.list-view', compact('products', 'categories'));
}

public function cartView() {
    return view('pages.shopping-cart');
}
    

}