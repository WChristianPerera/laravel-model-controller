<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
      <p class="card-text">{{ $movie->nationality}}</p>
      <p class="card-text">{{ $movie->date }}</p>
      <p class="card-text">{{ $movie->vote }}</p>
    </div>
</div>