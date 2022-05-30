@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%;">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session()->has('failed'))
    <div class="alert alert-danger alert-dismissible fade show" style="width: 100%;" role="alert">
        {{ session('failed') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
