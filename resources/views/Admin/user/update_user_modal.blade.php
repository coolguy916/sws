<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="POST" id="updateproductform">
        @csrf

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Update User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="errMsgContainer">

                    </div>
                   <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Role</label>
    <select class="form-control" name="up_role" id="up_role">
        <option value="user"  {{ old('up_role') == 'user' ? 'selected' : '' }}">User</option>
        <option value="admin" {{ old('up_role') == 'admin' ? 'selected' : '' }}">Admin</option>
    </select>
</div>

                  
                             


                    <div class="mb-3">
                    @foreach ($users as $row )
                                                <input type="hidden" id="up_id" name="up_id" value="{{ $row->id}}">

                    @endforeach
                    </div> 


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_user">Update User</button>
                </div>
            </div>
        </div>
    </form>
</div>
