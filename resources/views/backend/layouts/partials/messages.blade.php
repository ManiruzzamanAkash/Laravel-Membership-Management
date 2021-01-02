
@if (Session::has('success'))
    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div> --}}
    <script>
        new Noty({
            theme: 'sunset',
            timeout: 3000,
            type: 'success',
            layout: 'topRight',
            text: "{{ Session::get('success') }}"
        }).show();
    </script>
@endif

@if (Session::has('sticky_success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('sticky_success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="fa fa-times"></span>
    </button>

    <script>
        new Noty({
            theme: 'sunset',
            timeout: 3000,
            type: 'error',
            layout: 'topRight',
            text: "Something went wrong !"
        }).show();
    </script>
</div>
@endif

@if (Session::has('error'))
<script>
    new Noty({
        theme: 'sunset',
        timeout: 3000,
        type: 'error',
        layout: 'topRight',
        text: "{{ Session::get('error') }}"
    }).show();
</script>
@endif

@if (Session::has('sticky_error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('sticky_error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div>
@endif
