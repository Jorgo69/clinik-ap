<x-specialiste>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
    
        <!-- Sidebar Start -->
        @include('components.specialiste.sideBar')
        <!-- Sidebar End -->
    
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('components.specialiste.navBarContent')
            <!-- Navbar End -->
    
    
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                @include('components.specialiste.revenueBoard')
            </div>
            <!-- Sale & Revenue End -->
    
    
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                @include('components.specialiste.recentPatient')
            </div>
            <!-- Recent Sales End -->
    
    
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                {{-- @include('components.specialiste.widgets') --}}
            </div>
            <!-- Widgets End -->
    
    
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                @include('components.specialiste.footer')
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        @push('title_header')
            <title>{{config('app.name')}} | Dashboard </title>
        @endpush
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

</x-specialiste>
