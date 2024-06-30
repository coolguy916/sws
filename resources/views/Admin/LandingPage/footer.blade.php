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
                    <h2 class="card-title mb-2">{{ __('Footer') }}</h2>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#createFooterModal">
                            <i class="fas fa-plus"></i> Add Footer
                        </button>
                    </div>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Icon Tulisan</th>
                                <th>Keterangan</th>
                                <th>Icon Link</th>
                                <th>Link</th>
                                <th>Nama Link Website</th>
                                <th>Link Website</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($footers as $footer)
                                <tr class="footer-row" data-id="{{ $footer->id }}">
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset('storage/' . $footer->image) }}" width="100"></td>
                                    <td>{{ implode(', ', json_decode($footer->icon_tulisan)) }}</td>
                                    <td>{{ implode(', ', json_decode($footer->keterangan)) }}</td>
                                    <td>{{ implode(', ', json_decode($footer->icon_link)) }}</td>
                                    <td>{{ implode(', ', json_decode($footer->link)) }}</td>
                                    <td>{{ implode(', ', json_decode($footer->nama_link_website)) }}</td>
                                    <td>{{ implode(', ', json_decode($footer->link_website)) }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFooterModal{{ $footer->id }}">Edit</a>
                                        <form action="{{ route('footer.destroy', $footer->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editFooterModal{{ $footer->id }}" tabindex="-1" role="dialog" aria-labelledby="editFooterModalLabel{{ $footer->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editFooterModalLabel{{ $footer->id }}">Edit Footer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('footer.update', $footer->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                    <div id="form-icon-tulisan-container{{ $footer->id }}">
                                                        @foreach (json_decode($footer->icon_tulisan) as $icon_tulisan)
                                                            <div class="form-group">
                                                                <label for="icon_tulisan">Icon Tulisan</label>
                                                                <input type="text" class="form-control" name="icon_tulisan[]" value="{{ $icon_tulisan }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormIconTulisan({{ $footer->id }})">Add Icon Tulisan</button>
                                                    <div id="form-keterangan-container{{ $footer->id }}">
                                                        @foreach (json_decode($footer->keterangan) as $keterangan)
                                                            <div class="form-group">
                                                                <label for="keterangan">Keterangan</label>
                                                                <input type="text" class="form-control" name="keterangan[]" value="{{ $keterangan }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormKeterangan({{ $footer->id }})">Add Keterangan</button>
                                                    <div id="form-icon-link-container{{ $footer->id }}">
                                                        @foreach (json_decode($footer->icon_link) as $icon_link)
                                                            <div class="form-group">
                                                                <label for="icon_link">Icon Link</label>
                                                                <input type="text" class="form-control" name="icon_link[]" value="{{ $icon_link }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormIconLink({{ $footer->id }})">Add Icon Link</button>
                                                    <div id="form-link-container{{ $footer->id }}">
                                                        @foreach (json_decode($footer->link) as $link)
                                                            <div class="form-group">
                                                                <label for="link">Link</label>
                                                                <input type="text" class="form-control" name="link[]" value="{{ $link }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormLink({{ $footer->id }})">Add Link</button>
                                                    <div id="form-nama-link-website-container{{ $footer->id }}">
                                                        @foreach (json_decode($footer->nama_link_website) as $nama_link_website)
                                                            <div class="form-group">
                                                                <label for="nama_link_website">Nama Link Website</label>
                                                                <input type="text" class="form-control" name="nama_link_website[]" value="{{ $nama_link_website }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormNamaLinkWebsite({{ $footer->id }})">Add Nama Link Website</button>
                                                    <div id="form-link-website-container{{ $footer->id }}">
                                                        @foreach (json_decode($footer->link_website) as $link_website)
                                                            <div class="form-group">
                                                                <label for="link_website">Link Website</label>
                                                                <input type="text" class="form-control" name="link_website[]" value="{{ $link_website }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormLinkWebsite({{ $footer->id }})">Add Link Website</button>
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
<div class="modal fade" id="createFooterModal" tabindex="-1" role="dialog" aria-labelledby="createFooterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFooterModalLabel">Create Footer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('footer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div id="form-icon-tulisan-container">
                        <div class="form-group">
                            <label for="icon_tulisan">Icon Tulisan</label>
                            <input type="text" class="form-control" name="icon_tulisan[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormIconTulisan()">Add Icon Tulisan</button>
                    <div id="form-keterangan-container">
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormKeterangan()">Add Keterangan</button>
                    <div id="form-icon-link-container">
                        <div class="form-group">
                            <label for="icon_link">Icon Link</label>
                            <input type="text" class="form-control" name="icon_link[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormIconLink()">Add Icon Link</button>
                    <div id="form-link-container">
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" name="link[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormLink()">Add Link</button>
                    <div id="form-nama-link-website-container">
                        <div class="form-group">
                            <label for="nama_link_website">Nama Link Website</label>
                            <input type="text" class="form-control" name="nama_link_website[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormNamaLinkWebsite()">Add Nama Link Website</button>
                    <div id="form-link-website-container">
                        <div class="form-group">
                            <label for="link_website">Link Website</label>
                            <input type="text" class="form-control" name="link_website[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormLinkWebsite()">Add Link Website</button>
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
    function addFormIconTulisan(id = '') {
        var container = id ? '#form-icon-tulisan-container' + id : '#form-icon-tulisan-container';
        var html = '<div class="form-group"><label for="icon_tulisan">Icon Tulisan</label><input type="text" class="form-control" name="icon_tulisan[]"></div>';
        $(container).append(html);
    }

    function addFormKeterangan(id = '') {
        var container = id ? '#form-keterangan-container' + id : '#form-keterangan-container';
        var html = '<div class="form-group"><label for="keterangan">Keterangan</label><input type="text" class="form-control" name="keterangan[]"></div>';
        $(container).append(html);
    }

    function addFormIconLink(id = '') {
        var container = id ? '#form-icon-link-container' + id : '#form-icon-link-container';
        var html = '<div class="form-group"><label for="icon_link">Icon Link</label><input type="text" class="form-control" name="icon_link[]"></div>';
        $(container).append(html);
    }

    function addFormLink(id = '') {
        var container = id ? '#form-link-container' + id : '#form-link-container';
        var html = '<div class="form-group"><label for="link">Link</label><input type="text" class="form-control" name="link[]"></div>';
        $(container).append(html);
    }

    function addFormNamaLinkWebsite(id = '') {
        var container = id ? '#form-nama-link-website-container' + id : '#form-nama-link-website-container';
        var html = '<div class="form-group"><label for="nama_link_website">Nama Link Website</label><input type="text" class="form-control" name="nama_link_website[]"></div>';
        $(container).append(html);
    }

    function addFormLinkWebsite(id = '') {
        var container = id ? '#form-link-website-container' + id : '#form-link-website-container';
        var html = '<div class="form-group"><label for="link_website">Link Website</label><input type="text" class="form-control" name="link_website[]"></div>';
        $(container).append(html);
    }
</script>

@endsection
