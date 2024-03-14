<?php

namespace App\Http\Controllers;
use App\Models\ZwaaraService;
use Illuminate\Http\Request;

class ZwaaraServiceController extends Controller
{
    public function index()
    {
        // Eager load the associated service address
        $zwaaraServices = ZwaaraService::with('serviceAddress')->get();

        // Check if any services are found
        if ($zwaaraServices->isEmpty()) {
            return response()->json(['error' => 'Zwaara services not found'], 404);
        }

        // Return the services with their associated addresses
        return response()->json($zwaaraServices);
    }
}
