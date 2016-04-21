@extends('layouts.master')

@section('content')


    <p><a class="btn btn-default" href="/casino/add" role="button">Add a new casino</a></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <td><b>Casino name</b></td>
                <td><b>Address</b></td>
                <td><b>Post Code</b></td>
                <td><b>Edit</b></td>
                <td><b>Delete</b></td>
            </tr>
        </thead>

    @foreach($casinos as $casino)
        <tbody>
            <tr>
                <td>
                    {{ $casino['name'] }}
                </td>
                <td>
                    {{ $casino['house_number'] .' '. $casino['address'] .' '. $casino['city'] }}
                </td>
                <td>
                    {{ $casino['post_code'] }}
                </td>
                <td>
                    <a class="btn btn-primary btn-link" href="/casino/edit/{{$casino['id']}}" role="button">Edit</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-link" href="/casino/delete/{{$casino['id']}}" role="button">Delete</a>
                </td>
            </tr>
        </tbody>
    @endforeach


    </table>

@endsection