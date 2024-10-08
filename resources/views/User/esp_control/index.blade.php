@extends('template2.layout.schedule')
@section('tables')
    @include('User.esp_control.schedulemodal')

    <div class="container-fluid py-4">
        <!-- modul esp -->

        @include ('template2.user.esp-controller')
        <div class="row">
            <div class="col-12">

                <!-- Table Schedule -->
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>My Schedule</h6>
                        <button type="button" id="addSchedule" class="btn btn-outline-dark btn-md" data-bs-toggle="modal"
                            data-bs-target="#AddScheduleModal">
                            <i class="fas fa-plus"></i> Tambah Jadwal
                        </button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Schedule</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Location</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Runtime</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($espControls->isEmpty())
                                        <tr>
                                            <td colspan="6" class="text-center p-5">Silahkan Isi data.</td>
                                        </tr>
                                    @else
                                        @foreach ($espControls as $index => $control)
                                            <tr>
                                                <td class="text-center text-secondary text-xs font-weight-bold">
                                                    {{ $index + 1 }}</td>

                                                <td class="text-center text-secondary text-xs font-weight-bold">
                                                    {{ \Carbon\Carbon::parse($control->schedule)->format('h:i A') }}</td>

                                                <td class="text-center text-secondary text-xs font-weight-bold">
                                                    {{ $control->lokasi }}</td>
                                                <td class="text-center text-secondary text-xs font-weight-bold">
                                                    {{ $control->runtime }}</td>

                                                @if ($control->status == 1)
                                                    <td class="text-center text-secondary text-xs font-weight-bold">
                                                        <p
                                                            class="border border-primary d-inline-flex p-1 text-white bg-success rounded">
                                                            ONLINE</p>
                                                    </td>
                                                @else
                                                    <td class="text-center text-secondary text-xs font-weight-bold">
                                                        <p
                                                            class="border border-primary d-inline-flex p-1 text-white bg-danger rounded">
                                                            OFFLINE</p>
                                                    </td>
                                                @endif
                                                <td class="text-center text-secondary text-xs font-weight-bold">
                                                    <form action="{{ route('schedule.destroy', $control->id) }}"
                                                        onsubmit="return confirm('Are you sure?')" method="POST">
                                                        <a href="{{ route('schedule.edit', $control->id) }}"
                                                            class="btn btn-warning btn-sm">EDIT</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                            <!-- modal Schedules -->
                            <!-- Modal -->
                            <div class="modal fade " id="modal-schedule" tabindex="-1" role="dialog"
                                aria-labelledby="modal-schedule" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Schedule</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <!-- jam Schedule -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Set
                                                            Schedule</label>
                                                        <input class="form-control" type="time" value="">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label">Runtime</label>
                                                        <div class="d-flex">
                                                            <input class="form-control" type="number" value=""
                                                                max="99" placeholder="Enter Here"><span
                                                                class="text-center input-group-text">Minute</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Module
                                                            Location</label>
                                                        <div class="d-flex">
                                                            <input class="form-control" type="text" value=""
                                                                max="99" placeholder="Enter Here">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- pagination -->
                            <div class="pagination-container">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

            </div>
        </div>

        <div class="">
            <div class="col-12">

            </div>
        </div>

    </div>
    </main>
@endsection






</html>
