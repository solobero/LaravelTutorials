@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Register Fish</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('fish.save') }}">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
              </div>
              <div class="form-group">
                <label for="weight">Weight</label>
                <input type="text" id="weight" class="form-control mb-2" placeholder="Enter weight" name="weight" value="{{ old('weight') }}" />
              </div>
              <div class="form-group">
                <label for="species">Species</label>
                <select id="species" class="form-control mb-2" name="species">
                  <option value="">Select species</option>
                  <option value="Sapo perro" {{ old('species') == 'Sapo perro' ? 'selected' : '' }}>Sapo perro</option>
                  <option value="Cabezón" {{ old('species') == 'Cabezón' ? 'selected' : '' }}>Cabezón</option>
                </select>
              </div>
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
