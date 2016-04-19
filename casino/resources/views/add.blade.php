@extends('layouts.master')

@section('content')

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
        <table class="table">
            <tr>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" id="mon_op" name="mon_op" placeholder="Opening" value="{{$casino['city'] or ''}}">
                    <input type="text" class="form-control" id="mon_cl" name="mon_cl" placeholder="Closing" value="{{$casino['city'] or ''}}">
                </td>
                <td>
                    <input type="text" class="form-control" id="tue_op" name="tue_op" placeholder="Opening" value="{{$casino['city'] or ''}}">
                    <input type="text" class="form-control" id="tue_op" name="tue_op" placeholder="Closing" value="{{$casino['city'] or ''}}">
                </td>
                <td>
                    <input type="text" class="form-control" id="tue_op" name="tue_op" placeholder="Opening" value="{{$casino['city'] or ''}}">
                    <input type="text" class="form-control" id="tue_op" name="tue_op" placeholder="Closing" value="{{$casino['city'] or ''}}">
                </td>
                <td>
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Opening" value="{{$casino['city'] or ''}}">
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Closing" value="{{$casino['city'] or ''}}">
                </td>
                <td>
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Opening" value="{{$casino['city'] or ''}}">
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Closing" value="{{$casino['city'] or ''}}">
                </td>
                <td>
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Opening" value="{{$casino['city'] or ''}}">
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Closing" value="{{$casino['city'] or ''}}">
                </td>
                <td>
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Opening" value="{{$casino['city'] or ''}}">
                    <input type="text" class="form-control" id="thu_op" name="thu_op" placeholder="Closing" value="{{$casino['city'] or ''}}">
                </td>
            </tr>

        </table>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection