<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

use function Termwind\render;

class AdminDataController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Admin/Admins/Index', [
                'admins' => User::with('admin')->whereRelation('admin', 'name', 'LIKE', '%' . $request->cari . '%')->get()
            ])->with([
                'toast' => [
                    'type' => 'success',
                    'message' => 'Query =  ' . $request->cari
            ]]);
        } else {
            return Inertia::render('V1/Private/Admin/Admins/Index', [
                'admins' => User::with('admin')->where('role', 'admin')->get()
            ]);
        }
    }
    public function create()
    {
        return Inertia::render('V1/Private/Admin/Admins/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'name' => 'required|string|max:255',
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->role = 'admin';
        $user->password = Hash::make('admin');
        $user->save();
        $admin = new Admin();
        $admin->user_id = $user->id;
        $admin->name = $request->name;
        $admin->save();
        return redirect()->route('admin.admins.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Admin' . $admin->name . 'ditambahkan'
        ]]);
    }
    public function lupaPassword(User $user)
    {
        return Inertia::render('V1/Private/Admin/Admins/LupaPassword', [
            'user' => $user
        ]);
    }
    public function storeLupaPassword(User $user, Request $request)
    {
        $request->validate([
            'password' => 'required|string|max:255|confirmed',
        ]);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.admins.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Password berhasil diubah'
        ]]);
    }
    public function destroy(User $user)
    {
        $admin = $user['admin'];
        $admin->delete();
        $user->delete();
        return redirect()->route('admin.admins.index')->with([
            'toast' => [
                'type' => 'error',
                'message' => 'Data '.$admin->name.' dihapus'
        ]]);
    }
}
