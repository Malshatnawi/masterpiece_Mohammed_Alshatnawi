<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Unit;
use App\Category;

use Illuminate\Http\Request;

class LessonController extends Controller
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
        $all_lessons = Lesson::all();
        $all_units = Unit::all();
        return view ('admin.manage_lessons' , compact('all_lessons','all_units'));
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
            'lesson_name' => 'required',
            'unit_id' => 'required',
            'lesson_duration' => 'required',
            'lesson_content' =>'required',

        ]);


        if ($request->hasFile('lesson_content')) {
            $lesson = $request->file('lesson_content') ;
            $ext = $lesson->getClientOriginalExtension() ;
            $lesson_video = time() . '.' . $ext ;
            $lesson->move('videos/lessons', $lesson_video);
        }



        Lesson::create([
            'lesson_name'                   => $request->lesson_name,
            'unit_id'                       =>$request->unit_id,
            'lesson_duration'               => $request->lesson_duration,
            'lesson_content'                => $lesson_video,
            
        ]);

        return redirect('/lessons/create');
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $all_units= Unit::all();
        return view ('admin.edit_lessons', compact('lesson','all_units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $request->validate([
            'lesson_name' => 'required',
            'unit_id' => 'required',
            'lesson_duration' => 'required',
            'lesson_content' =>'required',

        ]);


        if ($request->hasFile('lesson_content')) {
            $video = $request->file('lesson_content') ;
            $ext = $video->getClientOriginalExtension() ;
            $lesson_video = time() . '.' . $ext ;
            $video->move('videos/lessons', $lesson_video);
        }



        Lesson::where ('id', $lesson->id)->update([
            'lesson_name'                   => $request->lesson_name,
            'unit_id'                       =>$request->unit_id,
            'lesson_duration'               => $request->lesson_duration,
            'lesson_content'                => $lesson_video,
            
        ]);

        return redirect('/lessons/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->destroy($lesson->id);
        return redirect ('/lessons/create');
    }
}
