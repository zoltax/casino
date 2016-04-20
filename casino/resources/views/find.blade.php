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
                content: '<p>Casino name: <b>{{ $casino->name }}</b></p><p>Distance: <b>{{ $casino->distance }} </b></p>'
            }
        });
        @endforeach

    });
    </script>
@endsection


@section('content')

    <p><a class="btn btn-primary btn-link" href="/casino/add" role="button">Add a new casino</a></p>

    @foreach($casinos as $casino)
        <div class="row">
            This is a {{ $casino->name }}
            Longitude {{ $casino->longitude }}
            Latitude {{ $casino->latitude }}
            Distance {{ $casino->distance }}
        </div>
    @endforeach



@endsection


@section('map')

<div id="map" >
</div>
@endsection