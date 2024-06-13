<!-- Modal Form -->
<div class="modal fade" id="addimages" tabindex="-1" aria-labelledby="addImageLabel" aria-hidden="true">
    <form id="addslider" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="slider_id" name="slider_id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addImageLabel">Add Image Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="body">Body</label>
                        <input type="text" id="body" name="body" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sub">Sub</label>
                        <input type="text" id="sub" name="sub" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-control">
                            <option value="1">ONLINE</option>
                            <option value="0">OFFLINE</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save_image" data-action="add">Save Image Slider</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Buttons to Trigger Modal for Adding and Editing Image -->
