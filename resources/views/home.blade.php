@extends('layouts.main')

@section('title','Home')

@section('main-content')
   

    <section id="movies">
        <div class="container">
            <h2 class="mt-5 ms-2">Home</h2>
            <div class="d-flex flex-wrap">
                @forelse ( $movies as $movie )
                   @include('includes.movies.card')
                    @empty
                    <h2>Nessun film disponibile</h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection
    

     