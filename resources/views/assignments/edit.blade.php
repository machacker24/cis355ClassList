@extends('layouts.master')
 
@section('content')
    <h2>Edit Assignment "{{ $assignment->name }}"</h2>
 
    {!! Form::model($assignment, ['method' => 'PATCH', 'route' => ['lessons.assignments.update', $lesson->slug, $assignment->slug]]) !!}
        @include('assignments/partials/_form', ['submit_text' => 'Edit Assignment'])
    {!! Form::close() !!}
@endsection