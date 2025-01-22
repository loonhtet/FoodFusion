<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(Request $request) {
        $query = User::where('role', 'user');
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }
        
        $users = $query->get();
        return view('layouts.admin', [
            'section' => 'manageusers',
            'users' => $users
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        // Prevent deleting self
        if (Auth::id() === $user->id) {
            return redirect()->back()->with('error', 'You cannot delete your own account');
        }

        $user->delete();
        return redirect()->route('admin.dashboard.manageadmin')->with('success', 'Admin deleted successfully');
    }

    public function create()
    {
        return view('layouts.admin', ['section' => 'newadmin']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.dashboard.manageuser')->with('success', 'User created successfully');
    }

}
