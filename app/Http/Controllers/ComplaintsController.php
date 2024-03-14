<?php

namespace App\Http\Controllers;

use App\Models\Complaints;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $complaint = Complaints::latest()->paginate(5);
    
        return view('complaints.index',compact('complaint'))
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
        return view('complaints.create');
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
        ]);

         // Store file information in the database
         $complaint = new Complaints();
         Complaints::create($request->all());

        return redirect()->route('complaints.index')
                        ->with('success','Complaint created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(Complaints $complaint)
    {
        //
         return view('complaints.show',compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaints $complaint)
    {
        //
         return view('complaints.edit',compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaints $complaint)
    {
        //
         $request->validate([
            'Name' => 'required',
        ]);
    
        $complaint->update($request->all());
    
        return redirect()->route('complaints.index')
                        ->with('success','Complaint updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaints $complaint)
    {
        //
         $complaint->delete();
    
        return redirect()->route('complaints.index')
                        ->with('success','Complaint deleted successfully');
    }
}
