<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator; // Add this line
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'consult_id' => 'required|exists:virtual_consultation,Id',
        ]);

        if ($validator->fails()) {
            $doctors = Doctor::all();
             return response()->json($doctors);
            //return response()->json(['message' => 'Invalid or missing consult_id', 'success' => false], 422);
        }

        $doctors = Doctor::where('id', $request->consult_id)->get();

        if ($doctors->isNotEmpty()) {
            return response()->json($doctors);
        } else {
            return response()->json(['message' => 'No Doctors', 'success' => false], 200);
        }
    }

}
