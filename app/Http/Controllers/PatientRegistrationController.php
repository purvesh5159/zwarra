<?php

namespace App\Http\Controllers;

use App\Models\PatientRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patientregistration = PatientRegistration::latest()->paginate(5);
    
        return view('patientregistration.index',compact('patientregistration'))
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
        return view('patientregistration.create');
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
            'Email' => 'required',
            'Phone' => 'required',
            'Healthcare' => 'required',
            'Healthissue' => 'required',
            'City' => 'required',

        ]);

         // Store file information in the database
         $patientregistration = new PatientRegistration();
         PatientRegistration::create($request->all());


        return redirect()->route('patientregistration.index')
                        ->with('success','Patient Record created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(PatientRegistration $patientregistration)
    {
        //
         return view('patientregistration.show',compact('patientregistration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientRegistration $patientregistration)
    {
        //
         return view('patientregistration.edit',compact('patientregistration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientRegistration $patientregistration)
    {
        //
         $request->validate([
            'Enname' => 'required',
            'Email' => 'required',
        ]);
    
        $patientregistration->update($request->all());
    
        return redirect()->route('patientregistration.index')
                        ->with('success','Patient Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientRegistration $patientregistration)
    {
        //
         $patientregistration->delete();
    
        return redirect()->route('patientregistration.index')
                        ->with('success','Patient Record deleted successfully');
    }
}
