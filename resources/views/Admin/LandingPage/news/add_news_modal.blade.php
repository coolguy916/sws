<!-- Modal -->
<div class="modal fade" id="news" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form id="addnews" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="news_id" id="news_id"> 

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan/Edit Keunggulan Website</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="">

                    </div>
                     <div class="form-group row">
        <label for="text" class="col-sm-3 text-right control-label col-form-label">Judul:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="Tuliskan Judul Deskripsi" required>
            <!-- error message untuk title -->
            @error('judul')
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
      <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Icon:</label>
        <div class="col-sm-9">
     <input type="file" name="icon" id="icon" class="form-control @error('icon')
                                    is-invalid
                                @enderror" value="{{old('icon')}}" aria-describedby="emailHelp">@error('icon')
                                    {{$message}}
                                    @enderror
                                    </div>
                   </div>

     <div class="form-group row">
      <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Imge Fitur:</label>
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
                        <button type="button" class="btn btn-primary save_news">Save News Website</button>
                    </div>
                </div>
            </div>
    </form>
</div>
