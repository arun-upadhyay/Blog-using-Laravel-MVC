@extends('layouts.main')
@section('content')
@if(count($contents)>0)

<h1> {{$contents->title}} </h1>
<p> {{$contents->content}}</p>
@else
<p> Sorry !!! No articles Available</p>
@endif
@stop