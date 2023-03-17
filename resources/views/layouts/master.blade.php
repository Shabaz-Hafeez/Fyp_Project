@include('partials.header')

@include('partials.sidebar')

@include('partials.navbar')

<div class="container-fluid">
    <div class="layout-specing">
        <h5 class="mb-0">Dashboard</h5>

        <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                @yield('content')
            </div>
            
        </div>
    </div>

</div>
{{-- <main class="container mt-5">
    @yield('content')
</main> --}}

@include('partials.footer')
