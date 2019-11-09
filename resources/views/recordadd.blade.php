@extends('layouts.app')

@section('head')
<script>
  function workoutDistanceCheck() {
    var workout_types = <?php echo json_encode($workout_types)?>;
    var workout_id = $('#workout-name').val();
    var workout = workout_types.find(e => {return e.id == workout_id});
    if(workout.has_distance) {
      $('#workout-distance-fg').removeClass('hide');
    } else {
      $('#workout-distance-fg').addClass('hide');
      $('#workout-distance').val('');
    }
  }
</script>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Add Record</div>

        <div class="card-body recordadd">

          <ul class="nav nav-tabs" id="Records">
            <li class="nav-item">
              <a class="nav-link active" id="workout-tab" data-toggle="tab" href="#workout">Workout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="food-tab" data-toggle="tab" href="#food">Food / Alcohol</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="other-tab" data-toggle="tab" href="#other">Other</a>
            </li>
          </ul>
          <div class="tab-content" id="RecordsContent">
            <div class="tab-pane fade show active" id="workout">
              @include('records.workout')
            </div>
            <div class="tab-pane fade" id="food">
              @include('records.food')
            </div>
            <div class="tab-pane fade" id="other">
              @include('records.other')
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
