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
                    <h2 class="card-title mb-2">{{ __('Pricing') }}</h2>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#createPriceModal">
                            <i class="fas fa-plus"></i> Add Price
                        </button>
                    </div>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Icon</th>
                                <th>List</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($prices as $price)
                                <tr class="price-row" data-id="{{ $price->id }}">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $price->judul }}</td>
                                    <td><i class="{{ $price->icon }}"></i></td>
                                    <td>{{ implode(', ', json_decode($price->list)) }}</td>
                                    <td>{{ $price->harga }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editPriceModal{{ $price->id }}">Edit</a>
                                        <form action="{{ route('prices.destroy', $price->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editPriceModal{{ $price->id }}" tabindex="-1" role="dialog" aria-labelledby="editPriceModalLabel{{ $price->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editPriceModalLabel{{ $price->id }}">Edit Price</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('prices.update', $price->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="judul">Judul</label>
                                                        <input type="text" class="form-control" name="judul" value="{{ $price->judul }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="icon">Icon</label>
                                                        <input type="text" class="form-control" name="icon" value="{{ $price->icon }}">
                                                    </div>
                                                    <div id="form-list-container{{ $price->id }}">
                                                        @foreach (json_decode($price->list) as $list_item)
                                                            <div class="form-group">
                                                                <label for="list">List</label>
                                                                <input type="text" class="form-control" name="list[]" value="{{ $list_item }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" onclick="addFormList({{ $price->id }})">Add List</button>
                                                    <div class="form-group">
                                                        <label for="harga">Harga</label>
                                                        <input type="text" class="form-control" name="harga" value="{{ $price->harga }}">
                                                    </div>
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
<div class="modal fade" id="createPriceModal" tabindex="-1" role="dialog" aria-labelledby="createPriceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPriceModalLabel">Create Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('prices.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" name="icon">
                    </div>
                    <div id="form-list-container">
                        <div class="form-group">
                            <label for="list">List</label>
                            <input type="text" class="form-control" name="list[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addFormList()">Add List</button>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga">
                    </div>
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
    function addFormList(id = '') {
        var container = id ? '#form-list-container' + id : '#form-list-container';
        var html = '<div class="form-group"><label for="list">List</label><input type="text" class="form-control" name="list[]"></div>';
        $(container).append(html);
    }
</script>

@endsection
