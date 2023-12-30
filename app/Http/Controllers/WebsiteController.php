<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\ApplicantsType;
use App\Models\GeneralPublic;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homePage()
    {

        return view('website.pages.home');
    }

    public function RegistrationPage()
    {
        $types = ApplicantsType::all();
        return view('website.pages.registration.registration_template', compact('types'));
    }

    public function registerApplicants(Request $req)
    {
        $applicants = new Applicant();
        $req->validate(
            [
                'nid' => 'required',
                'dob' => 'required',
                'type' => 'required',
            ]
        );

        $existNID = GeneralPublic::where('nid_no', '=', $req->nid)->first();
        $dateExists = GeneralPublic::where('dob', '=', $req->dob)->first();
        $data = GeneralPublic::where('nid_no', '=', $req->nid)->get();

        foreach ($data as $value) {
            $name = $value->name;
            $father_name = $value->father_name;
            $mother_name = $value->mother_name;
            $dob = $value->dob;
            $place = $value->permanent_address;
        }

        $dateOfBirth = $req->dob;
        $now = date('Y-m-d');
        // $now = new DateTime();

        // $diff = $now->diff($dob);
        $diff = date_diff(date_create($dateOfBirth), date_create($now));

        // dd($diff->y);
        // die;

        $arr_Date_of_Birth = explode("-", $req->dob);
        $year = $arr_Date_of_Birth[0];
        $month = $arr_Date_of_Birth[1];
        $day = $arr_Date_of_Birth[2];

        $reg_no = $year . $month . $day . rand(11111111, 99999999);

        if ($diff->y > 18) {
            if ($dateExists) {
                if ($existNID) {
                    $applicants->reg_no = $reg_no;
                    $applicants->nid_no = $req->nid;
                    $applicants->name = $name;
                    $applicants->father_name = $father_name;
                    $applicants->mother_name = $mother_name;
                    $applicants->dob = $dob;
                    $applicants->age = $dob;
                    $applicants->address = $place;
                    if ($applicants->save()) {
                        return redirect()->back()->with('success', 'Registered Successfully');
                    }
                } else {
                    return redirect()->back()->with('failed', 'Invalid Applicants');

                }

            } else {
                return redirect()->back()->with('failed', 'Date not Matched');

            }

        } else {
            return redirect()->back()->with('failed', 'You are not Eligible to Register');

        }

    }

    public function cardPage()
    {
        $types = ApplicantsType::all();
        return view('website.pages.card.card_template', compact('types'));
    }

    public function getCard(Request $req)
    {

        $req->validate(
            [
                'nid' => 'required',
                'dob' => 'required',
            ]
        );

        $existNID = Applicant::where('nid_no', '=', $req->nid)->first();
        $dateExists = Applicant::where('dob', '=', $req->dob)->first();
        $data = Applicant::where('nid_no', '=', $req->nid)->get();

        foreach ($data as $value) {
            $reg = $value->reg_no;
            $nid = $value->nid_no;
            $name = $value->name;
            $father_name = $value->father_name;
            $mother_name = $value->mother_name;
            $dob = $value->dob;
            $issueDate = $value->created_at;

        }

        $dateOfBirth = $dob;
        $now = date('Y-m-d');

        $diff = date_diff(date_create($dateOfBirth), date_create($now));

        $age = $diff->y;

        if ($existNID) {

            return view('website.pages.card.card', compact('nid', 'reg', 'name', 'issueDate', 'father_name', 'mother_name', 'dob','age'));
        } else {
            return redirect()->back()->with('failed', 'You are not Eligible to Register');

        }

    }
    public function certificatePage()
    {
        return view('website.pages.certificate');
    }

    public function verifyCertificatePage()
    {
        return view('website.pages.verify_certificate');
    }
    public function faqPage()
    {
        return view('website.pages.faq');
    }
    public function checkStatusPage()
    {
        return view('website.pages.check_status');
    }
}
