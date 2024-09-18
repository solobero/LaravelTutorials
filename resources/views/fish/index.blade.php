@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["fishes"]->sortBy('weight') as $fish)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <div class="card-body text-center">
      <p class="card-text">
        <strong>ID: {{ $fish->id }}</strong>
      </p>
        <h5 class="card-title">
          @if ($fish->species == 'Cabezón')
            <strong>{{ $fish->name }}</strong>
          @else
            {{ $fish->name }}
          @endif
        </h5>
        <p class="card-text">
          @if ($fish->species == 'Sapo perro')
            <span style="color: blue;">Weight: {{ $fish->weight }} kg</span>
          @else
            Weight: {{ $fish->weight }} kg
          @endif
        </p>
        <p class="card-text">
          Specie: {{ $fish->species }}
        </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
