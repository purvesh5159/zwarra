<?php

namespace App\Http\Controllers;

use App\Models\JoinDoctorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoinDoctorRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctorrequest = JoinDoctorRequest::latest()->paginate(5);
    
        return view('doctorrequest.index',compact('doctorrequest'))
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
        return view('doctorrequest.create');
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
            'Phone' => 'required',
         

        ]);

         // Store file information in the database
         $doctorrequest = new JoinDoctorRequest();
         JoinDoctorRequest::create($request->all());
        

        return redirect()->route('doctorrequest.index')
                        ->with('success','Doctor Join Request created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(JoinDoctorRequest $doctorrequest)
    {
        //
         return view('doctorrequest.show',compact('doctorrequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(JoinDoctorRequest $doctorrequest)
    {
        //
         return view('doctorrequest.edit',compact('doctorrequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JoinDoctorRequest $doctorrequest)
    {
        //
         $request->validate([
            'Arname' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
        ]);
    
        $doctorrequest->update($request->all());
    
        return redirect()->route('doctorrequest.index')
                        ->with('success','Doctor Join Reuquest updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(JoinDoctorRequest $doctorrequest)
    {
        //
         $doctorrequest->delete();
    
        return redirect()->route('doctorrequest.index')
                        ->with('success','Doctor Joint Request deleted successfully');
    }
}
