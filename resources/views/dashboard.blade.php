<x-user>
        
        <!-- Navbar Start -->    
        @include('components.navBar')    
        <!-- Navbar End -->

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="alert alert-primary text-center alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Vous etes connecter
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
    
        <!-- Footer Start -->
            @include('components.footer')
        <!-- Footer End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
            
    
</x-user>
