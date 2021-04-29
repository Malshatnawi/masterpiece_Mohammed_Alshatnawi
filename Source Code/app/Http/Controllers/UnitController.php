<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Course;

use Illuminate\Http\Request;

class UnitController extends Controller
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
        $all_courses = Course::all();
        $all_units = Unit::all();
        return view ('admin.manage_units' , compact('all_courses','all_units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'unit_name' => 'required',
            'course_id' => 'required',

        ]);

        Unit::create([
            'unit_name'          => $request->unit_name,
            'course_id'          => $request->course_id,
        ]);

        return redirect('/units/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        $all_courses = Course::all();
        return view ('admin.edit_units', compact('unit' , 'all_courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'unit_name' => 'required',
            'course_id' => 'required',

        ]);

        Unit::where ('id', $unit->id)->update([
            'unit_name'          => $request->unit_name,
            'course_id'          => $request->course_id,
        ]);

        return redirect('/units/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->destroy($unit->id);
        return redirect ('/units/create');
    }
}
