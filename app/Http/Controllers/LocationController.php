<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use App\Models\Union;
use App\Models\VaccinationVolunteer;
use App\Models\VaccineCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{

    public function showLocationDetails()
    {
        $data = Division::join('districts', 'divisions.id', '=', 'districts.division_id')
            ->join('sub_districts', 'districts.id', '=', 'sub_districts.district_id')
            ->join('unions', 'sub_districts.id', '=', 'unions.sub_district_id')
            ->select('districts.name as districts_name', 'divisions.name as division_name', 'divisions.id as division_id', 'sub_districts.name as sub_district_name', 'unions.name as unions_name')
            ->get();

        return view('admin.pages.location_manage.location_details', compact('data'));
    }

    public function showDivisionManage()
    {
        $divisions = Division::all();
        return view('admin.pages.location_manage.manage_division', compact('divisions'));

    }

    public function showDistrictManage()
    {
        $data = Division::join('districts', 'divisions.id', '=', 'districts.division_id')
            ->select('districts.name as districts_name', 'districts.id as districts_id', 'divisions.name as division_name', 'divisions.id as division_id')
            ->get();
        $divisions = Division::all();

        return view('admin.pages.location_manage.manage_district', compact('data', 'divisions'));
    }

    public function storeNewDistrict(Request $request)
    {
        $district = new District();

        $request->validate(
            [
                'divisions' => 'required',
                'district_name' => 'required',
            ]
        );

        $existsName = District::where('name', '=', $request->district_name)->first();
        if ($existsName) {
            return redirect()->back()->with('failed', $request->district_name . ' ' . 'Already Exists!');

        } else {
            $district->name = ucwords($request->district_name);
            $district->division_id = $request->divisions;
            if ($district->save()) {
                return redirect()->back()->with('success', $request->district_name . ' ' . 'Inserted Successfully!');
            }
        }
    }

    public function showSubDistrictManage()
    {
        $data = District::join('sub_districts', 'districts.id', '=', 'sub_districts.district_id')
            ->select('districts.name as districts_name', 'districts.id as districts_id', 'sub_districts.name as sub_districts_name', 'sub_districts.id as sub_districts_id')
            ->get();
        $districts = District::all();

        return view('admin.pages.location_manage.manage_sub_district', compact('data', 'districts'));
    }

    public function storeNewSubDistrict(Request $request)
    {
        $sub_district_name = new SubDistrict();

        $request->validate(
            [
                'district' => 'required',
                'sub_district_name' => 'required',
            ]
        );

        $existsName = SubDistrict::where('name', '=', $request->sub_district_name)
            ->where('district_id', '=', $request->district)
            ->first();
        if ($existsName) {
            return redirect()->back()->with('failed', $request->sub_district_name . ' ' . 'Already Exists in this District!');

        } else {
            $sub_district_name->name = ucwords($request->sub_district_name);
            $sub_district_name->district_id = $request->district;
            if ($sub_district_name->save()) {
                return redirect()->back()->with('success', $request->sub_district_name . ' ' . 'Inserted Successfully!');
            }
        }

        return redirect()->back();

    }

    public function showUnionManage()
    {
        $data = SubDistrict::join('unions', 'sub_districts.id', '=', 'unions.sub_district_id')
            ->select('sub_districts.name as sub_districts_name', 'sub_districts.id as sub_districts_id', 'unions.name as union_name', 'unions.id as union_id')
            ->get();
        $sub_districts = SubDistrict::all();

        return view('admin.pages.location_manage.manage_union', compact('data', 'sub_districts'));

    }

    public function storeNewUnion(Request $request)
    {
        $union = new Union();

        $request->validate(
            [
                'sub_districts' => 'required',
                'union_name' => 'required',
            ]
        );

        $existsName = Union::where('name', '=', $request->union_name)
            ->where('sub_district_id', '=', $request->sub_districts)
            ->first();
        if ($existsName) {
            return redirect()->back()->with('failed', $request->union_name . ' ' . 'Already Exists in this Sub District!');

        } else {
            $union->name = ucwords($request->union_name);
            $union->sub_district_id = $request->sub_districts;
            if ($union->save()) {
                return redirect()->back()->with('success', $request->union_name . ' ' . 'Inserted Successfully!');
            }

        }

    }

    public function getDivision()
    {
        $division = Division::all();

        return response()->json([
            'division' => $division,

        ]);
    }
    public function getDistricts($divisionId)
    {
        $districts = DB::table('districts')->where('division_id', '=', $divisionId)->get();

        return response()->json([
            'districts' => $districts,

        ]);
    }

    public function getSubDistricts($districtId)
    {
        $subDistricts = DB::table('sub_districts')->where('district_id', '=', $districtId)->get();

        return response()->json([
            'subDistricts' => $subDistricts,

        ]);
    }
    public function getUnion($sub_district_id)
    {
        $union = DB::table('unions')->where('sub_district_id', '=', $sub_district_id)->get();

        return response()->json([
            'union' => $union,

        ]);
    }
    public function getCenter($sub_district_id)
    {
        $sub = SubDistrict::where('id', '=', $sub_district_id)->get();

        foreach ($sub as $value) {
            $get_sub_name = $value->name;
        }

        $center = VaccineCenter::where('sub_district', '=', $get_sub_name)
            ->select('vaccination_center_name', 'vaccination_center_id')
            ->get();

        return response()->json([
            'center' => $center,

        ]);
    }

}
