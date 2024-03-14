<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offer = Offers::latest()->paginate(5);
    
        return view('offers.index',compact('offer'))
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
        return view('offers.create');
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
            'Name' => 'required',
            'Type' => 'required',
            'Servicename' => 'required',
        ]);

         // Store file information in the database
         // $offer = new Offers();
         // Offers::create($request->all());

        // Store file information in the database
         $offer = new Offers();
         $offer->Name = $request->input('Name');
         $offer->Code = $request->input('Code');
         $offer->Percantage = $request->input('Percantage');
         $offer->Count = $request->input('Count');
         $offer->Type = $request->input('Type');
         $offer->Servicename = $request->input('Servicename');
         $offer->Subservicename = $request->input('Subservicename');
         $offer->Healthcare = $request->input('Healthcare');

        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $offer->Logo =  "/uploads/".$fileName;
         }

         $offer->save();

        return redirect()->route('offers.index')
                        ->with('success','Offer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(Offers $offer)
    {
        //
         return view('offers.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(Offers $offer)
    {
        //
         return view('offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offers $offer)
    {
        //
         $request->validate([
            'Name' => 'required',
            'Servicename' => 'required',
        ]);
    
        $offer->update($request->all());
    
        return redirect()->route('offers.index')
                        ->with('success','Offer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offers $offer)
    {
        //
         $offer->delete();
    
        return redirect()->route('offers.index')
                        ->with('success','Offer deleted successfully');
    }
}
