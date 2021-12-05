<?php

namespace App\Http\Controllers;

use App\Models\training;
use App\Http\Requests\StoretrainingRequest;
use App\Http\Requests\UpdatetrainingRequest;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('training');
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
     * @param  \App\Http\Requests\StoretrainingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretrainingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetrainingRequest  $request
     * @param  \App\Models\training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetrainingRequest $request, training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(training $training)
    {
        //
    }
}
