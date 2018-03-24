
@extends('layouts.app')

@section('content')



    <h1>Accommodations</h1>

    <a href="/accommodations/create">Create</a>
    

    <table class="table table-bordered">
        <tr>
            <th> ID </th>
            <th> Title </th>
            <th> City </th>
            <th> Description </th>
            <th> Nr rooms </th>
            <th> Actions </th>
        </tr>

    @foreach ($accommodations as $accommodation)
        <tr>
            <td> {{ $accommodation->id }} </td>
            <td> 
                <a href="/accommodations/{{ $accommodation->id}}">
                    {{ $accommodation->title }}
                </a> 
            </td>
            <td> {{ $accommodation->city }} </td>
            <td> {{ $accommodation->description }} </td>
            <td> 
                {{ $accommodation->rooms->count() }}
                </td>
            <td> 
                <a href="/accommodations/{{ $accommodation->id }}/edit" class="btn btn-primary">Edit</a>
                </td>
        </tr>
    @endforeach
    </table>

@endsection

