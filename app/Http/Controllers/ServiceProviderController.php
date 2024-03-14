<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $serviceprovider = ServiceProvider::latest()->paginate(5);
    
        return view('serviceproviders.index',compact('serviceprovider'))
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
        return view('serviceproviders.create');
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
            'Crnumber' => 'required',
            'City' => 'required',
            'Countrycode' => 'required',
            'Vat' => 'required',
            'Typeofservice' => 'required',
            'Financialshare' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            'Regcertificate' => 'required|mimes:pdf,jpg,png|max:2048',

        ]);

         // Store file information in the database
         $serviceprovider = new ServiceProvider();
         $serviceprovider->Enname = $request->input('Enname');
         $serviceprovider->Arname = $request->input('Arname');
         $serviceprovider->Email = $request->input('Email');
         $serviceprovider->Password = $request->input('Password');
         $serviceprovider->Phone = $request->input('Phone');
         $serviceprovider->Crnumber = $request->input('Crnumber');
         $serviceprovider->City = $request->input('City');
         $serviceprovider->Countrycode = $request->input('Countrycode');
         $serviceprovider->Vat = $request->input('Vat');
         $serviceprovider->City = $request->input('City');
         $serviceprovider->Typeofservice = $request->input('Typeofservice');
         $serviceprovider->Financialshare = $request->input('Financialshare');

        if($request->hasfile('Regcertificate'))
         {
            $file = $request->file('Regcertificate');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Regcertificate = $fileName;
            $serviceprovider->Regcertificate_url = "/uploads/".$fileName;
         }

        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Logo = $fileName;
            $serviceprovider->Logo_url =  "/uploads/".$fileName;
         }

         if($request->hasfile('Comcerregister'))
         {
            $file = $request->file('Comcerregister');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Comcerregister = $fileName;
            $serviceprovider->Comcerregister_url =  "/uploads/".$fileName;
         }

         if($request->hasfile('Healthlicence'))
         {
            $file = $request->file('Healthlicence');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Healthlicence = $fileName;
            $serviceprovider->Healthlicence_url =  "/uploads/".$fileName;
         }

         $serviceprovider->save();

        return redirect()->route('serviceproviders.index')
                        ->with('success','ServiceProvider created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProvider $serviceprovider)
    {
        //
         return view('serviceproviders.show',compact('serviceprovider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProvider $serviceprovider)
    {
        //
         return view('serviceproviders.edit',compact('serviceprovider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProvider $serviceprovider)
    {
        //
         $request->validate([
            'Enname' => 'required',
            'Email' => 'required',
        ]);
    
        $serviceprovider->update($request->all());
    
        return redirect()->route('serviceproviders.index')
                        ->with('success','ServiceProvider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProvider $serviceprovider)
    {
        //
         $serviceprovider->delete();
    
        return redirect()->route('serviceproviders.index')
                        ->with('success','ServiceProvider deleted successfully');
    }
}
