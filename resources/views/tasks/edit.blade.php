@extends('layouts.app')

@section('content')
<h1>Edit Task</h1>    


    {!! Form::open(['action' => ['TasksController@update', $task->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('description', 'Enter Task')}}
            {{Form::text('description', $task->description, ['class' => 'form-control', 'placeholder' => 'Task'])}}
        </div>
        <div class="form-group">
            {{Form::label('taskdue', 'Update Task Due')}}
            {{Form::date('taskdue', $task->taskdue, ['class' => 'form-control', 'placeholder' => 'Task Due'])}}
        </div>
        <div class="form-group">
            {{Form::label('created_at', 'Update Task Date')}}
            {{Form::date('created_at', $task->created_at, ['class' => 'form-control', 'placeholder' => 'Date'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection