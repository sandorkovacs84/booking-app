@extends('layouts.app')

@section('content')

<h1>All bookings</h1>

<table class="table table-bordered"> 
    <tr>
        <th> ID </th>
        <th> User </th>
        <th> Room </th>
        <th> Hotel </th>
        <th> Period</th>
    </tr>

    @foreach ($bookings as $booking)
        <tr>
            <td> {{ $booking->id }} </td>
            <td> {{ $booking->user->name }} - {{ $booking->user->email }}</td>
            <td> {{ $booking->room->title }}  </td>
            <td> {{ $booking->room->accommodation->title }} </td>
            <td> {{ $booking->date_start }} - {{ $booking->date_end }}</td>
        </tr>
    @endforeach

</table>

@endsection