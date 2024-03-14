<?php

namespace App\Http\Controllers;

use App\Models\AllDoctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AllDoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alldoctors = AllDoctors::latest()->paginate(5);
    
        return view('alldoctors.index',compact('alldoctors'))
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
        return view('alldoctors.create');
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
            'Password' => 'required',
            'Phone' => 'required',
            'Licenceno' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            'Logo' => 'required|mimes:pdf,jpg,png|max:2048',

        ]);

         // Store file information in the database
         $alldoctors = new AllDoctors();
         $alldoctors->Enname = $request->input('Enname');
         $alldoctors->Arname = $request->input('Arname');
         $alldoctors->Email = $request->input('Email');
         $alldoctors->Password = $request->input('Password');
         $alldoctors->Phone = $request->input('Phone');
         $alldoctors->Licenceno = $request->input('Licenceno');
         $alldoctors->Yearofexp = $request->input('Yearofexp');
         $alldoctors->Medicalspec = $request->input('Medicalspec');
         $alldoctors->Position = $request->input('Position');
       
        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $alldoctors->Logo =  "/uploads/".$fileName;
         }

         $alldoctors->save();

        return redirect()->route('alldoctors.index')
                        ->with('success','Doctor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(AllDoctors $alldoctor)
    {
        //
         return view('alldoctors.show',compact('alldoctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(AllDoctors $alldoctor)
    {
        //
         return view('alldoctors.edit',compact('alldoctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllDoctors $alldoctor)
    {
        //
         $request->validate([
            'Enname' => 'required',
            'Email' => 'required',
            'Licenceno' => 'required',
        ]);
    
        $alldoctor->update($request->all());
    
        return redirect()->route('alldoctors.index')
                        ->with('success','Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllDoctors $alldoctor)
    {
        //
         $alldoctor->delete();
    
        return redirect()->route('alldoctors.index')
                        ->with('success','Doctor deleted successfully');
    }
}
