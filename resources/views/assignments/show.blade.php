@extends('layouts.master')
@section('content')
    <h2>
        {!! link_to_route('lessons.show', $lesson->name, [$lesson->slug]) !!} -
        {{ $assignment->name }}
    </h2>
 
    {{ $assignment->description }}
        <p>
        {!! link_to_route('lessons.index', 'Back to Lessons') !!} |
        {!! link_to_route('lessons.assignments.create', 'Create Assignment', $lesson->slug) !!}
    </p>
@endsection
@stop