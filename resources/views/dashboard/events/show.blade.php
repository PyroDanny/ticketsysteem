@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <h2>Evenement details</h2>
    <hr>
    <h3>{{ $event->name }}</h3>
    <p><b>Start: </b>{{ $event->event_start }}</p>
    <p><b>Adres: </b>{{ $event->address }}</p>
    <p><b>Postcode: </b>{{ $event->zip }}</p>
    <p><b>Locatie: </b>{{ $event->location }}</p>
    <p><b>Ticketprijs: </b>{{ $event->price }}</p>

    <div class="buttons">
        <a href="{{route('events.edit', $event->id)}}" class="btn btn-info">Aanpassen</a>
        <form action="{{route('events.destroy', $event->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Verwijderen" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection