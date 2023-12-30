<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Termwind\Components\Dd;

class AdminController extends Controller
{
    /*****************************************
     ******* Admin Page Section Start *******
     ******************************************/

    public function showDashboard()
    {
        return view('admin.pages.dashboard');
    }
    public function showApplicants()
    {
        return view('admin.pages.applicants.all_applicants');
    }
    public function showPendingUsers()
    {
        return view('admin.pages.pending_users');
    }
    public function addAdmin()
    {
        return view('admin.pages.admins.add_admin_form');
    }
    public function addApplicant()
    {
        return view('admin.pages.applicants.add_applicant_form');
    }

    /*****************************************
    ******* Admin Page Section End *******
    ******************************************/

}
