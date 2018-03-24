@extends('layouts.app')

@section('content')
    <h1>Book now!</h1>    

    <form action="/bookings" method="post">
        
        {{ csrf_field() }}

        
        <p> 
            Select user: 
            <select name="user">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name}}</option>
                @endforeach
            </select> 
        </p>

        <p> 
            Select room: 
            <select name="room">
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->title}}</option>
                @endforeach
            </select> 
        </p>
        <p>
            Date Start: <input type="date" name="date_start" value="2018-03-24">
        </p>
        <p>
            Date End: <input type="date" name="date_end" value="2018-03-27">
        </p>

        <input type="submit" value="Book now">

    </form>
@endsection
