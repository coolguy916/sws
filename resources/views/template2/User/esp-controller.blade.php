<style>
    .no-scrollbar {
        height: 17vh;
        overflow: auto;
    }
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>

<div class="row d-flex overflow-auto flex-warp no-scrollbar mb-4" id="modules-container">
</div>
{{-- <div class="row overflow-scroll" style="height: 34vh;">
    <div class="d-flex" id="modules-container">
    </div>
</div> --}}