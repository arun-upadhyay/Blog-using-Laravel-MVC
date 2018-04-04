@extends('layouts.main')
@section('content')
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    <form method = "post" action="add-contact">
        {{ csrf_field() }} 
        <div class="form-group">
            <label for="name">Your Name </label>
            <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter email" name="email">
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter Subject" name="subject">
            <span class="text-danger">{{ $errors->first('subject') }}</span>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" rows="5" id="message" name="message"></textarea>
            <span class="text-danger">{{ $errors->first('message') }}</span>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@stop