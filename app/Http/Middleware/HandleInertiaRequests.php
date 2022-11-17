<?php

namespace App\Http\Middleware;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;
use Illuminate\Support\Facades\Cache as FacadesCache;
use Illuminate\Support\Facades\Session;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed[]
     */
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'auth' => function () use ($request) {
                return [
                    'user' => $request->user()
                        ? [
                            'role' => $request->user()->role,
                            'username' => $request->user()->username,
                            'created_at' => $request->user()->created_at,
                            'updated_at' => $request->user()->updated_at,
                            'pasien' => $request->user()->role == 'pasien' ?
                            [
                                'id' => $request->user()->pasien->id,
                                'name' => $request->user()->pasien->name,
                                'ktp' => $request->user()->pasien->ktp,
                                'bpjs' => $request->user()->pasien->bpjs,
                                'no_hp' => $request->user()->pasien->no_hp,
                                'jenis_kelamin' => $request->user()->pasien->jenis_kelamin,
                                'tanggal_lahir' => $request->user()->pasien->tanggal_lahir,
                                'alamat' => $request->user()->pasien->alamat,
                                'created_at' => $request->user()->pasien->created_at,
                                'updated_at' => $request->user()->pasien->updated_at,
                            ] : null,
                            'admin' =>$request->user()->role == 'admin' ?
                            [
                                'id' => $request->user()->admin->id,
                                'name' => $request->user()->admin->name,
                            ] : null,
                            'dokter' => $request->user()->role == 'dokter' ?
                            [
                                'id' => $request->user()->dokter->id,
                                'name' => $request->user()->dokter->name,
                                'nip' => $request->user()->dokter->nip,
                                'alamat' => $request->user()->dokter->alamat,
                                'bidang' => $request->user()->dokter->bidang,
                            ] : null,
                            'users_online_sean' => UserActivity::class
                        ]
                        : null,
                ];
            },
            'toast' => function () {
                return Session::get('toast');
            },
        ]);
    }
}
