<?php

namespace App\Http\Controllers;
use App\Models\HeaderBanner;

use Illuminate\Http\Request;

class HeaderBannerController extends Controller
{
    public function index()
    {
        $headerBanners = HeaderBanner::all();
        return response()->json($headerBanners);
    }
}
