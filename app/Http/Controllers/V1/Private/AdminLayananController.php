<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminLayananController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Layanan/Index', [
                'layanans' => Layanan::where('nama_layanan', 'LIKE', '%' . $request->cari . '%')->orderBy('created_at')->get()
            ])->with([
                'toast' => [
                    'type' => 'success',
                    'message' => 'Query =  '.$request->cari.' dihapus'
            ]]);
        } else {
            return Inertia::render('V1/Private/Layanan/Index', [
                'layanans' => Layanan::orderBy('created_at')->get()
            ]);
        }
    }
    public function create()
    {
        return Inertia::render('V1/Private/Layanan/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|min:4|unique:layanans,nama_layanan',
            'harga_layanan' => 'required|integer|min:3'
        ]);
        $layanan = Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'harga_layanan' => $request->harga_layanan,
        ]);
        return redirect()->back()->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Data Layanan ditambahkan'
        ]]);
    }
    public function edit(Layanan $layanan)
    {
        return Inertia::render('V1/Private/Layanan/Edit', [
            'layanan' => $layanan
        ]);
    }
    public function update(Layanan $layanan, Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|min:4|unique:layanans,nama_layanan,'.$layanan->id,
            'harga_layanan' => 'required|integer|min:3'
        ]);
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->harga_layanan = $request->harga_layanan;
        $layanan->save();
        return redirect()->route('admin.layanan.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Data layanan berhasil diubah'
        ]]);
    }
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('admin.layanan.index')->with([
            'toast' => [
                'type' => 'error',
                'message' => 'Data layanan berhasil dihapus'
        ]]);
    }
}
