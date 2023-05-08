@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <h2>Evenement aanpassen</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('events.update', $event->id) }}">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="name">Titel</label>
            <input type="text" value="{{ $event->name }}" name="name" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="text" value="{{ $event->photo }}" name="photo" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="event_start">Startdatum</label>
            <input type="datetime-local" value="{{ $event->event_start }}" name="event_start" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="event_end">Einddatum</label>
            <input type="datetime-local" value="{{ $event->event_end }}" name="event_end" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="max_tickets">Hoeveelheid tickets</label>
            <input type="number" value="{{ $event->max_tickets }}" min="0" step="any" name="max_tickets" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="location">Plaats</label>
            <input type="text" value="{{ $event->location }}" name="location" class="form-control" id="">
        </div>        

        <div class="form-group">
            <label for="address">Adres</label>
            <input type="text" value="{{ $event->address }}" name="address" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="zip">Postcode</label>
            <input type="text" value="{{ $event->zip }}" name="zip" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="price">Ticketprijs</label>
            <input type="number" value="{{ $event->price }}" min="0" step="any" name="price" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="preorder_price">Pre-order prijs</label>
            <input type="number" value="{{ $event->preorder_price }}" min="0" step="any" name="preorder_price" class="form-control" id="">
        </div>
        
        <div class="form-group">
            <label for="description">Beschrijving</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $event->description }}</textarea>
        </div>
        

        <div class="form-group">
            <input class="mt-4 btn btn-primary" type="submit" value="Updaten">
        </div>
    </form>

</div>
@endsection