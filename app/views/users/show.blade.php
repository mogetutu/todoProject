 @extends('layouts.master')
@section('content')
<div class="page-header">
<div class="pull-right">
	<div class="btn-group">
		<a href="{{route('todo.create')}}" class="btn btn-default">creat new profile</a>
		<a href="{{route('todo.create')}}" class="btn btn-default">Edit profile</a>
		
	</div>
</div>
	<h2>show todos</h2>
	<form>
		<input type="checkbox" name="" value="$todo->task" 
		{{ Form::open(array('method' => 'DELETE', 'route' => array('todo.destroy'))) }}                       
          {{ Form::submit('x', array('class'=> 'btn btn-danger')) }}
                        <!-- {{ Form::close() }}/> -->
	</form>
	</div>

	<!-- <h1> adsjfks</h1> -->
	<!-- <@foreach ($todo as $tod)

    <li>{{ ($tod->todo) }}</li>

    @endforeach
 -->


<!-- <div>{{ link_to_route('tasks.create', 'Create task') }}</div>

<div>{{  link_to_route('tasks.edit', 'Edit task')  }}

<div>{{ link_to_route('tasks.destroy', 'Delete task') }} -->

	<div class="btn-group">
	<a href="{{route('users.index')}}" ctlass="btn btn-default">Logout</a>
</div>
   
@stop