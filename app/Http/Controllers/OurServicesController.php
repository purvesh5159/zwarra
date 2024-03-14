<?php

namespace App\Http\Controllers;

use App\Models\OurServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ourservices = OurServices::latest()->paginate(5);
    
        return view('ourservices.index',compact('ourservices'))
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
        return view('ourservices.create');
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
         $ourservices = new OurServices();
         $ourservices->Enname = $request->input('Enname');
         $ourservices->Arname = $request->input('Arname');
         $ourservices->Endescription = $request->input('Endescription');
         $ourservices->Ardescription = $request->input('Ardescription');
         $ourservices->Status = $request->input('Status');

        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $ourservices->Logo =  "/uploads/".$fileName;
         }

         $ourservices->save();
     
        return redirect()->route('ourservices.index')
                        ->with('success','Main Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(OurServices $ourservice)
    {
        //
         return view('ourservices.show',compact('ourservice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(OurServices $ourservice)
    {
        //
         return view('ourservices.edit',compact('ourservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurServices $ourservice)
    {
        //
         $request->validate([
            'Enname' => 'required',
        ]);
    
        $ourservice->update($request->all());
    
        return redirect()->route('ourservices.index')
                        ->with('success',' Main Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurServices $ourservice)
    {
        //
         $ourservice->delete();
    
        return redirect()->route('ourservices.index')
                        ->with('success',' Main Service deleted successfully');
    }
}
