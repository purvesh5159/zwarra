<?php

namespace App\Http\Controllers;

use App\Models\SubMedicalSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubMedicalSpecialtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $submedicalspecialties = SubMedicalSpecialties::latest()->paginate(5);
    
        return view('submedicalspecialties.index',compact('submedicalspecialties'))
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
        return view('submedicalspecialties.create');
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
         $submedicalspecialties = new SubMedicalSpecialties();
         $submedicalspecialties->Enname = $request->input('Enname');
         $submedicalspecialties->Arname = $request->input('Arname');
         $submedicalspecialties->Enspecialties = $request->input('Enspecialties');
         $submedicalspecialties->Arspecialties = $request->input('Arspecialties');
         $submedicalspecialties->Status = $request->input('Status');

        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $submedicalspecialties->Logo =  "/uploads/".$fileName;
         }

         $submedicalspecialties->save();
     
        return redirect()->route('submedicalspecialties.index')
                        ->with('success',' Sub Medical Specialties created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(SubMedicalSpecialties $submedicalspecialty)
    {
        //
         return view('submedicalspecialties.show',compact('submedicalspecialty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(SubMedicalSpecialties $submedicalspecialty)
    {
        //
         return view('submedicalspecialties.edit',compact('submedicalspecialty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submedicalspecialties $submedicalspecialty)
    {
        //
         $request->validate([
            'Enname' => 'required',
        ]);
    
        $submedicalspecialty->update($request->all());
    
        return redirect()->route('submedicalspecialties.index')
                        ->with('success','Sub Medical Specialties updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMedicalSpecialties $submedicalspecialty)
    {
        //
         $submedicalspecialty->delete();
    
        return redirect()->route('submedicalspecialties.index')
                        ->with('success','Sub Medical Specialties deleted successfully');
    }
}
