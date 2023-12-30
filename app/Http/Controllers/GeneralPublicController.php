<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\GeneralPublic;
use Illuminate\Http\Request;

class GeneralPublicController extends Controller
{
    public function registerPublicForm()
    {
        return view('admin.pages.public.register');
    }
    public function showVerifiedPublic()
    {
        $data = GeneralPublic::all();

        return view('admin.pages.public.public',compact('data'));
    }

    public function store(Request $request)
    {

        $data = new GeneralPublic();

        $request->validate(
            [
                'name' => 'required',
                'Father_Name' => 'required',
                'Mother_Name' => 'required',
                'Nationality' => 'required',
                'Date_of_Birth' => 'required',
                'Gender' => 'required',
                'Place_of_Birth' => 'required',
                'Permanent_Address' => 'required',
            ]
        );


        $arr_Date_of_Birth = explode("-", $request->Date_of_Birth);
        $year = $arr_Date_of_Birth[0];
        $month = $arr_Date_of_Birth[1];
        $day = $arr_Date_of_Birth[2];

        $arr_name = explode(" ", $request->name);
        $fname = $arr_name [0];

        $birthRegNo = $year. time() . rand(1111111, 9999999);
        $nidNo = $year.$month.$day. rand(11111111, 99999999);
        $passportNo = $fname . rand(111, 666) . rand(777, 999) . rand(1000, 4000).$year.$month.$day;

        // dd($birthRegNo);
        // dd($nidNo);
        // dd($passportNo);
        // dd($request->Date_of_Birth);
        // die;
        $public_exists_with_birthRegNo = GeneralPublic::where('birth_reg_no', '=', $birthRegNo)->first();
        $public_exists_with_nidNo = GeneralPublic::where('nid_no', '=', $nidNo)->first();
        $public_exists_with_passportNo = GeneralPublic::where('passport_no', '=', $passportNo)->first();

        if ($public_exists_with_birthRegNo && $public_exists_with_nidNo && $public_exists_with_passportNo) {
            return redirect()->back()->with('failed', 'Someone Exists With These Credentials');
        } else {
            $data->birth_reg_no = $birthRegNo;
            $data->nid_no = $nidNo;
            $data->passport_no = $passportNo;
            $data->name = $request->name;
            $data->father_name = $request->Father_Name;
            $data->mother_name = $request->Mother_Name;
            $data->nationality = $request->Nationality;
            $data->dob = $request->Date_of_Birth;
            $data->gender = $request->Gender;
            $data->place_of_birth = $request->Place_of_Birth;
            $data->permanent_address = $request->Permanent_Address;
            if ($data->save()) {
                return redirect()->back()->with('success', 'A Public Registered Successfully!');

            } else {
                return redirect()->back()->with('failed', 'Something Went Wrong. Please, try again !');
            }

        }

    }


}
