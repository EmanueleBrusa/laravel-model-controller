@extends('layouts.app')

@section('content')
    <div class="contaniner">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center dc-comics-title">DC Comics</h2>
            </div>
            <div class="row mt-5">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{ route('comic.show', $comic->id) }}">
                            <div class="card my-3">
                                <img class="img-fluid" src="{{ $comic->thumb }}" alt="comic-img">
                    
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>{{ $comic->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
