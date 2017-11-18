@extends('layouts.app')

@section('content')

    <h1>Rooms</h1>


    <table class="table table-bordered">
        <tr>
            <th> ID </th>
            <th> Title </th>
            <th> Accommodation </th>
            <th> Actions </th>
        </tr>

    @foreach ($rooms as $room)
        <tr>
            <td> {{ $room->id }} </td>
            <td> {{ $room->title }} </td>
            <td> {{ $room->accommodation_id }} </td>
            <td> 
            
             </td>
        </tr>
    @endforeach
    </table>

@endsection