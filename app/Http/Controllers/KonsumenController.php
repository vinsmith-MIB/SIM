<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\Kota;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.konsumen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kotas = Kota::all();
        $action = isset(auth()->user()->konsumen)?'konsumen.update':'konsumen.store';
        $konsumen = auth()->user()->konsumen;
        return view('pages.konsumen.create', compact('kotas', 'action', 'konsumen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:konsumens',
            'telpon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'id_kota' => 'required|exists:kotas,id',
            'kota_asal' => 'required|string|max:255',
            'kodepos' => 'required|string|max:10',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $konsumen = new Konsumen($request->all());

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('public/products/');
            $konsumen->foto = basename($path);
        }

        $konsumen->save();

        return redirect()->back()->with('success', 'Profile created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
