@extends('layouts.master')
@section('content')
<ul>
  @foreach ($todos as $todo)
    <li> {{ $todo->task}}</li>
  @endforeach
</ul>
@stop
