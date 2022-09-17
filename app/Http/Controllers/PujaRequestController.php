<?php

namespace App\Http\Controllers;

use App\Models\PujaRequest;
use Illuminate\Http\Request;



class PujaRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        PujaRequest::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'location'=>$request->location,
            'city'=>$request->city,
            'message'=>$request->message,
        ]);

        return redirect('/');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PujaRequest  $pujaRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PujaRequest $pujaRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PujaRequest  $pujaRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PujaRequest $pujaRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PujaRequest  $pujaRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PujaRequest $pujaRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PujaRequest  $pujaRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PujaRequest $pujaRequest)
    {
        //
    }
}
