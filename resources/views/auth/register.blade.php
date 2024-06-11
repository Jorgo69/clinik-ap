<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>{{config('app.name')}}</h3>
                            </a>
                            <h3>Inscription</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" name="name" :value="old('name')" autofocus autocomplete="name" />
                            <label for="floatingName">Nom de famille</label>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFirstName" name="firstname" autofocus autocomplete="firstname" />
                            <label for="floatingFirstName">Prenom</label>
                            @error('firstname')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-check">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="inlineRadioHomme" value="masculin">
                                    <label class="form-check-label" for="inlineRadioHomme">Homme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="inlineRadioFemme" value="feminin">
                                    <label class="form-check-label" for="inlineRadioFemme">Femme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label"> Sexe</label>
                                </div>
                            </div>
                            @error('sexe')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-flotting mb-3">
                            <select class="form-select" name="specialite" aria-label="Default select example">
                                <option value="generaliste" selected>Generaliste</option>
                                <option value="dentiste">Dentiste</option>
                                <option value="cardiologue">Cardiologue</option>
                                {{-- <option value="ophtalmo">Ophtalmo</option> --}}
                            </select>
                            <label for="">Choisissez votre specialite</label>
                            @error('specialiste')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingDate" name="birthdate" autofocus autocomplete="date" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"/>
                            <label for="floatingDate">Date de naissance</label>
                            @error('birthdate')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail" name="email" :value="old('email')" autocomplete="email">
                            <label for="floatingEmail">Address Email</label>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="password" autocomplete="new-password">
                            <label for="floatingPassword">Mot de Passe</label>
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingCPassword"  name="password_confirmation" autocomplete="new-password" />
                            <label for="floatingCPassword">Confirmer Mot de Passe</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Se souvenir</label>
                            </div>
                            {{-- <a href="">Mot de Passe Oublie</a> --}}
                        </div>
                        <input type="submit" class="btn btn-primary py-3 w-100 mb-4" value="Connexion">
                        <p class="text-center mb-0">Avez vous deja un Compte? <a href="{{ route('login')}}">Connexion</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>