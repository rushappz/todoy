@extends('layouts.app')

@section('content')
    <a href="/tasks" class="btn btn-info">Go Back</a><br><br>
    <h3>{{$task->description}}</h3>
    <br>
    <small>Created on {{$task->created_at}}</small>
    <hr>
    <a href="/tasks/{{$task->id}}/edit" class="btn btn-warning">Edit</a>
    <br><br>
    <div class="alert alert-danger">
        <h4>Warning</h4>
    {!! Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('DELETE TASK', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    </div>
@endsection