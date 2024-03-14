<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\LaborotaryServices;


class LaborotaryServicesController extends Controller
{
    public function index(Request $request)
    {
        $LaborotaryServices = LaborotaryServices::where('TypeOfService', $request->TypeOfService)->get();

       // Check if any services are found
        if ($LaborotaryServices->isEmpty()) {
            return response()->json(['error' => 'Laborotary services not found'], 404);
        }
        
        return response()->json($LaborotaryServices);
    }
}
