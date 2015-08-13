@extends('layouts.master')
 
@section('content')
    <h2>Create Assignment for Lesson "{{ $lesson->name }}"</h2>
 
    {!! Form::model(new App\Assignment, ['route' => ['lessons.assignments.store', $lesson->slug], 'class'=>'']) !!}
        @include('assignments/partials/_form', ['submit_text' => 'Create Assignment'])
    {!! Form::close() !!}
@endsection