<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    @include('components.others.sideBar')
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('components.others.navBarContent')
        <!-- Navbar End -->


        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            @include('components.others.saleRevenue')
        </div>
        <!-- Sale & Revenue End -->


        <!-- Sales Chart Start -->
        <div class="container-fluid pt-4 px-4">
            @include('components.others.saleChart')
        </div>
        <!-- Sales Chart End -->


        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            @include('components.others.recentSale')
        </div>
        <!-- Recent Sales End -->


        <!-- Widgets Start -->
        <div class="container-fluid pt-4 px-4">
            @include('components.others.widgets')
        </div>
        <!-- Widgets End -->


        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            @include('components.others.footer')
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>