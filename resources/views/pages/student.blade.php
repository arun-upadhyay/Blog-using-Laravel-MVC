@extends('layouts.main')
@section('content')
    <form  method="post" action="{{ route('students.store') }}" >

        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="class">Class:</label>
            <input type="text" class="form-control" id="class" name="class">
        </div>

        <div class="form-group">
            <label for="section">Section:</label>
            <input type="text" class="form-control" id="class" name="section">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="class" name="address">
        </div>

        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" id="class" name="contact">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>Name</td>
            <td>Class</td>
            <td>Section</td>
            <td>Address</td>
            <td>Contact</td>
            <td colspan="2">Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->section}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->contact}}</td>
                <td><a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('students.destroy', $student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
