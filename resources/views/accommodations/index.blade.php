@extends('layouts.app')

@section('content')



    <h1>Accommodations</h1>


            
            <div id="map" style="width:100%;height:400px;"></div>


            <script>
      function initMap() {
        var uluru = {lat: 47.0628284, lng: 21.9116};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <table class="table table-bordered">
        <tr>
            <th> ID </th>
            <th> Title </th>
            <th> Description </th>
            <th> Nr rooms </th>
            <th> Actions </th>
        </tr>

    @foreach ($accommodations as $accommodation)
        <tr>
            <td> {{ $accommodation->id }} </td>
            <td> {{ $accommodation->title }} </td>
            <td> {{ $accommodation->description }} </td>
            <td> 
                {{ $accommodation->rooms->count() }}
                @foreach ($accommodation->rooms as $room)
                    <br> {{ $room->title }}
                @endforeach
             </td>
            <td> 
            
             </td>
        </tr>
    @endforeach
    </table>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_api_key') }}&callback=initMap"  type="text/javascript"></script>

@endsection