@extends('layouts.base')
@section('content')
<h1>Dashboard</h1>
<h2>Evenementen beheer</h2>
<div class="container">
    <div class="card">
        <table>
            <tr>
                <th>Naam</th>
                <th>Startdatum</th>
                <th>Prijs</th>
                <th>Adres</th>
                <th>Beschrijving</th>
            </tr>
        </table>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td><a href="{{ route('events.show', $event->id)}}">{{ $event->title }}</a></td>
                <td>{{ $event->event_start }}</td>
                <td>{{ $event->price }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->description }}</td>
            </tr>
        </tbody>
        {{-- <div class="card-body">
            <h5 class="card-title">{{ $event->name }}</h5>
            
            <p class="card-text"><b>Datum: </b>{{ $event->event_start }}</p>
            <a href="#" class="btn btn-primary">Bestel Tickets!</a>
        </div> --}}
    </div>
</div>
    
@endforeach
@endsection