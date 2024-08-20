@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2>Contact Information</h2>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Address:</strong> {{ $address }}</p>
            <p><strong>Phone:</strong> {{ $phone }}</p>
        </div>
    </div>
</div>
@endsection
