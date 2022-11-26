<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDataObatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Admin/Obat/Index', [
                'obats' => Obat::where('nama_obat', 'LIKE', '%' . $request->cari . '%')
                    ->get(),
            ])->with([
                'toast' => [
                    'type' => 'success',
                    'message' => 'Query ' . $request->cari
            ]]);
        } else {
            return Inertia::render('V1/Private/Admin/Obat/Index', [
                'obats' => Obat::all(),
            ]);
        }
        return Inertia::render('V1/Private/Admin/Obat/Index', ['obats' => Obat::all()]);
    }
    public function create()
    {
        return Inertia::render('V1/Private/Admin/Obat/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|min:3|unique:obats,nama_obat',
            'harga_obat' => 'required',
            'stok_obat' => 'required'
        ]);
        $obat = new Obat();
        $obat->nama_obat = $request->nama_obat;
        $obat->harga_obat = $request->harga_obat;
        $obat->stok_obat = $request->stok_obat;
        $obat->save();

        return redirect()->route('admin.obat.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Obat ' . $request->nama_obat . ' ditambahkan'
        ]]);
    }
    public function edit(Obat $obat)
    {
        return Inertia::render(
            'V1/Private/Admin/Obat/Edit',
            [
                'obat' => $obat
            ]
        );
    }
    public function update(Obat $obat, Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|min:3',
            'harga_obat' => 'required',
            'stok_obat' => 'required'
        ]);
        $obat->nama_obat = $request->nama_obat;
        $obat->harga_obat = $request->harga_obat;
        $obat->stok_obat = $request->stok_obat;
        $obat->save();
        return redirect()->route('admin.obat.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Obat ' . $request->nama_obat . ' di update'
        ]]);
    }
}
