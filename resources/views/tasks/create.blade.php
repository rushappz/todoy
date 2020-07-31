@extends('layouts.app')

@section('content')
<h1>Create Task</h1>    


    {!! Form::open(['action' => 'TasksController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('description', 'Enter Task')}}
            {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Task'])}}
        </div>
        <div class="form-group">
            {{Form::label('taskdue', 'Enter Due Date')}}
            {{Form::date('taskdue', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Due Date'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection