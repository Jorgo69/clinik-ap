<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
                <!-- Sign In Start -->
                <div class="container-fluid">
                    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <a href="/" class="">
                                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>{{config('app.name')}}</h3>
                                    </a>
                                    <h3>Connexion</h3>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email" :value="old('email')" autofocus autocomplete="name">
                                    <label for="floatingInput">Addresse Email</label>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" autocomplete="current-password">
                                    <label for="floatingPassword">Mot de Passe</label>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                        <label class="form-check-label" for="exampleCheck1">Se souvenir de Moi</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Mot de Passe Oublie</a>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Connexion</button>
                                <p class="text-center mb-0">Pas encore de Compte? <a href="{{ route('register')}}">Inscription</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sign In End -->
    </form>
</x-guest-layout>
