<?php

namespace App\Http\Controllers;

use App\Models\DoctorPositions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorPositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctorpositions = DoctorPositions::latest()->paginate(5);
    
        return view('doctorpositions.index',compact('doctorpositions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('doctorpositions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Arname' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
           // 'Regcertificate' => 'required|mimes:pdf,jpg,png|max:2048',

        ]);
         // Store file information in the database
         $doctorpositions = new DoctorPositions();
         DoctorPositions::create($request->all());
     
        return redirect()->route('doctorpositions.index')
                        ->with('success','Doctor Postion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(doctorpositions $doctorposition)
    {
        //
         return view('doctorpositions.show',compact('doctorposition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorPositions $doctorposition)
    {
        //
         return view('doctorpositions.edit',compact('doctorposition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorPositions $doctorposition)
    {
        //
         $request->validate([
            'Enname' => 'required',
        ]);
    
        $doctorposition->update($request->all());
    
        return redirect()->route('doctorpositions.index')
                        ->with('success',' Doctor Position updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorPositions $doctorposition)
    {
        //
         $doctorposition->delete();
    
        return redirect()->route('doctorpositions.index')
                        ->with('success',' Doctor Position deleted successfully');
    }
}
