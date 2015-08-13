@extends('layouts.master')
@section('content')
    <h2>Create Lesson</h2>
 
    {!! Form::model(new App\Lesson, ['route' => ['lessons.store']]) !!}
        @include('lessons/partials/_form', ['submit_text' => 'Create Lesson'])
    {!! Form::close() !!}
@endsection