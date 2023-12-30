<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use App\Models\Union;
use App\Models\VaccineCenter;
use Illuminate\Http\Request;

class VaccineCenterController extends Controller
{
    //VaccineCenter
    public function allVaccineCenter()
    {
        $allCenters = VaccineCenter::all();
        $data = compact('allCenters');
        return view('admin.pages.center.center')->with($data);
    }
    public function showVaccineCenterForm()
    {
        $divisions = Division::all();
        return view('admin.pages.center.add_center', compact('divisions'));
    }

    public function storeVaccineCenter(Request $request)
    {

        // dd($divisionName);
        // die;

        $center = new VaccineCenter();

        $request->validate(
            [
                'name' => 'required',
                'established_date' => 'required',
                'divisions' => 'required',
                'districts' => 'required',
                'sub_district' => 'required',
                'union' => 'required',
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

        $arr_Date_of_Birth = explode("-", $request->established_date);
        $year = $arr_Date_of_Birth[0];
        $month = $arr_Date_of_Birth[1];
        $day = $arr_Date_of_Birth[2];

        $id = $year . $month . $day . rand(111111, 999999);
        $unionNameExists = VaccineCenter::where('union','=',$unionName)->first();
        
        if ($unionNameExists) {
            return redirect()->back()->with('failed', $unionName . ' ' . 'Union Already Have a Center. Please, Choose Another Union!');

        } else {

            $center->vaccination_center_id = $id;
            $center->vaccination_center_name = ucwords($request->name);
            $center->established_date = $request->established_date;
            $center->divisions = $divisionName;
            $center->district = $districtName;
            $center->sub_district = $subDistrictName;
            $center->union = $unionName;
            if ($center->save()) {
                return redirect()->back()->with('success', 'Center Assigned Successfully');
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
    public function deleteVaccineCenter($id)
    {
        echo $id;
        // $center = VaccineCenter::where('id ', '=', $id);
        // if (!is_null($center)) {
        //     $center->delete();
        //     return redirect()->back()->with('deleted', 'Vaccine Deleted Successfully');
        // }
        // return redirect()->route('show.allVaccine');

    }
}
