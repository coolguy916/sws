
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
 <form action="" method="POST" id="addproductform">
 @csrf
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Module</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="errMsgContainer">
        
        </div>

        <div class="form-group mt-2">
        <label for="name">Location Module</label>
        <input type="text" class="form-control" name="lokasi" id="lokasi">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_product">Save Module</button>
      </div>
    </div>
  </div>
 </form>
</div>