<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{ route('add.module') }}" method="POST" id="addproductform">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Module</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="">

                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-sm-3 text-end control-label col-form-label">Location </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                                value="{{ old('lokasi') }}" id="lokasi" name="lokasi"
                                placeholder="Tuliskan tempat module" required>

                            <!-- error message untuk title -->
                            @error('lokasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-sm-3 text-end control-label col-form-label">User </label>
                        <div class="col-sm-9">
                            <select class="form-control @error('user_id') is-invalid @enderror" name="user_id"
                                id="user_id">
                                <option value="">Pilih User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

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
