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
                    <input type="time" class="form-control" id="schedule" name="schedule"
                        style="padding: 10px; border: 2px solid #ccc;">
                </div>
            </div>
            <div class="form-group row">
                <label for="moduleLocation"
                    class="col-sm-3 text-end control-label col-form-label">Module Location</label>
                <div class="col-sm-9">
                    <select name="modulelocation" id="modulelocation" style="width:100%; padding: 10px; border: 2px solid #ccc;">
                        <option selected disabled>Select Location Module</option>
                        <option value="">Module 1</option>
                        <option value="">Module 2</option>
                        <option value="">Module 3</option>
                        <option value="">Module 4</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>
