<?php

namespace App\Http\Controllers;
use Auth;
use Carbon\Carbon;

use App\Models\unemployed;
use App\Models\meeting;
use App\Http\Requests\StoreunemployedRequest;
use App\Http\Requests\UpdateunemployedRequest;
use Illuminate\Support\Facades\DB;

class UnemployedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $meetings_uncompleted=meeting::where([["user_id",'=',$user->id],["complete",'=','0']])->get();
        //$count = meeting::where('created_at', '>=', Carbon::now()->subMonth())->groupBy('date')->orderBy('date', 'DESC')->get(array(DB::raw('Date(created_at) as date'),DB::raw('COUNT(*) as "views"')));
        //dd($count);
        return view('welcome')->with('meetings_uncompleted',$meetings_uncompleted);
    }
    public function profile()
    {
        return view('profile');
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
     * @param  \App\Http\Requests\StoreunemployedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreunemployedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unemployed  $unemployed
     * @return \Illuminate\Http\Response
     */
    public function show(unemployed $unemployed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unemployed  $unemployed
     * @return \Illuminate\Http\Response
     */
    public function edit(unemployed $unemployed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateunemployedRequest  $request
     * @param  \App\Models\unemployed  $unemployed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateunemployedRequest $request, unemployed $unemployed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unemployed  $unemployed
     * @return \Illuminate\Http\Response
     */
    public function destroy(unemployed $unemployed)
    {
        //
    }
}
