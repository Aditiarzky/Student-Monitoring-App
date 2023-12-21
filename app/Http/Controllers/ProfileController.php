<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('ortu.dashortu', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'password-lama' => 'required|string',
            'password-baru' => 'required|string|min:8|different:password-lama',
        ]);

        // Check if the provided old password matches the current password
        if (!Hash::check($request->input('password-lama'), Auth::user()->password)) {
            return redirect()->route('ortu.dashortu')->with('error', 'Kata Sandi Lama Salah');
        }

        // Update the password
        Auth::user()->update([
            'password' => bcrypt($request->input('password-baru')),
        ]);

        return redirect()->route('ortu.dashortu')->with('success', 'Kata Sandi Berhasil Diubah');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

