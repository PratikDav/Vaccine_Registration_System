<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineManageController extends Controller
{
    public function allVaccine()
    {
        $allVaccine = Vaccine::all();
        $title = 'main-page';
        $data = compact('allVaccine', 'title');
        return view('admin.pages.vaccine.all_vaccine')->with($data);
    }

    public function storeVaccine(Request $request)
    {
        $vaccine = new Vaccine();
        $vaccine->vaccine_name = $request->vaccine_name;
        $vaccine->batch_no = $request->batch_no;
        $vaccine->manufacturing_company = $request->manufacturing_company;
        if ($vaccine->save()) {
            return redirect()->back()->with('success', 'Vaccine Added Successfully');
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
    public function deleteVaccine($id)
    {
        $vaccine = Vaccine::where('vaccine_id ', '=', $id);
        if (!is_null($vaccine)) {
            $vaccine->delete();
            return redirect()->back()->with('deleted', 'Vaccine Deleted Successfully');
        }
        return redirect()->route('show.allVaccine');

    }
}
