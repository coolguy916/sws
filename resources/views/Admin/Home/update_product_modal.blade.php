<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="POST" id="updateproductform">
        @csrf
        <input type="hidden" id="up_id">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Update Module</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="errMsgContainer">

                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-sm-3 text-end control-label col-form-label">Location </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="up_lokasi" name="up_lokasi" placeholder="Tuliskan tempat module" required>
                        </div>
                    </div>

                    

                    <div class="mb-3">
                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_product">Update Module</button>
                </div>
            </div>
        </div>
    </form>
</div>
