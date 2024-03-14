<?php

namespace App\Http\Controllers;

use App\Models\SubServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subservices = SubServices::latest()->paginate(5);
    
        return view('subservices.index',compact('subservices'))
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
        return view('subservices.create');
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
         $subservices = new SubServices();
         $subservices->Enname = $request->input('Enname');
         $subservices->Arname = $request->input('Arname');
         $subservices->Endescription = $request->input('Endescription');
         $subservices->Ardescription = $request->input('Ardescription');
         $subservices->Service = $request->input('Service');
         $subservices->Servicetype = $request->input('Servicetype');
         $subservices->Eninstrucation = $request->input('Eninstrucation');
         $subservices->Arinstrucation = $request->input('Arinstrucation');
         $subservices->Entitle = $request->input('Entitle');
         $subservices->Artitle = $request->input('Artitle');
         $subservices->Price = $request->input('Price');
         $subservices->Healthcare = $request->input('Healthcare');
         $subservices->Status = $request->input('Status');

        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $subservices->Logo =  "/uploads/".$fileName;
         }

         $subservices->save();
     
        return redirect()->route('subservices.index')
                        ->with('success','Main Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(SubServices $subservice)
    {
        //
         return view('subservices.show',compact('subservice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(SubServices $subservice)
    {
        //
         return view('subservices.edit',compact('subservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubServices $subservice)
    {
        //
         $request->validate([
            'Enname' => 'required',
        ]);
    
        $subservices->update($request->all());
    
        return redirect()->route('subservices.index')
                        ->with('success',' Main Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubServices $subservice)
    {
        //
         $subservice->delete();
    
        return redirect()->route('subservices.index')
                        ->with('success',' Main Service deleted successfully');
    }
}
