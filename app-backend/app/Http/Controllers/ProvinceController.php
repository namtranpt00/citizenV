<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'province_id' => 'required',
            'name' => 'required',
        ]);
        return Province::create([
            'province_id' => $request->province_id,
            "name" => $request->name,
        ]);
    }

    public function update(Request $request, $id){
        $province = Province::where('province_id', $id);
        $province->update([
            'province_id' => $request->province_id,
            'name' => $request->name,
        ]);
//        return $province;

        return $province->get();
    }

    public function index(Request $request){
        return Province::all();
    }

    public function destroy($id){
        $province = Province::where('province_id', $id)->delete();
        return Province::all();
    }
}
