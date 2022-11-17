<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Private/Profile/Index');
    }
    public function edit()
    {
        return Inertia::render('V1/Private/Profile/AdminEdit', [
            'admin' => Admin::findOrFail(auth()->user()->admin->id)
        ]);
    }
    public function update(Request $request)
    {
        $admin = Admin::findOrFail(auth()->user()->admin->id);
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $admin->name = $request->name;

        $admin->save();
        return redirect()->route('admin.profile.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Data '.$admin->name.' diubah'
        ]]);
    }
}
