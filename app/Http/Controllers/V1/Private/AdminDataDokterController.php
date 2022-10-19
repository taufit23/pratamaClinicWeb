<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DataDokterCreateRequest;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AdminDataDokterController extends Controller
{
    public function index(Request $request)
    {
        
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/DataDokter/Index', [
                'dokters' => Dokter::with('user')->where('name', 'LIKE', '%' . $request->cari . '%')->get(),
            ]);
        }else{
            return Inertia::render('V1/Private/DataDokter/Index', [
                'dokters' => Dokter::with('user')->get(),
            ]);
        }
    }
    public function craete()
    {
        return Inertia::render('V1/Private/DataDokter/Create');
    }
    public function store(DataDokterCreateRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'role' => 'dokter',
            'password' => Hash::make('KlinikPratama01'),
        ]);
        $dokter = Dokter::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'nip' => $request->nip,
            'bidang' => $request->bidang,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('admin.dokter.index');
    }
    public function edit(User $user)
    {
        return Inertia::render('V1/Private/DataDokter/Edit', [
            'user' => $user,
            'dokter' => Dokter::where('user_id', $user->id)->first(),
        ]);
    }
    public function update(Request $request, User $user)
    {
        $dokter = Dokter::where('user_id', $user->id)->first();
        $request->validate([
            'username' => 'required|string|unique:users,username,'.$user->id,
            'name' => 'required|min:3|string',
            'nip' => 'required|min_digits:18|integer|unique:dokters,nip,'.$dokter->id,
            'bidang' => 'required|string',
            'alamat' => 'required|string',
        ]);
        $user->username = $request->username;
        $user->save();
        $dokter->name = $request->name;
        $dokter->nip = $request->nip;
        $dokter->bidang = $request->bidang;
        $dokter->alamat = $request->alamat;
        $dokter->save();
        return redirect()->route('admin.dokter.index');
    }
    public function lupa_password (User $user)
    {
        return Inertia::render('V1/Private/DataDokter/LupaPassword', [
            'user' => $user,
        ]);
    }
    public function post_new_password (User $user, Request $request)
    {
        $request->validate([
            'password' => 'required|string|max:255|confirmed',
        ]);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.dokter.index');
    }
}
