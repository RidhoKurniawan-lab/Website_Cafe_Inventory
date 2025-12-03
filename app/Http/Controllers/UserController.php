<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auths.login');
    }

    public function authenticate(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($Validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $Validator->errors(),
            ], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'errors' => [
                    'email' => ['Email not found'],
                ],
            ], 422);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'errors' => [
                    'password' => ['Incorrect password'],
                ],
            ], 422);
        }
        
        Auth::login($user);

        return response()->json([
            'redirect' => route('dashboard'),
        ]);
    }

    public function logout(Request $request)
    {
        // 1. Hapus autentikasi user → user keluar
        Auth::logout();

        // 2. Invalidate session → hapus session lama biar tidak bisa dipakai lagi
        $request->session()->invalidate();

        // 3. Regenerate token CSRF → keamanan tambahan
        $request->session()->regenerateToken();

        // 4. Redirect ke halaman login atau home
        return response()->json([
            'redirect' => route('login'),
        ]);
    }
}
