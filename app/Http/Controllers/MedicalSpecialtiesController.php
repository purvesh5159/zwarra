<?php

namespace App\Http\Controllers;

use App\Models\MedicalSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicalSpecialtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicalspecialties = MedicalSpecialties::latest()->paginate(5);
    
        return view('medicalspecialties.index',compact('medicalspecialties'))
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
        return view('medicalspecialties.create');
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
         $medicalspecialties = new MedicalSpecialties();
         $medicalspecialties->Enname = $request->input('Enname');
         $medicalspecialties->Arname = $request->input('Arname');
         $medicalspecialties->Estimatedtime = $request->input('Estimatedtime');
         $medicalspecialties->Status = $request->input('Status');

        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $medicalspecialties->Logo =  "/uploads/".$fileName;
         }

         $medicalspecialties->save();
     
        return redirect()->route('medicalspecialties.index')
                        ->with('success','Medical Specialties created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalSpecialties $medicalspecialty)
    {
        //
         return view('medicalspecialties.show',compact('medicalspecialty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalSpecialties $medicalspecialty)
    {
        //
         return view('medicalspecialties.edit',compact('medicalspecialty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicalspecialties $medicalspecialty)
    {
        //
         $request->validate([
            'Enname' => 'required',
        ]);
    
        $medicalspecialty->update($request->all());
    
        return redirect()->route('medicalspecialties.index')
                        ->with('success',' Medical Specialties updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalSpecialties $medicalspecialty)
    {
        //
         $medicalspecialty->delete();
    
        return redirect()->route('medicalspecialties.index')
                        ->with('success',' Medical Specialties deleted successfully');
    }
}
