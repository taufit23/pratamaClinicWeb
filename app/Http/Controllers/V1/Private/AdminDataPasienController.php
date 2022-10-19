<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Illuminate\Validation\Rules;

class AdminDataPasienController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Pasien/Index', [
                'pasiens' => Pasien::with('user')
                    ->where('name', 'LIKE', '%' . $request->cari . '%')
                    ->get(),
            ]);
        } else {
            return Inertia::render('V1/Private/Pasien/Index', [
                'pasiens' => Pasien::with('user')->get(),
            ]);
        }
    }
    public function show(User $user)
    {
        return Inertia::render('V1/Private/Pasien/Show', [
            'user' => $user,
            'pasien' => Pasien::where('user_id', $user->id)->first(),
        ]);
    }
    public function create()
    {
        return Inertia::render('V1/Private/Pasien/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'nik' => 'required|max:255|unique:pasiens,ktp',
            'bpjs' => 'required|max:255|unique:pasiens,bpjs',
            'no_hp' => 'required|max:255|unique:pasiens,no_hp',
            'jenis_kelamin' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        $user = User::create([
            'username' => $request->username,
            'role' => 'pasien',
            'password' => 'Klinikpratama',
        ]);
        $pasien = Pasien::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'ktp' => $request->nik,
            'bpjs' => $request->bpjs,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('admin.pasien.index');
    }
    public function lupa_password(User $user, Request $request)
    {
        return Inertia::render('V1/Private/Pasien/LupaPassword', [
            'user' => $user,
        ]);
    }
    public function new_password(User $user, Request $request)
    {
        $request->validate([
            'password' => 'required|string|max:255|confirmed',
        ]);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.pasien.index');
    }
}
