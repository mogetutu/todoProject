@extends('layouts.master')
@section('content')
<div class="btn-group">
	<a href="{{route('users.create')}}" class="btn btn-default">Register</a>
		 <a href="{{route('users.login')}}" class="btn btn-default">Login</a> 
		</div>
@stops
