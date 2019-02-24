@extends('layouts.main')
@section('content')
    <form  method="post" action="{{ route('students.update', $student->id) }}">

        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
        </div>

        <div class="form-group">
            <label for="class">Class:</label>
            <input type="text" class="form-control" id="class" name="class" value="{{$student->class}}">
        </div>

        <div class="form-group">
            <label for="section">Section:</label>
            <input type="text" class="form-control" id="class" name="section" value="{{$student->section}}">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="class" name="address" value="{{$student->address}}">
        </div>

        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" id="class" name="contact" value="{{$student->contact}}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>


@stop
