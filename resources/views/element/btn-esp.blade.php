<div class="container-fluid">
    <div class="">
        <div class="row">
            <div id="modules-container"></div>
        </div>
    </div>
</div>



    {{-- @forelse ($modules as $data)
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
                    <input data-id="{{$data->id}}" class="form-check-input togglemodule-class"
                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                    data-on="Active" data-off="Inactive" type="checkbox"
                    {{ $data->status ? 'checked' : ''}}>
                </div>
            </div>
        </div>
    @empty

    @endforelse --}}


