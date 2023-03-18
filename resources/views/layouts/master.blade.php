@include('partials.header')

@include('partials.sidebar')

@include('partials.navbar')
   
                @yield('content')
            
{{-- <main class="container mt-5">
    @yield('content')
</main> --}}

@include('partials.footer')
