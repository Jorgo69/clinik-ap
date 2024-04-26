<x-user>
    {{-- <body> --}}
        {{-- Connexion --}}
        {{-- @include('components.connexion') --}}

        {{-- End Connexion --}}

        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <!-- <span class="sr-only">Loading...</span> -->
        </div> --}}
    {{-- </div> --}}
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('components.topBar')
    <!-- Topbar End -->


    <!-- Navbar Start -->    
    @include('components.navBar')    
    <!-- Navbar End -->

    <!-- Header Start -->
    @include('components.header')
    <!-- Header End -->


    <!-- About Start -->
    @include('components.aboutsUs')
    <!-- About End -->


    <!-- Service Start -->
        @include('components.services')
    <!-- Service End -->


    <!-- Feature Start -->
    @include('components.featureds')
    <!-- Feature End -->


    <!-- Team Start -->
        @include('components.teams')
    <!-- Team End -->


    <!-- Appointment Start -->
        @include('components.contactsUs')
    <!-- Appointment End -->


    <!-- Testimonial Start -->
        @include('components.testimonialSome')
    <!-- Testimonial End -->


    <!-- Footer Start -->
        @include('components.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
        
</x-user>
