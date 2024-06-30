@extends('layouts.layAdmin')
@section('content')
@include('Admin.landingpage.fitur.add_fitur_modal')
@include('Admin.landingpage.fitur.update_fitur_modal')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
           
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-2">
                        {{ __('Fitur-fitur ') }}
                    </h2>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#createFiturModal">
                            <i class="fas fa-plus"></i> Add Fitur
                        </button>
                        
                    </div>
                </div>
                <div class="card-body overflow-auto">
               
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>judul</th>
                                <th>Deskripsi</th>
                                <th>icon</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                    $no = 1;
                                    @endphp
                            @foreach ($fitur as $item )
                            <tr class="fitur-row" data-id="{{ $item->id }}">

                            <td>{{ $item->id }}</td>
                            <td> <img src="{{ asset('storage/' . $item->image) }}" width="100"></td>
                            <td>{{ implode(', ', json_decode($item->judul)) }}</td>
                            <td>{{ implode(', ', json_decode($item->deskripsi)) }}</td>
                            <td>{{ implode(', ', json_decode($item->icon)) }}</td>                           
                            <td>

                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFiturModal{{ $item->id }}">Edit</a>
                                <form action="{{ route('fitur.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>                         
                            </td>

                            </tr>
                                <!-- Edit Modal -->
                    <div class="modal fade" id="editFiturModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editFiturModalLabel{{ $item->id }}"  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editFiturModalLabel{{ $item->id }}">Edit Fitur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('fitur.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div id="form-judul-container{{ $item->id }}">
                                            @foreach (json_decode($item->judul) as $judul)
                                                <div class="form-group">
                                                    <label for="judul">Judul</label>
                                                    <input type="text" class="form-control" name="judul[]" value="{{ $judul }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-secondary" onclick="addFormJudul({{ $item->id }})">Add Judul</button>
                                        <div id="form-deskripsi-container{{ $item->id }}">
                                            @foreach (json_decode($item->deskripsi) as $deskripsi)
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <input type="text" class="form-control" name="deskripsi[]" value="{{ $deskripsi }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-secondary" onclick="addFormDeskripsi({{ $item->id }})">Add Deskripsi</button>
                                        <div id="form-icon-container{{ $item->id }}">
                                            @foreach (json_decode($item->icon) as $icon)
                                                <div class="form-group">
                                                    <label for="icon">Icon</label>
                                                    <input type="text" class="form-control" name="icon[]" value="{{ $icon }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-secondary" onclick="addFormIcon({{ $item->id }})">Add Icon</button>
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

<div class="pagination justify-content-center">
            
</div>                </div>
            </div>
        </div>

       
      
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<div class="modal fade" id="createFiturModal" tabindex="-1" role="dialog" aria-labelledby="createFiturModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFiturModalLabel">Create Fitur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fitur.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
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
                    <div id="form-icon-container">
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" name="icon[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormIcon()">Add Icon</button>
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

@endsection
