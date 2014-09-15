@extends('layouts.master')
@section('content')
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
		body
		  { padding-bottom:40px; padding-top:40px; }
	</style>
</head>
<body class="container">
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		
		<div class="page-header">
			<h1> new todo</h1>
		</div>	
{{ Form::open(array('route'=>'todo.store')) }}
<div class="form_group">
	{{Form::label('Names')}}
	{{ Form::text('task', null ,array('class'=>'form-control')) }}
	{{Form::submit('Done', ['class' => 'btn btn-success'])}}
	{{Form::close()}}
	</div>
	<!-- <form>
                 <a href="/users/show"><input type="submit" name="submit"></a>
                 </form> -->
@stop