<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Private/Profile/Index');
    }
    public function edit()
    {
        return Inertia::render('V1/Private/Profile/Edit', [
            'pasien' => Pasien::findOrFail(auth()->user()->pasien->id)
        ]);
    }
    public function update(Request $request)
    {
        $pasien = Pasien::findOrFail(auth()->user()->pasien->id);
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|max:255|unique:pasiens,ktp,' . $pasien->id,
            'bpjs' => 'required|max:255|unique:pasiens,bpjs,' . $pasien->id,
            'no_hp' => 'required|max:255|unique:pasiens,no_hp,' . $pasien->id,
            'jenis_kelamin' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);
        $pasien->name = $request->name;
        $pasien->ktp = $request->nik;
        $pasien->bpjs = $request->bpjs;
        $pasien->no_hp = $request->no_hp;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->save();
        return redirect()->route('profile.index');
    }
    public function ubah_password()
    {
        return Inertia::render('V1/Private/Profile/UbahPassword');
    }
    public function update_password(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $request->validate([
            'password_lama' => 'required|string|max:255',
            'password' => 'required|string|max:255|confirmed',
        ]);
        #Match The Old Password
        if (!Hash::check($request->password_lama, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('profile.index');
    }
}
