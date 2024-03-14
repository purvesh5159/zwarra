<?php

namespace App\Http\Controllers;
use App\Models\VirtualConsultation;

use Illuminate\Http\Request;

class ConsultingListController extends Controller
{
    public function index()
    {
        $consultingList = VirtualConsultation::all();
        return response()->json($consultingList);
    }
}
