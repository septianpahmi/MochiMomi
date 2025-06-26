<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $pageTitle = 'User';
        $data = User::all();
        return view('dashboard.user.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'User Berhasil Dihapus');
    }

    public function create(Request $request)
    {
        $cek = User::where('email', $request->email)->exists();
        if ($cek) {
            return redirect()->back()->with('error', 'Email yang anda masukan sudah terdaftar');
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        $user->assignRole('admin');
        return redirect()->back()->with('success', 'User Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);
        $user->syncRoles('admin');
        return redirect()->back()->with('success', 'Pengguna berhasil diubah.');
    }
}
