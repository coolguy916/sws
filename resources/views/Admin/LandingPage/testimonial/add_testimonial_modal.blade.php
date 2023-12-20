<!-- Modal -->
<div class="modal fade" id="addtesti" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{ route('add.testimoni') }}" method="POST" id="addtestimoni">
        @csrf
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
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="Tuliskan nama   " required>
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

   

   
                 



                       

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary add_testimoni  ">Save Kontak Website</button>
                    </div>
                </div>
            </div>
    </form>
</div>
