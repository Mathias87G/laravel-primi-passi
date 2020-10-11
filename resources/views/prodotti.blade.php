@php

$cards = config('prodotti');
$lunghe = [];
$corte = [];
$cortissime = [];

foreach ($cards as $card) {
  if($card['tipo'] == 'lunga'){
    $lunghe[] = $card;
  } else if ($card['tipo'] == 'corta'){
    $corte[] = $card;
  } else if ($card['tipo'] == 'cortissima'){
    $cortissime[] = $card;
  }
}
@endphp

  @extends('layout.app')

  @section('titolo', 'Prodotti')


  @section('main')
            <div class="cards">
              <h2>Le lunghe</h2>
              <div class="cards-ctr">
                @foreach ($lunghe as $card)
                  <div class="card">
                    <img src="{{ $card['src']}}" alt="{{ $card['titolo']}}">
                    <div class="card-layover">
                      <h3>{{ $card['titolo']}}</h3>
                      <i class="fas fa-utensils"></i>
                    </div>
                  </div>
                @endforeach
              </div>
              <h2>Le corte</h2>
              <div class="cards-ctr">
                @foreach ($corte as $card)
                  <div class="card">
                    <img src="{{ $card['src']}}" alt="{{ $card['titolo']}}">
                    <div class="card-layover">
                      <h3>{{ $card['titolo']}}</h3>
                      <i class="fas fa-utensils"></i>
                    </div>
                  </div>
                @endforeach
              </div>
              <h2>Le cortissime</h2>
              <div class="cards-ctr">
                @foreach ($cortissime as $card)
                  <div class="card">
                    <img src="{{ $card['src']}}" alt="{{ $card['titolo']}}">
                    <div class="card-layover">
                      <h3>{{ $card['titolo']}}</h3>
                      <i class="fas fa-utensils"></i>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
  @endsection
