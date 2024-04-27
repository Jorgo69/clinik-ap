<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Merci pour l\'inscription ! Avant de commencer, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="row h-100 align-items-center justify-content-center">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="/" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>{{config('app.name')}}</h3>
                                </a>
                            </div>
                            <div class="form-floating mb-3">
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Verification d'Enail</button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger py-3 w-100 mb-4">Deconnexion</button>
        </form>
    </div>
</x-guest-layout>
