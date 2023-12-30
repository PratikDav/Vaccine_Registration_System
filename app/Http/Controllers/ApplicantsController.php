<?php

namespace App\Http\Controllers;

use App\Models\Applicant;

use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    
    public function allApplicants()
    {
        $zeroDosedApplicants = Applicant::where('dose', '=', 0)->get();
        $firstDosedApplicants = Applicant::where('dose', '=', 1)->get();
        $secondDosedApplicants = Applicant::where('dose', '=', 2)->get();
        $thirdDosedApplicants = Applicant::where('dose', '=', 3)->get();
        $vaccinatedApplicants = Applicant::where('dose', '=', 4)->get();
        $data = compact('zeroDosedApplicants','firstDosedApplicants','secondDosedApplicants','thirdDosedApplicants','vaccinatedApplicants');
        return view('admin.pages.applicants.all_applicants')->with($data);

    }
    public function zeroDosedApplicants()
    {
        $zeroDosedApplicants = Applicant::where('dose', '=', 0)->get();
        $data = compact('zeroDosedApplicants');
        return view('admin.pages.applicants.all_applicants')->with($data);

    }
    public function firstDosedApplicants()
    {
        $firstDosedApplicants = Applicant::where('dose', '=', 1)->get();
        $data = compact('firstDosedApplicants');
        return view('admin.pages.applicants.all_applicants')->with($data);

    }
    public function secondDosedApplicants()
    {
        $secondDosedApplicants = Applicant::where('dose', '=', 2)->get();
        $data = compact('secondDosedApplicants');
        return view('admin.pages.applicants.all_applicants')->with($data);

    }
    public function thirdDosedApplicants()
    {
        $thirdDosedApplicants = Applicant::where('dose', '=', 3)->get();
        $data = compact('thirdDosedApplicants');
        return view('admin.pages.applicants.all_applicants')->with($data);

    }
    public function vaccinatedApplicants()
    {
        $vaccinatedApplicants = Applicant::where('dose', '=', 4)->get();
        $data = compact('vaccinatedApplicants');
        return view('admin.pages.applicants.all_applicants')->with($data);

    }
}
