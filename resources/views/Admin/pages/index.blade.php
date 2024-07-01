@extends('layouts.layAdmin')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-2">
                        {{ __('Data Developer') }}
                    </h2>
                    <div class="card-tools">
                        <a class="btn btn-outline-dark btn-sm" href="{{ route('pages.create') }}">
                            <i class="fas fa-plus">Add Developer</i>
                        </a>
                    </div>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($pages as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->Role }}</td>
                                    <td>
                                        <a href="{{ route('pages.show', $row->id) }}" class="btn btn-info">Preview</a>
                                        <a href="{{ route('pages.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('pages.destroy', $row->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
