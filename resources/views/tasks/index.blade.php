@extends('layouts.app')

@section('content')
<h1>Tasks for Today</h1> 

@if(count($tasks)>0)
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>Due Date</th>
          <th>Description</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>
            {{$task->taskdue}}
            </td>
            <td>
                {{$task->description}}
                </td>
                <td>
                <a href="/tasks/{{$task->id}}"><button class="btn btn-info">VIEW</button></a>
                    
                    </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td colspan="3">{{$tasks->links()}}</td>
        </tr>
      </tfoot>
</table>
@else
    <p>No posts found!</p>

@endif
    
@endsection