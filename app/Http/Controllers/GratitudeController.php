<?php

namespace App\Http\Controllers;

use App\Models\Gratitude;
use Illuminate\Http\Request;

class GratitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Gratitude::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Gratitude  $gratitude
     * @return \Illuminate\Http\Response
     */
    public function show(Gratitude $gratitude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gratitude  $gratitude
     * @return \Illuminate\Http\Response
     */
    public function edit(Gratitude $gratitude)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gratitude  $gratitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gratitude $gratitude)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gratitude  $gratitude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gratitude $gratitude)
    {
        //
    }
}
