@extends('layouts.master')
@section('content')

@foreach ($todo as $tod)

<li> {{ $tod->task}}</li>
@endforeach
@stop<ul>
</ul>
