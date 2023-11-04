{{-- Add Schedule Modal --}}
<div class="modal fade" id="addSchedule" tabindex="-1" aria-labelledby="addScheduleLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="{{route('schedule.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label for="schedule"
                        class="col-sm-3 text-end control-label col-form-label">Set Schedule</label>
                    <div class="col-sm-9">
                        <input type="time" class="form-control @error('schedule') is-invalid @enderror" value="{{old('schedule')}}" id="schedule" name="schedule"
                            style="padding: 10px; border: 2px solid #ccc;">
                        @error('schedule')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="runtime"
                        class="col-sm-3 text-end control-label col-form-label">Runtime</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="number" class="form-control @error('runtime') is-invalid @enderror" value="{{old('runtime')}}" max="99" id="runtime" name="runtime"
                            placeholder="Enter Here"
                            style="padding: 10px; border: 2px solid #ccc;">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Minutes</div>
                            </div>
                        </div>
                        @error('runtime')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_module"
                        class="col-sm-3 text-end control-label col-form-label">Module Location</label>
                    <div class="col-sm-9">
                        <select name="id_module" id="id_module" style="width:100%; padding: 10px; border: 2px solid #ccc;">
                            <option selected disabled>Select Location Module</option>
                            @foreach ($modules as $mdl)
                                <option value="{{ $mdl->id }}">{{ $mdl->lokasi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
