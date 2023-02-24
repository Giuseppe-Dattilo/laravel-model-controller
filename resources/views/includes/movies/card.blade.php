@if (isset($movie))
<div class="card mx-2 my-3" style="width: 18rem;">
    <div class="card-body bg-light">
    <strong><h5 class="card-title fw-bold">{{$movie->title}}</h5></strong>
    <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
    <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
    <div><strong class="card-text">Anno: {{$movie->date}}</strong></div>
    <div><strong class="card-text">Voto: {{$movie->vote}}</strong></div>
    <a href="{{ url("/movies/ {$movie->id}") }}" class="card-link">scopri di più</a>
    </div>
</div>
@endif