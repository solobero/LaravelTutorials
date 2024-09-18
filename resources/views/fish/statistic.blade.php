@extends('layouts.app')
@section('title', 'Fish Statistics')
@section('subtitle', 'Statistics of Fish')
@section('content')
<div class="container">
    <h1>Fish Statistics</h1>
    
    <h3>Number of Fish by Species:</h3>
    <ul>
        @foreach ($speciesCount as $species)
            <li>{{ $species->species }}: {{ $species->count }}</li>
        @endforeach
    </ul>

    <h3>Largest Weight Recorded:</h3>
    <p>{{ number_format($maxWeight, 2) }} kg</p>
</div>
@endsection
