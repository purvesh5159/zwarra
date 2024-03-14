<?php

namespace App\Http\Controllers;

use App\Models\Bankings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BankingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banking = Bankings::latest()->paginate(5);
    
        return view('bankings.index',compact('banking'))
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
        return view('bankings.create');
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
            
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            'Regcertificate' => 'required|mimes:jpg,png|max:2048',

        ]);

         // Store file information in the database
         $banking = new Bankings();
         $banking->Name = $request->input('Name');
         $banking->Doctor = $request->input('Doctor');
         $banking->Email = $request->input('Email');
         $banking->Phone = $request->input('Phone');
        


        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $banking->Logo =  "/uploads/".$fileName;
         }

         $banking->save();        

         // Store file information in the database
          // $banking = new Bankings();
          // Bankings::create($request->all());

        return redirect()->route('bankings.index')
                        ->with('success','Banking Information created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(Bankings $banking)
    {
        //
         return view('bankings.show',compact('banking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(Bankings $banking)
    {
        //
         return view('bankings.edit',compact('banking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bankings $banking)
    {
        //
         $request->validate([
            'Name' => 'required',
        ]);
    
        $banking->update($request->all());
    
        return redirect()->route('bankings.index')
                        ->with('success','Banking Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bankings $banking)
    {
        //
         $banking->delete();
    
        return redirect()->route('bankings.index')
                        ->with('success','Banking Information deleted successfully');
    }
}
