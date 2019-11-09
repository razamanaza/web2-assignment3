@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Edit Workout Type</h2>
  <form action="{{ url('workout-types/' . $workout_type->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="name">Workout name</label>
      <input type="text" id="name" class="form-control {{ $errors->has('target') ? 'isname' : '' }}" name="name" value="{{ $workout_type->name }}" required>
    </div>
    <div class="form-group">
      <input type="color" id="color" class="form-control {{ $errors->has('color') ? 'isname' : '' }}" name="color" value="{{ $workout_type->color }}" required>
      <label for="color">Color</label>
    </div>
    <div class="form-check">
      <input type="checkbox" id="has_distance" class="form-check-input" name="has_distance" {{ $workout_type->has_distance ? "checked" : ""}}>
      <label for="has_distance" class="form-check-label">Has distance?</label>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
  @include('errors')
</div>
@endsection