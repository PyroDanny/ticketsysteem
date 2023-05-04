@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <h2>Evenement aanmaken</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('events.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Titel</label>
            <input type="text" name="name" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="text" name="photo" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="event_start">Startdatum</label>
            <input type="datetime-local" name="event_start" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="event_end">Einddatum</label>
            <input type="datetime-local" name="event_end" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="max_tickets">Hoeveelheid tickets</label>
            <input type="number" min="0" step="any" name="max_tickets" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="location">Plaats</label>
            <input type="text" name="location" class="form-control" id="">
        </div>        

        <div class="form-group">
            <label for="address">Adres</label>
            <input type="text" name="address" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="zip">Postcode</label>
            <input type="text" name="zip" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="price">Ticketprijs</label>
            <input type="number" min="0" step="any" name="price" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="preorder_price">Pre-order prijs</label>
            <input type="number" min="0" step="any" name="preorder_price" class="form-control" id="">
        </div>
        
        <div class="form-group">
            <label for="description">Beschrijving</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        

        <div class="form-group">
            <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
        </div>
    </form>

</div>
@endsection