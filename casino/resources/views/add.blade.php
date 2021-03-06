@extends('layouts.master')

@section('content')


    {{{ isset($error) ? $error : '' }}}

    <form action="/casino/save" method="post" class=".form-inline">
        <input type="hidden" name="id" value="{{$casino['id'] or ''}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Casino Name" value="{{$casino['name'] or ''}}">
        </div>
        <div class="form-group">
            <label for="post_code">Post Code</label>
            <input type="text" class="form-control" id="post_code" name="post_code" placeholder="Post Code" value="{{$casino['post_code'] or ''}}">
        </div>
        <div class="form-group">
            <label for="house_number">House Number</label>
            <input type="text" class="form-control" id="house_number" name="house_number" placeholder="House Number" value="{{$casino['house_number'] or ''}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$casino['address'] or ''}}">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{$casino['city'] or ''}}">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection