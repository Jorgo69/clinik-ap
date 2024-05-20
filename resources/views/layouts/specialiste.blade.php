<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    {{-- Pour dynamiser le Titre --}}
    @stack('title_header')
    {{-- Ainsi on va traquer l'attribut title_header --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/others/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/others/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/others/css/bootstrap.min.css')}}" rel="stylesheet">

 

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/others/css/style.css')}}" rel="stylesheet">
    
       {{-- Traitement de Text --}}
       {{-- Summeronote sans boostrap uniquement les dependannce cdn /npm et cdn / js --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- include summernote-ko-KR -->
    <script src="{{asset('assets/plugins/summernote/summernote-ko-KR.js')}}"></script>

    @livewireStyles
</head>

<body>


    {{-- @yield('specialisteContent') --}}
    {{ $slot }}


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/others/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{asset('assets/others/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{asset('assets/others/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/others/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>