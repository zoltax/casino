@extends('layouts.master')

@section('content')


    <form action="/casino/save" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Casino Name">
        </div>
        <div class="form-group">
            <label for="post_code">Post Code</label>
            <input type="text" class="form-control" id="post_code" name="post_code" placeholder="Post Code">
        </div>
        <div class="form-group">
            <label for="house_number">House Number</label>
            <input type="text" class="form-control" id="house_number" name="house_number" placeholder="House Number">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="City">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection