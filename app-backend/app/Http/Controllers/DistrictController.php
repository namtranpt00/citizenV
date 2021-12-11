<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string|unique:provinces',
            'name' => 'required|string',
            'province_id' => 'required|string',
        ]);
        District::create([
            'id' => $request->id,
            "name" => $request->name,
            'province_id' => $request->province_id,
        ]);
        $district = District::findOrFail($request->id);
        $response = [
            'success' => true,
            'district' => $district
        ];
        return response($response, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|string',
            'name' => 'required|string',
        ]);
        $district = District::findOrFail($id);
        if ($district) {
            $district->update([
                'id' => $request->id,
                'name' => $request->name,
            ]);
            $response = [
                'success' => true,
                'district' => $district
            ];
            return response($response, 201);
        } else
            return ['message' => 'cannot update district'];
    }

    public function list(Request $request)
    {
        $districts = District::where('id', 'like', $request->permission . '%')->orderBy('id');
        if (isset($request->id)) {
            $districts = $districts->where('id', $request->id);
        }
        if (isset($request->name)) {
            $districts = $districts->where('name', 'LIKE', '%' . $request->name . '%');
        }

        $response = [
            'success' => true,
            'districts' => $districts->get()
        ];
        return response($response, 201);
    }

    public function destroy($id)
    {
        District::where('id', $id)->delete();
        return [
            'message' => 'deleted district'
        ];
    }
}
