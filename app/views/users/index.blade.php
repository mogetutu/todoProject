@extends('layouts.master')
@section('content')
<p>this is a todo aplications that helps you to create a new to do save it on the
    database.one can delelte edit  the tasks.
    it also allows user to login and also regester if they are new.</p>
    {{Form::open(route,array)}}
    {{Form::submit('Login', ['class' => 'btn btn-success'])}}
	{{Form::submit('Register', ['class' => 'btn btn-success'])}}
	{{Form::close()}}
@stop