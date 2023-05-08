@extends('layouts.base')
@section('content')
<h1>Upcoming Events!</h1>
@foreach ($events as $event)
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $event->name }}</h5>
            <p class="card-text"><b>Datum: </b>{{ $event->event_start }}</p>
            <a href="#" class="btn btn-primary">Bestel Tickets!</a>
        </div>
    </div>
</div>
    
@endforeach
@endsection