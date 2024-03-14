<?php

namespace App\Http\Controllers;
use App\Models\ServiceAddress;
use Illuminate\Http\Request;

class ServiceAddressController extends Controller
{
    public function show($id)
    {
        $serviceAddress = ServiceAddress::where('Id', $id)->first();
        if (!$serviceAddress) {
            return response()->json(['error' => 'Service address not found'], 404);
        }
        return response()->json($serviceAddress);
    }
}
