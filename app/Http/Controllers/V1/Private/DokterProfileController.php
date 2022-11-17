<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DokterProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Private/Profile/Index');
    }
    public function edit()
    {
        return Inertia::render('V1/Private/Profile/DokterEdit', [
            'user' => auth()->user(),
            'dokter' => Dokter::findOrFail(auth()->user()->dokter->id)
        ]);
    }
    public function update(Request $request)
    {
        $dokter = Dokter::findOrFail(auth()->user()->dokter->id);
        $user = User::findOrFail(auth()->user()->id);
        $request->validate([
            'username' => 'required|string|unique:users,username,' . auth()->user()->id,
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);
        $user->username = $request->username;
        $user->save();
        $dokter->name = $request->name;
        $dokter->nip = $request->nip;
        $dokter->bidang = $request->bidang;
        $dokter->alamat = $request->alamat;
        $dokter->save();
        return redirect()->route('dokter.profile.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Data ' . $dokter->name . ' berhasil diubah'
        ]]);
    }
}
