@extends('layouts.app')

@section('content')

<!--  Main Wrap  -->
<div id="content">
    <div class="content-image">

    </div>
    <div class="h-100">
        <div class="content-form connexion">
            <!--  Input Form  -->
            <div class="col-md-6 col-sm-10 padding-leftright-null">
                <div class="text padding-onlybottom-sm padding-md-top-null">
                    <form id="contact-form" class="padding-onlytop-md padding-md-topbottom-null" action="{{ route('login') }}">
                        @csrf
                        <h3 class="text-center">Dolomia</h3>
                        <p class="text-center">Content de vous revoir! Connectez-vous a votre compte</p>
                        @error('email')
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Attention!</strong> {{ $message }}
                        </div>
                        @enderror
                        @error('password')
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Attention!</strong> {{ $message }}
                        </div>
                        @enderror
                        <div class="row padding-onlytop-sm">
                            <div class="col-md-12">
                                <input class="form-field" name="email" id="email" type="text" placeholder="Adresse mail" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-field" name="password" id="password" type="password" placeholder="Mot de passe" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="cr"><i class="cr-icon ion-checkmark"></i></span>
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="col-md-6 col-xs-6">
                                <a href="{{ route('password.request') }}" class="text">Mot de passe oublié</a>
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <div class="submit-area padding-onlytop-sm">
                                    <input type="submit" id="submit-contact" class="btn-alt active" value="Connexion">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="submit-area padding-onlytop-sm text-xs-right">
                                    <a href="{{ URL('/register') }}" class="btn-alt small margin-null">Inscription</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--  END Input Form  -->
        </div>
        <div id="footer">
            <p class="m-0">© Dolomia - Tous droits réservés</p>
        </div>
    </div>
</div>
<!--  Main Wrap  -->
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
