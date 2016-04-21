@extends('layouts.master')

@section('content')

    <form action="/casino/find" method="get" class=".form-inline">
        <div class="form-group">
            <label for="name">Enter post code</label>
            <input type="text" class="form-control" id="name" name="post_code" placeholder="Post Code">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection
