<!-- Modal -->
<div class="modal fade" id="kontak" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form id="addkontak" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="kontak_id" id="kontak_id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Keunggulan Website</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="">

                    </div>
                     <div class="form-group row">
        <label for="text" class="col-sm-3 text-right control-label col-form-label">link:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" placeholder="Tuliskan Link Button " required>
            <!-- error message untuk title -->
            @error('link')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
 <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Deskripsi:</label>
        <div class="col-sm-9">
            <textarea name="teks" id="teks" class="form-control"></textarea>
        </div>
    </div>

   

     <div class="form-group row">
      <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Image:</label>
        <div class="col-sm-9">
     <input type="file" name="image" id="image" class="form-control @error('image')
                                    is-invalid
                                @enderror" value="{{old('image')}}" aria-describedby="emailHelp">@error('image')
                                    {{$message}}
                                    @enderror
                                    </div>
                   </div>
    
      <div class="form-group row">
      <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Status Image</label>
        <div class="col-sm-9">
    <select name="status" id="status" aria-label="Default select example" class="form-control" >
                                                        <option value="1">ONLINE</option>
                                                        <option value="0">OFFLINE</option>
                                                    </select>
                                    </div>
                   </div>
    
                 



                       

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary save_kontak">Save Kontak Website</button>
                    </div>
                </div>
            </div>
    </form>
</div>
