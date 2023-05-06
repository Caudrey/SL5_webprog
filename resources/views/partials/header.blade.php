{{-- Header --}}
<div class="container mt-1">
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/welcomePage" class="navbar-brand">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" style="width: 70px">
            </a>
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                <span class="fs-4 text-white ps-3">@yield('title')</span>
            </a>
        </div>
        {{-- <div class="block bg-dark text-light py-3">
            <div class="container-fluid d-flex flex-row align-items-center ps-4">
                <h2 class="ps-3 text-start">@yield('title')</h2>
            </div>
        </div> --}}
    </header>
</div>
{{-- End Of Header --}}
