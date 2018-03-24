@extends('layouts.app')

@section('content')

    <h1>{{ $accommodation->title }} {{ $accommodation->city }}</h1>
    <input type="hidden" class="js-address" value="{{ $accommodation->title }} {{ $accommodation->city }}">

    <div id="map" style="width:100%;height:300px;"></div>
    
    @if (count($accommodation->rooms))
        <h3>Rooms ({{ $accommodation->rooms->count() }})</h3>

        <a href="/rooms/create/{{ $accommodation->id}}">Add new room</a>
        
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
            </tr>

            @foreach ($accommodation->rooms as $room )
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->title }}</td>
                </tr>       
            @endforeach

        </table>
    @else 
        <p>No rooms are available. <a href="/rooms/create/{{ $accommodation->id}}">Add new room</a></p>   
    @endif

    <h3>Description</h3>
    <p>{{ $accommodation->description }}</p>


      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_api_key') }}">
      </script>
  


@endsection