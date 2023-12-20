<!-- Modal -->
<div class="modal fade" id="addfoot" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{ route('add.footer') }}" method="POST" id="addfooter">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Konten Footer</h1>
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
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Deskripsi Singkat:</label>
        <div class="col-sm-9">
            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
        </div>
    </div>
      <div class="form-group row">
        <label for="text" class="col-sm-3 text-right control-label col-form-label">Alamat:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Tuliskan Judul Deskripsi" required>
            <!-- error message untuk title -->
            @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

      <div class="form-group row">
        <label for="text" class="col-sm-3 text-right control-label col-form-label">email:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Tuliskan Judul Deskripsi" required>
            <!-- error message untuk title -->
            @error('judul')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

      <div class="form-group row">
        <label for="text" class="col-sm-3 text-right control-label col-form-label">No hp:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Tuliskan Judul Deskripsi" required>
            <!-- error message untuk title -->
            @error('phone')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

      <div class="form-group row">
        <label for="text" class="col-sm-3 text-right control-label col-form-label">Link Instagram:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" placeholder="Tuliskan Judul Deskripsi" required>
            <!-- error message untuk title -->
            @error('instagram')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

      <div class="form-group row">
        <label for="text" class="col-sm-3 text-right control-label col-form-label">Yotube:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="youtube" name="youtube" placeholder="Tuliskan Judul Deskripsi" required>
            <!-- error message untuk title -->
            @error('youtube')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

     <div class="form-group row">
      <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Logo :</label>
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
                        <button type="button" class="btn btn-primary add_footer">Save Fitur</button>
                    </div>
                </div>
            </div>
    </form>
</div>
