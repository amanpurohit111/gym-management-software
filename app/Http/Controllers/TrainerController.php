<?php

namespace App\Http\Controllers;

use App\Models\trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TrainerController extends Controller
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
        $request->validate([
            'name' => 'required|min:2',
            'mobile' => 'required|unique:members'
        ]);
        $info = [
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'duration' => $request->duration,
            'fees' => $request->fees,
            'details' => $request->details,
            'doj' => $request->doj,
            'status'=>$request->status
        ];
        trainer::create($info);
        return redirect('/trainer');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(trainer $trainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trainer $trainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(trainer $trainer)
    {
        //
    }
}
