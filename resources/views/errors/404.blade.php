<x-guest-layout>
    {{-- Top Bar Start --}}
    @include('components.topBar')
    {{-- Top Bar End --}}

    {{-- Nav Bar Start --}}
    @include('components.navBar')
    {{-- Nav Bar End --}}

    {{-- Page Header Start --}}
    @include('components.pagesHeader')
    {{-- Page Header End --}}

    {{-- Actuelle Page --}}
    {{-- Error 404 --}}
    @include('components.404')
    {{-- Error 404 End --}}

    {{-- Footer --}}
    @include('components.footer')
    {{-- Footer End --}}
</x-guest-layout>