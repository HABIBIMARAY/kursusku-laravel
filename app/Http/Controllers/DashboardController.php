<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Participant;
use App\Models\Enrollment;

class DashboardController extends Controller
{
    // HALAMAN BERANDA SETELAH LOGIN
    public function beranda()
    {
        return view('beranda');
    }

    // HALAMAN DASHBOARD
    public function index()
    {
        $stats = [
            'courses' => Course::count(),
            'participants' => Participant::count(),
            'enrollments' => Enrollment::count(),
        ];

        return view('dashboard.index', compact('stats'));
    }

    // HALAMAN PROFIL SAYA
    public function profile()
    {
        $user = Auth::user();

        return view('profile.index', compact('user'));
    }

    // UPDATE PROFIL
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:20',
            'position' => 'nullable|string|max:255',
            'institution' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan akun lain.',
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->position = $request->position;
        $user->institution = $request->institution;
        $user->address = $request->address;

        $user->save();

        return redirect()->route('profile')
            ->with('success', 'Profil berhasil diperbarui.');
    }
}
