<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\UserProfile;

class UserProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'gender' => 'nullable|in:Laki - Laki,Perempuan',
            'province' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:10',
            'profile_image' => 'nullable|image|max:2048'
        ]);

        // Simpan data user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        // $user->save();

        // Simpan data profil user (jika ada tabel UserProfile)
        $profile = $user->profile ?? new UserProfile(['user_id' => $user->id]);

        if ($request->hasFile('profile_image')) {
            if ($profile->profile_image) {
                Storage::delete('public/' . $profile->profile_image);
            }
            $profile->profile_image = $request->file('profile_image')->store('profiles', 'public');
        }

        $profile->province = $request->province;
        $profile->city = $request->city;
        $profile->district = $request->district;
        $profile->postal_code = $request->postal_code;
        $profile->save();

        return redirect()->route('user.profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }
}
