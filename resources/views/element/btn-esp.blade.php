<div class="container-fluid">
    <div class="">
    <div class="row">

    @forelse ($datas as $data)
        <!-- Modul Nyala -->
        <div class="card" style="width: 18rem; margin-right: 10px; ">
        <div class="card-body rounded-auto text-center">
            @if ($data->status == 1)
                <div class="led-green"></div>
            @else
                <div class="led-black"></div>
            @endif
            <h5 class="card-title mt-4">Modul {{$loop->iteration}}</h5>
            <h6 class="card-subtitle text-muted">{{$data->lokasi}}</h6>
            <hr class="w-auto border-light">
                <div class="form-check form-switch form-switch-xl" style="margin-left: 4.6rem">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                    @if ($data->status == 1)
                        checked
                    @endif>
                </div>
            </div>
        </div>
    @empty

    @endforelse

        <!-- <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Modul-xx</h3>
                    <div class="form-check form-switch form-switch-xl">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    </div>
                </div>
            </div>
        </div> -->


