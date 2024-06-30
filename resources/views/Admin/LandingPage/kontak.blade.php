@extends('layouts.layAdmin')

@section('content')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row"></div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-2">{{ __('Kontak') }}</h2>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-dark btn-sm" id="addkontakButton" data-bs-toggle="modal" data-bs-target="#createKontakModal">
                            <i class="fas fa-plus"></i> Add kontak
                        </button>
                    </div>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Text</th>
                                <th>Keterangan</th>
                                <th>Link</th>
                                <th>Icon</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($kontaks as $kontak)
                                <tr class="kontak-row" data-id="{{ $kontak->id }}">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $kontak->text }}</td>
                                    <td>{{ $kontak->keterangan }}</td>
                                    <td>{{ $kontak->link }}</td>
                                    <td>{{ implode(', ', json_decode($kontak->icon)) }}</td>
                                    <td>{{ implode(', ', json_decode($kontak->judul)) }}</td>
                                    <td>{{ implode(', ', json_decode($kontak->deskripsi)) }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editKontakModal{{ $kontak->id }}">Edit</a>

                                        <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade"id="editKontakModal{{ $kontak->id }}" tabindex="-1" role="dialog"  aria-labelledby="editKontakModalLabel{{ $kontak->id }}"  aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"id="editKontakModalLabel{{ $kontak->id }}">Edit Fitur</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('kontak.update', $kontak->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="text">Text</label>
                                                        <input type="text" class="form-control" name="text" value="{{ $kontak->text }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keterangan">Keterangan</label>
                                                        <input type="text" class="form-control" name="keterangan" value="{{ $kontak->keterangan }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="link">Link</label>
                                                        <input type="text" class="form-control" name="link" value="{{ $kontak->link }}">
                                                    </div>
                                                    <div id="form-icon-container{{ $kontak->id }}">
                                                        @foreach (json_decode($kontak->icon) as $icon)
                                                            <div class="form-group">
                                                                <label for="icon">Icon</label>
                                                                <input type="text" class="form-control" name="icon[]" value="{{ $icon }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormIcon({{ $kontak->id }})">Add Icon</button>
                                                    <div id="form-judul-container{{ $kontak->id }}">
                                                        @foreach (json_decode($kontak->judul) as $judul)
                                                            <div class="form-group">
                                                                <label for="judul">Judul</label>
                                                                <input type="text" class="form-control" name="judul[]" value="{{ $judul }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormJudul({{ $kontak->id }})">Add Judul</button>
                                                    <div id="form-deskripsi-container{{ $kontak->id }}">
                                                        @foreach (json_decode($kontak->deskripsi) as $deskripsi)
                                                            <div class="form-group">
                                                                <label for="deskripsi">Deskripsi</label>
                                                                <input type="text" class="form-control" name="deskripsi[]" value="{{ $deskripsi }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormDeskripsi({{ $kontak->id }})">Add Deskripsi</button>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            @endforeach
                        </tbody>
                    </table>

                    <div class="pagination justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createKontakModal" tabindex="-1" role="dialog" aria-labelledby="createKontakModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createKontakModalLabel">Create Kontak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" class="form-control" name="text">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link">
                    </div>
                    <div id="form-icon-container">
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" name="icon[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormIcon()">Add Icon</button>
                    <div id="form-judul-container">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormJudul()">Add Judul</button>
                    <div id="form-deskripsi-container">
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormDeskripsi()">Add Deskripsi</button>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function addFormJudul(id = '') {
        var container = id ? '#form-judul-container' + id : '#form-judul-container';
        var html = '<div class="form-group"><label for="judul">Judul</label><input type="text" class="form-control" name="judul[]"></div>';
        $(container).append(html);
    }

    function addFormDeskripsi(id = '') {
        var container = id ? '#form-deskripsi-container' + id : '#form-deskripsi-container';
        var html = '<div class="form-group"><label for="deskripsi">Deskripsi</label><input type="text" class="form-control" name="deskripsi[]"></div>';
        $(container).append(html);
    }

    function addFormIcon(id = '') {
        var container = id ? '#form-icon-container' + id : '#form-icon-container';
        var html = '<div class="form-group"><label for="icon">Icon</label><input type="text" class="form-control" name="icon[]"></div>';
        $(container).append(html);
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var addFooterButton = document.getElementById('addkontakButton');
        
        var footersExist = @json($kontaks->isNotEmpty());

        if (footersExist) {
            addFooterButton.disabled = true;
            addFooterButton.classList.add('disabled'); 
        }
    });
</script>

<style>
    .btn.disabled {
        pointer-events: none;
        opacity: 0.5;
    }
</style>


@endsection
