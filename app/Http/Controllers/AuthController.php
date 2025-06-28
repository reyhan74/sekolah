<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('username', $validated['username'])->first();

        if (!$user) {
            return back()->withErrors(['username' => 'Username tidak ditemukan']);
        }

        if (!Hash::check($validated['password'], $user->password)
            && $validated['password'] !== $user->password) {
            return back()->withErrors(['password' => 'Password salah']);
        }

        // Set session
        Session::put('user_id', $user->id);
        Session::put('username', $user->username);
        Session::put('level', $user->level);

        // Redirect sesuai level
        return match ($user->level) {
            'guru'         => redirect('/admin/dasbord_guru'),
            'murid'        => redirect('/admin/absensi'),
            'wali_murid'   => redirect('/admin/dasbord_wali'),
            'calon_siswa'  => redirect('/registration-form/regis'),
            'trial'        => redirect('/index2'),
            default        => abort(404, 'Level akses tidak dikenali'),
        };
    }
}
