@extends('layouts.master')
<a class="page-scroll" href="@yield('header')">About {!! link_to_route('lessons.create', 'Create Lesson') !!}</a>

@section('content')
    <h2>Lessons</h2>
 
    @if ( !$lessons->count() )
        You have no lessons
    @else
        <ul>
            @foreach( $lessons as $lesson )
                <li class="list-group-item">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('lessons.destroy', $lesson->slug))) !!}   
                        <a href="{{ route('lessons.show', $lesson->slug) }}">{{ $lesson->name }}</a>
                                    
                            {!! link_to_route('lessons.edit', 'Edit', array($lesson->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('lessons.create', 'Create Lesson') !!}
    </p>
@stop