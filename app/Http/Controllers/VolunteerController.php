<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use App\Models\Union;
use App\Models\VaccinationVolunteer;
use App\Models\VaccineCenter;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function allVolunteer()
    {

        $allVolunteer = VaccinationVolunteer::all();
        $data = compact('allVolunteer');
        return view('admin.pages.volunteer.all_volunteer')->with($data);
    }
    public function volunteerForm()
    {
        $divisions = Division::all();
        return view('admin.pages.volunteer.add_volunteer', compact('divisions'));
    }
    public function storeVolunteer(Request $request)
    {

        $request->validate(
            [
                'volunteer_name' => 'required',
                'volunteer_mobile_no' => 'required|numeric',
                'divisions' => 'required',
                'districts' => 'required',
                'sub_district' => 'required',
                'union' => 'required',
                'center' => 'required',
            ]
        );



        $getDivisionName = Division::where('id', '=', $request->divisions)->get();
        foreach ($getDivisionName as $division) {
            $divisionName = $division->name;
        }

        $getDistrictName = District::where('id', '=', $request->districts)->get();
        foreach ($getDistrictName as $district) {
            $districtName = $district->name;
        }

        $getSubDistrictName = SubDistrict::where('id', '=', $request->sub_district)->get();
        foreach ($getSubDistrictName as $subDistrict) {
            $subDistrictName = $subDistrict->name;
        }

        $getUnionName = Union::where('id', '=', $request->union)->get();
        foreach ($getUnionName as $union) {
            $unionName = $union->name;
        }




        $center_name = VaccineCenter::where('vaccination_center_id', '=', $request->center)
            ->select('vaccination_center_name')->get();
        foreach ($center_name as $value) {
            $getCenterName = $value->vaccination_center_name;
        }




        $assignCenter = VaccinationVolunteer::where('center_id', '=', $request->center)->first();



        if ($assignCenter) {
            return redirect()->back()->with('failed', $getCenterName . ' ' . 'Already Assigned to a Volunteer. Please, Choose Another Center.');
        } else {
            $volunteerId = time();
            $volunteer = new VaccinationVolunteer();
            $volunteer->volunteer_id = $volunteerId;
            $volunteer->volunteer_name = ucwords($request->volunteer_name);
            $volunteer->volunteer_mobile_no = $request->volunteer_mobile_no;
            $volunteer->center_id = $request->center;
            $volunteer->center_name = $getCenterName;
            $volunteer->division = $divisionName;
            $volunteer->district = $districtName;
            $volunteer->sub_district = $subDistrictName;
            $volunteer->union = $unionName;
            if ($volunteer->save()) {
                return redirect()->back()->with('success', 'Volunteer Added Successfully');
            }
        }



    }

    // public function editDose($id)
    // {
    //     $doseByID = Dose::find($id);
    //     if (!is_null($doseByID)) {
    //         return redirect()->route('show.allDose');
    //     }else{
    //         $url = route('updateDose',['id' => $id]);
    //         $dataGet = compact('doseByID', 'url');
    //         return view('admin.pages.dose.all_dose')->with($dataGet)->with('update');

    //     }

    // }
    // public function updateDose(Request $request, $id)
    // {
    //     $dose = Dose::where('id', '=', $id);
    //     $dose->dose_no = $request->name;
    //     if ($dose->save()) {
    //         return redirect()->back()->with('update', 'Dose Updated Successfully');
    //     }

    // }
    public function deleteVolunteer($id)
    {
        $volunteer = VaccinationVolunteer::where('volunteer_id', '=', $id);
        if (!is_null($volunteer)) {
            $volunteer->delete();
            return redirect()->back()->with('deleted', 'Volunteer Deleted Successfully');
        }
        return redirect()->route('show.allVaccine');

    }
}
