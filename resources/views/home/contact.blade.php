@extends('layouts.app')

@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2>Contact Information</h2>
            <p><strong>Email:</strong> {{ $viewData['email'] }}</p>
            <p><strong>Address:</strong> {{ $viewData['address'] }}</p>
            <p><strong>Phone:</strong> {{ $viewData['phone'] }}</p>
        </div>
    </div>
</div>
@endsection
