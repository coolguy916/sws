<!-- Modal -->
<div class="modal fade" id="addimages" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{ route('add.slider') }}" method="POST" id="addslider">
        @csrf
        <input type="hidden" name="slider_id" id="slider_id"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add/Edit Image Slider</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="body" class="col-sm-3 text-right control-label col-form-label">Judul Singkat:</label>
                        <div class="col-sm-9">
                            <textarea name="body" id="body" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sub" class="col-sm-3 text-right control-label col-form-label">Judul Singkat:</label>
                        <div class="col-sm-9">
                            <textarea name="sub" id="sub" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Image Slider:</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 text-right control-label col-form-label">Status Image:</label>
                        <div class="col-sm-9">
                            <select name="status" id="status" class="form-control">
                                <option value="1">ONLINE</option>
                                <option value="0">OFFLINE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save_image">Save Image Slider</button>
                </div>
            </div>
        </div>
    </form>
</div>
