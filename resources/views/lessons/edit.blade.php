@extends('layouts.master')
 
@section('content')
    <h2>Edit Lesson</h2>
 
    {!! Form::model($lesson, ['method' => 'PATCH', 'route' => ['lessons.update', $lesson->slug]]) !!}
        @include('lessons/partials/_form', ['submit_text' => 'Edit Lesson'])
    {!! Form::close() !!}
@endsection