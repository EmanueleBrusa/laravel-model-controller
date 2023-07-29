@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4"> 
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="Comic Thumbnail">
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <h2 class="comic-title">{{ $comic->title }}</h2>
                <p class="comic-info">Genere: {{ $comic->type }}</p>
                <p class="comic-info">Prezzo: {{ $comic->price }}</p>
                <p class="comic-info">Serie: {{ $comic->series }}</p>
                <p class="comic-info">Data di uscita: {{ $comic->sale_date }}</p>
                <button type="button" class="btn custom-btn-shadow" data-toggle="button" aria-pressed="false" autocomplete="off">
                Find a DC comic shop near you
                </button>
                <button type="button" class="btn custom-btn-shadow" data-toggle="button" aria-pressed="false" autocomplete="off">
                Join the DC Universe
                </button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <p class="comic-description">{{ $comic->description }}</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12 col-md-6">
                <p class="comic-info"><strong>Autori:</strong> {{ $comic->writers }}</p>
            </div>
            <div class="col-12 col-md-6">
                <p class="comic-info"><strong>Disegnatori:</strong> {{ $comic->artists }}</p>
            </div>
        </div>
    </div>
@endsection
