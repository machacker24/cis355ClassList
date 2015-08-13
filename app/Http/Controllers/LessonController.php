<?php

namespace App\Http\Controllers;
use Input;
use Redirect;
use Illuminate\Http\Request;

use App\Lesson;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    $lessons = Lesson::all();
	return view('lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
     	$input = Input::all();
	Lesson::create( $input );
 
	return Redirect::route('lessons.index')->with('message', 'Lesson created');
}

    /**
     * Display the specified resource.
     *
     * @param  int  lesson $lesson
     * @return Response
     */
    public function show(lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  lesson $lesson
     * @return Response
     */
    public function edit(lesson $lesson)
    {
    return view('lessons.show', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  lesson $lesson
     * @return Response
     */
    public function update(Request $request, lesson $lesson)
    {
        	$input = array_except(Input::all(), '_method');
	$lesson->update($input);
 
	return Redirect::route('lessons.show', $lesson->slug)->with('message', 'Lesson updated.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  lesson $lesson
     * @return Response
     */
    public function destroy(lesson $lesson)
    {
       $lesson->delete();
 
	return Redirect::route('lessons.index')->with('message', 'Lesson deleted.');
}
}
