<x-guest-layout>
    {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div> --}}

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
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
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" :value="old('email')" required autofocus>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Reintialisation</button>
                        <p class="text-center mb-2">Pas encore de compte? <a href="{{ route('register')}}">Inscription</a></p>
                        <p>Mot de passe oublié? Aucun problème. </p>
                        <p> Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.</p>
                    </div>
                </div>
            </div>
        </div>
                <!-- Sign In End -->

        <!-- Email Address -->
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        {{-- <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div> --}}
    </form>
</x-guest-layout>
