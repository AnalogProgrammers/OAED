<?php

namespace App\Http\Controllers;

use App\Models\meeting;
use App\Http\Requests\StoremeetingRequest;
use App\Http\Requests\UpdatemeetingRequest;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_meeting()
    {
        return view('meeting');
    }
    public function index_meetings()
    {
        return view('meetings');
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
     * @param  \App\Http\Requests\StoremeetingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremeetingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(meeting $meeting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemeetingRequest  $request
     * @param  \App\Models\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemeetingRequest $request, meeting $meeting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(meeting $meeting)
    {
        //
    }
}
