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
    {{-- Contact Start --}}
    @include('components.contactsUs')
    {{-- Contact End --}}

    {{-- Footer --}}
    @include('components.footer')
    {{-- Footer End --}}
</x-guest-layout>