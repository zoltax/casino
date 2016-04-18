@extends('layouts.master')

@section('content')

    <p><a class="btn btn-primary btn-link" href="/casino/add" role="button">Add a new casino</a></p>

    @foreach($casinos as $casino)
        <div class="row">
            This is a {{ $casino['name'] }}
            <a class="btn btn-primary btn-link" href="/casino/edit{{$casino['id']}}" role="button">Edit the new casino</a>
        </div>
    @endforeach

@endsection