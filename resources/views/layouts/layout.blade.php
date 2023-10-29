<!DOCTYPE html>
<html lang="pt-br">

@include('layouts/head')

<body>
    @include('layouts/header')

    <main>
        @yield('content')
        @include('layouts/footer')
    </main>
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    @yield('scripts')
</body>

</html>
