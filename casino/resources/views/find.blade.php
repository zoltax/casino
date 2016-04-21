@extends('layouts.master')

{{--AIzaSyAfbyU8W9r3acAmbWsC-BHEYupg1KG5hMo--}}

@section('script')
    <script>
    $(document).ready(function(){
        map = new GMaps({
            div: '#map',
            width: '1200px',
            height: '700px',
            zoom: 10,
            lat: '{{ $localisation['latitude'] }}',
            lng: '{{ $localisation['longitude'] }}',
            key: 'AIzaSyAfbyU8W9r3acAmbWsC-BHEYupg1KG5hMo'
        });

        @foreach($casinos as $casino)
        map.addMarker({
            lat: '{{ $casino->latitude }}',
            lng: '{{ $casino->longitude }}',
            title: '{{ $casino->name }}',
            infoWindow: {
                content: '<p>Casino name: <b>{{ $casino->name }}</b><p>Casino address: <b>{{ $casino->house_number .' '. $casino->address .' '. $casino->city }}</b></p><p>Distance: <b>{{ round($casino->distance,2) }} </b></p>'
            }
        });
        @endforeach

    });
    </script>
@endsection


@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <td><b>Casino name</b></td>
            <td><b>Address</b></td>
            <td><b>Post Code</b></td>
            <td><b>Distance</b></td>
        </tr>
        </thead>

        @foreach($casinos as $casino)
            <tbody>
            <tr>
                <td>
                    {{ $casino->name }}
                </td>
                <td>
                    {{ $casino->house_number .' '. $casino->address .' '. $casino->city }}
                </td>
                <td>
                    {{ $casino->post_code }}
                </td>
                <td>
                    {{ round($casino->distance,2) }}
                </td>

            </tr>
            </tbody>
        @endforeach


    </table>

@endsection


@section('map')

<div id="map" >
</div>
@endsection