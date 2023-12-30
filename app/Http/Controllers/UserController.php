<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function pendingAdmins()
    {
        $pendingAdmins = User::where('status', '=', 0)
            ->where('role', '=', 'Admin' | 'role', '=', 'Super Admin')
            ->get();
        $data = compact('pendingAdmins');
        return view('admin.pages.admins.pending_admin')->with($data);

    }
    public function activeAdmins()
    {
        $admins = User::where('status', '=', 1)
            ->where('role', '=', 'Admin' | 'role', '=', 'Super Admin')
            ->get();
        $data = compact('admins');
        return view('admin.pages.admins.all_admins')->with($data);
    }

     public function approveUsers($id){
        User::where('id', '=', $id)
            ->update(['status' => true]);
        return redirect()->back();

    }
}
