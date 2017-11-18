@extends('layouts.app')

@section('content')

    <h1>Accommodations</h1>


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

@endsection