@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <h2>Evenementen beheer</h2>
    <table class="table">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Startdatum</th>
                    <th>Prijs</th>
                    <th>Locatie</th>
                    <th>Adres</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td><a href="{{ route('events.show', $event->id)}}">{{ $event->name }}</a></td>
                    <td>{{ $event->event_start }}</td>
                    <td>€{{ $event->price }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        {{-- <div class="card-body">
            <h5 class="card-title">{{ $event->name }}</h5>
            
            <p class="card-text"><b>Datum: </b>{{ $event->event_start }}</p>
            <a href="#" class="btn btn-primary">Bestel Tickets!</a>
        </div> --}}
        <a href="{{route('events.create')}}" class="btn btn-primary">Nieuw evenement aanmaken</a>
</div>
@endsection