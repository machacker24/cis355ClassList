@extends('layouts.master')
@section('content')
    <h2>{{ $lesson->name }}</h2>
 
    @if ( !$lesson->assignments->count() )
        Your lesson has no assignments.
    @else
        <ul>
            @foreach( $lesson->assignments as $assignment )
                <li class="list-group-item">
                @unless ($assignment->completed === 0)
                <span class="badge"> Completed</span>
                @endunless
                 
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('lessons.assignments.destroy', $lesson->slug, $assignment->slug))) !!}
                        <a href="{{ route('lessons.assignments.show', [$lesson->slug, $assignment->slug]) }}">{{ $assignment->name }}</a>
                        
                            {!! link_to_route('lessons.assignments.edit', 'Edit', array($lesson->slug, $assignment->slug), array('class' => 'btn btn-info')) !!}
 
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('lessons.index', 'Back to Lessons') !!} |
        {!! link_to_route('lessons.assignments.create', 'Create Assignment', $lesson->slug) !!}
    </p>
@endsection
@stop