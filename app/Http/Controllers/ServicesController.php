<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $service = Services::latest()->paginate(5);
    
        return view('services.index',compact('service'))
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
        return view('services.create');
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
            //'Enhealthcare' => 'required',
            'Arhealthcare' => 'required',
            // 'Password' => 'required',
            // 'Phone' => 'required',
            // 'Crnumber' => 'required',
            // 'City' => 'required',
            // 'Countrycode' => 'required',
            // 'Vat' => 'required',
            // 'Typeofservice' => 'required',
            // 'Financialshare' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
           // 'Regcertificate' => 'required|mimes:pdf,jpg,png|max:2048',

        ]);

         // Store file information in the database
         $service = new Services();
         Services::create($request->all());
     
        return redirect()->route('services.index')
                        ->with('success','Services created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $service)
    {
        //
         return view('services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        //
         return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        //
         $request->validate([
            'Enhealthcare' => 'required',
            'Arhealthcare' => 'required',
        ]);
    
        $service->update($request->all());
    
        return redirect()->route('services.index')
                        ->with('success','Services updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        //
         $service->delete();
    
        return redirect()->route('services.index')
                        ->with('success','Services deleted successfully');
    }
}
