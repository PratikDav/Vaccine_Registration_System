<?php

namespace App\Http\Controllers;

use App\Models\Dose;
use Illuminate\Http\Request;

class DoseManageController extends Controller
{
    public function allDose()
    {
        $allDose = Dose::all();
        $title = 'main-page';
        $data = compact('allDose', 'title');
        return view('admin.pages.dose.all_dose')->with($data);
    }

    public function storeDose(Request $request)
    {
        $dose = new Dose();
        $dose->dose_no = $request->name;
        if ($dose->save()) {
            return redirect()->back()->with('success', 'Dose Added Successfully');
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
    public function deleteDose($id)
    {
        $dose = Dose::where('id', '=', $id);
        if (!is_null($dose)) {
            $dose->delete();
            return redirect()->back()->with('deleted', 'Dose Deleted Successfully');
        }
        return redirect()->route('show.allDose');

    }
}
