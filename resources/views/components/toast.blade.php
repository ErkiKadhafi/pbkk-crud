<div class="position-fixed p-3 top-50 start-50 translate-middle" style="z-index: 11; top: 50%; left: 50%">
    <div id="liveToast"
        {{ $attributes->merge(['class' => 'toast fade-show align-items-center text-white border-0 bg-' . $type]) }}
        role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ $message }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
