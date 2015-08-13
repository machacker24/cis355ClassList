<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Lesson;
use App\Assignment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AssignmentController;

class AssignmentController extends Controller {
 
	/**
	 * Display a listing of the resource.
	 *
	 * @param  \App\Lesson $lesson
	 * @return Response
	 */
	public function index(Lesson $lesson)
	{
		return view('assignments.index', compact('lesson'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\Lesson $lesson
	 * @return Response
	 */
	public function create(Lesson $lesson)
	{
		return view('assignments.create', compact('lesson'));
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Lesson $lesson
	 * @return Response
	 */
	public function store(Lesson $lesson)
	{
		$input = Input::all();
	$input['lesson_id'] = $lesson->id;
	Assignment::create( $input );
 
	return Redirect::route('lessons.show', $lesson->slug)->with('message', 'Assignment created.');
}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Lesson $lesson
	 * @param  \App\Assignment    $assignment
	 * @return Response
	 */
	public function show(Lesson $lesson, Assignment $assignment)
	{
		return view('assignments.show', compact('lesson', 'assignment'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Lesson $lesson
	 * @param  \App\Assignment    $assignment
	 * @return Response
	 */
	public function edit(Lesson $lesson, Assignment $assignment)
	{
		return view('assignments.edit', compact('lesson', 'assignment'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Lesson $lesson
	 * @param  \App\Assignment    $assignment
	 * @return Response
	 */
	public function update(Lesson $lesson, Assignment $assignment)
	{
		$input = array_except(Input::all(), '_method');
	$assignment->update($input);
 
	return Redirect::route('lessons.assignments.show', [$lesson->slug, $assignment->slug])->with('message', 'Assignment updated.');
}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Lesson $lesson
	 * @param  \App\Assignment    $assignment
	 * @return Response
	 */
	public function destroy(Lesson $lesson, Assignment $assignment)
	{
		$assignment->delete();
 
	return Redirect::route('lessons.show', $lesson->slug)->with('message', 'Assignment deleted.');
}
 
}