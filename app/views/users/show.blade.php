 @extends('layouts.master')
@section('content')
<div class="page-header">
<div class="pull-right">
	<div class="btn-group">
		<a href="{{route('todo.create')}}" class="btn btn-default">creat new profile</a>
		<a href="{{route('todo.create')}}" class="btn btn-default">Edit profile</a>
		<p>
          
                    </p	>
	</div>
</div>
	<h2>show todos</h2>
	<form>
		<input type="checkbox" name="" value="$todo->task" {{ Form::open(array('method' => 'DELETE', 'route' => array('todo.destroy'))) }}                       
                            {{ Form::submit('x', array('class'=> 'btn btn-danger')) }}
                        <!-- {{ Form::close() }}/> -->
	</form>
</div>
   
@stop